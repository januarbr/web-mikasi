@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"> Edit Materi</h1>
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
            <form action="{{route('framework.update',$items->id)}}" method="post">
            @method('put')
                @csrf
              
                <div class="form-group">
                    <label for="tema">Tema Materi</label>
                    <input type="text" name="tema" class="form-control" placeholder="Tema" value="{{$items->tema}}">
                </div>
                <div class="form-group">
                    <label for="link">Link link</label>
                    <input type="text" name="link" class="form-control" placeholder="link" value="{{$items->link}}">
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