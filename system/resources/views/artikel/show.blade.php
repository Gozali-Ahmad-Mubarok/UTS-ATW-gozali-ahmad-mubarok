@extends('admin.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail data artikel
                </div>
                <div class="card-body">
                    <h3>{{$artikel->judul}}</h3>
                    <hr>
                    <p> 
                        penulis : {{$artikel->penulis}} 
                    </p>  
                    <p>
                        Artikel: {{$artikel->artikel}}
                    </p>  
                    <p>
                        tanggal upload: {{$artikel->tanggal_upload}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection