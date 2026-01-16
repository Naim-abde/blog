@extends("welcome")

@section("main")
<div class="container my-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold">Latest Posts</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            + Create Post
        </a>
    </div>

    <!-- Posts -->
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

                        <p class="text-muted small mb-3">
                            By {{ $post->user->name ?? 'Unknown' }}
                        </p>

                        <!-- Buttons -->
                        <div class="mt-auto d-flex gap-2">
                            <form action="{{ route('posts.show', $post) }}" method="get">
                                <button class="btn btn-outline-primary btn-sm">
                                    View
                                </button>
                            </form>

                            @if (auth()->id() === $post->user_id)

                                <form action="{{ route('posts.edit', $post) }}" method="get">
                                    <button class="btn btn-outline-warning btn-sm">
                                        Edit
                                    </button>
                                </form>

                                <form 
                                    action="{{ route('posts.destroy', $post) }}" 
                                    method="post"
                                    onsubmit="return confirm('Delete {{ $post->title }} ?')"
                                >
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </form>

                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
