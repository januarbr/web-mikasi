@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
</div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif
 
<div class="card shadow">
        <div class="card-body">
            <form action="{{route('anggota.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Kode Anggota</label>
                    <input type="text" name="kode_anggota" class="form-control" placeholder="kode anggota" value="{{old('kode_anggota')}}">
                </div>
                <div class="form-group">
                    <label for="location">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" value="{{old('nama_anggota')}}">
                </div>
                <div class="form-group">
                    <label for="about">Alamat Anggota</label>
                    <textarea name="alamat_anggota" rows="10" class="d-block w-100 form-control">{{old('alamat_anggota')}}</textarea>
                </div> 
             
 
                 <button class="btn btn-primary btn-block">
                Simpan
                </button>
            </form>
        </div>
    </div> 

               
</div>
<!-- /.container-fluid -->
@endsection