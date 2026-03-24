@extends('layouts.frontend')

@section('content')

<section class="lxr-section kioy">
    <div class="lxr-inner">

        <div class="lxr-header text-center">
            <h2>Luxe <span>Rewards</span></h2>
            <p>Enter your details to check your reward</p>
        </div>

        <div class="form-container">
            <form id="rewardForm">

                <!-- STEP 1 -->
                <div class="step active" data-step="1">
                    <h4>Enter Mobile Number</h4>
                    <input type="text" id="mobile" placeholder="Mobile Number" minlength="10" maxlength="10" inputmode="numeric">
                    <button type="button" id="step1Btn">Next</button>
                </div>

                <!-- STEP 2 -->
                <div class="step" data-step="2">
                    <h4>Enter Scratch Card</h4>
                    <input type="text" id="card_number" placeholder="Card Number">

                    <div class="btn-group">
                        <button type="button" class="backBtn" data-back="1">Back</button>
                        <button type="button" id="validateBtn">Check Reward</button>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="step" data-step="3">
                    <h4>Your Details</h4>
                    <input type="text" id="name" placeholder="Full Name">
                    <input type="email" id="email" placeholder="Email (Optional)">

                    <div class="btn-group">
                        <button type="button" class="backBtn" data-back="2">Back</button>
                        <button type="button" id="submitBtn">Submit</button>
                    </div>
                </div>

            </form>
             <div id="resultBox"></div>
            <div id="messageBox" role="alert" aria-live="polite"></div>
        </div>

    </div>
</section>

@endsection


@push('scripts')
<script>
(function () {

    // ─── State ────────────────────────────────────────────────────────────────
    let currentStep   = 1;
    let validatedCard = null;   // locked in after a successful validate call

    // ─── DOM refs ─────────────────────────────────────────────────────────────
    const steps      = document.querySelectorAll('.step');
    const messageBox = document.getElementById('messageBox');
    const mobileEl   = document.getElementById('mobile');
    const cardEl     = document.getElementById('card_number');
    const nameEl     = document.getElementById('name');
    const emailEl    = document.getElementById('email');

    // ─── Helpers ──────────────────────────────────────────────────────────────

    function showStep(step) {
        steps.forEach(el => el.classList.remove('active'));
        document.querySelector(`[data-step="${step}"]`).classList.add('active');
        currentStep = step;
        clearMessage();
    }

    function showMessage(msg, type = 'info') {
        messageBox.innerHTML = `<div class="alert alert-${type}">${msg}</div>`;
    }

    function clearMessage() {
        messageBox.innerHTML = '';
    }

    /** Matches backend rule: digits_between:8,15 */
    function validateMobile(mobile) {
        return /^[0-9]{10}$/.test(mobile);
    }

    function setLoading(btn, loading) {
        if (loading) {
            btn.disabled = true;
            btn.dataset.oldText = btn.innerText;
            btn.innerText = 'Processing...';
        } else {
            btn.disabled = false;
            btn.innerText = btn.dataset.oldText || btn.innerText;
        }
    }

    /**
     * Thin fetch wrapper.
     * Throws on network error; returns { ok, status, data } otherwise.
     */
    async function apiFetch(url, payload) {
        const res = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify(payload),
        });

        let data = null;
        try {
            data = await res.json();
        } catch (_) {
            // non-JSON body (e.g. HTML 500 page)
        }

        return { ok: res.ok, status: res.status, data };
    }

    // ─── Step 1 – Mobile ──────────────────────────────────────────────────────

    document.getElementById('step1Btn').addEventListener('click', () => {
        const mobile = mobileEl.value.trim();

        if (!validateMobile(mobile)) {
            showMessage('Enter valid mobile number (10 digits)', 'danger');
            return;
        }

        // Reset downstream state whenever the user re-enters a mobile
        validatedCard = null;
        cardEl.value  = '';
        showStep(2);
    });

    // ─── Back buttons ─────────────────────────────────────────────────────────

    document.querySelectorAll('.backBtn').forEach(btn => {
        btn.addEventListener('click', () => {
            showStep(parseInt(btn.dataset.back, 10));
        });
    });

    // ─── Step 2 – Validate card ───────────────────────────────────────────────

    document.getElementById('validateBtn').addEventListener('click', async function () {
        const btn    = this;
        const mobile = mobileEl.value.trim();
        const card   = cardEl.value.trim();

        if (card === '') {
            showMessage('Enter card number', 'danger');
            return;
        }

        // Disable immediately — before any await — to block double-submit
        setLoading(btn, true);
        clearMessage();

        try {
            const { ok, status, data } = await apiFetch(
                "{{ route('rewards.validate') }}",
                { card_number: card, mobile }
            );

            if (!ok) {
                showMessage(data?.message || `Server error (${status}), try again`, 'danger');
                return;
            }

            if (data.status === 'invalid') {
                showMessage('❌ Invalid card', 'danger');
            } else if (data.status === 'expired') {
                showMessage('⚠️ Card already used', 'warning');
            } else if (data.status === 'win') {
                validatedCard = card;   // lock in the card that was actually validated
                showMessage(`🎉 You won ₹${data.amount}`, 'success');
                showStep(3);
            } else {
                showMessage('Unexpected response, try again', 'danger');
            }

        } catch (e) {
            showMessage('Server error, try again', 'danger');
        } finally {
            setLoading(btn, false);
        }
    });

    // ─── Step 3 – Submit ──────────────────────────────────────────────────────

    document.getElementById('submitBtn').addEventListener('click', async function () {
        const btn   = this;
        const name  = nameEl.value.trim();
        const email = emailEl.value.trim();

        if (name === '') {
            showMessage('Enter your name', 'danger');
            return;
        }

        if (!validatedCard) {
            // Shouldn't reach here in normal flow, but guard anyway
            showMessage('Session expired. Please start again.', 'danger');
            showStep(1);
            return;
        }

        // Disable immediately — before any await — to block double-submit
        setLoading(btn, true);
        clearMessage();

        try {
            const { ok, status, data } = await apiFetch(
                "{{ route('rewards.submit') }}",
                {
                    name,
                    email      : email || null,
                    mobile     : mobileEl.value.trim(),
                    card_number: validatedCard,   // use server-validated card, not raw input
                }
            );

            if (!ok) {
                showMessage(data?.message || `Server error (${status}), try again`, 'danger');
                return;
            }
                console.log(data.status);
            if (data.status === 'ok') {
                let resultMsg = '';
                if (typeof data.amount !== 'undefined' && data.amount > 0) {
                    resultMsg = `<div class="alert alert-success">🎉 Congratulations! You have won ₹${data.amount}. Your reward has been submitted successfully.</div>`;
                } else {
                    resultMsg = `<div class="alert alert-warning">😔 Better luck next time!</div>`;
                }
                document.getElementById('resultBox').innerHTML = resultMsg;
                showMessage('✅ Submitted successfully!', 'success');
                document.getElementById('rewardForm').reset();
                validatedCard = null;
                document.getElementById('rewardForm').style.display = 'none'; // hide form after successful submission
                showStep(1);
            } else {
                showMessage(data.message || 'Submission failed', 'danger');
            }

        } catch (e) {
            showMessage('Server error', 'danger');
        } finally {
            setLoading(btn, false);
        }
    });

})();
</script>
@endpush
