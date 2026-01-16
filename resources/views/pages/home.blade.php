 @extends("welcome")

@section("main")
  <!-- Hero Section -->
<header class="bg-dark text-white d-flex flex-column justify-content-center align-items-center text-center" style="height:100vh; background: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80') no-repeat center center; background-size: cover;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
        <h1 class="display-3 fw-bold mb-3">Welcome to TechBlog</h1>
        <p class="lead mb-4">Your source for the latest tech news, tutorials, and articles.</p>
        <a href="#services" class="btn btn-primary btn-lg">Explore Our Services</a>
    </div>
</header>

<!-- Services Section -->
 <section id="services" class="py-5 bg-light" style="height: 80vh;">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">Our Services</h2>
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://images.unsplash.com/photo-1644088379091-d574269d422f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHRlY2hub2xvZ3l8ZW58MHx8MHx8fDA%3D" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Tech Articles">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold mt-3">Tech Articles</h5>
                        <p class="card-text text-muted">
                            Stay updated with well-researched articles on the latest tech trends and innovations.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Programming Tutorials">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold mt-3">Programming Tutorials</h5>
                        <p class="card-text text-muted">
                            Step-by-step guides to learn programming languages like Python, JavaScript, Java, and more.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://plus.unsplash.com/premium_photo-1661877737564-3dfd7282efcb?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Tech News">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold mt-3">Tech News</h5>
                        <p class="card-text text-muted">
                            Get the latest news from the tech world, including gadgets, software, AI, and startups.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Blog Categories Section -->
 

<!-- Recent Blog Posts -->
 <section id="recent-posts" class="py-5"  >
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">Recent Blog Posts</h2>
        <div class="row g-4">

            <!-- Post 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://images.unsplash.com/photo-1633356122102-3fe601e05bd2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="JavaScript Frameworks">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mt-3">Top 10 JavaScript Frameworks in 2026</h5>
                        <p class="card-text text-muted">
                            Discover the most popular JavaScript frameworks to boost your web development skills.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://plus.unsplash.com/premium_photo-1682124651258-410b25fa9dc0?q=80&w=1321&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="AI and Machine Learning">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mt-3">Understanding AI and Machine Learning</h5>
                        <p class="card-text text-muted">
                            A beginner's guide to AI concepts and machine learning applications in real life.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://i.pcmag.com/imagery/articles/02WAntxmUvn4ZBuW39Vkoom-9..v1738347960.png" 
                         class="card-img-top" style="height:200px; object-fit:cover;" alt="Web Developer Tools">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mt-3">5 Must-Have Tools for Web Developers</h5>
                        <p class="card-text text-muted">
                            Enhance your workflow with these essential tools for every web developer.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Popular Posts -->
 

<!-- Features Section -->
 

<!-- Testimonials Section -->
 <section id="testimonials" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">What Our Readers Say</h2>
        <div class="row g-4 justify-content-center">

            <!-- Testimonial 1 -->
            <div class="col-md-4 rounded">
                <div class="card shadow-lg border-0 h-100 text-center p-4">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;" alt="John">
                    <p class="fst-italic">"TechBlog helped me improve my programming skills in just a few months!"</p>
                    <h6 class="fw-bold mt-3">John</h6>
                    <small class="text-muted">Front-end Developer</small>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 h-100 text-center p-4 rounded">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                         class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;" alt="Sarah">
                    <p class="fst-italic">"I love the clear tutorials and latest tech news."</p>
                    <h6 class="fw-bold mt-3">Sarah</h6>
                    <small class="text-muted">Software Engineer</small>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 h-100 text-center p-4 rounded">
                    <img src="https://randomuser.me/api/portraits/men/54.jpg" 
                         class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;" alt="Michael">
                    <p class="fst-italic">"A great resource for developers and tech enthusiasts."</p>
                    <h6 class="fw-bold mt-3">Michael</h6>
                    <small class="text-muted">Full-Stack Developer</small>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Call To Action Section -->
 

@endsection
