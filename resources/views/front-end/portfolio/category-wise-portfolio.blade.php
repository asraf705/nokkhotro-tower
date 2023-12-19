@extends('front-end.master')

@include('front-end.include.header')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
 
    </section><!-- End Breadcrumbs -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Portfoio Details</h2>
            <ol>
              <li><a href="{{route('home')}}">Home</a></li>
              <li>Portfoio Details</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">

              <div id='myBtnContainer'>
        
                {{-- @foreach( $categories->take(5) as $category ) --}}

                @foreach ($portfolios->take(5) as $portfolio )
                    
                    <a  href="{{ route('category.wise.portfolio',['categoryId'=>$portfolio->category_id]) }}"><button type="button" class="btn btn-outline-success">{{ $portfolio->categories->category_name }}</button></a>
                    
                @endforeach

                {{-- <li ><a href="{{ route('category.wise.portfolio',['categoryId'=>$portfolio->category_id]) }}" class="text-dark">{{ $category->category_name }}</a></li> --}}
                {{-- @endforeach  --}}
                
                    <a  href="{{ route('category.wise.portfolio',['categoryId'=>$portfolio->category_id]) }}"><button type="button" class="btn btn-outline-success">More</button></a>

                </div>

            </div>
          </div>

          <br>
  
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                    @foreach( $portfolios as $portfolio )
                    
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset( $portfolio->image_1 )}}" height="600px" width="800px" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h5 class="text-white">{{ $portfolio->categories->category_name }}</h5>
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{substr($portfolio->description,0,100)}}...</p>
                                <div class="portfolio-links">
                                    <a href="{{ route('single.portfolio',['title'=>$portfolio->title]) }}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach 

                </div>  
        </div>
      </section>
      <!-- End Portfolio Section -->




@endsection