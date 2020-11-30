@extends('admin.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah data produk 
                </div>
                <div class="card-body">
                    <form action="{{url('produk')}}" method="POST">
                        @csrf 
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">harga</label>
                                <input type="text" class="form-control" name="harga">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="control-label">berat</label>
                                <input type="text" class="form-control" name="berat" >
                            </div>
                        </div>
                        <div class="col-md-3"> 
                            <div class="form-group">
                                <label for="" class="control-label">stok</label>
                                <input type="text" class="form-control" name="stok" >
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="" class="control-label">deskripsi</label>
                        <textarea name=" deskripsi" class="form-control"></textarea>
                    </div> 
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection