 @extends("welcome")

@section("main")
<div class="container my-5" style="max-width: 450px;">

    <h3 class="mb-4 text-center fw-bold">Login</h3>

    <div class="card shadow-sm p-4">

        <form action="{{ route('login') }}" method="post">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email address</label>
                <input type="email" id="email" name="email" class="form-control" 
                       placeholder="Enter your email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" id="password" name="password" class="form-control" 
                       placeholder="Enter your password">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <!-- Register Link -->
            <div class="text-center">
                <small class="text-muted">
                    Don't have an account? 
                    <a href="{{ route('user.create') }}" class="text-decoration-none fw-semibold">
                        Register
                    </a>
                </small>
            </div>

        </form>

    </div>

</div>
@endsection
