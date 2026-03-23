@extends('layouts.frontend')

@section('content')
    <!-- ===== CONTACT HERO ===== -->
    <section class="ct-hero">
        <div class="ct-hero-overlay"></div>
        <div class="ct-hero-content">
            <span class="ct-hero-tag">📩 Get In Touch</span>
            <h1>Let's <span>Talk</span></h1>
            <p>Whether it's a partnership, a query, or just to say hello — we're always ready to connect over a chilled
                Cinebar.</p>
            <div class="ct-hero-badges">
                <div class="ct-hb"><i class="fa-solid fa-clock"></i> Mon–Sat, 9am–6pm</div>
                <div class="ct-hb"><i class="fa-solid fa-bolt"></i> Reply within 24 hrs</div>
                <div class="ct-hb"><i class="fa-solid fa-shield-halved"></i> Privacy Guaranteed</div>
            </div>
        </div>
    </section>

    <!-- ===== BUSINESS ENQUIRIES STRIP (NEW) ===== -->
    <section class="ct-enquiry-strip">
        <div class="ct-enquiry-wrapper">
            <div class="ct-enquiry-item">
                <div class="ct-enq-icon"><i class="fa-solid fa-briefcase"></i></div>
                <div class="ct-enq-content">
                    <h5>Business Enquiries</h5>
                    <p>For B2B orders, pricing, and general business discussions</p>
                </div>
                <a href="mailto:surajit.biswas@cinebar.in" class="ct-enq-btn">Contact Now</a>
            </div>
            <div class="ct-enquiry-divider"></div>
            <div class="ct-enquiry-item">
                <div class="ct-enq-icon ct-enq-icon-gold"><i class="fa-solid fa-handshake"></i></div>
                <div class="ct-enq-content">
                    <h5>Partnership Opportunities</h5>
                    <p>Cinema chains, entertainment venues, and co-branding enquiries</p>
                </div>
                <a href="mailto:surajit.biswas@cinebar.in" class="ct-enq-btn">Partner With Us</a>
            </div>
            <div class="ct-enquiry-divider"></div>
            <div class="ct-enquiry-item">
                <div class="ct-enq-icon ct-enq-icon-green"><i class="fa-solid fa-truck"></i></div>
                <div class="ct-enq-content">
                    <h5>Distribution Support</h5>
                    <p>Bulk orders, supply chain, and distribution network enquiries</p>
                </div>
                <a href="mailto:surajit.biswas@cinebar.in" class="ct-enq-btn">Get Support</a>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT INFO CARDS ===== -->
    <section class="ct-info-section">
        <div class="ct-section-wrapper">

            <div class="ct-info-grid">

                <div class="ct-info-card ct-reveal">
                    <div class="ct-info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <h4>Visit Us</h4>
                    <p>Agiltas Solution (P) Ltd
                        7<br>Kabi Guru Sarani, Behala, Kolkata - 700034</p>
                    <a href="https://maps.google.com" target="_blank" class="ct-info-link">Get Directions <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="ct-info-card ct-reveal">
                    <div class="ct-info-icon ct-icon-blue">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h4>Call Us</h4>
                    <!-- <p>Sales & Partnerships<br><strong>+91 9330760767</strong></p> -->
                    <p>Customer Support<br><strong>+91 9330760767</strong></p>
                    <a href="tel:+919330760767" class="ct-info-link">Call Now <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="ct-info-card ct-reveal">
                    <div class="ct-info-icon ct-icon-orange">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h4>Email Us</h4>
                    <!-- <p>General Inquiries<br><strong>surajit.biswas@cinebar.in</strong></p> -->
                    <p>Partnerships<br><strong>surajit.biswas@cinebar.in</strong></p>
                    <a href="surajit.biswas@cinebar.in" class="ct-info-link">Send Email <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="ct-info-card ct-reveal">
                    <div class="ct-info-icon ct-icon-green">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h4>Working Hours</h4>
                    <p>Monday – Friday<br><strong>9:00 AM – 6:00 PM</strong></p>
                    <p>Saturday<br><strong>10:00 AM – 4:00 PM</strong></p>
                    <span class="ct-info-link ct-online-badge"><i class="fa-solid fa-circle"></i> Currently Open</span>
                </div>

            </div>

        </div>
    </section>

    <!-- ===== CONTACT FORM + MAP ===== -->
    <section class="ct-main-section" id="contact-section">
        <div class="ct-section-wrapper">

            <div class="ct-main-grid">

                <!-- CONTACT FORM -->
                <div class="ct-form-wrap ct-reveal">
                    <div class="ct-form-header">
                        <h2>Send Us a Message</h2>
                        <p>Fill in the form below and our team will get back to you within 24 hours</p>
                    </div>

                    <form class="ct-form" id="contactForm" onsubmit="handleContactSubmit(event)" novalidate>

                        <div class="ct-form-row">
                            <div class="ct-field-group">
                                <label for="ctName">Full Name <span class="ct-req">*</span></label>
                                <div class="ct-input-wrap">
                                    <i class="fa-solid fa-user ct-input-icon"></i>
                                    <input type="text" id="ctName" placeholder="Your full name" required>
                                </div>
                                <span class="ct-field-error" id="nameError"></span>
                            </div>

                            <div class="ct-field-group">
                                <label for="ctEmail">Email Address <span class="ct-req">*</span></label>
                                <div class="ct-input-wrap">
                                    <i class="fa-solid fa-envelope ct-input-icon"></i>
                                    <input type="email" id="ctEmail" placeholder="your@email.com" required>
                                </div>
                                <span class="ct-field-error" id="emailError"></span>
                            </div>
                        </div>

                        <div class="ct-form-row">
                            <div class="ct-field-group">
                                <label for="ctPhone">Phone Number</label>
                                <div class="ct-input-wrap">
                                    <i class="fa-solid fa-phone ct-input-icon"></i>
                                    <input type="tel" id="ctPhone" placeholder="+91 00000 00000">
                                </div>
                            </div>

                            <div class="ct-field-group">
                                <label for="ctSubject">Subject <span class="ct-req">*</span></label>
                                <div class="ct-input-wrap">
                                    <i class="fa-solid fa-tag ct-input-icon"></i>
                                    <select id="ctSubject" required>
                                        <option value="" disabled selected>Select a topic</option>
                                        <option value="partnership">Cinema Partnership</option>
                                        <option value="franchise">Franchise Enquiry</option>
                                        <option value="distribution">Distribution Support</option>
                                        <option value="business">Business Enquiry</option>
                                        <option value="order">Order / Delivery</option>
                                        <option value="media">Media & Press</option>
                                        <option value="other">General Enquiry</option>
                                    </select>
                                </div>
                                <span class="ct-field-error" id="subjectError"></span>
                            </div>
                        </div>

                        <div class="ct-field-group ct-field-full">
                            <label for="ctMessage">Your Message <span class="ct-req">*</span></label>
                            <div class="ct-textarea-wrap">
                                <i class="fa-solid fa-comment ct-textarea-icon"></i>
                                <textarea id="ctMessage" rows="5" placeholder="Tell us how we can help you..."
                                    required></textarea>
                            </div>
                            <span class="ct-field-error" id="msgError"></span>
                            <span class="ct-char-count" id="charCount">0 / 500</span>
                        </div>

                        <div class="ct-form-footer">
                            <label class="ct-checkbox-label">
                                <input type="checkbox" id="ctPrivacy" required>
                                <span class="ct-checkmark"></span>
                                I agree to the Privacy Policy and Terms of Service
                            </label>
                            <button type="submit" class="ct-submit-btn" id="ctSubmitBtn">
                                <span class="ct-btn-text">Send Message</span>
                                <i class="fa-solid fa-paper-plane ct-btn-icon"></i>
                            </button>
                        </div>

                        <!-- Success State -->
                        <div class="ct-form-success" id="formSuccess">
                            <div class="ct-success-icon"><i class="fa-solid fa-circle-check"></i></div>
                            <h4>Message Sent Successfully!</h4>
                            <p>Thank you for reaching out. Our team will contact you within 24 hours.</p>
                        </div>

                    </form>
                </div>

                <!-- RIGHT PANEL -->
                <div class="ct-right-panel">

                    <!-- Quick Contact -->
                    <div class="ct-quick-contact ct-reveal">
                        <h4><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</h4>
                        <p>For quick queries, chat with us directly on WhatsApp</p>
                        <a href="https://wa.me/9330760767" target="_blank" class="ct-whatsapp-btn">
                            <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>

                    <!-- Social Media -->
                    <div class="ct-social-panel ct-reveal">
                        <h4>Follow Us</h4>
                        <p>Stay connected for the latest offers, launches, and cinema deals</p>
                        <div class="ct-social-grid">
                            <a href="#" class="ct-social-card ct-sc-instagram">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="#" class="ct-social-card ct-sc-facebook">
                                <i class="fab fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                            <!-- <a href="#" class="ct-social-card ct-sc-twitter">
                                <i class="fab fa-x-twitter"></i>
                                <span>Twitter / X</span>
                            </a> -->
                            <!-- <a href="#" class="ct-social-card ct-sc-youtube">
                                <i class="fab fa-youtube"></i>
                                <span>YouTube</span>
                            </a> -->
                            <!-- <a href="#" class="ct-social-card ct-sc-tiktok">
                                <i class="fab fa-tiktok"></i>
                                <span>TikTok</span>
                            </a> -->
                            <a href="#" class="ct-social-card ct-sc-linkedin">
                                <i class="fab fa-linkedin"></i>
                                <span>LinkedIn</span>
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Strip -->
                    <div class="ct-faq-strip ct-reveal">
                        <h4>Common Questions</h4>
                        <div class="ct-faq-item" onclick="toggleCtFaq(this)">
                            <div class="ct-faq-q"><span>Do you offer cinema partnerships?</span><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="ct-faq-a">Yes! We actively partner with multiplex chains and single-screen
                                cinemas. Use the form above to get started.</div>
                        </div>
                        <div class="ct-faq-item" onclick="toggleCtFaq(this)">
                            <div class="ct-faq-q"><span>What areas do you serve?</span><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="ct-faq-a">We currently operate in Kolkata — with
                                more cities coming soon.</div>
                        </div>
                        <div class="ct-faq-item" onclick="toggleCtFaq(this)">
                            <div class="ct-faq-q"><span>How do I place a bulk order?</span><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="ct-faq-a">Bulk and B2B orders can be placed by contacting our sales team at
                                surajit.biswas@cinebar.in or via the form above.</div>
                        </div>
                        <div class="ct-faq-item" onclick="toggleCtFaq(this)">
                            <div class="ct-faq-q"><span>What are your distribution requirements?</span><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="ct-faq-a">We handle full cold-chain logistics from our distribution hubs to your
                                venue. Contact our supply team for detailed requirements.</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- ===== GOOGLE MAP ===== -->
    <section class="ct-map-section ct-reveal" id="map">
        <div class="ct-map-header">
            <h2>Find Us on the Map</h2>
            <p>Located in the joyful heart of Kolkata — come visit us in person</p>
        </div>
        <div class="ct-map-container">
            <iframe
    src="https://www.google.com/maps?q=7,+Kabi+Guru+Sarani,+Behala,+Kolkata+-+700034&output=embed"
    width="100%"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="Cinebar Location">
</iframe>
            <div class="ct-map-card">
                <div class="ct-mc-icon"><i class="fa-solid fa-location-dot"></i></div>
                <div>
                    <strong>Cinebar HQ</strong>
                    <p>Agiltas Solution (P) Ltd
                        7, Kabi Guru Sarani, Behala<br>Kolkata - 700034</p>
                </div>
            </div>
        </div>
    </section>

@endsection
