@extends ('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content center">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">Data Transaksi
        
        </div>
        <a href="{{route('pinjam.create')}}" class="btn btn-primary">Transaksi Peminjaman</a>
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
					<th>Id Pinjam</th>
					<th>Id Buku</th>
					<th>Id Anggota</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Status</th>
					<th>Actions</th>
            </tr>
        </thead>
        <?php $i=1 ?>
        @foreach($pinjam as $pin)
            <tbody>
            <td>{{ $i++ }}</td>
								<td class="center">{{ $pin->id }}</td>
								<td class="center">{{ ucwords($pin->buku_id) }}</td>
								<td>{{ ucwords($pin->anggota_id) }}</td>
								<td class="center">{{ $pin->tgl_pinjam }}</td>
								<td class="center">{{ ucwords($pin->tgl_kembali) }}</td>
								<td class="center">
								@if( $pin->kembali==1 )
									<span class="label label-success">Sudah Di Kembalikan</span>
								@else
									<span class="label label-danger">Belum Di Kembalikan</span>
								@endif
								</td>

                                <!-- opsi -->

                                <td>
                               <form action="{{ route('pinjam.destroy',$pin->id) }}" method="POST">
									
									@if( $pin->kembali==0 )
									<a class="btn btn-success" href="{{URL::to('/active_pinjam/'.$pin->id)}}">
										kembali
									</a>
									
									@else
									 <a class="btn btn-danger" href="{{URL::to('/unactive_pinjam/'.$pin->id)}}">
										pinjam 
									</a>									
                                    @endif
									<a href ="{{ route('pinjam.edit', $pin->id) }}" class ="btn btn-info">Edit</a>

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