 @extends("welcome")
 
@section("main")
<div class="container my-5" style="max-width: 500px;">

    <h3 class="mb-4 text-center">Register</h3>

    <div class="card shadow-sm p-4">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf

             <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" 
                       placeholder="Amine" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" name="email" class="form-control" 
                       placeholder="amin@gmail.com" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" 
                       placeholder="******">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

        </form>
    </div>

</div>
@endsection
