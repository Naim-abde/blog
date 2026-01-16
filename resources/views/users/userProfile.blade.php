@extends("welcome")
@section("main")

<div class="container my-5">

        <div class="text-center mb-5" >
        @if($user->image)
            <img src="{{ asset('storage/' . $user->image) }}" 
                 alt="{{ $user->name }}" 
                 class="rounded-circle shadow-sm mb-3" 
                 style="width:150px; height:150px; object-fit:cover;">
        @endif
        <form action="{{ route("user.show",$user ) }}" method="get">
            <button type="submit">{{ $user->name }}</button>
        </form>
    </div>
      

      <div class="row g-4">
        @foreach ($posts as $post)
            <div class="col-md-6">
                <div class="card shadow-sm h-100 p-3">
                    <img src="{{ asset("storage/".$post->image) }}" alt="">
                    
                    <h5 class="card-title">{{ $post->title }}</h5>

                     <form action="{{ route('posts.show', $post) }}" method="get" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm">View</button>
                    </form>

                     @if (auth()->user()->id == $post->user_id)
                    
                        <form action="{{ route('posts.destroy', $post) }}" method="post" class="d-inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure to delete {{ $post->title }}?')">
                                Delete
                            </button>
                        </form>

                         <form action="{{ route('posts.edit', $post) }}" method="get" class="d-inline">
                            <button type="submit" class="btn btn-warning btn-sm">Update</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>


</div> 
    
@endsection