@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Add Books</h3>
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" class="form-control" id="title" name="subject" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="keyword">keyword</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" class="form-control" id="ISBN" name="ISBN" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="author">author</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="publisher">publisher</label>
                                <input type="number" class="form-control" id="publisher" name="publisher" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="published_date">published_date</label>
                                <input type="date" class="form-control" id="published_date" name="published_date"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="barcode">barcode</label>
                                <input type="text" class="form-control" id="barcode" name="barcode" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="material_type">material_type</label>
                                <input type="text" class="form-control" id="material_type" name="material_type" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="edition">edition</label>
                                <input type="number" class="form-control" id="edition" name="edition" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="editor">editor</label>
                                <input type="text" class="form-control" id="editor" name="editor" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="published_in_the">published_in_the</label>
                                <input type="text" class="form-control" id="published_in_the" name="published_in_the"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="shelves">shelves</label>
                                <input type="text" class="form-control" id="shelves" name="shelves" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="case_number">case_number</label>
                                <input type="text" class="form-control" id="case_number" name="case_number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="book_order">book_order</label>
                                <input type="number" class="form-control" id="book_order" name="book_order" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>
                        <di class="col-md-3">
                            <img src="" alt="" height="100px" width="100px" id="show_image">
                        </di>
                        <div class="col-md-3 mt-4">
                            <button type="submit" class="btn btn-success">Insert Book</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
