@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Book Data
                        <a href={{'tambah'}} class="btn btn-sm btn-success" style="marginbottom: 10px; float: right;">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th class="col-3" scope="col">Title</th>
                                    <th class="col-2" scope="col">Author</th>
                                    <th class="col-2" scope="col">ISBN</th>
                                    <th class="col-2" scope="col">Category</th>
                                    <th class="col-1" scope="col">Price</th>
                                    <th class="col-2" scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach($book as $b) 
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$b->judul}}</td>
                                    <td>{{$b->penulis}}</td>
                                    <td>{{$b->isbn}}</td>
                                    <td>{{$b->kategori}}</td>
                                    <td>{{$b->harga}}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                                            <a href="{{$b->id}}/edit" class="btn btn-info">Edit</a>
                                            <form action="/{{$b->id}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>   
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection