@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">HARTA,TAHTA,NILAI A</h1>
  <a href="{{route('framework.create')}}" class="btn btn-sm btn-primary shadow-sm">
  <i class="fa fa-plus fa-sm text-white-50"></i>Tambah MaterI
  </a>
 
 
</div>
<div class="row">

        <div class="table-responsive">
        <table class="table table-stripped" cellspacing="0" width="100%">
                <thead>
                    <tr align="center">
                        <th>Pertemuan</th>
                        <th>Tema</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no=1; ?>
                @foreach ($items as $item)
                <tbody>
                    <tr  align="center">
                        <td>{{$no}}</td>
                        <td>{{$item->tema}}</td>
                        <td>{{$item->link}}</td>
                        <td><a href="{{route('framework.edit',$item->id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form  action="{{route('framework.destroy',$item->id)}}" method="post"
                                class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </form></td>
                    </tr>
            </tbody>
            <?php $no++;?>
                @endforeach
            </table>
    </div>
 </div>
<!-- Content Row -->



</div>
<!-- /.container-fluid -->
@endsection