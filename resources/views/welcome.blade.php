@extends('layouts.frontend')

@section('content')
<!-- HERO -->

<section class="banner">
    <video autoplay muted loop playsinline>
        <source src="{{ asset('assets/frontend/images/banner-video.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="content">
        <h1>Refreshing <span>0% ALCOHOL BEER</span> for Every Movie</h1>
        <p>Cinebar brings a revolution to the cinema experience. Enjoy the premium taste of chilled beer without the alcohol—perfectly paired with your favorite film.</p>
        <a href="products.html#products-portfolio"><button>Explore Menu</button></a>
    </div>
</section>



<!--What we offer section-->
<section class="op-products-section">
    <div class="op-wrapper">

        <!-- Header -->
        <div class="op-header">
            <h2>What We Offer</h2>
            <p>
                Top-quality refreshments, chilled to perfection, and served directly to your cinema seat.
            </p>
        </div>

        <!-- Product Grid -->
        <div class="op-grid">

            <!-- Card 1 -->
            <div class="op-card offer-card">
                <div class="op-image">
                    <img src="{{ asset('assets/frontend/images/beerWithPopCons.png') }}" alt="pic-1">
                </div>
                <div class="op-content">
                    <h3> 0% Alcohol Beer at Your Seat</h3>
                    <p>
                        Enjoy premium, chilled non-alcoholic beer served inside cinema halls. No intoxication. No compromise. Just pure refreshment.
                    </p>

                    <ul>
                        <li>Serving Temp: Chilled to 3°C – 5°C</li>
                        <li>Calories: Low-calorie, guilt-free refreshment</li>
                    </ul>

                    <a href="contact.html#contact-section" class="op-btn">Book Now</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="op-card offer-card">
                <div class="op-image">
                    <img src="{{ asset('assets/frontend/images/pic-2.png') }}" alt="pic-2">
                </div>
                <div class="op-content">
                    <h3>Premium Cinema Experience</h3>
                    <p>
                        Upgrade your movie night from ordinary cold drinks to a classy, adult-friendly beverage option.
                    </p>

                    <ul>
                        <li>Premium Quality: Crafted from natural ingredients</li>
                        <li>Convenience: Served in spill-proof, cinema-friendly bottles</li>
                    </ul>

                    <a href="contact.html#contact-section" class="op-btn">Book Now</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="op-card offer-card">
                <div class="op-image">
                    <img src="{{ asset('assets/frontend/images/pic-3.png') }}" alt="pic-3">
                </div>
                <div class="op-content">
                    <h3>Safe & Responsible Enjoyment</h3>
                    <p>
                        Our 0% alcohol beverages ensure:
                    </p>

                    <ul>
                        <li>No Hangover: Wake up fresh the next morning</li>
                        <li>No Legal Restrictions: Suitable for all ages and drivers</li>
                        <li>Safe Environment: Compliant with all cinema safety norms</li>
                    </ul>

                    <a href="contact.html#contact-section" class="op-btn">Book Now</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ===== CINEBAR CONCEPT SECTION (NEW) ===== -->
<section class="cb-concept-section">
    <div class="cb-concept-wrapper">

        <div class="cb-concept-header">
            <span class="cb-concept-tag">🎬 The Cinebar Experience</span>
            <h2>A New Era of <span>Cinema Beverages</span></h2>
            <p>Cinebar redefines how audiences enjoy their movie experience — premium beverages, delivered to your seat, during the magic of cinema.</p>
        </div>

        <div class="cb-concept-grid">

            <div class="cb-concept-card">
                <div class="cb-concept-icon">🎭</div>
                <h4>Entertainment + Beverage Experience</h4>
                <p>We merge the joy of cinema with the pleasure of a premium drink — creating unforgettable moments for every moviegoer.</p>
            </div>

            <div class="cb-concept-card">
                <div class="cb-concept-icon">🍺</div>
                <h4>Premium Non-Alcoholic Drinks</h4>
                <p>Our curated range of zero-alcohol beverages delivers authentic beer taste with international quality standards — no compromise.</p>
            </div>

            <div class="cb-concept-card">
                <div class="cb-concept-icon">🏟️</div>
                <h4>Designed for Cinema Halls</h4>
                <p>Every bottle is spill-proof, cinema-friendly, and temperature-controlled — specifically engineered for the in-hall experience.</p>
            </div>

            <div class="cb-concept-card">
                <div class="cb-concept-icon">⚡</div>
                <h4>Fast Interval Service</h4>
                <p>Our efficient delivery model ensures your beverages arrive fresh and chilled right at your seat during movie intervals.</p>
            </div>

        </div>

    </div>
</section>

<section class="cb-why-section">
    <div class="cb-why-wrapper">

        <!-- Header -->
        <div class="cb-why-header">
            <h2>Why <span>Cinebar?</span></h2>
            <p>
                Cinebar introduces a new culture in cinemas —
                where sophistication meets entertainment.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="cb-why-grid">

            <!-- Left Features -->
            <div class="cb-why-column">
                <div class="cb-why-item">
                    <div class="cb-why-icon">🎬</div>
                    <h4>Enhances Movie-Going Experience</h4>
                    <p>Transforms your cinema visit into a premium and immersive lifestyle moment.</p>
                </div>

                <div class="cb-why-item">
                    <div class="cb-why-icon">✨</div>
                    <h4>Premium Alternative</h4>
                    <p>A refined and stylish upgrade to traditional soft drinks.</p>
                </div>
            </div>

            <!-- Center Image -->
            <div class="cb-why-image">
                <div class="cb-image-frame">
                    <img src="{{ asset('assets/frontend/images/cinema.jpg') }}" alt="Why Cinebar">
                </div>
            </div>

            <!-- Right Features -->
            <div class="cb-why-column">
                <div class="cb-why-item">
                    <div class="cb-why-icon">👫</div>
                    <h4>Perfect for Everyone</h4>
                    <p>Ideal for couples, friends & corporate movie nights.</p>
                </div>

                <div class="cb-why-item">
                    <div class="cb-why-icon">🛡</div>
                    <h4>Safe & Trend-Setting</h4>
                    <p>Refreshing, secure, and designed for modern entertainment culture.</p>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="cb-why-cta">
            <a href="about.html" class="cb-why-btn">Discover Cinebar</a>
        </div>

    </div>
</section>


<!-- PRODUCTS -->

<section class="products">
    <div class="container">
        <h2>Our Products</h2>

        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center g-4">

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}" alt="">
                                <h5>Corona Cero</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}" alt="">
                                <h5>Budweiser Peach</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}" alt="">
                                <h5>Budweiser Peach 0.0 Green Apple</h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center g-4">

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}" alt="">
                                <h5>HurryCane Energy Drink</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}" alt="">
                                <h5>Budweiser Peach</h5>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="product-card float-img">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}" alt="">
                                <h5>Budweiser Peach 0.0 Green Apple</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</section>

<!-- ===== PARTNERSHIP HIGHLIGHT SECTION (NEW) ===== -->
<section class="cb-partnership-section">
    <div class="cb-partnership-wrapper">

        <div class="cb-partnership-header">
            <span class="cb-partnership-tag">🌍 Global Credibility</span>
            <h2>Backed by <span>World-Class</span> Partners</h2>
            <p>Cinebar is powered by the strength of Agiltas Solutions Pvt Ltd — a trusted channel partner of the world's leading brewing company, AB InBev.</p>
        </div>

        <div class="cb-partnership-grid">

            <div class="cb-partner-card">
                <div class="cb-partner-logo-wrap">
                    <div class="cb-partner-icon">🏢</div>
                </div>
                <h4>Agiltas Solutions Pvt Ltd</h4>
                <p>The parent company behind Cinebar — a professionally managed organization committed to beverage innovation and operational excellence across India.</p>
                <div class="cb-partner-tags">
                    <span>Incorporated in India</span>
                    <span>Operations Excellence</span>
                </div>
            </div>

            <div class="cb-partner-card cb-partner-featured">
                <div class="cb-partner-logo-wrap">
                    <div class="cb-partner-icon">🌐</div>
                </div>
                <div class="cb-partner-badge">Strategic Alliance</div>
                <h4>AB InBev Global Partnership</h4>
                <p>As an authorized channel partner of AB InBev — the world's largest brewing company — Cinebar brings international-grade beverage quality and innovation to Indian cinema halls.</p>
                <div class="cb-partner-stats">
                    <div class="cb-stat">
                        <span class="cb-stat-num">500+</span>
                        <span class="cb-stat-label">Brands Globally</span>
                    </div>
                    <div class="cb-stat">
                        <span class="cb-stat-num">50+</span>
                        <span class="cb-stat-label">Countries</span>
                    </div>
                    <div class="cb-stat">
                        <span class="cb-stat-num">#1</span>
                        <span class="cb-stat-label">Brewing Company</span>
                    </div>
                </div>
            </div>

            <div class="cb-partner-card">
                <div class="cb-partner-logo-wrap">
                    <div class="cb-partner-icon">🏆</div>
                </div>
                <h4>International Beverage Standards</h4>
                <p>Every product served under the Cinebar brand meets rigorous international quality benchmarks — from ingredient sourcing to cold chain distribution.</p>
                <div class="cb-partner-tags">
                    <span>ISO Standards</span>
                    <span>Cold Chain Certified</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ===== COMPETITIVE ADVANTAGES (NEW) ===== -->
<section class="cb-advantages-section">
    <div class="cb-advantages-wrapper">

        <div class="cb-advantages-header">
            <span class="cb-advantages-tag">💡 Why Choose Us</span>
            <h2>Our Competitive <span>Advantages</span></h2>
            <p>What sets Cinebar apart in the cinema beverage market</p>
        </div>

        <div class="cb-advantages-grid">

            <div class="cb-advantage-card">
                <div class="cb-adv-number">01</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-film"></i></div>
                <h4>Exclusive Cinema Focus</h4>
                <p>Dedicated solely to the cinema vertical — our products, service, and experience are purpose-built for movie halls.</p>
            </div>

            <div class="cb-advantage-card">
                <div class="cb-adv-number">02</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-handshake"></i></div>
                <h4>Global Partnership Strength</h4>
                <p>Backed by AB InBev, the world's #1 brewing company — bringing unmatched product quality and brand credibility.</p>
            </div>

            <div class="cb-advantage-card">
                <div class="cb-adv-number">03</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-star"></i></div>
                <h4>Premium Consumer Experience</h4>
                <p>From bottle design to in-seat service — every touchpoint is crafted to elevate the audience's experience.</p>
            </div>

            <div class="cb-advantage-card">
                <div class="cb-adv-number">04</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-bolt"></i></div>
                <h4>Operational Efficiency</h4>
                <p>Smart inventory systems, trained staff, and proven processes ensure seamless service during peak movie hours.</p>
            </div>

            <div class="cb-advantage-card">
                <div class="cb-adv-number">05</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-network-wired"></i></div>
                <h4>Scalable Distribution Network</h4>
                <p>Our distribution infrastructure is built to scale rapidly across multiplexes, standalone theatres, and event venues.</p>
            </div>

            <div class="cb-advantage-card">
                <div class="cb-adv-number">06</div>
                <div class="cb-adv-icon"><i class="fa-solid fa-leaf"></i></div>
                <h4>Zero Alcohol Innovation</h4>
                <p>Pioneering the non-alcoholic premium segment in India — a first-mover advantage in an untapped cinema market.</p>
            </div>

        </div>

    </div>
</section>


<section class="vision-section">

<div class="container">

    <h2 class="vision-title">Our Purpose & Company Vision</h2>

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-lg-6">

            <div class="vision-card">

                <img src="{{ asset('assets/frontend/images/about_1.png') }}" class="vision-img" alt="">

                <div class="vision-content">

                    <h4>Our Purpose</h4>

                    <p>At Cinebar, our purpose is to redefine the social drinking experience by creating premium alcohol-free beer that brings people together without compromise. We believe that great taste, celebration, and connection should be accessible to everyone — whether for health, lifestyle, or personal choice.

We are committed to crafting beverages that deliver the authentic beer experience while promoting mindful consumption, wellness, and inclusivity. Cinebar exists to empower moments of enjoyment where people can relax, connect, and celebrate freely — anytime, anywhere.</p>

                    <a href="#" class="arrow-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- Card 2 -->
        <div class="col-lg-6">

            <div class="vision-card">

                <img src="{{ asset('assets/frontend/images/towBoyCinebar.png') }}" class="vision-img" alt="">

                <div class="vision-content">

                    <h4>Our Company Vision</h4>

                    <p> Our vision is to become a global leader in alcohol-free beer, setting new standards for flavor, quality, and innovation. We aim to transform perceptions around non-alcoholic beverages by proving that choosing alcohol-free does not mean sacrificing taste, sophistication, or social enjoyment.

Cinebar strives to build a future where mindful drinking is the norm — a world where celebrations are healthier, communities are stronger, and everyone can raise a glass with confidence.</p>

                    <a href="#" class="arrow-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>
</section>



<section class="partners-section">
  <div class="container">

    <div class="section-title text-center">
      <h2>Our Trusted Partners</h2>
    </div>

    <div class="row partners-row">

      <div class="col-lg-4 col-md-3 col-6 partner-item">
        <img src="{{ asset('assets/frontend/images/priya-c.png') }}" alt="Partner 1">
      </div>

      <div class="col-lg-4 col-md-3 col-6 partner-item">
        <img src="{{ asset('assets/frontend/images/axi-c.png') }}" alt="Partner 2">
      </div>

      <div class="col-lg-4 col-md-3 col-6 partner-item">
        <img src="{{ asset('assets/frontend/images/bico-c.png') }}" alt="Partner 3">
      </div>

    </div>

  </div>
</section>


<!-- ===== TARGET MARKET SECTION (NEW) ===== -->
<section class="cb-target-section">
    <div class="cb-target-wrapper">

        <div class="cb-target-header">
            <span class="cb-target-tag">🎯 Who We Serve</span>
            <h2>Our Target <span>Market</span></h2>
            <p>Cinebar is strategically designed to serve premium entertainment venues across India</p>
        </div>

        <div class="cb-target-grid">

            <div class="cb-target-card">
                <div class="cb-target-icon">🎦</div>
                <h4>Multiplex Cinema Chains</h4>
                <p>PVR, INOX, Cinepolis, and all major multiplex operators across India's Tier 1 and Tier 2 cities.</p>
            </div>

            <div class="cb-target-card">
                <div class="cb-target-icon">🎭</div>
                <h4>Stand-alone Theatres</h4>
                <p>Independent cinema halls seeking to elevate their beverage offering and increase audience satisfaction.</p>
            </div>

            <div class="cb-target-card">
                <div class="cb-target-icon">🎪</div>
                <h4>Entertainment Venues</h4>
                <p>Amusement parks, bowling alleys, gaming zones, and other family entertainment centers.</p>
            </div>

            <div class="cb-target-card">
                <div class="cb-target-icon">🏢</div>
                <h4>Corporate Screening Venues</h4>
                <p>Private screening halls, corporate event venues, and premiere event spaces for exclusive screenings.</p>
            </div>

            <div class="cb-target-card">
                <div class="cb-target-icon">🎬</div>
                <h4>Movie Festivals</h4>
                <p>Film festivals, outdoor cinema events, and cultural screenings requiring premium beverage service.</p>
            </div>

            <div class="cb-target-card">
                <div class="cb-target-icon">🏟️</div>
                <h4>Sports & Live Events</h4>
                <p>Sports stadiums, concert venues, and live entertainment spaces where premium beverages enhance the experience.</p>
            </div>

        </div>

    </div>
</section>


<section class="popular-brands py-5">
    <div class="container text-center">

        <h2 class="fw-bold mb-4">Popular Brands</h2>
        <p class="text-muted mb-5">We proudly offer products from the world's most loved brands</p>

        <div class="row g-4 justify-content-center">

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                    <img src="{{ asset('assets/frontend/images/b-logo.png') }}" alt="Brand">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                     <img src="{{ asset('assets/frontend/images/b-logo2.png') }}" alt="Brand">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                     <img src="{{ asset('assets/frontend/images/b-logo2.png') }}" alt="Brand">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                     <img src="{{ asset('assets/frontend/images/b-logo.png') }}" alt="Brand">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                     <img src="{{ asset('assets/frontend/images/b-logo2.png') }}" alt="Brand">
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-2">
                <div class="brand-card">
                     <img src="{{ asset('assets/frontend/images/b-logo.png') }}" alt="Brand">
                </div>
            </div>

        </div>

    </div>
</section>




<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">

              <div class="col-lg-4">
                <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}" class="float-img">
              </div>
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">About Us</h2>
                <p class="text-muted mb-3">
                Cinebar is a premium beverage concept brand owned and operated by Agiltas Solutions Pvt Ltd, a trusted channel partner of the world's leading brewing company.
Cinebar focuses on delivering innovative beverage experiences in cinema environments, combining entertainment with premium refreshment solutions. The brand is designed to enhance the movie-going experience through curated beverage offerings, efficient service systems, and strong brand partnerships.
Our goal is to redefine beverage consumption within cinema halls by providing high-quality, zero-alcohol and premium drink solutions tailored for modern audiences.

                </p>

                <a href="about.html" class="btn btn-primary px-4 py-2">Learn More</a>
            </div>

        </div>
    </div>
</section>


<section class="faq-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
            <p class="text-muted">Find answers to the most common questions</p>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What products do you offer?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer a wide range of beverages including soft drinks, zero sugar options, and flavored drinks from popular brands.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Do you provide home delivery?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we provide fast and reliable home delivery services to ensure your favorite drinks reach you fresh and on time.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Are your products authentic?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely. We source our products directly from authorized distributors and trusted suppliers.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        How can I contact support?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can contact our support team via phone, email, or through our website contact form for quick assistance.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
