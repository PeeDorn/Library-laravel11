@extends('admin.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row ">
            <div class="col-md-12">
                <h3 class="text-center">List User</h3>
                <table class="table mt-3">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fas fa-plus"></i> Add User
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('addUser') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control bg-white">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="role">Role</label>
                                            <select name="role" class="form-control ">
                                                <option>--Chhoose--</option>
                                                <option value="Admin">Admin</option>
                                                <option value="librarian">librarian</option>
                                                <option value="lecturer">lecturer</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3"></div>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control bg-white">
                                </div>
                                <div class="form-group w-50 justify-end m-3">
                                    <input type="file" name="image" class="form-control ">
                                </div>
                                <div class="form-footer mb-5 w-50 m-auto">
                                    <button type="submit" class="btn btn-primary mt-3  w-100">Save</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <thead>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($user as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" alt="" height="50px"
                                        style="border-radius: 50%">
                                </td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop--{{ $item->id }}">
                                        <i class="fas fa-pencil"></i>
                                    </button>

                                    <a href="{{ route('deleteUser', $item->id) }}" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                    <div class="modal fade" id="staticBackdrop--{{ $item->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group mb-3">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" id="name"
                                                                value="{{ $item->name }}" class="form-control bg-white">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="role">Role</label>
                                                            <select name="role" class="form-control ">
                                                                <option>--Chhoose--</option>
                                                                <option value="admin"
                                                                    {{ $item->role == 'admin' ? 'selected' : '' }}>Admin
                                                                </option>
                                                                <option value="user"
                                                                    {{ $item->role == 'user' ? 'selected' : '' }}>User
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3"></div>
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            value="{{ $item->email }}" class="form-control bg-white">
                                                </div>
                                                <div class="form-group w-50 justify-end m-3">
                                                    <input type="file" name="image" class="form-control ">
                                                </div>
                                                <div class="form-footer mb-5 w-50 m-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary mt-3  w-100">Update</button>
                                                </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
            </div>
            </td>
            </tr>
        @empty
            <center>
                <h3>No Data</h3>
            </center>
            @endforelse
            </tbody>
            </table>

        </div>
    </div>

    </div>
@endsection
