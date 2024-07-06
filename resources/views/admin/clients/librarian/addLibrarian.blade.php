@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" enctype="multipart/form-data" class="w-50 m-auto">
                    @csrf
                    <center>
                        <h3 class="text-primary">Add New Category</h3>
                    </center>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" id="name" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control bg-dark">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
