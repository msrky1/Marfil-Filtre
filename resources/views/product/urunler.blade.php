@extends('layouts.app')


@section('content')
<div class="slider-area">
    <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xxl-12">

                    <div class="hero-caption hero-caption2">
                        <font face="Arial" size="20px" color="white">{{__('urunler')}}</font>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="latest-items section-padding fix">

    <div class="container">
        <div class="row">

            <section class="latest-items section-padding fix">
                <div class="container">
                    <div style="width:200px; margin:0 auto;">
                        <h2 style="color:white">
                            <font face="Arial" size="20px" color="white">{{__('kategori')}} </font>
                        </h2>
                    </div><br>



                </div>
            </section>



            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties properties2 pb-40">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="/{{app()->getLocale()}}/kategori/yakit-filtreleri"><img
                                    src="{{asset('assets')}}/img/01.jpg" ></a>
                            <div class="img-cap">
                                <a href="/{{app()->getLocale()}}/kategori/yakit-filtreleri">
                                    <span>{{__('incele')}}</span></a>
                            </div>
                        </div>
                        <div class="properties-caption properties-caption2">
                            <h3><a href="/iletisim">
                                    <font face="Arial" size="3px" color="white">{{__('yakitfiltresi')}}</font>
                                </a></h3>
                            <div class="properties-footer">
                                <div class="price">
                                    <span></span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties properties2 pb-40">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="/{{app()->getLocale()}}/kategori/yağ-filtreleri"><img
                                    src="{{asset('assets')}}/img/02.jpg" ></a>
                            <div class="img-cap">
                                <a href="/{{app()->getLocale()}}/kategori/yağ-filtreleri">
                                    <span>{{__('incele')}}</span></a>
                            </div>
                        </div>
                        <div class="properties-caption properties-caption2">
                            <h3><a href="/iletisim">
                                    <font face="Arial" size="3px" color="white">{{__('yagfiltresi')}}</font>
                                </a></h3>
                            <div class="properties-footer">
                                <div class="price">
                                    <span></span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties properties2 pb-40">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="/{{app()->getLocale()}}/kategori/hava-filtreleri"><img
                                    src="{{asset('assets')}}/img/03.jpg" ></a>
                            <div class="img-cap">
                                <a href="/{{app()->getLocale()}}/kategori/hava-filtreleri">
                                    <span>{{__('incele')}}</span></a>
                            </div>
                        </div>
                        <div class="properties-caption properties-caption2">
                            <h3><a href="/iletisim">
                                    <font face="Arial" size="3px" color="white">{{__('havafiltresi')}}</font>
                                </a></h3>
                            <div class="properties-footer">
                                <div class="price">
                                    <span></span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>



        </div>
    </div>
</section>



</main>
@endsection
