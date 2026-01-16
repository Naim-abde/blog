 @extends("admin.layout")

@section("admin")
<div class="container my-5">
    <div class="row g-4">
        @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">

                    <!-- Image -->
                    <img 
                        src="{{ asset('storage/'.$post->image) }}" 
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="{{ $post->title }}"
                    >

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-truncate">
                            {{ $post->title }}
                        </h5>

                        <p class="text-muted mb-2">
                            {{ Str::limit($post->description, 80) }}
                        </p>

                        <div class="mt-auto d-flex gap-2"> 
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete {{ $post->title }}?')">Delete</button>
                            </form>
                        </div>

                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        @endforeach
    </div> <!-- row -->
</div> <!-- container -->
@endsection
