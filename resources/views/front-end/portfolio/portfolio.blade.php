@extends('front-end.master')

@include('front-end.include.header')

@section('content')


<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
 
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="50">
          <div class="col-lg-12 d-flex justify-content-center">
              <div id='myBtnContainer'>
      
              @foreach ($portfolios as $portfolio )
                  
                  <a  href="{{ route('category.wise.portfolio',['categoryId'=>$portfolio->category_id]) }}"><button type="button" class="btn btn-outline-success">{{ $portfolio->categories->category_name }}</button></a>
                  
              @endforeach
              
              </div>
          </div>
        </div>

        <br>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                  @foreach( $portfolios as $portfolio )
                  
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="{{asset( $portfolio->image_1 )}}"  alt=""  height="300px" width="100%">
                          <div class="portfolio-info">
                              <h5 class="text-white">{{ $portfolio->categories->category_name }}</h5>
                              <h4>{{ $portfolio->title  }}</h4>
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

    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection