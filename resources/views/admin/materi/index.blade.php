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

<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   <i class="fa fa-plus fa-sm text-white-50"></i>Tambah MatKul Baru 
  </button>

<!--start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">+ MataKuliah Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('materi.store')}}" method="POST">
      <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Jurusan</label>
            <input type="jurusan" name="jurusan" class="form-control" placeholder="MI,KA,SI">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Semester</label>
            <select class="form-control" name="semester">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mata Kuliah</label>
            <input type="matkul" name="matkul" class="form-control" placeholder="Menggunakan HURUF KAPITAL">
          </div>
          <div class="form-group">
            <label>Tema</label>
            <input type="tema" name="tema" class="form-control" placeholder="Tema">
          </div>

          <div class="form-group">
            <label>Link</label>
            <input type="link" name="link" class="form-control" placeholder="LInk Materi">
          </div>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary btn-block">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal -->

        </div>
        <marquee><i style="color:rgb(255, 5, 5);">Bila belum ada Mata kuliah yang Terlampir ,silahkan tambah Mata Kuliah Baru</i></marquee>




<!-- Content Row -->
<div class="row mt-5">

  <!-- Earnings (Monthly) Card Example -->
  @foreach ($materi as $materi)
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" >
              <a href="{{route('materi.show',$materi->semester)}}">Semester {{$materi->semester}}</a></div>
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

  <!-- Earnings (Monthly) Card Example -->
  <!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pemrograman web Berbasis Framework</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
          </div>
          <div class="col-auto">
          <a href="{{route('framework.index')}}">
          <i class="fas fa-angle-double-right"></i>
          </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Earnings (Monthly) Card Example -->
  <!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rekayasa Perangkat Lunak</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
              </div>
              
            </div>
          </div>
          <div class="col-auto">
          <i class="fas fa-angle-double-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Pending Requests Card Example -->
  <!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Keamanan Sistem</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
          </div>
          <div class="col-auto">
          <i class="fas fa-angle-double-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div> -->

</div>
<!-- Content Row -->



</div>
<!-- /.container-fluid -->
@endsection