<footer class="footer-wrap-layout1 section-shape1">
    <div class="container">
        <div class="footer-bottom-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo-area">
                        <a href="{{ route('home') }}" class="temp-logo">
                            <img src="{{ asset(setting('logo_section_logo')) }}" alt="logo" class="img-fluid logo_footer_image">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-5">
                    <div class="copyright">{{ setting('footer_section_copyright_text') }}</div>
                </div>
            </div>
        </div>
    </div>
</footer>