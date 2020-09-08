@extends('layouts.app')

@section('content')

    <section >
        <div class="container">
            <h2 class="section-title mb-3 mt-5">Apa yang kamu Butuhkan????? </h2>
            <p class="lead mb-5 col-md-12 col-sm-12" style="color:grey">
            <b>Tanamkan </b>dalam benak kita bahwa ketika kita berbicara tentang teknologi, maka itu artinya kita berbicara tentang solusi. Teknologi bukanlah tentang keren-kerenan, gaya-gayaan, bagus-bagusan. Teknologi adalah tentang solusi yang bisa kita berikan..
            </p>

            <h4>Cari  Matakuliah :</h4>
            <form action="/cari" method="GET">
                <input type="text" name="cari" placeholder="cari Matakuliah.." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>

            <br>

            <div class="row justify-content-center">
            @foreach($matakuliah as $mtkl)
                <div class="col-md-3 col-4">
                    <img class="matkul border--round mb-3" src="../img/algoritma.jpg">
                    <h6 class="mb-5"><a href="{{route('matakuliah.show', $mtkl->matkul) }}">{{$mtkl ->matkul}}</a></h6>   
                </div>
                @endforeach
                
            </div>

        </div>    
    </section>

@endsection