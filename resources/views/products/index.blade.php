@extends('layouts.frontend')

@section('content')
<!-- ===== PRODUCTS HERO BANNER ===== -->
<section class="pr-hero">
    <div class="pr-hero-overlay"></div>
    <div class="pr-hero-content">
        <span class="pr-hero-tag">🍺 Premium Alcohol-Free</span>
        <h1>Our <span>Products</span></h1>
        <p>Crafted for cinema lovers. Brewed without alcohol. Served chilled to perfection.</p>
    </div>
    <div class="pr-hero-scroll">
        <div class="pr-scroll-dot"></div>
    </div>
</section>


<!-- ===== FEATURED SLIDER ===== -->
<section class="pr-slider-section" id="quick-views">
    <div class="pr-slider-wrapper">
        <div class="pr-slider-header">
            <h2>Featured Collection</h2>
            <p>Our signature lineup — bold, refreshing, and completely alcohol-free</p>
        </div>

        <div class="pr-slider-container">
            <button class="pr-slider-btn pr-slider-prev" id="sliderPrev">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="pr-slider-track-wrapper">
                <div class="pr-slider-track" id="sliderTrack">

                    <!-- Slide 1 -->
                    <div class="pr-slide">
                        <div class="pr-slide-inner">
                            <div class="pr-slide-image">
                                <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}"
                                    alt="Classic Lager">
                                <div class="pr-slide-badge">Best Seller</div>
                            </div>
                            <div class="pr-slide-info">
                                <span class="pr-slide-category">Classic Series</span>
                                <h3>Corona Cero</h3>
                                <p>A crisp and refreshing beer experience with 0.0% alcohol.
                                    Light citrus notes and smooth taste make it perfect for any moment.
                                    Enjoy the iconic Corona flavor with zero compromise.</p>
                                <div class="pr-slide-meta">
                                    <span><i class="fa-solid fa-snowflake"></i> 3–5°C</span>
                                    <span><i class="fa-solid fa-leaf"></i> 0% Alcohol</span>
                                    <span><i class="fa-solid fa-fire-flame-curved"></i> Low Cal</span>
                                </div>
                                <div class="pr-slide-actions">
                                    <a href="contact.html#contact-section" class="pr-btn-primary">Order Now</a>
                                    <a href="whats-new.html" class="pr-btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="pr-slide">
                        <div class="pr-slide-inner">
                            <div class="pr-slide-image">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}"
                                    alt="Dark Wheat">
                                <div class="pr-slide-badge pr-badge-new">New</div>
                            </div>
                            <div class="pr-slide-info">
                                <span class="pr-slide-category">Premium Series</span>
                                <h3>Budweiser Peach</h3>
                                <p>Classic Budweiser character blended with juicy peach notes and 0.0% alcohol.
                                    Light, refreshing, and perfectly balanced sweetness.
                                    Enjoy the flavor you love, completely alcohol-free.</p>
                                <div class="pr-slide-meta">
                                    <span><i class="fa-solid fa-snowflake"></i> 3–5°C</span>
                                    <span><i class="fa-solid fa-leaf"></i> 0% Alcohol</span>
                                    <span><i class="fa-solid fa-wheat-awn"></i> Wheat Malt</span>
                                </div>
                                <div class="pr-slide-actions">
                                    <a href="contact.html#contact-section" class="pr-btn-primary">Order Now</a>
                                    <a href="whats-new.html" class="pr-btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="pr-slide">
                        <div class="pr-slide-inner">
                            <div class="pr-slide-image">
                                <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}"
                                    alt="Citrus Burst">
                                <div class="pr-slide-badge pr-badge-limited">Limited</div>
                            </div>
                            <div class="pr-slide-info">
                                <span class="pr-slide-category">Seasonal Series</span>
                                <h3>Budweiser Peach 0.0 Green Apple</h3>
                                <p>A vibrant fusion of crisp apple flavor and 0.0% alcohol refreshment.
                                    Light, fruity, and incredibly refreshing in every sip.
                                    A bold, modern taste with zero alcohol.</p>
                                <div class="pr-slide-meta">
                                    <span><i class="fa-solid fa-snowflake"></i> 3–5°C</span>
                                    <span><i class="fa-solid fa-leaf"></i> 0% Alcohol</span>
                                    <span><i class="fa-solid fa-lemon"></i> Citrus</span>
                                </div>
                                <div class="pr-slide-actions">
                                    <a href="contact.html#contact-section" class="pr-btn-primary">Order Now</a>
                                    <a href="whats-new.html" class="pr-btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="pr-slide">
                        <div class="pr-slide-inner">
                            <div class="pr-slide-image">
                                <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}"
                                    alt="Mango Twist">
                                <div class="pr-slide-badge pr-badge-popular">Popular</div>
                            </div>
                            <div class="pr-slide-info">
                                <span class="pr-slide-category">Tropical Series</span>
                                <h3>HurryCane Energy Drink</h3>
                                <p>A powerful energy boost with a bold and refreshing taste.
                                    Packed with flavor to keep you energized throughout the day.
                                    Fuel your moments with unstoppable energy.</p>
                                <div class="pr-slide-meta">
                                    <span><i class="fa-solid fa-snowflake"></i> 3–5°C</span>
                                    <span><i class="fa-solid fa-leaf"></i> 0% Alcohol</span>
                                    <span><i class="fa-solid fa-bolt"></i> Energy Boost</span>
                                </div>
                                <div class="pr-slide-actions">
                                    <a href="contact.html#contact-section" class="pr-btn-primary">Order Now</a>
                                    <a href="whats-new.html" class="pr-btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="pr-slider-btn pr-slider-next" id="sliderNext">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="pr-slider-dots" id="sliderDots">
            <span class="pr-dot active" data-index="0"></span>
            <span class="pr-dot" data-index="1"></span>
            <span class="pr-dot" data-index="2"></span>
            <span class="pr-dot" data-index="3"></span>
        </div>
    </div>
</section>

<!-- ===== PRODUCT GRID ===== -->
<section class="pr-grid-section" id="product-all">
    <div class="pr-grid-wrapper">
        <div class="pr-grid-header pr-reveal">
            <h2>Full Product Range</h2>
            <p>Every flavour crafted to complement every cinematic moment</p>
        </div>

        <!-- Filter Tabs -->
        <div class="pr-filter-tabs pr-reveal">
            <button class="pr-tab active" data-filter="all">All Products</button>
            <button class="pr-tab" data-filter="classic">Classic</button>
            <button class="pr-tab" data-filter="premium">Premium</button>
            <button class="pr-tab" data-filter="seasonal">Seasonal</button>
            <button class="pr-tab" data-filter="tropical">Tropical</button>
        </div>

        <div class="pr-product-grid" id="productGrid">

            <!-- Product 1 -->
            <div class="pr-product-card pr-reveal" data-category="classic">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}" alt="Classic Lager">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                    <span class="pr-card-tag">Best Seller</span>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Classic Series</span>
                    <h4>Corona Cero</h4>
                    <p>A crisp, refreshing beer taste with 0.0% alcohol for pure enjoyment anytime.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="pr-product-card pr-reveal" data-category="premium">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}" alt="Dark Wheat">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                    <span class="pr-card-tag pr-tag-new">New</span>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Premium Series</span>
                    <h4>Budweiser Peach</h4>
                    <p>A refreshing peach-infused Budweiser experience with zero alcohol.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>5.0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="pr-product-card pr-reveal" data-category="seasonal">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}"
                        alt="Citrus Burst">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                    <span class="pr-card-tag pr-tag-limited">Limited</span>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Seasonal Series</span>
                    <h4>Budweiser 0.0 Green Apple</h4>
                    <p>Crisp green apple flavor with the smooth taste of Budweiser and 0.0% alcohol.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="pr-product-card pr-reveal" data-category="tropical">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}"
                        alt="Mango Twist">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                    <span class="pr-card-tag pr-tag-popular">Popular</span>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Tropical Series</span>
                    <h4>HurryCane Energy Drink</h4>
                    <p>A bold, refreshing energy drink designed to power your day.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="pr-product-card pr-reveal" data-category="classic">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/corona cero.png') }}" alt="Zero Ice">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Classic Series</span>
                    <h4>Corona Cero</h4>
                    <p>A crisp, refreshing beer taste with 0.0% alcohol for pure enjoyment anytime.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.2</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="pr-product-card pr-reveal" data-category="premium">
                <div class="pr-card-img-wrap">
                    <img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}" alt="Velvet Gold">
                    <div class="pr-card-overlay">
                        <a href="#quick-views" class="pr-card-quick">Quick View</a>
                    </div>
                    <span class="pr-card-tag pr-tag-new">New</span>
                </div>
                <div class="pr-card-body">
                    <span class="pr-card-cat">Premium Series</span>
                    <h4>Budweiser Peach 0.0</h4>
                    <p>A refreshing peach-infused Budweiser experience with zero alcohol.</p>
                    <div class="pr-card-footer">
                        <a href="contact.html#contact-section" class="pr-card-btn">Buy Now</a>
                        <div class="pr-card-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== PRODUCT PORTFOLIO CATEGORIES (NEW) ===== -->
<section class="pr-portfolio-section" id="products-portfolio">
    <div class="pr-portfolio-wrapper">
        <div class="pr-portfolio-header">
            <span class="pr-portfolio-tag">🍺 Full Range</span>
            <h2>Product <span>Portfolio</span></h2>
            <p>Six distinct categories — each crafted to deliver a premium cinema beverage experience</p>
        </div>

        <div class="pr-portfolio-grid">

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #0a0f2c, #004f7f);">
                    <i class="fa-solid fa-beer-mug-empty"></i>
                </div>
                <h4>Premium Malt-Based Beverages</h4>
                <p>Authentic malt flavors crafted from the finest barley — delivering the real beer experience with zero
                    alcohol content.</p>
                <div class="pr-pf-tags">
                    <span>Corona Cero</span>
                    <span>Budweiser Series</span>
                </div>
            </div>

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #1a4a00, #2e7d32);">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h4>Zero Alcohol Beverages</h4>
                <p>Clinically verified 0.00% alcohol — safe for all ages, drivers, and health-conscious consumers
                    without compromising taste.</p>
                <div class="pr-pf-tags">
                    <span>0.0% Certified</span>
                    <span>Safe for All</span>
                </div>
            </div>

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #7b1fa2, #9c27b0);">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <h4>Flavored Sparkling Drinks</h4>
                <p>Vibrant, fruit-forward sparkling beverages with refreshing carbonation — perfect for every genre of
                    film.</p>
                <div class="pr-pf-tags">
                    <span>Green Apple</span>
                    <span>Peach Fusion</span>
                </div>
            </div>

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #b71c1c, #e53935);">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h4>Energy Beverages</h4>
                <p>High-energy drinks designed to keep audiences alert and energized for long screenings and double
                    features.</p>
                <div class="pr-pf-tags">
                    <span>HurryCane</span>
                    <span>High Caffeine</span>
                </div>
            </div>

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #004f7f, #0288d1);">
                    <i class="fa-solid fa-film"></i>
                </div>
                <h4>Specialty Cinema Beverages</h4>
                <p>Exclusive cinema-only formulations — developed specifically for the movie-hall environment with
                    spill-proof packaging.</p>
                <div class="pr-pf-tags">
                    <span>Cinema Exclusive</span>
                    <span>Spill-Proof</span>
                </div>
            </div>

            <div class="pr-portfolio-card">
                <div class="pr-pf-icon-wrap" style="background: linear-gradient(135deg, #ff6f00, #ff9800);">
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>Limited Edition Themed Drinks</h4>
                <p>Special release beverages co-branded with film launches — turning every blockbuster into a complete
                    multi-sensory experience.</p>
                <div class="pr-pf-tags">
                    <span>Movie Tie-ins</span>
                    <span>Collector's Edition</span>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ===== PRODUCT HIGHLIGHTS ===== -->
<section class="pr-highlights-section">
    <div class="pr-highlights-wrapper">
        <div class="pr-highlights-header pr-reveal">
            <h2>What Makes Us Different</h2>
            <p>Every bottle of Cinebar is crafted with intent — premium taste, zero alcohol</p>
        </div>

        <div class="pr-highlights-grid">
            <div class="pr-highlight-card pr-reveal">
                <div class="pr-hl-icon"><i class="fa-solid fa-flask"></i></div>
                <h4>Natural Brewing</h4>
                <p>Brewed using traditional methods with natural barley malt, hops, and pure water — no artificial
                    flavours or preservatives.</p>
            </div>
            <div class="pr-highlight-card pr-reveal">
                <div class="pr-hl-icon"><i class="fa-solid fa-temperature-low"></i></div>
                <h4>Served Chilled</h4>
                <p>Every bottle is maintained at 3–5°C from production to your seat — ensuring peak flavour from first
                    sip to last.</p>
            </div>
            <div class="pr-highlight-card pr-reveal">
                <div class="pr-hl-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Zero Alcohol Certified</h4>
                <p>Clinically verified 0.00% alcohol content — safe for drivers, suitable for all ages, and fully
                    compliant with cinema regulations.</p>
            </div>
            <div class="pr-highlight-card pr-reveal">
                <div class="pr-hl-icon"><i class="fa-solid fa-bottle-water"></i></div>
                <h4>Cinema-Ready Packaging</h4>
                <p>Spill-proof, lightweight, ergonomic bottles designed to be held comfortably in the dark without
                    disturbing those around you.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== PRODUCT COMPARISON ===== -->
<section class="pr-compare-section">
    <div class="pr-compare-wrapper">
        <div class="pr-compare-header pr-reveal">
            <h2>Compare Our Brews</h2>
            <p>Find the perfect Cinebar for your movie mood</p>
        </div>

        <div class="pr-compare-table-wrap pr-reveal">
            <table class="pr-compare-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th><img src="{{ asset('assets/frontend/images/products/corona cero.png') }}"
                                alt="Classic"><br>Corona Cero</th>
                        <th><img src="{{ asset('assets/frontend/images/products/budweiser peach.png') }}"
                                alt="Dark Wheat"><br>Budweiser Peach</th>
                        <th><img src="{{ asset('assets/frontend/images/products/budweiser peach 0.0 green apple.png') }}"
                                alt="Citrus"><br>Budweiser 0.0 Green Apple</th>
                        <th><img src="{{ asset('assets/frontend/images/products/hurrycane-energy-drink.png') }}"
                                alt="Mango"><br>HurryCane Energy Drink</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alcohol</td>
                        <td>0%</td>
                        <td>0%</td>
                        <td>0%</td>
                        <td>0%</td>
                    </tr>
                    <tr>
                        <td>Calories</td>
                        <td>28 kcal</td>
                        <td>32 kcal</td>
                        <td>25 kcal</td>
                        <td>35 kcal</td>
                    </tr>
                    <tr>
                        <td>Flavour Profile</td>
                        <td>Crisp & Light</td>
                        <td>Rich & Malty</td>
                        <td>Zesty & Fresh</td>
                        <td>Sweet & Tropical</td>
                    </tr>
                    <tr>
                        <td>Best With</td>
                        <td>Action Films</td>
                        <td>Thrillers</td>
                        <td>Comedy</td>
                        <td>Romance</td>
                    </tr>
                    <tr>
                        <td>Availability</td>
                        <td><i class="fa-solid fa-check pr-check"></i></td>
                        <td><i class="fa-solid fa-check pr-check"></i></td>
                        <td><i class="fa-solid fa-check pr-check"></i></td>
                        <td><i class="fa-solid fa-check pr-check"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="pr-cta-section">
    <div class="pr-cta-content pr-reveal">
        <h2>Ready to Elevate Your Cinema Experience?</h2>
        <p>Order Cinebar at your nearest multiplex or book directly online</p>
        <div class="pr-cta-btns">
            <a href="contact.html#map" class="pr-cta-btn-primary">Find a Cinema Near You</a>
            <a href="whats-new.html#wn-offers" class="pr-cta-btn-outline">See Latest Offers</a>
        </div>
    </div>
</section>

@endsection
