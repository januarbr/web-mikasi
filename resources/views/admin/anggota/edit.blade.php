@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"> Edit Anggota</h1>
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
            <form action="{{route('member.update',$item->anggota_id)}}" method="post">
            @method('put')
                @csrf
                <div class="form-group">
                    <label for="kode_anggota">kode Anggota</label>
                    <input type="text" name="kode_anggota" class="form-control" placeholder="kode anggota" value="{{$item->kode_anggota}}">
                </div>
                <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" placeholder="nama anggota" value="{{$item->nama_anggota}}">
                </div>
                <div class="form-group">
                    <label for="alamat_anggota">Alamat Anggota</label>
                    <textarea name="alamat_anggota" rows="10" class="d-block w-100 form-control">{{$item->alamat_anggota}}</textarea>
                </div> 
                
 
                 <button class="btn btn-primary btn-block">
                Update
                </button>
            </form>
        </div>
    </div> 

               
</div>
<!-- /.container-fluid -->
@endsection