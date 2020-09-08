@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
  <a href="{{route('anggota.create')}}" class="btn btn-sm btn-primary shadow-sm">
  <i class="fa fa-plus fa-sm text-white-50"></i>Tambah Anggota
  </a>
 
 
</div>
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" colspacing="0">
                <thead>
                    <tr>
                    
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Alamat Anggota</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @forelse($items as $item)
                 <tr>                  
                        <td>{{$item->kode_anggota}}</td>
                        <td>{{$item->nama_anggota}}</td>
                        <td>{{$item->alamat_anggota}}</a></td>
                        <td>
                            <a href="{{route('member.edit',$item->anggota_id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form  action="{{route('anggota.destroy',$item->anggota_id)}}" method="post"
                                class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" text-center="center">
                        Data Kosong</td>
                    </tr>
                  
                    @endforelse
                    </tbody>
                   
            </table>
        </div>
    </div>
 </div>
<!-- Content Row -->


{{ $items->links() }}
</div>
<!-- /.container-fluid -->
@endsection