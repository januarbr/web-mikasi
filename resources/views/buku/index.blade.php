@extends ('layouts.app')

@section('content')


    <div id="pricing" class="pricing-section">
        <div class="container">
             <h2 class="section-title col-md-12 col-sm-12 mt-5">Materi</h2>
                <hr>

             <div class="col-md-8 ">
             <p class="intro ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae, eum fugit sed nobis exercitationem nesciunt magnam aut porro, neque vel quos! Eius sunt porro, sit praesentium animi esse. Nesciunt.</p>
            </div>
            <div class="pricing-wrapper row text-center">

              

                


                @foreach($matkul as $mk)
                <div class="item item-3 col-md-4 col-12">
                <div class="item-inner ">
                        <h3 class="item-heading">MIKASI <br></h3>      
                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"> <a href="{{URL::to('/tampil',$mk->semester)}}">Semester {{$mk->semester}}</a></li>
                        </ul>
                    </div>
                    <!-- item-inner -->    
                </div><!--//item-->
                @endforeach

                
                <!-- <div class="item item-3 col-md-4 col-12">
                <div class="item-inner ">
                        <h3 class="item-heading">MIKASI <br></h3>      
                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"> <a href="">Semester 8</a></li>
                        </ul>
                    </div>
                    item-inner -->    
                <!-- </div>//item -->
            
               <!-- <div class="item item-2 col-md-4 col-12">
                    <div class="item-inner">
                        <h6 class="item-heading">Komputerisasi Akutansi<br><span class="item-heading-desc">(KA)</span></h6>
                        <ul class="list-unstyled mb-3">
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 1</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 2</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 3</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 4</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 5</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 6</li>
                        </ul>  -->
                       
                    <!-- </div> -->
                    <!--//item-inner-->
                <!-- </div> -->
                <!--//item-->
                
                <!-- <div class="item item-3 col-md-4 col-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Management Informatika<br><span class="item-heading-desc">(MI)</span></h3>
                        -->
                        <!-- <ul class="list-unstyled mb-3">
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 1</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 2</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 3</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 4</li>
	                        <li class="mb-2"><i class="fas fa-check"></i> Semester 5</li>
                            <li class="mb-2"><i class="fas fa-check"></i> Semester 6</li>
                        </ul> -->
                        
                    <!-- </div> -->
                    <!--//item-inner-->
                <!-- </div> -->
                <!--//item-->
            </div><!--//pricing-wrapper-->
            
        </div><!--//container-->
    </div><!--//pricing-section-->
@endsection