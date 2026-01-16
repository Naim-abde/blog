 @extends("welcome")

@section("main")
<div class="container my-5">

    <h3 class="mb-4">Create Post</h3>

    <div class="card shadow-sm p-4">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

             <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
                @error('title')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select">
                    <option value="">Select Category</option>
                    <option value="web">Web Development</option>
                    <option value="mobile">Mobile Development</option>
                    <option value="ai">Artificial Intelligence</option>
                    <option value="cyber">Cyber Security</option>
                    <option value="cloud">Cloud Computing</option>
                </select>
            </div>

             <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

             <button type="submit" class="btn btn-primary">Create Post</button>

        </form>
    </div>

</div>
@endsection
