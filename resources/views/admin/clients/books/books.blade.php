@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">List Books</h3>
                <div class="table-responsive">
                    <a href="{{ route('form.books') }}">
                        <button class="btn btn-primary btn-sm"> <i class="fas fa-plus me-2"></i> Add Book</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr class="text-white">
                                <th>#</th>
                                <th>image</th>
                                <th>Subject</th>
                                <th>KeyWord</th>
                                <th>ISBN</th>
                                <th>title</th>
                                <th>author</th>
                                <th>publisher</th>
                                <th>published_date</th>
                                <th>barcode</th>
                                <th>material_type</th>
                                <th>edition</th>
                                <th>editor</th>
                                <th>published_in_the</th>
                                <th>shelves</th>
                                <th>case_number</th>
                                <th>book_order</th>
                                <th>AddBy</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="" width="50px" height="65px">
                                    </td>
                                    <td>{{ $item->Subject }}</td>
                                    <td>{{ $item->KeyWord }}</td>
                                    <td>{{ $item->ISBN }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->publisher }}</td>
                                    <td>{{ $item->published_date }}</td>
                                    <td>{{ $item->barcode }}</td>
                                    <td>{{ $item->material_type }}</td>
                                    <td>{{ $item->edition }}</td>
                                    <td>{{ $item->editor }}</td>
                                    <td>{{ $item->published_in_the }}</td>
                                    <td>{{ $item->shelves }}</td>
                                    <td>{{ $item->case_number }}</td>
                                    <td>{{ $item->book_order }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->created_at->diffforhumans() }}</td>
                                    <td>
                                        <a href="{{ route('books.edit',$item->id) }}" class="btn btn-warning">
                                            <i class="fas fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('books.delete', $item->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <center>
                                    <h4>No books found.</h4>

                                    <a href="{{ route('form.books') }}">
                                        <button class="btn btn-primary btn-sm"> <i class="fas fa-plus me-2"></i> Add
                                            Book</button>
                                    </a>
                                    <br>
                                </center>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    
@endsection
