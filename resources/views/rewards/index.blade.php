@extends('layouts.frontend')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

<style>
/* ─── Reset & Base ─────────────────────────────────────────── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

/* ─── Design Tokens ────────────────────────────────────────── */
:root {
    --gold:          #C9A84C;
    --gold-light:    #F0D78A;
    --gold-dim:      #8A6B2A;
    --gold-subtle:   rgba(201,168,76,0.12);
    --gold-border:   rgba(201,168,76,0.28);
    --navy:          #0F1C2E;
    --navy-mid:      #1A2D45;
    --navy-light:    #243850;
    --cream:         #F7F2EA;
    --cream-dark:    #EAE2D4;
    --cream-white:   #FFFDF9;
    --text-dark:     #1A1208;
    --text-body:     #3D3024;
    --text-muted:    #7A6B55;
    --text-hint:     #B0A090;
    --success-bg:    #F0FDF4;
    --success-border:#BBF7D0;
    --success-text:  #166534;
    --danger-bg:     #FEF2F2;
    --danger-border: #FECACA;
    --danger-text:   #991B1B;
    --warning-bg:    #FFFBEB;
    --warning-border:#FDE68A;
    --warning-text:  #92400E;
    --radius-sm:     8px;
    --radius-md:     12px;
    --radius-lg:     18px;
    --radius-xl:     24px;
    --shadow-card:   0 8px 40px rgba(15,28,46,0.10), 0 2px 8px rgba(15,28,46,0.06);
    --shadow-lift:   0 16px 56px rgba(15,28,46,0.14), 0 4px 12px rgba(15,28,46,0.08);
    --transition:    0.22s cubic-bezier(0.4,0,0.2,1);
}

/* ─── Page Layout ───────────────────────────────────────────── */
.lxr-section.kioy {
    min-height: 100vh;
    background: var(--cream);
    background-image:
        radial-gradient(ellipse 80% 60% at 20% 10%, rgba(201,168,76,0.07) 0%, transparent 60%),
        radial-gradient(ellipse 60% 50% at 85% 90%, rgba(15,28,46,0.05) 0%, transparent 55%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3rem 1rem;
}

.lxr-inner {
    width: 100%;
    max-width: 460px;
}

/* ─── Page Header ───────────────────────────────────────────── */
.lxr-header {
    text-align: center;
    margin-bottom: 2rem;
}

.lxr-header .site-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--gold-dim);
    margin-bottom: 0.75rem;
}

.lxr-header .site-eyebrow::before,
.lxr-header .site-eyebrow::after {
    content: '';
    display: block;
    width: 28px;
    height: 1px;
    background: var(--gold);
    opacity: 0.5;
}

.lxr-header h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 38px;
    font-weight: 600;
    color: var(--text-dark);
    line-height: 1.1;
    letter-spacing: -0.01em;
}

.lxr-header h2 span {
    color: var(--gold-dim);
    font-style: italic;
}

.lxr-header p {
    font-size: 14px;
    color: var(--text-muted);
    margin-top: 0.4rem;
    letter-spacing: 0.01em;
}

/* ─── Card Shell ────────────────────────────────────────────── */
.form-container {
    background: var(--cream-white);
    border-radius: var(--radius-xl);
    border: 1px solid var(--cream-dark);
    box-shadow: var(--shadow-card);
    overflow: hidden;
}

/* ─── Card Header (Navy) ────────────────────────────────────── */
.card-topbar {
    background: var(--navy);
    padding: 1.5rem 1.75rem 1.35rem;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.card-topbar::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 120px; height: 120px;
    background: radial-gradient(circle, rgba(201,168,76,0.12) 0%, transparent 70%);
    border-radius: 50%;
}

.topbar-brand {
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px;
    font-weight: 600;
    color: var(--gold-light);
    letter-spacing: 0.18em;
    text-transform: uppercase;
}

.topbar-divider {
    color: var(--gold);
    font-size: 10px;
    letter-spacing: 0.4em;
    display: block;
    margin: 0.35rem 0 0.9rem;
    opacity: 0.7;
}

/* Step Progress */
.step-progress {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
}

.sp-item {
    display: flex;
    align-items: center;
    gap: 0;
}

.sp-dot {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    border: 1.5px solid rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 500;
    color: rgba(255,255,255,0.35);
    transition: var(--transition);
    position: relative;
    z-index: 1;
}

.sp-dot.active {
    background: var(--gold);
    border-color: var(--gold);
    color: var(--navy);
    font-weight: 600;
    box-shadow: 0 0 0 3px rgba(201,168,76,0.25);
}

.sp-dot.done {
    background: rgba(201,168,76,0.3);
    border-color: rgba(201,168,76,0.5);
    color: var(--gold-light);
}

.sp-dot.done::after {
    content: '✓';
    position: absolute;
    font-size: 11px;
}

.sp-dot.done span { display: none; }

.sp-line {
    width: 36px;
    height: 1.5px;
    background: rgba(255,255,255,0.12);
    transition: var(--transition);
}

.sp-line.done { background: rgba(201,168,76,0.4); }

/* ─── Card Body ─────────────────────────────────────────────── */
.card-body {
    padding: 2rem 1.75rem 1.75rem;
    position: relative;
}

/* ─── Steps ─────────────────────────────────────────────────── */
.step {
    display: none;
    animation: stepFadeUp 0.35s cubic-bezier(0.4,0,0.2,1);
}

.step.active { display: block; }

@keyframes stepFadeUp {
    from { opacity: 0; transform: translateY(14px); }
    to   { opacity: 1; transform: translateY(0); }
}

.step-eyebrow {
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--gold-dim);
    margin-bottom: 0.4rem;
}

.step-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px;
    font-weight: 600;
    color: var(--text-dark);
    line-height: 1.15;
    margin-bottom: 0.35rem;
}

.step-desc {
    font-size: 13.5px;
    color: var(--text-muted);
    line-height: 1.65;
    margin-bottom: 1.6rem;
}

/* ─── Inputs ────────────────────────────────────────────────── */
.input-group {
    margin-bottom: 1rem;
    position: relative;
}

.input-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-hint);
    pointer-events: none;
    line-height: 0;
}

.field-input {
    width: 100%;
    height: 48px;
    padding: 0 14px 0 42px;
    border: 1.5px solid var(--cream-dark);
    border-radius: var(--radius-md);
    font-size: 15px;
    font-family: 'DM Sans', sans-serif;
    color: var(--text-dark);
    background: var(--cream);
    outline: none;
    transition: border-color var(--transition), background var(--transition), box-shadow var(--transition);
    -webkit-appearance: none;
}

.field-input:hover { border-color: #D4C4A8; }

.field-input:focus {
    border-color: var(--gold);
    background: #fff;
    box-shadow: 0 0 0 3px rgba(201,168,76,0.12);
}

.field-input::placeholder { color: var(--text-hint); }

/* Phone prefix input */
.prefix-wrap {
    display: flex;
    align-items: stretch;
    border: 1.5px solid var(--cream-dark);
    border-radius: var(--radius-md);
    overflow: hidden;
    background: var(--cream);
    transition: border-color var(--transition), box-shadow var(--transition);
}

.prefix-wrap:focus-within {
    border-color: var(--gold);
    background: #fff;
    box-shadow: 0 0 0 3px rgba(201,168,76,0.12);
}

.prefix-wrap:hover:not(:focus-within) { border-color: #D4C4A8; }

.phone-prefix {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 0 12px 0 14px;
    font-size: 14px;
    font-weight: 500;
    color: var(--text-muted);
    border-right: 1.5px solid var(--cream-dark);
    background: rgba(201,168,76,0.07);
    white-space: nowrap;
    flex-shrink: 0;
    transition: border-color var(--transition);
}

.prefix-wrap:focus-within .phone-prefix {
    border-right-color: rgba(201,168,76,0.3);
}

.phone-prefix svg { color: var(--text-hint); }

.prefix-wrap .field-input {
    border: none;
    border-radius: 0;
    background: transparent;
    padding-left: 14px;
    box-shadow: none;
    flex: 1;
    height: 48px;
}

.prefix-wrap .field-input:focus {
    background: transparent;
    box-shadow: none;
}

/* ─── Scratch Card Visual ───────────────────────────────────── */
.scratch-card-visual {
    background: var(--navy);
    border-radius: var(--radius-lg);
    padding: 1.25rem;
    margin-bottom: 1.35rem;
    position: relative;
    overflow: hidden;
}

.scratch-card-visual::before {
    content: '';
    position: absolute;
    top: -30px; right: -30px;
    width: 110px; height: 110px;
    background: radial-gradient(circle, rgba(201,168,76,0.1) 0%, transparent 70%);
    border-radius: 50%;
}

.scratch-card-visual::after {
    content: '';
    position: absolute;
    bottom: -20px; left: -20px;
    width: 80px; height: 80px;
    background: radial-gradient(circle, rgba(201,168,76,0.06) 0%, transparent 70%);
    border-radius: 50%;
}

.scv-toprow {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.scv-brand-name {
    font-family: 'Cormorant Garamond', serif;
    font-size: 16px;
    font-weight: 600;
    color: rgba(240,215,138,0.85);
    letter-spacing: 0.12em;
}

.scv-star-icon {
    color: var(--gold);
    font-size: 18px;
}

.scratch-zone {
    background: linear-gradient(135deg, #D4AF5C 0%, #C9A84C 35%, #E8C96A 65%, #B8962A 100%);
    border-radius: 10px;
    padding: 14px 16px;
    text-align: center;
    cursor: default;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.scratch-zone::before {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
        45deg,
        transparent,
        transparent 4px,
        rgba(255,255,255,0.06) 4px,
        rgba(255,255,255,0.06) 8px
    );
}

.scratch-zone-label {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 0.2em;
    color: rgba(15,28,46,0.65);
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    position: relative;
}

.scratch-zone-dots {
    display: flex;
    gap: 3px;
    justify-content: center;
    margin-top: 5px;
    position: relative;
}

.scratch-zone-dots span {
    width: 3px; height: 3px;
    border-radius: 50%;
    background: rgba(15,28,46,0.28);
}

/* ─── Demo Codes ─────────────────────────────────────────────── */
.demo-codes-box {
    background: var(--gold-subtle);
    border: 1px solid var(--gold-border);
    border-radius: var(--radius-sm);
    padding: 10px 14px;
    margin-bottom: 1.25rem;
}

.demo-codes-label {
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--gold-dim);
    margin-bottom: 6px;
}

.demo-codes-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
}

.demo-chip {
    font-size: 11px;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    background: rgba(201,168,76,0.15);
    color: var(--gold-dim);
    border: 1px solid var(--gold-border);
    border-radius: 6px;
    padding: 3px 9px;
    cursor: pointer;
    transition: background var(--transition), color var(--transition);
    letter-spacing: 0.05em;
    user-select: none;
}

.demo-chip:hover {
    background: rgba(201,168,76,0.3);
    color: var(--text-dark);
}

/* ─── Buttons ─────────────────────────────────────────────────── */
.btn-primary {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    height: 50px;
    padding: 0 20px;
    background: var(--navy);
    color: var(--gold-light);
    border: none;
    border-radius: var(--radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    cursor: pointer;
    transition: background var(--transition), transform var(--transition), box-shadow var(--transition);
    position: relative;
    overflow: hidden;
}

.btn-primary::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(201,168,76,0.08) 0%, transparent 60%);
    opacity: 0;
    transition: opacity var(--transition);
}

.btn-primary:hover { background: var(--navy-mid); box-shadow: 0 4px 20px rgba(15,28,46,0.2); }
.btn-primary:hover::before { opacity: 1; }
.btn-primary:active { transform: scale(0.985); }
.btn-primary:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

.btn-primary .btn-icon {
    display: flex;
    align-items: center;
    transition: transform var(--transition);
}
.btn-primary:hover .btn-icon { transform: translateX(3px); }

.btn-gold {
    background: var(--gold);
    color: var(--navy);
    border: none;
}
.btn-gold:hover { background: #D4AF5C; }

.btn-secondary {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    height: 44px;
    padding: 0 16px;
    background: transparent;
    color: var(--text-muted);
    border: 1.5px solid var(--cream-dark);
    border-radius: var(--radius-md);
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
    cursor: pointer;
    transition: border-color var(--transition), color var(--transition);
    margin-top: 0.7rem;
}

.btn-secondary:hover {
    border-color: rgba(201,168,76,0.5);
    color: var(--text-dark);
}

/* ─── Alert / Message Box ──────────────────────────────────── */
#messageBox {
    margin-bottom: 1rem;
}

#messageBox:empty { margin-bottom: 0; }

.alert-msg {
    border-radius: var(--radius-sm);
    padding: 10px 14px;
    font-size: 13.5px;
    line-height: 1.5;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    animation: alertSlide 0.25s ease;
}

@keyframes alertSlide {
    from { opacity: 0; transform: translateY(-6px); }
    to   { opacity: 1; transform: translateY(0); }
}

.alert-msg.success { background: var(--success-bg); color: var(--success-text); border: 1px solid var(--success-border); }
.alert-msg.danger  { background: var(--danger-bg);  color: var(--danger-text);  border: 1px solid var(--danger-border); }
.alert-msg.warning { background: var(--warning-bg); color: var(--warning-text); border: 1px solid var(--warning-border); }
.alert-msg .alert-icon { flex-shrink: 0; margin-top: 1px; }

/* ─── Result Box (Win Screen) ───────────────────────────────── */
#resultBox:not(:empty) {
    margin-bottom: 1.25rem;
    animation: stepFadeUp 0.4s cubic-bezier(0.4,0,0.2,1);
}

.win-card {
    background: var(--navy);
    border-radius: var(--radius-lg);
    padding: 1.5rem 1.5rem 1.25rem;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.win-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 35% 25%, rgba(201,168,76,0.14) 0%, transparent 65%);
}

.win-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(201,168,76,0.4), transparent);
}

.win-badge {
    display: inline-block;
    font-size: 9px;
    font-weight: 500;
    letter-spacing: 0.24em;
    text-transform: uppercase;
    color: var(--gold);
    border: 1px solid rgba(201,168,76,0.4);
    border-radius: 20px;
    padding: 4px 14px;
    margin-bottom: 0.8rem;
    position: relative;
}

.win-amount {
    font-family: 'Cormorant Garamond', serif;
    font-size: 60px;
    font-weight: 700;
    color: var(--gold-light);
    line-height: 1;
    letter-spacing: -0.01em;
    position: relative;
}

.win-type {
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: rgba(240,215,138,0.5);
    margin: 0.3rem 0 0.75rem;
    position: relative;
}

.win-stars {
    color: var(--gold);
    font-size: 13px;
    letter-spacing: 5px;
    margin-bottom: 1.1rem;
    position: relative;
}

.win-code-fields {
    display: flex;
    flex-direction: column;
    gap: 8px;
    position: relative;
}

.win-code-field {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(201,168,76,0.2);
    border-radius: var(--radius-sm);
    padding: 9px 14px;
    text-align: left;
}

.win-code-field-label {
    font-size: 9px;
    font-weight: 500;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(201,168,76,0.5);
    margin-bottom: 4px;
}

.win-code-field-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.win-code-value {
    font-size: 15px;
    font-weight: 500;
    color: rgba(245,240,232,0.95);
    font-family: 'DM Sans', sans-serif;
    letter-spacing: 0.05em;
}

.win-code-check { color: #4ADE80; font-size: 16px; }

.win-voucher-value {
    font-size: 14px;
    font-weight: 500;
    color: var(--gold-light);
    font-family: 'DM Sans', sans-serif;
    letter-spacing: 0.08em;
}

.win-tap-copy {
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--gold);
    cursor: pointer;
    border: none;
    background: none;
    padding: 0;
    font-family: 'DM Sans', sans-serif;
    transition: color var(--transition);
}
.win-tap-copy:hover { color: var(--gold-light); }

.win-validity {
    font-size: 11px;
    color: rgba(240,215,138,0.38);
    margin-top: 0.8rem;
    position: relative;
    letter-spacing: 0.02em;
}

/* Divider */
.btn-divider { margin-top: 0.75rem; }

/* ─── Responsive ──────────────────────────────────────────── */
@media (max-width: 480px) {
    .lxr-section.kioy { padding: 1.5rem 0.75rem; }
    .lxr-header h2 { font-size: 32px; }
    .card-body { padding: 1.5rem 1.25rem 1.25rem; }
    .win-amount { font-size: 50px; }
}
</style>
@endpush


@section('content')


<section class="lxr-section kioy">
    <div class="lxr-inner">

        {{-- Page Header --}}
        <div class="lxr-header">
            <div class="site-eyebrow">Cinebar Loyalty</div>
            <h2>Luxe <span>Rewards</span></h2>
            <p>Scratch your card &amp; instantly claim your reward</p>
        </div>

        {{-- Main Card --}}
        <div class="form-container">

            {{-- Navy Top Bar --}}
            <div class="card-topbar">
                <div class="topbar-brand">Cinebar</div>
                <span class="topbar-divider">✦ &nbsp; ✦ &nbsp; ✦</span>

                {{-- Step Progress Indicators --}}
                <div class="step-progress" id="stepProgress">
                    <div class="sp-item">
                        <div class="sp-dot active" id="spDot1"><span>1</span></div>
                    </div>
                    <div class="sp-line" id="spLine1"></div>
                    <div class="sp-item">
                        <div class="sp-dot" id="spDot2"><span>2</span></div>
                    </div>
                    <div class="sp-line" id="spLine2"></div>
                    <div class="sp-item">
                        <div class="sp-dot" id="spDot3"><span>3</span></div>
                    </div>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="card-body">

                {{-- Alert / Message Box --}}
                <div id="messageBox" role="alert" aria-live="polite"></div>

                {{-- ── STEP 1 : Mobile Number ── --}}
                <div class="step active" data-step="1" id="step1Panel">
                    <div class="step-eyebrow">Step 1 of 3</div>
                    <h3 class="step-title">Verify Your Number</h3>
                    <p class="step-desc">Enter your registered mobile number to receive your one-time reward code.</p>

                    <div class="input-group">
                        <div class="prefix-wrap">
                            <div class="phone-prefix">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <rect x="5" y="2" width="14" height="20" rx="2"/>
                                    <line x1="12" y1="18" x2="12.01" y2="18" stroke-linecap="round" stroke-width="2.5"/>
                                </svg>
                                +91
                            </div>
                            <input
                                type="tel"
                                id="mobile"
                                class="field-input"
                                placeholder="Mobile Number"
                                inputmode="numeric"
                                maxlength="10"
                                autocomplete="tel-national"
                                aria-label="Mobile Number"
                            >
                        </div>
                    </div>

                    <button type="button" class="btn-primary" id="step1Btn">
                        Continue
                        <span class="btn-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </button>
                </div>

                {{-- ── STEP 2 : Scratch Card Code ── --}}
                <div class="step" data-step="2" id="step2Panel">
                    <div class="step-eyebrow">Step 2 of 3</div>
                    <h3 class="step-title">Enter Scratch Code</h3>
                    <p class="step-desc">Scratch the silver panel on your Cinebar card to reveal the code, then enter it below.</p>

                    {{-- Decorative scratch card --}}
                    <div class="scratch-card-visual" aria-hidden="true">
                        <div class="scv-toprow">
                            <span class="scv-brand-name">Cinebar</span>
                            <span class="scv-star-icon">★</span>
                        </div>
                        <div class="scratch-zone">
                            <div class="scratch-zone-label">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                                </svg>
                                Scratch Here
                            </div>
                            <div class="scratch-zone-dots">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>

                    {{-- Code Input --}}
                    <div class="input-group">
                        <span class="input-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2"/>
                                <path d="M7 11V7a5 5 0 0110 0v4"/>
                            </svg>
                        </span>
                        <input
                            type="text"
                            id="card_number"
                            class="field-input"
                            placeholder="e.g. LUXE-4829"
                            autocomplete="off"
                            autocapitalize="characters"
                            spellcheck="false"
                            style="text-transform: uppercase; letter-spacing: 0.05em;"
                            aria-label="Scratch card code"
                        >
                    </div>

                    {{-- Demo Codes --}}
                    <div class="demo-codes-box">
                        <div class="demo-codes-label">Demo codes to try</div>
                        <div class="demo-codes-chips">
                            <button type="button" class="demo-chip" data-code="LUXE-4829">LUXE-4829</button>
                            <button type="button" class="demo-chip" data-code="GOLD-1138">GOLD-1138</button>
                            <button type="button" class="demo-chip" data-code="BREW-7742">BREW-7742</button>
                            <button type="button" class="demo-chip" data-code="BITE-3391">BITE-3391</button>
                        </div>
                    </div>

                    <button type="button" class="btn-primary" id="validateBtn">
                        Reveal My Reward
                        <span class="btn-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </button>
                    <button type="button" class="btn-secondary" data-back="1">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M19 12H5M12 19l-7-7 7-7"/>
                        </svg>
                        Back
                    </button>
                </div>

                {{-- ── STEP 3 : Your Details ── --}}
                <div class="step" data-step="3" id="step3Panel">
                    <div class="step-eyebrow">Step 3 of 3</div>
                    <h3 class="step-title">Claim Your Reward</h3>
                    <p class="step-desc">Almost there — enter your name to finalize and receive your voucher.</p>

                    <div class="input-group">
                        <span class="input-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                            </svg>
                        </span>
                        <input
                            type="text"
                            id="name"
                            class="field-input"
                            placeholder="Full Name"
                            autocomplete="name"
                            aria-label="Full name"
                        >
                    </div>

                    <div class="input-group">
                        <span class="input-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/>
                            </svg>
                        </span>
                        <input
                            type="email"
                            id="email"
                            class="field-input"
                            placeholder="Email Address (Optional)"
                            autocomplete="email"
                            aria-label="Email address (optional)"
                        >
                    </div>

                    <button type="button" class="btn-primary" id="submitBtn">
                        Submit &amp; Claim
                        <span class="btn-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </button>
                    <button type="button" class="btn-secondary" data-back="2">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M19 12H5M12 19l-7-7 7-7"/>
                        </svg>
                        Back
                    </button>
                </div>

            </div>{{-- /.card-body --}}

            {{-- Result Box (rendered outside card-body padding, below it) --}}
            <div id="resultBox" style="padding: 0 1.75rem 1.75rem;"></div>

        </div>{{-- /.form-container --}}

    </div>{{-- /.lxr-inner --}}
</section>

@endsection


@push('scripts')
<script>
(function () {
    'use strict';

    // ─── State ────────────────────────────────────────────────────────────────
    let currentStep   = 1;
    let validatedCard = null;   // locked in after successful validate call

    // ─── DOM Refs ─────────────────────────────────────────────────────────────
    const steps      = document.querySelectorAll('.step');
    const messageBox = document.getElementById('messageBox');
    const resultBox  = document.getElementById('resultBox');
    const mobileEl   = document.getElementById('mobile');
    const cardEl     = document.getElementById('card_number');
    const nameEl     = document.getElementById('name');
    const emailEl    = document.getElementById('email');

    // ─── Step Navigation ──────────────────────────────────────────────────────
    function showStep(step) {
        steps.forEach(el => el.classList.remove('active'));
        const target = document.querySelector(`[data-step="${step}"]`);
        if (target) target.classList.add('active');
        currentStep = step;
        updateProgress(step);
        clearMessage();
        // Scroll card into view on mobile
        document.querySelector('.form-container')?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function updateProgress(step) {
        for (let i = 1; i <= 3; i++) {
            const dot  = document.getElementById('spDot' + i);
            const line = document.getElementById('spLine' + i);
            if (!dot) continue;
            dot.classList.remove('active', 'done');
            if (i < step)       dot.classList.add('done');
            else if (i === step) dot.classList.add('active');
            if (line) {
                line.classList.remove('done');
                if (i < step) line.classList.add('done');
            }
        }
    }

    // ─── Messages ─────────────────────────────────────────────────────────────
    const ICONS = {
        success: `<svg class="alert-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg>`,
        danger:  `<svg class="alert-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>`,
        warning: `<svg class="alert-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>`,
    };

    function showMessage(msg, type = 'info') {
        messageBox.innerHTML = `<div class="alert-msg ${type}" role="alert">${ICONS[type] || ''}${msg}</div>`;
    }

    function clearMessage() {
        messageBox.innerHTML = '';
    }

    // ─── Helpers ──────────────────────────────────────────────────────────────
    function validateMobile(val) {
        return /^[0-9]{10}$/.test(val);
    }

    function setLoading(btn, loading) {
        if (loading) {
            btn.disabled = true;
            btn.dataset.originalHtml = btn.innerHTML;
            btn.innerHTML = `
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                    style="animation: spin 0.8s linear infinite;" aria-hidden="true">
                    <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
                </svg>
                Processing&hellip;
            `;
        } else {
            btn.disabled = false;
            btn.innerHTML = btn.dataset.originalHtml || btn.innerHTML;
        }
    }

    /** Thin fetch wrapper — returns { ok, status, data } */
    async function apiFetch(url, payload) {
        const csrfMeta = document.querySelector('meta[name="csrf-token"]');
        const res = await fetch(url, {
            method : 'POST',
            headers: {
                'Content-Type' : 'application/json',
                'Accept'       : 'application/json',
                'X-CSRF-TOKEN' : csrfMeta ? csrfMeta.content : '',
            },
            body: JSON.stringify(payload),
        });

        let data = null;
        try { data = await res.json(); } catch (_) {}
        return { ok: res.ok, status: res.status, data };
    }

    // ─── CSS Spin Animation ────────────────────────────────────────────────────
    if (!document.getElementById('lxr-spin-style')) {
        const s = document.createElement('style');
        s.id = 'lxr-spin-style';
        s.textContent = '@keyframes spin { to { transform: rotate(360deg); } }';
        document.head.appendChild(s);
    }

    // ─── Demo Chip Clicks ─────────────────────────────────────────────────────
    document.querySelectorAll('.demo-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            cardEl.value = chip.dataset.code;
            cardEl.focus();
        });
    });

    // ─── Step 1 — Mobile ──────────────────────────────────────────────────────
    document.getElementById('step1Btn').addEventListener('click', () => {
        const mobile = mobileEl.value.trim();
        if (!validateMobile(mobile)) {
            showMessage('Please enter a valid 10-digit mobile number.', 'danger');
            mobileEl.focus();
            return;
        }
        // Reset downstream state whenever mobile is (re-)entered
        validatedCard = null;
        cardEl.value  = '';
        resultBox.innerHTML = '';
        showStep(2);
    });

    mobileEl.addEventListener('keydown', e => {
        if (e.key === 'Enter') document.getElementById('step1Btn').click();
    });

    // ─── Back Buttons ─────────────────────────────────────────────────────────
    document.querySelectorAll('[data-back]').forEach(btn => {
        btn.addEventListener('click', () => showStep(parseInt(btn.dataset.back, 10)));
    });

    // ─── Step 2 — Validate Card ───────────────────────────────────────────────
    document.getElementById('validateBtn').addEventListener('click', async function () {
        const btn    = this;
        const mobile = mobileEl.value.trim();
        const card   = cardEl.value.trim();

        if (!card) {
            showMessage('Please enter your scratch card code.', 'danger');
            cardEl.focus();
            return;
        }

        setLoading(btn, true);
        clearMessage();

        try {
            const { ok, status, data } = await apiFetch(
                "{{ route('rewards.validate') }}",
                { card_number: card, mobile }
            );

            if (!ok) {
                showMessage(data?.message ?? `Something went wrong (${status}). Please try again.`, 'danger');
                return;
            }

            switch (data.status) {
                case 'invalid':
                    showMessage('That code doesn\'t match any active card. Please check and try again.', 'danger');
                    break;
                case 'expired':
                    showMessage('This card has already been redeemed.', 'warning');
                    break;
                case 'win':
                    validatedCard = card;
                    showMessage(`You've won <strong>₹${data.amount}</strong>! Enter your details to claim.`, 'success');
                    showStep(3);
                    break;
                default:
                    showMessage('Unexpected response. Please try again.', 'danger');
            }

        } catch (e) {
            showMessage('A network error occurred. Please try again.', 'danger');
        } finally {
            setLoading(btn, false);
        }
    });

    cardEl.addEventListener('keydown', e => {
        if (e.key === 'Enter') document.getElementById('validateBtn').click();
    });

    // ─── Step 3 — Submit ──────────────────────────────────────────────────────
    document.getElementById('submitBtn').addEventListener('click', async function () {
        const btn   = this;
        const name  = nameEl.value.trim();
        const email = emailEl.value.trim();

        if (!name) {
            showMessage('Please enter your full name.', 'danger');
            nameEl.focus();
            return;
        }

        if (!validatedCard) {
            showMessage('Your session has expired. Please start again.', 'danger');
            showStep(1);
            return;
        }

        setLoading(btn, true);
        clearMessage();

        try {
            const { ok, status, data } = await apiFetch(
                "{{ route('rewards.submit') }}",
                {
                    name,
                    email      : email || null,
                    mobile     : mobileEl.value.trim(),
                    card_number: validatedCard,
                }
            );

            if (!ok) {
                showMessage(data?.message ?? `Something went wrong (${status}). Please try again.`, 'danger');
                return;
            }

            if (data.status === 'ok') {
                if (data.amount > 0) {
                    renderWinCard(validatedCard, data.amount, data.voucher_code ?? null);
                    showMessage(`Reward submitted successfully!`, 'success');
                } else {
                    resultBox.innerHTML = `
                        <div class="alert-msg warning">
                            ${ICONS.warning}
                            Better luck next time!
                        </div>`;
                }

                // Reset form
                document.querySelectorAll('#mobile,#card_number,#name,#email')
                    .forEach(el => el.value = '');
                validatedCard = null;

                // Hide steps, show result
                steps.forEach(el => el.classList.remove('active'));
                updateProgress(4); // all done — clear dots
            } else {
                showMessage(data.message ?? 'Submission failed. Please try again.', 'danger');
            }

        } catch (e) {
            showMessage('A network error occurred. Please try again.', 'danger');
        } finally {
            setLoading(btn, false);
        }
    });

    // ─── Win Card Renderer ────────────────────────────────────────────────────
    function renderWinCard(code, amount, voucherCode) {
        const vc = voucherCode ?? ('CINELUXE' + amount);

        resultBox.innerHTML = `
            <div class="win-card">
                <div class="win-badge">Congratulations — You've Won</div>
                <div class="win-amount">₹${amount}</div>
                <div class="win-type">Cinema Voucher</div>
                <div class="win-stars">★★★★★</div>
                <div class="win-code-fields">
                    <div class="win-code-field">
                        <div class="win-code-field-label">Code Redeemed</div>
                        <div class="win-code-field-row">
                            <span class="win-code-value">${code}</span>
                            <span class="win-code-check">✓</span>
                        </div>
                    </div>
                    <div class="win-code-field">
                        <div class="win-code-field-label">Voucher Code</div>
                        <div class="win-code-field-row">
                            <span class="win-voucher-value">${vc}</span>
                            <button type="button" class="win-tap-copy" data-voucher="${vc}">Tap to Copy</button>
                        </div>
                    </div>
                </div>
                <div class="win-validity">⏳&nbsp; Valid for 30 days &nbsp;·&nbsp; Redeemable at all Cinebar outlets</div>
            </div>
            <div class="btn-divider">
                <button type="button" class="btn-primary btn-gold" id="copyVoucherBtn" data-voucher="${vc}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true">
                        <rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                    </svg>
                    Copy Voucher Code
                </button>
                <button type="button" class="btn-secondary" id="checkAnotherBtn">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    Check Another Code
                </button>
            </div>
        `;

        // Copy voucher buttons
        resultBox.querySelectorAll('[data-voucher]').forEach(el => {
            el.addEventListener('click', function () {
                const code = this.dataset.voucher;
                navigator.clipboard.writeText(code).then(() => {
                    const original = this.innerHTML;
                    this.innerHTML = this.tagName === 'BUTTON' && this.classList.contains('btn-primary')
                        ? '✓ &nbsp; Copied to Clipboard!'
                        : 'Copied!';
                    setTimeout(() => { this.innerHTML = original; }, 2000);
                }).catch(() => {
                    // Fallback for older browsers
                    const ta = document.createElement('textarea');
                    ta.value = code;
                    ta.style.position = 'fixed';
                    ta.style.opacity = '0';
                    document.body.appendChild(ta);
                    ta.select();
                    document.execCommand('copy');
                    document.body.removeChild(ta);
                });
            });
        });

        // Check another code
        document.getElementById('checkAnotherBtn')?.addEventListener('click', () => {
            resultBox.innerHTML = '';
            mobileEl.value = '';
            cardEl.value  = '';
            nameEl.value  = '';
            emailEl.value = '';
            validatedCard  = null;
            showStep(1);
        });
    }

})();
</script>
@endpush
