 <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3 sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
            <span class="text-primary">Tech</span>Blog
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 mt-3 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('home') ? 'active fw-semibold text-primary' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-2  ' : '' }}" 
                        href="{{ route("posts.create") }}">
                        CreatePost
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-2 {{ request()->routeIs('posts.index') ? 'active fw-semibold text-primary' : '' }}"
                        href="{{ route('posts.index') }}">
                        Posts
                    </a>
                </li>

                @auth
                    <!-- Admin -->
                    @if (auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-primary btn-sm px-3">
                                <i class="bi bi-shield-lock me-1"></i> Admin
                            </a>
                        </li>
                    @endif

                    <!-- Logout -->
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm px-3">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <!-- Login -->
                    <li class="nav-item">
                        <a href="{{ route('login.show') }}"
                            class="btn btn-primary btn-sm px-4">
                            Login
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
