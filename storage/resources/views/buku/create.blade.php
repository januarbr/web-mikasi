@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">Tambah Buku</div>
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
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Buku:</strong>
                        <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Buku:</strong>
                        <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pengarang Buku:</strong>
                        <input type="text" name="pengarang_buku" class="form-control" placeholder="Pengarang Buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penerbit Buku:</strong>
                        <input type="text" name="penerbit_buku" class="form-control" placeholder="Penerbit Buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Buku:</strong>
                        <input type="text" name="jumlah_buku" class="form-control" placeholder="Jumlah Buku">
                    </div>
                </div>
               
              
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection