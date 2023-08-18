@extends('layouts.app')

@section('content')
     <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <div class="row">
             <div class="col-md-12">
                  <div class="card">
                       <div class="card-header">
                           Edit Books
                        </div>
                        <div class="card-body">
                        <form action="/{{$book->id}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Title</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Insert Book title" required value="{{$book->judul}}">
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Author</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Insert Book Author" required value="{{$book->penulis}}">
                                </div>
                                <div class="mb-3">
                                    <label for="isbn" class="form-label">ISBN</label>
                                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Insert ISBN of book" required value="{{$book->isbn}}">
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Insert Book Category" required value="{{$book->kategori}}">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Insert Book Price" required value="{{$book->harga}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
                                
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Skoln4gmtz2MlQnikTlwXgYsOg+OMhuP+I1RH9SENBOOLRn5q+8nb Tov4+1p"
        crossorigin="anonymous"></script>
@endsection