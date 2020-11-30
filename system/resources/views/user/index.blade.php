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
                            <form action="{{url('user/create')}}" method="POST">
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
                            data user
                            <a href="{{url('user/create')}}" class="btn btn-dark float-right" ><i class="fa fa-plus"></i> tambah data</a>
                        </div> 
                        <div class="card-body">
                            <table class="table">
                                    <thead>
                                        <th> No </th>
                                        <th> aksi </th>
                                        <th> Nama </th>
                                        <th> email </th> 
                                        <th> password </th> 
                                    </thead>
                                    <tbody>
                                        @foreach ($list_user as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                    <a href="{{url('user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"> </i></a> 
                                                    @include('admin.utils.delete' , ['url' => url('user', $user->id)])
                                                </div>
                                            </td>
                                            <td>{{$user->nama}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->password}}</td>
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