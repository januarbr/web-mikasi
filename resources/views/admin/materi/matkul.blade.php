@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Mata Kuliah</h1>
          <!-- <a href="" class="btn btn-sm btn-primary shadow-sm">
          <i class="fa fa-plus fa-sm text-white-50"></i>Tambah Mata Kuliah
          </a> -->
         <a href="{{route('materi.index')}}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
<!-- Content Row -->
<div class="row mt-5">

  <!-- Earnings (Monthly) Card Example -->
  @foreach ($materiadmin as $materi)
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" >
              <a href="{{route('framework.show',$materi->matkul)}}">{{$materi->matkul}}</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
          </div>
          <div class="col-auto">
          
          <i class="fas fa-angle-double-right"></i>
          
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach

 
</div>
<!-- Content Row -->



</div>
<!-- /.container-fluid -->
@endsection