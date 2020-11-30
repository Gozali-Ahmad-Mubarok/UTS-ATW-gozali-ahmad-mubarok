@extends('admin.base')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    {{--  <div class="card">
                        <div class="card-header">
                            Filter
                        </div>
                        <div class="card-body">
                            <form action="{{url('artikel/create')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label"> Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ??""}}"></input>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label"> harga Min </label>
                                        <input type="text" class="form-control" name="harga_min" value="{{$harga_min ??""}}"></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label"> harga Max</label>
                                        <input type="text" class="form-control" name="harga_max" value="{{$harga_max ??""}}"></input>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>
                                Filter
                            </button>
                            </form>
                        </div>
                    </div>  --}}
                    <div class="card">
                        <div class="card-header">
                            data artikel
                            <a href="{{url('artikel/create')}}" class="btn btn-dark float-right" ><i class="fa fa-plus"></i> tambah data</a>
                        </div> 
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <th> No </th>
                                        <th> aksi </th>
                                        <th> judul </th>
                                        <th> penulis </th> 
                                        <th> artikel </th> 
                                        <th> tanggal  upload </th> 
                                    </thead>
                                    <tbody>
                                        @foreach ($list_artikel as $artikel)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                    <a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"> </i></a> 
                                                    @include('admin.utils.delete' , ['url' => url('artikel', $artikel->id)])
                                                </div>
                                            </td>
                                            <td>{{$artikel->judul}}</td>
                                            <td>{{$artikel->penulis}}</td>
                                            <td>{{$artikel->artikel}}</td>
                                            <td>{{$artikel->tanggal_upload}}</td>
                                        </tr>
                                        @endforeach  
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection