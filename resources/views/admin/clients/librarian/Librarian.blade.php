@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">List Librarian</h1>
                <div class="table-responsive">
                    <table class="table">
                        <a href="{{ route('form.librarians') }}" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i> Add Librarian
                        </a>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
