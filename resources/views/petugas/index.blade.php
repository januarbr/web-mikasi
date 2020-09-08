@extends ('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content center">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">Data Petugas
        </div>
        <a href="{{route('petugas.create')}}" class="btn btn-primary">Tambah Petugas</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                     <strong>{{ $message }}</strong>
            </div>
        @endif

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nip</th>
                <th>Nama Petugas</th>
                <th>Alamat Petugas</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <?php $i=1 ?>
        @foreach($petugas as $ptg)
            <tbody>
            <td>{{$i}}</td>
                <td>{{$ptg->nip}}</td>
                <td>{{$ptg->nama_petugas}}</td>
                <td>{{$ptg->alamat_petugas}}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('petugas.edit',$ptg->id) }}">Edit</a>
                </td>
                <td>
                <form action="{{ route('petugas.destroy',$ptg->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
                
                </tr>
            </tbody>
            <?php $i++; ?>
        @endforeach
    </table>

    </div>
    </div>
    </div>
@endsection