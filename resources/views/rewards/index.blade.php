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
                    <input type="text" id="mobile" placeholder="Mobile Number">
                    <button type="button" id="step1Btn">Next</button>
                </div>

                <!-- STEP 2 -->
                <div class="step" data-step="2">
                    <h4>Enter Scratch Card</h4>
                    <input type="text" id="card_number" placeholder="Card Number">

                    <div class="btn-group">
                        <button type="button" class="backBtn">Back</button>
                        <button type="button" id="validateBtn">Check Reward</button>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="step" data-step="3">
                    <h4>Your Details</h4>
                    <input type="text" id="name" placeholder="Full Name">
                    <input type="email" id="email" placeholder="Email (Optional)">

                    <div class="btn-group">
                        <button type="button" class="backBtn">Back</button>
                        <button type="button" id="submitBtn">Submit</button>
                    </div>
                </div>

            </form>

            <div id="messageBox"></div>
        </div>

    </div>
</section>

@endsection


@push('scripts')
<script>

const steps = document.querySelectorAll('.step');
let currentStep = 1;

function showStep(step) {
    steps.forEach(el => el.classList.remove('active'));
    document.querySelector(`[data-step="${step}"]`).classList.add('active');
    currentStep = step;
}

function showMessage(msg, type = 'info') {
    document.getElementById('messageBox').innerHTML =
        `<div class="alert alert-${type}">${msg}</div>`;
}

function validateMobile(mobile) {
    return /^[0-9]{10}$/.test(mobile);
}

function toggleLoading(btn, state, text = 'Processing...') {
    if (state) {
        btn.disabled = true;
        btn.dataset.oldText = btn.innerText;
        btn.innerText = text;
    } else {
        btn.disabled = false;
        btn.innerText = btn.dataset.oldText;
    }
}

// STEP 1
document.getElementById('step1Btn').onclick = () => {
    let mobile = document.getElementById('mobile').value.trim();

    if (!validateMobile(mobile)) {
        showMessage('Enter valid 10 digit mobile number', 'danger');
        return;
    }

    showStep(2);
};

// BACK BUTTONS
document.querySelectorAll('.backBtn').forEach(btn => {
    btn.onclick = () => showStep(currentStep - 1);
});

// STEP 2 - VALIDATE CARD
document.getElementById('validateBtn').onclick = async function () {

    let btn = this;
    let mobile = document.getElementById('mobile').value.trim();
    let card = document.getElementById('card_number').value.trim();

    if (card === '') {
        showMessage('Enter card number', 'danger');
        return;
    }

    toggleLoading(btn, true);

    try {
        let res = await fetch("{{ route('rewards.validate') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ card_number: card, mobile: mobile })
        });

        let data = await res.json();

        if (data.status === 'invalid') {
            showMessage('❌ Invalid card', 'danger');
        }
        else if (data.status === 'expired') {
            showMessage('⚠️ Card already used', 'warning');
        }
        else if (data.status === 'win') {
            showMessage(`🎉 You won ₹${data.amount}`, 'success');
            showStep(3);
        }

    } catch (e) {
        showMessage('Server error, try again', 'danger');
    }

    toggleLoading(btn, false);
};

// STEP 3 - SUBMIT
document.getElementById('submitBtn').onclick = async function () {

    let btn = this;
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let mobile = document.getElementById('mobile').value.trim();
    let card = document.getElementById('card_number').value.trim();

    if (name === '') {
        showMessage('Enter your name', 'danger');
        return;
    }

    toggleLoading(btn, true);

    try {
        let res = await fetch("{{ route('rewards.submit') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                name,
                email,
                mobile,
                card_number: card
            })
        });

        let data = await res.json();

        if (data.status === 'ok') {
            showMessage('✅ Submitted successfully!', 'success');
            document.getElementById('rewardForm').reset();
            showStep(1);
        } else {
            showMessage(data.message || 'Submission failed', 'danger');
        }

    } catch (e) {
        showMessage('Server error', 'danger');
    }

    toggleLoading(btn, false);
};

</script>
@endpush
