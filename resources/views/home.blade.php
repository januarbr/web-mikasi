@extends('layouts.app')


@section('content')
 

@section('carousel')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="banner" style="background-image:url(img/bg-cta.jpg);"></div>
      <div class="carousel-caption d-md-block d-sm-block">
        <h5 align="left"> We Are <span>Creative</span></h5>
        <p align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
    <div class="banner" style="background-image:url(img/bg-cta.jpg);"></div>
      <div class="carousel-caption d-md-block d-sm-block">
      <h5 align="left"> We Are <span>Creative</span></h5>
        <p align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
    <div class="banner" style="background-image:url(img/bg-cta.jpg);"></div>
      <div class="carousel-caption d-md-block d-sm-block">
      <h5 align="left"> We Are <span>Creative</span></h5>
        <p align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection


<div class="main">
  <div class="container">
 
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
       <h2>Transisi menuju kebiasan Baru</h2>
      <hr>
      </div>

      <div class="col-md-3 mb-5  ">
        <img class="img-thumbnail" src="{{ ('img/img-belajar-online.png') }}" style="border:1px solid #fff;">
      </div>

      <div class="col-md-9">
        <div class="row index">
          <div class="col-md-12 col-sm-12">
         
            <p align="justify" class=>
              <b> Internet </b>  sebagai    jaringan komputer global mempunyai fungsi yang penting yaitu sebagai media informasi ,
            </p>
            <p align="justify">
              Internet  adalah  forum  global  pertama  dan  perpustakaan  global  pertama  dimana setiap pemakai dapat berpartisipasi dalam segala waktu. 
              Informasi yang disajikan dalam  internet  berupa  halaman-halaman web <i class="katakunci">(web  page)</i> yang  dirangkaikan menjadi situs web <i class="katakunci">(website)</i> 
            </p>
            <p align="justify">
            Pencarian  data  untuk  pembuatan  tugas  mahasiswa  khususnya  di  bidang akuntansi  dapat  memanfaatkan  keunggulan  internet  yang  memungkinkan perolehan  data-data  baik  yang  lama  maupun  terbaru 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="card-deck mt-2">
  <div class="card">
    <img src="{{ ('img/ST.png') }}" class="card-img-top" style="max-height:230px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sistem Tersebar</h5>
       <div class="card-footer">
				<a href="{{url('/deskripsi')}}" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
  <div class="card">
    <img src="{{ ('img/rpl.png') }}" class="card-img-top" style="max-height:230px"alt="...">
    <div class="card-body">
      <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
      <div class="card-footer">
				<a href="https://www.dosenpendidikan.co.id/rekayasa-perangkat-lunak/" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
  <div class="card">
  <img src="{{ ('img/KS.jpeg') }}"class="card-img-top" style="max-height:230px"alt="...">
    <div class="card-body">
      <h5 class="card-title">Keamanan Sistem</h5>
      <div class="card-footer">
				<a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
</div>

<div class="card-deck mt-3">
  <div class="card">
    <img src="{{ ('img/data-mining.jpg') }}" class="card-img-top" style="max-height:230px" alt="...">
    <div class="card-body">
      <h5 class="card-title">Data Mining</h5>
       <div class="card-footer">
				<a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
  <div class="card">
    <img src="{{ ('img/AN.jpeg') }}" class="card-img-top" style="max-height:230px"alt="...">
    <div class="card-body">
      <h5 class="card-title">Analisis Numerik</h5>
      <div class="card-footer">
				<a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
  <div class="card">
  <img src="{{ ('img/framework.png') }}"class="card-img-top" style="max-height:230px"alt="...">
    <div class="card-body">
      <h5 class="card-title">Pemrograman web Framework</h5>
      <div class="card-footer">
				<a href="" class="card-link">Lihat</a>
			</div>
    </div>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue ">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-2">© 2020 Copyright:
    <a style="color: #fff;"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@endsection
