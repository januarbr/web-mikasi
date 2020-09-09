@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Data Petugas</div>

                <div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="box-content">
						<form class="form-horizontal" action="{{ route('pinjam.store') }}" method="POST">
							{{ csrf_field() }}
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError3">Nama buku</label>
								<div class="controls">
								  <select id="selectError3" name="buku_id" required="">
									<option value="0">Pilih Nama Buku</option>
									@foreach ($buku as $buk) { ?>
									<option value="{{$buk->buku_id}}">{{$buk->judul_buku}}</option>
									@endforeach
								  </select>
								</div>
							 </div>	
							 <div class="control-group">
								<label class="control-label" for="selectError3">Nama anggota</label>
								<div class="controls">
								  <select id="selectError3" name="anggota_id" required="">
									<option value="0">Pilih Nama Anggota</option>
									@foreach ($anggota as $agt) { ?>
									<option value="{{$agt->anggota_id}}">{{$agt->nama_anggota}}</option>
									@endforeach
								  </select>
								</div>
							 </div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Tanggal pinjam</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="tgl_pinjam" required="">
							  </div>							
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Tanggal kembali</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" name="tgl_kembali" required="">
							  </div>							
							</div>
							<br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Add Data pinjam</button>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->
			</div><!--/row-->
@endsection