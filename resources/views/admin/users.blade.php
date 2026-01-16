 @extends("admin.layout")

@section("admin")
<div class="container-fluid my-4 px-4">

    <div class="card shadow border-0">
        <!-- Header -->
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="bi bi-people me-2"></i> Users List
            </h5>
            <span class="badge bg-secondary">{{ $users->count() }} users</span>
        </div>

        <!-- Table -->
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0 w-100">
                <thead class="table-light">
                    <tr>
                        <th style="width:25%">User</th>
                        <th style="width:10%">ID</th>
                        <th style="width:30%">Email</th>
                        <th style="width:15%">Following</th>
                        <th style="width:20%" class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <!-- User -->
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img 
                                        src="{{ asset('storage/'.$user->image) }}" 
                                        class="rounded-circle"
                                        style="width:45px;height:45px;object-fit:cover;"
                                    >
                                    <span class="fw-semibold">{{ $user->name }}</span>
                                </div>
                            </td>

                            <td class="text-muted">#{{ $user->id }}</td>

                            <td>{{ $user->email }}</td>

                            <td>
                                <span class="badge bg-light text-dark px-3 py-2">
                                    {{ $user->following()->count() }}
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-3">

                                    <form action="{{ route('admin.user.show',$user) }}" method="get">
                                        <button class="btn btn-outline-primary btn-sm px-3">
                                            <i class="bi bi-eye"></i> Show
                                        </button>
                                    </form>

                                    <form 
                                        action="{{ route('admin.user.destroy',$user) }}" 
                                        method="post"
                                        onsubmit="return confirm('Delete {{ $user->name }} ?')"
                                    >
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-outline-danger btn-sm px-3">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
