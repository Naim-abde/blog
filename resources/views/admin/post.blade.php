 @extends("welcome")

@section("main")

<div class="container my-5" style="max-width: 900px;">

    {{-- ===== Author ===== --}}
    <div class="card border-0 shadow-lg mb-5 text-center">
        <div class="card-body py-4">

            @if($user->image)
                <img src="{{ asset('storage/'.$user->image) }}"
                     class="rounded-circle border border-3 border-dark mb-3"
                     style="width:140px; height:140px; object-fit:cover;">
            @endif

            <h4 class="fw-bold mb-0">{{ $user->name }}</h4>
            <span class="badge bg-dark mt-2">Author</span>

        </div>
    </div>

    {{-- ===== Post ===== --}}
    <div class="card border-0 shadow-lg mb-5 overflow-hidden">

        @if($post->image)
            <img src="{{ asset('storage/'.$post->image) }}"
                 class="w-100"
                 style="height:320px; object-fit:cover;">
        @endif

        <div class="card-body p-4">

            <h3 class="fw-bold mb-3">{{ $post->title }}</h3>

            <p class="text-secondary fs-6" style="line-height:1.8">
                {{ $post->description }}
            </p>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <small class="text-muted">
                    📅 {{ $post->created_at->format('Y-m-d') }}
                </small>

                <form action="{{ route("admin.post.destroy",$post) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-outline-danger btn-sm px-3"
                        onclick="return confirm('Delete this post ?')">
                        🗑 Delete
                    </button>
                </form>
            </div>

        </div>
    </div>

    {{-- ===== Comments ===== --}}
    <div class="mt-5">

        <h5 class="fw-bold mb-4">
            💬 Comments ({{ $comments->count() }})
        </h5>

        @forelse ($comments as $comment)
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">

                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('storage/'.$comment->user->image) }}"
                             class="rounded-circle me-3 border"
                             style="width:45px; height:45px; object-fit:cover;">

                        <div>
                            <div class="fw-semibold">{{ $comment->user->name }}</div>
                            <small class="text-muted">
                                {{ $comment->created_at->format('Y-m-d') }}
                            </small>
                        </div>
                    </div>

                    <div class="bg-light rounded p-3 ms-5">
                        {{ $comment->comment }}
                    </div>

                    <div class="text-end mt-2">
                        <form action="{{ route("admin.comment.destroy",$comment) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button
                                onclick="return confirm('Delete comment ?')"
                                class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @empty
            <div class="text-center text-muted">
                <p>No comments yet.</p>
            </div>
        @endforelse

    </div>

</div>

@endsection
