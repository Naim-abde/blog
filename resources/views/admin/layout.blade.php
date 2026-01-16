@extends("welcome")

@section("main")
<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar vh-100 py-4">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white fw-bold active" href="">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="{{ route("admin.index") }}">
                            <i class="bi bi-people me-2"></i> Users
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="{{ route("admin.all.post") }}">
                            <i class="bi bi-file-earmark-text me-2"></i> Posts
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-md-4 py-4 bg-light">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                <!-- Content dyal page -->
                @yield('admin')
            </div>
        </main>

    </div>
</div>
@endsection
