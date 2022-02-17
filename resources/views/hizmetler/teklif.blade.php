@extends('layouts.app')

@section('content')
<main>

    <div class="slider-area">
        <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-xxl-12">

                        <div class="hero-caption hero-caption2">
                            <h2>{{__('teklifal')}}</h2>
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
                            <h2>{{__('teklifal')}}</h2>
                            <p>{{__('teklif')}}</p>
                            
                        </div>
                        <form class="form-contact contact_form" action="contact_process.php" method="post"
                        id="contactForm" novalidate="">
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = '{{__('adiniz')}}'" placeholder="{{__('adiniz')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = '{{__('mailadresiniz')}}'" placeholder="{{__('mailadresiniz')}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('telefonnumarasi')}}'"
                                        placeholder="{{__('telefonnumarasi')}}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('urunadi')}}'"
                                        placeholder="{{__('urunadi')}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30"
                                        rows="9" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = '{{__('aciklama')}}'"
                                        placeholder="{{__('aciklama')}}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">{{__('gonder')}}</button>
                        </div>
                    </form>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>
@endsection