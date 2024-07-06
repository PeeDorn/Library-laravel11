@extends('admin.layout')
@section('content')

    <div class="container w-50">
        <div class="row ">
            <div class="card bg-dark">
                <div class="card-header">
                    <h3 class="text-white text-center">Profile</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name" class="text-white"> Name</label>
                            <input type="text" class="form-control border-white" id="name" name="name" required value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="text-white"> Email</label>
                            <input type="email" class="form-control border-white" id="name" name="email" required value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="text-white "> Role</label>
                            <input type="text" class="form-control border-white" id="name" name="role" required value="{{ Auth::user()->role }}">
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
