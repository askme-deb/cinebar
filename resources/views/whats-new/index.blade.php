@extends('layouts.frontend')

@section('content')

<!-- ===== HERO BANNER ===== -->
<section class="wn-hero">
    <div class="wn-hero-bg"></div>
    <div class="wn-hero-overlay"></div>
    <div class="wn-hero-content">
        <div class="wn-hero-label">
            <span class="wn-label-dot"></span> Live Updates
        </div>
        <h1>What's <span>New</span> at Cinebar</h1>
        <p>The latest offers, launches, and promotions — brewed fresh for you</p>
        <a href="#wn-offers" class="wn-hero-btn">Explore Deals <i class="fa-solid fa-arrow-down"></i></a>
    </div>
    <div class="wn-float-badge wn-fb1">50% OFF</div>
    <div class="wn-float-badge wn-fb2">New Launch 🍺</div>
    <div class="wn-float-badge wn-fb3">Limited Deal</div>
</section>

<!-- ===== PROMOTIONAL BANNER STRIP ===== -->
<section class="wn-promo-strip">
    <div class="wn-strip-track">
        <span>🍺 New Dark Wheat Brew — Now Available</span>
        <span>🎬 Cinema Deal: Buy 2 Get 1 Free</span>
        <span>🏷️ Weekend Special: 30% Off All Orders</span>
        <span>🆕 Mango Twist — Limited Edition Launch</span>
        <span>🎁 Gift Bundles Now In Stock</span>
        <span>🍺 New Dark Wheat Brew — Now Available</span>
        <span>🎬 Cinema Deal: Buy 2 Get 1 Free</span>
        <span>🏷️ Weekend Special: 30% Off All Orders</span>
        <span>🆕 Mango Twist — Limited Edition Launch</span>
        <span>🎁 Gift Bundles Now In Stock</span>
    </div>
</section>

<!-- ===== DISCOUNT OFFERS ===== -->
<section class="wn-offers-section" id="wn-offers">
    <div class="wn-section-wrapper">
        <div class="wn-section-head wn-reveal">
            <span class="wn-section-tag">🔥 Hot Deals</span>
            <h2>Exclusive Discount Offers</h2>
            <p>Limited time savings on your favourite Cinebar brews</p>
        </div>

        <div class="wn-offers-grid">

            <div class="wn-offer-big wn-reveal">
                <div class="wn-ob-badge">Today Only</div>
                <div class="wn-ob-inner">
                    <div class="wn-ob-left">
                        <h3>Flash Friday</h3>
                        <p>Order any 4 bottles and get the 5th completely free — every Friday at participating cinemas.</p>
                        <div class="wn-ob-discount">BUY 4 <span>GET 1 FREE</span></div>
                        <a href="contact.html#contact-section" class="wn-offer-cta">Claim Offer</a>
                    </div>
                    <div class="wn-ob-right">
                        <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}" alt="Flash Friday">
                        <div class="wn-timer" id="countdownTimer">
                            <div class="wn-timer-box"><span id="timerH">00</span><small>hrs</small></div>
                            <div class="wn-timer-sep">:</div>
                            <div class="wn-timer-box"><span id="timerM">00</span><small>min</small></div>
                            <div class="wn-timer-sep">:</div>
                            <div class="wn-timer-box"><span id="timerS">00</span><small>sec</small></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wn-offers-small">

                <div class="wn-offer-card wn-reveal" style="--card-accent:#004f7f;">
                    <div class="wn-oc-percent">30<span>%</span></div>
                    <h4>Weekday Special</h4>
                    <p>30% off on all Classic Lager orders Monday–Thursday</p>
                    <a href="contact.html#contact-section" class="wn-oc-btn">Get Deal</a>
                </div>

                <div class="wn-offer-card wn-reveal" style="--card-accent:#e3000f;">
                    <div class="wn-oc-percent">50<span>%</span></div>
                    <h4>First Order</h4>
                    <p>50% off your very first Cinebar order — one per customer</p>
                    <a href="contact.html#contact-section" class="wn-oc-btn">Get Deal</a>
                </div>

                <div class="wn-offer-card wn-reveal" style="--card-accent:#2e7d32;">
                    <div class="wn-oc-percent">2x<span></span></div>
                    <h4>Double Points</h4>
                    <p>Earn double loyalty points every weekend at all venues</p>
                    <a href="contact.html#contact-section" class="wn-oc-btn">Get Deal</a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ===== NEW PRODUCT ANNOUNCEMENTS ===== -->
<section class="wn-new-products-section">
    <div class="wn-section-wrapper">
        <div class="wn-section-head wn-reveal">
            <span class="wn-section-tag wn-tag-blue">🆕 Just Launched</span>
            <h2>New Product Announcements</h2>
            <p>Fresh from the brewery — meet our latest additions</p>
        </div>

        <div class="wn-new-products-grid">

            <div class="wn-np-card wn-reveal">
                <div class="wn-np-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}" alt="Dark Wheat">
                    <div class="wn-np-tag">New Launch</div>
                </div>
                <div class="wn-np-body">
                    <span class="wn-np-date"><i class="fa-regular fa-calendar"></i> March 2026</span>
                    <h4>Corona Cero</h4>
                    <p>A crisp, refreshing beer taste with 0.0% alcohol for pure enjoyment anytime.</p>
                    <a href="products.html" class="wn-np-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="wn-np-card wn-reveal">
                <div class="wn-np-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}" alt="Mango Twist">
                    <div class="wn-np-tag wn-np-tag-ltd">Limited Edition</div>
                </div>
                <div class="wn-np-body">
                    <span class="wn-np-date"><i class="fa-regular fa-calendar"></i> March 2026</span>
                    <h4>Budweiser 0.0 Green Apple</h4>
                    <p>Crisp green apple flavor with the smooth taste of Budweiser and 0.0% alcohol.</p>
                    <a href="products.html" class="wn-np-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="wn-np-card wn-reveal">
                <div class="wn-np-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}" alt="Citrus Burst">
                    <div class="wn-np-tag wn-np-tag-seasonal">Seasonal</div>
                </div>
                <div class="wn-np-body">
                    <span class="wn-np-date"><i class="fa-regular fa-calendar"></i> April 2026</span>
                    <h4>HurryCane Energy Drink</h4>
                    <p>A bold, refreshing energy drink designed to power your day.</p>
                    <a href="contact.html#contact-section" class="wn-np-btn">Pre-Register <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== SPECIAL DEALS ===== -->
<section class="wn-deals-section">
    <div class="wn-section-wrapper">
        <div class="wn-section-head wn-reveal">
            <span class="wn-section-tag wn-tag-dark">🎬 Cinema Specials</span>
            <h2>Special Cinema Deals</h2>
            <p>Exclusive packages for movie-goers at partner cinemas</p>
        </div>

        <div class="wn-deals-grid">

            <div class="wn-deal-card wn-reveal">
                <div class="wn-deal-icon"><i class="fa-solid fa-film"></i></div>
                <div class="wn-deal-body">
                    <span class="wn-deal-tag">Multiplex Bundle</span>
                    <h4>Movie + Cinebar Combo</h4>
                    <p>Book your movie ticket with a Cinebar bundle and save 20% on both. Available at PVR, INOX, and Cinepolis.</p>
                    <div class="wn-deal-meta">
                        <span><i class="fa-solid fa-tag"></i> 20% Off Combo</span>
                        <span><i class="fa-solid fa-clock"></i> Valid till 30 Apr</span>
                    </div>
                </div>
                <a href="contact.html#contact-section" class="wn-deal-btn">Book Now</a>
            </div>

            <div class="wn-deal-card wn-reveal">
                <div class="wn-deal-icon"><i class="fa-solid fa-users"></i></div>
                <div class="wn-deal-body">
                    <span class="wn-deal-tag">Group Deal</span>
                    <h4>Gang of 6 Package</h4>
                    <p>Bring your squad! Order 6 Cinebars together and get 2 absolutely free. Perfect for group premiere nights.</p>
                    <div class="wn-deal-meta">
                        <span><i class="fa-solid fa-tag"></i> Buy 6 Get 2 Free</span>
                        <span><i class="fa-solid fa-clock"></i> Weekends Only</span>
                    </div>
                </div>
                <a href="contact.html#contact-section" class="wn-deal-btn">Book Now</a>
            </div>

            <div class="wn-deal-card wn-reveal">
                <div class="wn-deal-icon"><i class="fa-solid fa-heart"></i></div>
                <div class="wn-deal-body">
                    <span class="wn-deal-tag">Date Night</span>
                    <h4>Couple's Cinema Pack</h4>
                    <p>Two tickets + two Cinebar Classic Lagers at a specially curated romantic screening experience.</p>
                    <div class="wn-deal-meta">
                        <span><i class="fa-solid fa-tag"></i> 25% Off Pair</span>
                        <span><i class="fa-solid fa-clock"></i> Fri & Sat Evenings</span>
                    </div>
                </div>
                <a href="contact.html#contact-section" class="wn-deal-btn">Book Now</a>
            </div>

        </div>
    </div>
</section>

<!-- ===== FUTURE EXPANSION SECTION (NEW) ===== -->
<section class="wn-expansion-section">
    <div class="wn-section-wrapper">
        <div class="wn-section-head wn-reveal">
            <span class="wn-section-tag" style="background:rgba(255,152,0,0.12);color:#ff9800;border-color:rgba(255,152,0,0.3);">🚀 Coming Soon</span>
            <h2 style="color:#fff;">Future <span style="color:#ff9800;">Expansion</span></h2>
            <p style="color:#9099b2;">Our growth roadmap — bringing Cinebar to every major entertainment venue across India</p>
        </div>

        <div class="wn-expansion-grid">

            <div class="wn-exp-card wn-reveal">
                <div class="wn-exp-phase">Phase 1</div>
                <div class="wn-exp-icon"><i class="fa-solid fa-building"></i></div>
                <h4>Multiplex Chains Across India</h4>
                <p>Expanding to all major multiplex operators — PVR, INOX, Cinepolis, and Carnival Cinemas — covering 200+ screens nationwide.</p>
                <div class="wn-exp-timeline"><i class="fa-solid fa-clock"></i> 2026 Target</div>
            </div>

            <div class="wn-exp-card wn-reveal">
                <div class="wn-exp-phase">Phase 2</div>
                <div class="wn-exp-icon"><i class="fa-solid fa-masks-theater"></i></div>
                <h4>Entertainment Venues</h4>
                <p>Bringing Cinebar to theme parks, gaming zones, bowling alleys, and all premium family entertainment centers across metro cities.</p>
                <div class="wn-exp-timeline"><i class="fa-solid fa-clock"></i> 2027 Target</div>
            </div>

            <div class="wn-exp-card wn-reveal">
                <div class="wn-exp-phase">Phase 3</div>
                <div class="wn-exp-icon"><i class="fa-solid fa-music"></i></div>
                <h4>Live Events & Concerts</h4>
                <p>Official beverage partner for India's top music festivals, live concerts, and entertainment events — reaching millions of fans.</p>
                <div class="wn-exp-timeline"><i class="fa-solid fa-clock"></i> 2027 Target</div>
            </div>

            <div class="wn-exp-card wn-reveal">
                <div class="wn-exp-phase">Phase 4</div>
                <div class="wn-exp-icon"><i class="fa-solid fa-trophy"></i></div>
                <h4>Sports Stadium Beverages</h4>
                <p>Partnering with IPL venues, ISL stadiums, and major sporting arenas to provide zero-alcohol premium beverages to sports fans.</p>
                <div class="wn-exp-timeline"><i class="fa-solid fa-clock"></i> 2028 Target</div>
            </div>

        </div>

        <!-- Expansion Stats -->
        <div class="wn-exp-stats wn-reveal">
            <div class="wn-exp-stat">
                <span class="wn-exp-stat-num">500+</span>
                <span class="wn-exp-stat-label">Target Screens</span>
            </div>
            <div class="wn-exp-stat">
                <span class="wn-exp-stat-num">25+</span>
                <span class="wn-exp-stat-label">Cities by 2028</span>
            </div>
            <div class="wn-exp-stat">
                <span class="wn-exp-stat-num">10M+</span>
                <span class="wn-exp-stat-label">Annual Audience Reach</span>
            </div>
            <div class="wn-exp-stat">
                <span class="wn-exp-stat-num">6+</span>
                <span class="wn-exp-stat-label">Venue Categories</span>
            </div>
        </div>

    </div>
</section>

<!-- ===== LIMITED TIME OFFERS ===== -->
<section class="wn-limited-section">
    <div class="wn-section-wrapper">
        <div class="wn-section-head wn-reveal">
            <span class="wn-section-tag wn-tag-red">⏳ Limited Time</span>
            <h2>Don't Miss These Offers</h2>
            <p>Act fast — these deals are only available for a short window</p>
        </div>

        <div class="wn-limited-grid">

            <div class="wn-limited-card wn-reveal">
                <div class="wn-lc-ribbon">Expires Soon</div>
                <div class="wn-lc-img">
                    <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}" alt="Classic Bundle">
                </div>
                <div class="wn-lc-body">
                    <h4>Corona Cero</h4>
                    <p>A crisp, refreshing beer taste with 0.0% alcohol for pure enjoyment anytime.</p>
                    <div class="wn-lc-off">FLAT 40% OFF</div>
                    <a href="contact.html#contact-section" class="wn-lc-btn">Grab It Now</a>
                </div>
            </div>

            <div class="wn-limited-card wn-lc-dark wn-reveal">
                <div class="wn-lc-ribbon wn-ribbon-gold">Hot Deal</div>
                <div class="wn-lc-img">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}" alt="Premium Box">
                </div>
                <div class="wn-lc-body">
                    <h4>Budweiser Peach</h4>
                    <p>Smooth Budweiser flavor blended with juicy peach sweetness and 0.0% alcohol.</p>
                    <div class="wn-lc-off">FLAT 35% OFF</div>
                    <a href="contact.html#contact-section" class="wn-lc-btn">Grab It Now</a>
                </div>
            </div>

            <div class="wn-limited-card wn-reveal">
                <div class="wn-lc-ribbon wn-ribbon-green">New!</div>
                <div class="wn-lc-img">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}" alt="Tropical Pack">
                </div>
                <div class="wn-lc-body">
                    <h4>Budweiser 0.0 Green Apple</h4>
                    <p>Crisp green apple flavor with the smooth taste of Budweiser and 0.0% alcohol.</p>
                    <div class="wn-lc-off">FLAT 45% OFF</div>
                    <a href="contact.html#contact-section" class="wn-lc-btn">Grab It Now</a>
                </div>
            </div>

            <div class="wn-limited-card wn-reveal">
                <div class="wn-lc-ribbon">Last Chance</div>
                <div class="wn-lc-img">
                    <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}" alt="Seasonal Pack">
                </div>
                <div class="wn-lc-body">
                    <h4>HurryCane Energy Drink</h4>
                    <p>A bold, refreshing energy drink designed to power your day.</p>
                    <div class="wn-lc-off">FLAT 55% OFF</div>
                    <a href="contact.html#contact-section" class="wn-lc-btn">Grab It Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== NEWSLETTER ===== -->
<section class="wn-newsletter-section">
    <div class="wn-newsletter-inner wn-reveal">
        <div class="wn-nl-icon"><i class="fa-solid fa-bell"></i></div>
        <h2>Never Miss a Deal</h2>
        <p>Subscribe to our newsletter and get exclusive offers delivered straight to your inbox</p>
        <form class="wn-nl-form" onsubmit="handleNewsletterSubmit(event)">
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit">Subscribe <i class="fa-solid fa-paper-plane"></i></button>
        </form>
        <div class="wn-nl-success" id="nlSuccess">
            <i class="fa-solid fa-circle-check"></i> You're subscribed! Watch your inbox for deals.
        </div>
        <p class="wn-nl-note">No spam. Unsubscribe anytime.</p>
    </div>
</section>

@endsection
