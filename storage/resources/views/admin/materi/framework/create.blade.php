@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Framework</h1>
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
            <form action="{{route('framework.store')}}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="MI,KA,SI" value="{{old('jurusan')}}">
                </div>
                <div class="form-group">
                    <label for="semester">semester</label>
                    <input type="text" name="semester" class="form-control" placeholder="semester(Angka)" value="{{old('semester')}}">
                </div>
                <div class="form-group">
                    <label for="matkul">Mata Kuliah</label>
                    <input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah (Menggunakan Huruf Kapital)" value="{{old('matkul')}}">
                </div>
                <div class="form-group">
                    <label for="tema">Tema</label>
                    <input type="text" name="tema" class="form-control" placeholder="Tema Materi" value="{{old('tema')}}">
                </div>
                <div class="form-group">
                    <label for="file">LInk File</label>
                    <input type="link" name="link" class="form-control" placeholder="Link Materi" value="{{old('link')}}">
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