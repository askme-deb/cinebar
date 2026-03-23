/* products.js */

document.addEventListener('DOMContentLoaded', function () {

    /* ===== FEATURED SLIDER ===== */
    const track = document.getElementById('sliderTrack');
    const slides = track ? track.querySelectorAll('.pr-slide') : [];
    const dots = document.querySelectorAll('.pr-dot');
    let current = 0;
    let autoSlide;

    function goToSlide(index) {
        if (!track || !slides.length) return;
        current = (index + slides.length) % slides.length;
        track.style.transform = `translateX(-${current * 100}%)`;
        dots.forEach(d => d.classList.remove('active'));
        if (dots[current]) dots[current].classList.add('active');
    }

    function startAuto() {
        autoSlide = setInterval(() => goToSlide(current + 1), 5000);
    }

    function stopAuto() {
        clearInterval(autoSlide);
    }

    const btnPrev = document.getElementById('sliderPrev');
    const btnNext = document.getElementById('sliderNext');

    if (btnPrev) btnPrev.addEventListener('click', () => { stopAuto(); goToSlide(current - 1); startAuto(); });
    if (btnNext) btnNext.addEventListener('click', () => { stopAuto(); goToSlide(current + 1); startAuto(); });

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            stopAuto();
            goToSlide(parseInt(dot.dataset.index));
            startAuto();
        });
    });

    // Touch / swipe support
    if (track) {
        let touchStartX = 0;
        track.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].clientX; });
        track.addEventListener('touchend', e => {
            const diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) {
                stopAuto();
                diff > 0 ? goToSlide(current + 1) : goToSlide(current - 1);
                startAuto();
            }
        });
    }

    startAuto();

    /* ===== FILTER TABS ===== */
    const tabs = document.querySelectorAll('.pr-tab');
    const cards = document.querySelectorAll('.pr-product-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;

            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.classList.remove('pr-hidden');
                    // re-trigger reveal if needed
                    setTimeout(() => card.classList.add('pr-visible'), 10);
                } else {
                    card.classList.add('pr-hidden');
                }
            });
        });
    });

    /* ===== SCROLL REVEAL ===== */
    const reveals = document.querySelectorAll('.pr-reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('pr-visible');
                }, i * 80);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    reveals.forEach(el => observer.observe(el));

});


/* whats-new.js */

document.addEventListener('DOMContentLoaded', function () {

    /* ===== COUNTDOWN TIMER (target: midnight tonight) ===== */
    function updateTimer() {
        const now = new Date();
        const midnight = new Date(now);
        midnight.setHours(23, 59, 59, 0);
        const diff = midnight - now;

        if (diff <= 0) return;

        const h = Math.floor(diff / 3600000);
        const m = Math.floor((diff % 3600000) / 60000);
        const s = Math.floor((diff % 60000) / 1000);

        const pad = n => String(n).padStart(2, '0');

        const elH = document.getElementById('timerH');
        const elM = document.getElementById('timerM');
        const elS = document.getElementById('timerS');

        if (elH) elH.textContent = pad(h);
        if (elM) elM.textContent = pad(m);
        if (elS) elS.textContent = pad(s);
    }

    updateTimer();
    setInterval(updateTimer, 1000);

    /* ===== NEWSLETTER SUBMIT ===== */
    window.handleNewsletterSubmit = function (e) {
        e.preventDefault();
        const success = document.getElementById('nlSuccess');
        const form = e.target;
        if (success) {
            form.style.display = 'none';
            success.style.display = 'block';
        }
    };

    /* ===== SCROLL REVEAL ===== */
    const reveals = document.querySelectorAll('.wn-reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('wn-visible');
                }, i * 90);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    reveals.forEach(el => observer.observe(el));

});


/* contact.js */

document.addEventListener('DOMContentLoaded', function () {

    /* ===== CONTACT FORM VALIDATION & SUBMIT ===== */
    window.handleContactSubmit = function (e) {
        e.preventDefault();

        const name    = document.getElementById('ctName');
        const email   = document.getElementById('ctEmail');
        const subject = document.getElementById('ctSubject');
        const message = document.getElementById('ctMessage');
        const privacy = document.getElementById('ctPrivacy');

        let valid = true;

        function setError(fieldId, errorId, msg) {
            const errEl = document.getElementById(errorId);
            if (msg) {
                if (errEl) errEl.textContent = msg;
                document.getElementById(fieldId).closest('.ct-input-wrap, .ct-textarea-wrap') 
                    && document.getElementById(fieldId).style.setProperty('border-color', '#e3000f');
                valid = false;
            } else {
                if (errEl) errEl.textContent = '';
            }
        }

        // Name
        if (!name.value.trim() || name.value.trim().length < 2) {
            setError('ctName', 'nameError', 'Please enter your full name (min. 2 characters)');
        } else {
            setError('ctName', 'nameError', '');
        }

        // Email
        const emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailReg.test(email.value.trim())) {
            setError('ctEmail', 'emailError', 'Please enter a valid email address');
        } else {
            setError('ctEmail', 'emailError', '');
        }

        // Subject
        if (!subject.value) {
            setError('ctSubject', 'subjectError', 'Please select a subject');
        } else {
            setError('ctSubject', 'subjectError', '');
        }

        // Message
        if (!message.value.trim() || message.value.trim().length < 10) {
            setError('ctMessage', 'msgError', 'Please enter a message (min. 10 characters)');
        } else {
            setError('ctMessage', 'msgError', '');
        }

        // Privacy
        if (!privacy.checked) {
            alert('Please agree to the Privacy Policy and Terms of Service to proceed.');
            valid = false;
        }

        if (!valid) return;

        // Simulate sending
        const btn = document.getElementById('ctSubmitBtn');
        if (btn) {
            btn.classList.add('ct-loading');
            btn.querySelector('.ct-btn-text').textContent = 'Sending...';
            btn.disabled = true;
        }

        setTimeout(() => {
            const form = document.getElementById('contactForm');
            const success = document.getElementById('formSuccess');
            if (form && success) {
                // Hide form fields, show success
                [...form.children].forEach(el => {
                    if (!el.classList.contains('ct-form-success')) {
                        el.style.display = 'none';
                    }
                });
                success.style.display = 'block';
            }
        }, 1800);
    };

    /* ===== CHARACTER COUNT FOR TEXTAREA ===== */
    const msgArea = document.getElementById('ctMessage');
    const charCount = document.getElementById('charCount');

    if (msgArea && charCount) {
        msgArea.addEventListener('input', function () {
            const len = this.value.length;
            charCount.textContent = `${len} / 500`;
            if (len > 500) {
                this.value = this.value.slice(0, 500);
                charCount.style.color = '#e3000f';
            } else {
                charCount.style.color = '#aaa';
            }
        });
    }

    /* ===== INPUT FOCUS BORDER RESET ===== */
    const inputs = document.querySelectorAll('.ct-input-wrap input, .ct-input-wrap select, .ct-textarea-wrap textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function () {
            this.style.removeProperty('border-color');
        });
    });

    /* ===== MINI FAQ TOGGLE ===== */
    window.toggleCtFaq = function (item) {
        const allItems = document.querySelectorAll('.ct-faq-item');
        allItems.forEach(i => {
            if (i !== item) i.classList.remove('ct-faq-open');
        });
        item.classList.toggle('ct-faq-open');
    };

    /* ===== SCROLL REVEAL ===== */
    const reveals = document.querySelectorAll('.ct-reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('ct-visible');
                }, i * 90);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    reveals.forEach(el => observer.observe(el));

});


/* ===== LuxeRewards SECTION JS ===== */


(function() {
  /* ── PRIZE POOL CONFIG (server-side in production) ── */
  var LXR_PRIZES = {
    "482951": { prize: "₹500 Cashback Voucher",  value: "₹ 500",      emoji: "💰" },
    "739204": { prize: "Free Premium Membership", value: "1 Month",    emoji: "👑" },
    "156830": { prize: "₹1000 Gift Card",         value: "₹ 1,000",   emoji: "🎁" },
    "604712": { prize: "10% Off Next Purchase",   value: "10% OFF",    emoji: "🛍️" },
    "927463": { prize: "Exclusive Merch Bundle",  value: "Worth ₹800", emoji: "🏆" },
  };

  var LXR_ALL_CODES = [
    "482951","739204","156830","604712","927463",
    "112233","445566","778899","334455","667788",
    "990011","223344","556677","889900","101112",
  ];

  var lxrCurrentCode = "";
  var lxrScratchPct  = 0;
  var lxrScratchDone = false;
  var lxrIsDrawing   = false;

  /* ── STEP NAVIGATION ── */
  window.lxrGoToStep = function(step) {
    document.querySelectorAll('.lxr-view').forEach(function(v) { v.classList.remove('lxr-active'); });
    document.querySelectorAll('.lxr-step').forEach(function(s, i) {
      s.classList.toggle('lxr-active', i < step);
    });

    // Progress line
    var fills = [0, 0, 33, 66, 100];
    document.getElementById('lxrStepLineFill').style.width = (fills[step] || 0) + '%';

    if (step === 1) document.getElementById('lxrViewPurchase').classList.add('lxr-active');
    if (step === 2) { lxrInitScratch(); document.getElementById('lxrViewScratch').classList.add('lxr-active'); }
    if (step === 3) {
      document.getElementById('lxrViewInput').classList.add('lxr-active');
      document.getElementById('lxrDisplayCode').textContent = lxrCurrentCode;
      document.getElementById('lxrCodeInput').value = '';
      document.getElementById('lxrErrorMsg').classList.remove('lxr-show');
    }
    if (step === 4) document.getElementById('lxrViewResult').classList.add('lxr-active');
  };

  /* ── SCRATCH CARD INIT ── */
  function lxrInitScratch() {
    lxrCurrentCode = LXR_ALL_CODES[Math.floor(Math.random() * LXR_ALL_CODES.length)];
    document.getElementById('lxrRevealNumber').textContent = lxrCurrentCode;

    lxrScratchPct  = 0;
    lxrScratchDone = false;
    document.getElementById('lxrScratchFill').style.width = '0%';
    document.getElementById('lxrBtnProceed').style.display  = 'none';
    document.getElementById('lxrBtnRevealAll').style.display = 'block';

    var wrapper = document.getElementById('lxrScratchWrapper');
    var canvas  = document.getElementById('lxrScratchCanvas');
    var ctx     = canvas.getContext('2d');

    requestAnimationFrame(function() {
      canvas.width  = wrapper.offsetWidth;
      canvas.height = wrapper.offsetHeight;

      /* Silver-pearl scratch surface */
      var grad = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
      grad.addColorStop(0,   '#D8D4CC');
      grad.addColorStop(0.2, '#E8E4DC');
      grad.addColorStop(0.5, '#F0EDE8');
      grad.addColorStop(0.7, '#DEDAD4');
      grad.addColorStop(1,   '#C8C4BC');
      ctx.fillStyle = grad;
      ctx.fillRect(0, 0, canvas.width, canvas.height);

      /* Subtle texture dots */
      for (var i = 0; i < 600; i++) {
        ctx.fillStyle = 'rgba(160,150,140,' + (Math.random() * 0.06) + ')';
        ctx.fillRect(Math.random() * canvas.width, Math.random() * canvas.height, 2, 2);
      }

      /* Label text */
      ctx.font = '600 13px Outfit, sans-serif';
      ctx.fillStyle = 'rgba(100,95,88,0.55)';
      ctx.textAlign = 'center';
      ctx.fillText('◆  SCRATCH HERE  ◆', canvas.width / 2, canvas.height / 2 - 8);
      ctx.font = '300 11px Outfit, sans-serif';
      ctx.fillStyle = 'rgba(100,95,88,0.4)';
      ctx.fillText('Scratch gently to reveal your lucky code', canvas.width / 2, canvas.height / 2 + 14);

      ctx.globalCompositeOperation = 'destination-out';
    });

    /* Mouse events */
    canvas.onmousedown  = function(e) { lxrIsDrawing = true; lxrScratch(e, canvas, ctx); };
    canvas.onmousemove  = function(e) { if (lxrIsDrawing) lxrScratch(e, canvas, ctx); };
    canvas.onmouseup    = function()  { lxrIsDrawing = false; lxrCheckDone(canvas, ctx); };
    canvas.onmouseleave = function()  { lxrIsDrawing = false; };

    /* Touch events */
    canvas.ontouchstart = function(e) { e.preventDefault(); lxrIsDrawing = true; lxrScratch(e.touches[0], canvas, ctx); };
    canvas.ontouchmove  = function(e) { e.preventDefault(); if (lxrIsDrawing) lxrScratch(e.touches[0], canvas, ctx); lxrCheckDone(canvas, ctx); };
    canvas.ontouchend   = function()  { lxrIsDrawing = false; lxrCheckDone(canvas, ctx); };
  }

  function lxrScratch(e, canvas, ctx) {
    var rect = canvas.getBoundingClientRect();
    var x = (e.clientX - rect.left) * (canvas.width  / rect.width);
    var y = (e.clientY - rect.top)  * (canvas.height / rect.height);
    ctx.globalCompositeOperation = 'destination-out';
    ctx.beginPath();
    ctx.arc(x, y, 30, 0, Math.PI * 2);
    ctx.fill();
    lxrUpdatePct(canvas, ctx);
  }

  function lxrUpdatePct(canvas, ctx) {
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    var cleared = 0;
    for (var i = 3; i < imageData.data.length; i += 4) {
      if (imageData.data[i] === 0) cleared++;
    }
    lxrScratchPct = (cleared / (canvas.width * canvas.height)) * 100;
    document.getElementById('lxrScratchFill').style.width = Math.min(lxrScratchPct, 100) + '%';
  }

  function lxrCheckDone(canvas, ctx) {
    if (!lxrScratchDone && lxrScratchPct > 55) {
      lxrScratchDone = true;
      lxrRevealAll();
    }
  }

  window.lxrRevealAll = function() {
    var canvas = document.getElementById('lxrScratchCanvas');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    lxrScratchDone = true;
    lxrScratchPct  = 100;
    document.getElementById('lxrScratchFill').style.width = '100%';
    document.getElementById('lxrBtnProceed').style.display  = 'block';
    document.getElementById('lxrBtnRevealAll').style.display = 'none';
  };

  /* ── INPUT FORMATTING ── */
  window.lxrFormatInput = function(el) {
    el.value = el.value.replace(/[^0-9]/g, '').substring(0, 6);
    el.classList.remove('lxr-error');
    document.getElementById('lxrErrorMsg').classList.remove('lxr-show');
  };

  /* ── CHECK CODE ── */
  window.lxrCheckCode = function() {
    var val = document.getElementById('lxrCodeInput').value.trim();
    if (val.length !== 6 || !/^\d{6}$/.test(val)) {
      var inp = document.getElementById('lxrCodeInput');
      inp.classList.add('lxr-error');
      document.getElementById('lxrErrorMsg').classList.add('lxr-show');
      return;
    }
    lxrRenderResult(LXR_PRIZES[val], val);
    lxrGoToStep(4);
  };

  /* ── RENDER RESULT ── */
  function lxrRenderResult(prize, code) {
    var el = document.getElementById('lxrViewResult');
    if (prize) {
      el.innerHTML =
        '<div class="lxr-result">' +
          '<div class="lxr-result-icon lxr-win-icon">' + prize.emoji + '</div>' +
          '<div class="lxr-result-headline lxr-win-text">Congratulations!</div>' +
          '<p class="lxr-result-desc">You\'ve won a prize! Claim it at any LuxeRewards counter or via our app.</p>' +
          '<div class="lxr-prize-banner">' +
            '<span class="lxr-prize-badge">Winner</span>' +
            '<div class="lxr-prize-name">' + prize.prize + '</div>' +
            '<div class="lxr-prize-value">' + prize.value + '</div>' +
            '<div class="lxr-prize-code">Claim Code: <span class="lxr-prize-code-val">' + code + '</span></div>' +
          '</div>' +
          '<button class="lxr-btn lxr-btn-primary" onclick="lxrRestart()">🎴 Play Again with New Purchase</button>' +
        '</div>';
      lxrConfetti();
    } else {
      el.innerHTML =
        '<div class="lxr-result">' +
          '<div class="lxr-result-icon lxr-lose-icon">🎲</div>' +
          '<div class="lxr-result-headline">Better Luck Next Time!</div>' +
          '<p class="lxr-result-desc">Your code <strong style="color:#B49448;font-family:\'JetBrains Mono\',monospace">' + code + '</strong> wasn\'t a winner this time.</p>' +
          '<div class="lxr-consolation">' +
            '<div class="lxr-consolation-text">Don\'t give up! Over <strong>1 in 5</strong> scratch cards are winners. Make another purchase and try again — your winning card is just one scratch away.</div>' +
            '<div class="lxr-consolation-offer">🎁 5% off your next purchase with code <code>TRYLUCK</code></div>' +
          '</div>' +
          '<button class="lxr-btn lxr-btn-gold" onclick="lxrRestart()">Try Again →</button>' +
        '</div>';
    }
  }

  /* ── CONFETTI ── */
  function lxrConfetti() {
    var c = document.getElementById('lxrConfetti');
    c.innerHTML = '';
    var colors = ['#C8A84A','#E4C06E','#F0D888','#B49448','#ffffff','#F5E8C0'];
    for (var i = 0; i < 80; i++) {
      var el = document.createElement('div');
      el.className = 'lxr-confetti-piece';
      var size = 5 + Math.random() * 8;
      el.style.cssText =
        'left:' + (Math.random() * 100) + '%;' +
        'top:-20px;' +
        'background:' + colors[Math.floor(Math.random() * colors.length)] + ';' +
        'border-radius:' + (Math.random() > 0.5 ? '50%' : '2px') + ';' +
        'width:' + size + 'px;' +
        'height:' + size + 'px;' +
        'animation-duration:' + (1.5 + Math.random() * 2) + 's;' +
        'animation-delay:' + (Math.random() * 0.8) + 's;';
      c.appendChild(el);
    }
    setTimeout(function() { c.innerHTML = ''; }, 4000);
  }

  /* ── RESTART ── */
  window.lxrRestart = function() {
    lxrGoToStep(1);
    document.getElementById('lxrViewPurchase').classList.add('lxr-active');
  };

  /* ── ADMIN PANEL ── */
  window.lxrToggleAdmin = function() {
    var p = document.getElementById('lxrAdminPanel');
    p.classList.toggle('lxr-open');
    if (p.classList.contains('lxr-open')) lxrPopulateAdmin();
  };

  function lxrPopulateAdmin() {
    var el = document.getElementById('lxrAdminCodeList');
    var winCodes = Object.keys(LXR_PRIZES);
    var html = '<div style="margin-bottom:8px;color:#C0B8B0;font-size:10px;letter-spacing:2px;text-transform:uppercase;font-family:Outfit,sans-serif;">Prize-Winning Codes:</div>';
    winCodes.forEach(function(code) {
      var p = LXR_PRIZES[code];
      html += '<div class="lxr-winning-code">✦ ' + code + ' — ' + p.prize + ' (' + p.value + ')</div>';
    });
    html += '<div style="margin-top:12px;margin-bottom:6px;color:#C0B8B0;font-size:10px;letter-spacing:2px;text-transform:uppercase;font-family:Outfit,sans-serif;">Non-Winning Codes (sample):</div>';
    LXR_ALL_CODES.filter(function(c) { return !winCodes.includes(c); }).forEach(function(c) {
      html += '<div style="color:#D0C8C0">' + c + ' — No prize</div>';
    });
    el.innerHTML = html;
  }

})();
