@extends("welcome")

@section("main")
<div class="container my-5">

    <!-- Author Section (Centered) -->
    <div class="text-center mb-5">
        <img 
            src="{{ asset('storage/' . $user->image) }}" 
            class="rounded-circle shadow-sm mb-3"
            style="width:120px;height:120px;object-fit:cover;"
        >
        <h5 class="fw-bold mb-1">{{ $user->name }}</h5>
        <small class="text-muted">{{ $followers }} followers</small>

        @if ($user->id != auth()->id())
            <form action="{{ route('user.follow.store',$user) }}" method="post" class="mt-3 d-inline-block">
                @csrf
                <button class="btn btn-sm {{ $isfollow ? 'btn-outline-secondary' : 'btn-dark' }}">
                    {{ $isfollow ? 'Following' : 'Follow' }}
                </button>
            </form>
        @endif
    </div>

    <!-- Post -->
    <article class="mx-auto" style="max-width:800px;">

        @if($selectedPost->image)
            <img 
                src="{{ asset('storage/'.$selectedPost->image) }}" 
                class="img-fluid rounded mb-4"
                style="max-height:420px;object-fit:cover;width:100%;"
            >
        @endif

        <h1 class="fw-bold mb-3">{{ $selectedPost->title }}</h1>

        <div class="d-flex justify-content-between align-items-center text-muted mb-4">
            <span>{{ $selectedPost->created_at->format('M d, Y') }}</span>

            <!-- Heart Like -->
            <form action="{{ route('post.like.store',$selectedPost) }}" method="post">
                @csrf
                <button 
                    class="btn border-0 p-0 d-flex align-items-center gap-1"
                    style="background:none;"
                >
                    <i class="bi {{ $islike ? 'bi-heart-fill text-danger' : 'bi-heart' }} fs-5"></i>
                    <span>{{ $likes }}</span>
                </button>
            </form>
        </div>

        <p class="fs-5 lh-lg text-secondary">
            {{ $selectedPost->description }}
        </p>
    </article>

    <!-- Comments -->
    <div class="mx-auto mt-5" style="max-width:800px;">
        <h5 class="fw-bold mb-4">Comments ({{ $comments->count() }})</h5>

        <!-- Add Comment -->
        <form action="{{ route('comment.store') }}" method="post" class="mb-4">
            @csrf
            <input type="hidden" name="post_id" value="{{ $selectedPost->id }}">

            <textarea 
                name="comment" 
                class="form-control mb-3"
                rows="3"
                placeholder="Write a comment..."
            ></textarea>

            <button class="btn btn-dark btn-sm">Post comment</button>
        </form>

        <!-- Comments List -->
        @forelse ($comments as $cmt)
            <div class="d-flex gap-3 mb-4 align-items-start">
                <img 
                    src="{{ asset('storage/'.$cmt->user->image) }}" 
                    class="rounded-circle"
                    style="width:45px;height:45px;object-fit:cover;"
                >

                <div class="flex-grow-1 position-relative">
                    <div class="bg-light rounded p-3">
                        <strong class="d-block">{{ $cmt->user->name }}</strong>
                        <p class="mb-0">{{ $cmt->comment }}</p>
                    </div>

                    @if (auth()->id() == $cmt->user_id)
                        <form 
                            action="{{ route('comment.destroy',$cmt) }}" 
                            method="post" 
                            class="position-absolute top-0 end-0"
                            onsubmit="return confirm('Delete this comment?')"
                        >
                            @csrf
                            @method('DELETE')
                             <button type="submit" class="btn p-1 border-0 text-danger">
                             <i class="bi bi-trash fs-5"></i>
                             </button>
                        </form>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-muted">No comments yet.</p>
        @endforelse
    </div>

</div>
@endsection
