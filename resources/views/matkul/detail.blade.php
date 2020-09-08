@extends ('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content center">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">Data Materi
        </div>
      
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
                <th>Tema</th>
                <th>File</th>  
            </tr>
        </thead>
        <?php $i=1 ;?>
        @foreach($items as $item)
        <tbody>
        <tr>
                <td>{{$i}}</td>
                <td>{{$item->tema}}</td>
                <td><a href="{{$item->link}}">{{$item -> link}}</a></td>
            </tr> 
        </tbody>
        <?php $i++; ?>
        @endforeach
    </table>

    </div>
    </div>
    </div>
@endsection