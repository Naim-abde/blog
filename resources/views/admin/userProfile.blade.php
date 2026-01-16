@extends("welcome")

@section("main")
<div class="container my-5">

    <!-- User Profile Card -->
    <div class="card shadow-sm text-center mb-5 border-0">
        <div class="card-body">
            @if($user->image)
                <img 
                    src="{{ asset('storage/'.$user->image) }}" 
                    class="rounded-circle shadow-sm mb-3"
                    style="width:130px;height:130px;object-fit:cover;"
                >
            @endif

            <h4 class="fw-bold mb-1">{{ $user->name }}</h4>
            <p class="text-muted mb-3">{{ $followers }} followers</p>

            <a href="{{ route('user.show',$user) }}" class="btn btn-outline-dark btn-sm">
                View profile
            </a>
        </div>
    </div>

    <!-- Posts -->
    <div class="row g-4">
        @forelse ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow border-0">

                    @if($post->image)
                        <img 
                            src="{{ asset('storage/'.$post->image) }}" 
                            class="card-img-top"
                            style="height:200px;object-fit:cover;"
                        >
                    @endif

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold mb-3">{{ $post->title }}</h5>

                        <div class="mt-auto d-flex justify-content-between">

                            <!-- View -->
                            <form action="{{ route('admin.post.show',$post) }}" method="get">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye"></i> View
                                </button>
                            </form>

                            <!-- Delete -->
                            <form 
                                action="{{ route('admin.post.destroy',$post) }}" 
                                method="post"
                                onsubmit="return confirm('Delete post {{ $post->title }} ?')"
                            >
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="text-center text-muted py-5">
                <i class="bi bi-file-earmark-x fs-1"></i>
                <p class="mt-2">No posts found</p>
            </div>
        @endforelse
    </div>

</div>
@endsection
