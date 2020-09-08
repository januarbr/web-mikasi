@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">Tambah Anggota</div>
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
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Anggota:</strong>
                        <input type="text" name="kode_anggota" class="form-control" placeholder="Kode Anggota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Anggota:</strong>
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat Anggota:</strong>
                        <textarea class="form-control" style="height:150px" name="alamat_anggota" placeholder="Alamat_Anggota"></textarea>

        
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