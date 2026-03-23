<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinebar</title>
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack('styles')
</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="{{ asset('assets/frontend/images/logo.png') }}" class="footer-logo" alt="Cinebar">
        </div>

        <ul>
            <li><a href="/" class="active-link">Home</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/whats-new">What's New</a></li>
            <li><a href="/rewards">Rewards</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <div class="menu-btn" onclick="toggleMenu()">☰</div>
    </nav>
    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/whats-new">What's New</a></li>
            <li><a href="/rewards">Rewards</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    @yield('content')
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="{{ asset('images/logo.png') }}" class="footer-logo" alt="Cinebar">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-threads"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="/products">PRODUCTS</a></li>
                    <li><a href="/whats-new">WHAT'S NEW</a></li>
                    <li><a href="/contact">CONTACT US</a></li>
                </ul>
                <ul>
                    <li><a href="/rewards">REWARDS</a></li>
                    <li><a href="/products#quick-views">PRODUCT FACTS</a></li>
                    <li><a href="/whats-new#wn-offers">GET DISCOUNT</a></li>
                </ul>
                <ul>
                    <li><a href="/products#product-all">SERVE BEERS</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                    <li><a href="/contact#contact-section">FAQ</a></li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            {{ date('Y') }} Cinebar. All Rights Reserved.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/script.js') }}"></script>
    <script>
        function toggleMenu(){
        document.getElementById("mobileMenu").classList.toggle("active");
    }
    </script>
    @stack('scripts')
</body>

</html>
