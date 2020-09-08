@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">Edit Petugas</div>
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
        <form action="{{ route('petugas.update',$petugas->id) }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nip:</strong>
                        <input type="text" name="nip" class="form-control" value="{{$petugas->nip}}" placeholder="Nip">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Petugas:</strong>
                        <input type="text" name="nama_petugas" class="form-control" value="{{$petugas->nama_petugas}}" placeholder="Nama Petugas">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat Petugas:</strong>
                        <textarea class="form-control" style="height:150px" name="alamat_petugas" placeholder="Alamat Petugas">{{$petugas->alamat_petugas}}</textarea>

        
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