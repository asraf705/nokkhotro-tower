@extends('front-end.master')

@include('front-end.include.header')

@section('content')


<main id="main" data-aos="fade-up">

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
      </section>
      <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">


        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset( $portfolio->image_1 )}}" alt="" width="800" height="600">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset( $portfolio->image_2 )}}" alt="" width="800" height="600">
                </div>

                <div class="swiper-slide">
                  <img src="{{asset( $portfolio->image_3 )}}" alt="" width="800" height="600">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $portfolio->title }}</h3>
              <ul>
                <li><strong>Area</strong>: <a href="{{ route('category.wise.portfolio',['categoryId'=>$portfolio->category_id]) }}" class="text-black" > {{ $portfolio->categories->category_name }}</a></li>
                <li><strong>Location</strong>: {{ $portfolio->address }}</li>
                <li><strong>Post Date</strong>: {{ date('j M  Y',strtotime($portfolio->created_at)) }} </li>

              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Property Detail</h2>
              <p>{{$portfolio->description}}</p>
            </div>
          </div>

        </div>


      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection
