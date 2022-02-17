@extends('layouts.app')


@section('content')
<div class="slider-area">
    <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xxl-12">

                    <div class="hero-caption hero-caption2">
                        <h2>{{__('urunler')}}</h2>
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
                        <h2><font face="Arial" size="20px" color="white">{{__('urunler')}}</font></h2>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            @foreach ($categories as $p)
                
                            <a href="{{ route('listele', [app()->getLocale(), $p->slug])}}">   
                                <button class="btn btn-danger"><font face="Arial" size="3px" color="white"> {{$p->name}}</font> </button></a>
                
                            @endforeach</div>
                    
                      </div>

                </div>
            </section>
            @foreach ($posts as $p)


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="properties properties2 pb-40">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="{{route('detail', [app()->getLocale(), $p->slug])}}"><img
                                    src="{{asset('storage')}}/{{$p->image}}" alt="{{$p->slug}}"></a>
                            <div class="img-cap">
                                <a href="{{route('detail' , [app()->getLocale(), $p->slug] )}}">
                                    <span>{{__('incele')}}</span></a>
                            </div>
                        </div>
                        <div class="properties-caption properties-caption2">
                            <h3><a href="/iletisim"><font face="Arial" size="3px" color="white">{{$p->title}}</font></a></h3>
                            <div class="properties-footer">
                                <div class="price">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::check() && Auth::user()->role_id==1)






                <a href="{{route('dil-ekle' , [app()->getLocale(), $p->slug] )}} "> <button class="btn btn-danger">
                        Özellik Ekle</button>


                    @endif
            </div>



            @endforeach
        </div>
    </div>
</section>



</main>
@endsection