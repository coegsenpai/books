@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Buku
                        <a href={{'tambah'}} class="btn btn-sm btn-success" style="marginbottom: 10px; float: right;">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th class="col-3" scope="col">JUDUL</th>
                                    <th class="col-2" scope="col">PENULIS</th>
                                    <th class="col-2" scope="col">ISBN</th>
                                    <th class="col-2" scope="col">KATEGORI</th>
                                    <th class="col-1" scope="col">HARGA</th>
                                    <th class="col-2" scope="col">AKSI</th>
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
                                                <button type="submit" class="btn btn-danger">Hapus</button>   
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