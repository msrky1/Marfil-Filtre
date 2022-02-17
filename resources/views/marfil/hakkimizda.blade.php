@extends('layouts.app')

@section('content')
<main>

    <div class="slider-area">
        <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-xxl-12">

                        <div class="hero-caption hero-caption2">
                            <h2>{{__('hakkimizda')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area section-padding">
        <div class="container">
            
            <div class="row align-items-center section-overlay">
                <div class="offset-xl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-9">
                    <div class="about-caption about-caption1">

                        <div class="section-tittle section-tittle3 mb-25">
                            <h2>{{__('hakkimizda')}}</h2>
                            <p>{{__('hakkimizdauzun')}}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">

                    <div class=".example">
                        <img src="{{asset('assets')}}/img/gallery/xabout1.jpg.pagespeed.ic.F65Pj8xV0r.jpg" alt="">
                    </div>

                
                </div>
            </div>
        </div>
    </section>
</main>
@endsection