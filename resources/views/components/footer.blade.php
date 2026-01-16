<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3 text-light">About TechBlog</h5>
                <p style="color:#d1d5db;">
                    TechBlog is your ultimate source for tech news, tutorials, and insightful articles. 
                    Stay updated and enhance your skills with our expert guides.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5 class="fw-bold mb-3 text-light">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="about" class="text-light text-decoration-none">About</a></li>
                    <li><a href="{{ route('posts.index') }}" class="text-light text-decoration-none">Blog</a></li>
                    <li><a href="#cta" class="text-light text-decoration-none">Subscribe</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3 text-light">Contact Us</h5>
                <p class="mb-1" style="color:#d1d5db;"><i class="bi bi-geo-alt-fill me-2"></i>Casablanca, Morocco</p>
                <p class="mb-1" style="color:#d1d5db;"><i class="bi bi-envelope-fill me-2"></i>contact@techblog.com</p>
                <p class="mb-1" style="color:#d1d5db;"><i class="bi bi-telephone-fill me-2"></i>+212 600 000 000</p>
            </div>

            <!-- Newsletter -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3 text-light">Newsletter</h5>
                <p style="color:#d1d5db;">Subscribe to get our latest updates directly to your inbox.</p>
                <form class="d-flex">
                    <input type="email" class="form-control me-2 rounded-pill" placeholder="Email address">
                    <button class="btn btn-primary rounded-pill px-4" type="submit">Subscribe</button>
                </form>
            </div>

        </div>

        <hr class="bg-secondary">

        <!-- Social Icons -->
        <div class="text-center mb-3">
            <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="text-white mx-2 fs-4"><i class="bi bi-github"></i></a>
        </div>

        <!-- Copyright -->
        <p class="text-center text-secondary mb-0">© 2026 TechBlog. All rights reserved.</p>
    </div>
</footer>