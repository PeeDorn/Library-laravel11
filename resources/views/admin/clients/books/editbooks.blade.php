@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Update Books</h3>
                <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" class="form-control" id="title" name="subject" required value="{{ $book->Subject }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="keyword">keyword</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" required value="{{ $book->KeyWord }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" class="form-control" id="ISBN" name="ISBN" required value="{{ $book->ISBN }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" id="title" name="title" required value="{{ $book->title }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="author">author</label>
                                <input type="text" class="form-control" id="author" name="author" required value="{{ $book->author }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="publisher">publisher</label>
                                <input type="number" class="form-control" id="publisher" name="publisher" required value="{{ $book->publisher }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="published_date">published_date</label>
                                <input type="date" class="form-control" id="published_date" name="published_date"
                                    required value="{{ $book->published_date }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="barcode">barcode</label>
                                <input type="text" class="form-control" id="barcode" name="barcode" required value="{{ $book->barcode }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="material_type">material_type</label>
                                <input type="text" class="form-control" id="material_type" name="material_type" required value="{{ $book->material_type }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="edition">edition</label>
                                <input type="number" class="form-control" id="edition" name="edition" required value="{{ $book->edition }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="editor">editor</label>
                                <input type="text" class="form-control" id="editor" name="editor" required value="{{ $book->editor }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="published_in_the">published_in_the</label>
                                <input type="text" class="form-control" id="published_in_the" name="published_in_the"
                                    required value="{{ $book->published_in_the }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="shelves">shelves</label>
                                <input type="text" class="form-control" id="shelves" name="shelves" required value="{{ $book->shelves }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="case_number">case_number</label>
                                <input type="text" class="form-control" id="case_number" name="case_number" required value="{{ $book->case_number }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="book_order">book_order</label>
                                <input type="number" class="form-control" id="book_order" name="book_order" required value="{{ $book->book_order }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required id="image">
                            </div>
                        </div>
                        <di class="col-md-3">
                            <img src="{{ asset($book->image) }}" alt="" height="100px" width="100px" id="show_image">
                        </di>
                        <div class="col-md-3 mt-4">
                            <button type="submit" class="btn btn-warning">Update Book</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
