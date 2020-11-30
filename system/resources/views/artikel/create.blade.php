@extends('admin.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah data artikel 
                </div>
                <div class="card-body">
                    <form action="{{url('artikel')}}" method="POST">
                        @csrf 
                    <div class="form-group">
                        <label for="" class="control-label">judul</label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">penulis</label>
                        <input type="text" class="form-control" name="penulis" >
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">artikel</label>
                        <textarea  class="form-control" name="artikel"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">tanggal upload</label>
                        <input type="date" class="form-control" name="tanggal_upload" >
                    </div>
                    <button class="btn btn-dark float-right"><i class="fa fa-save"> </i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection