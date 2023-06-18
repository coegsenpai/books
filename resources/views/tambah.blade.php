@extends('layouts.app')

@section('content')
     <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <div class="row">
             <div class="col-md-12">
                  <div class="card">
                       <div class="card-header">
                           Tambah Buku
                        </div>
                        <div class="card-body">
                        <form action="store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="isikan Judul Buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="isikan Nama Penulis" required>
                                </div>
                                <div class="mb-3">
                                    <label for="isbn" class="form-label">ISBN</label>
                                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="isikan ISBN Buku" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="isikan Kategori Buku" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" placeholder="isikan Harga Buku" required>
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