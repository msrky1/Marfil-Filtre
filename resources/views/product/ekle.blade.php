@extends('layouts.app')

@section('content')
<div class="slider-area">
    <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xxl-12">

                    <div class="hero-caption hero-caption2">
                        <h2>Dil Özelliklerini </h2>
                        <h2> Ekleyin</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Dil Özellikleri İçin Boşlukları Doldurun</h2>
            </div>

            @if(session()->has('messagelink'))
            <div style="color:forestgreen">
                {{ session()->get('messagelink') }}

                <a href="{{route('detail' , [app()->getLocale() , $posts->slug ])}}"> <button class="btn btn-dark">
                        Ürüne Git </button> </a>
            </div>


            @endif
            @if(session()->has('message'))
            <div style="color:rgb(189, 24, 24)">
                {{ session()->get('message') }}


            </div>


            @endif


            <div class="col-lg-8">
                <form class="form-contact contact_form" enctype="multipart/form-data"
                    action="{{route('dil-eklendi' , app()->getLocale() )}}" method="post">

                    @csrf
                    @csrf
                    <input type="hidden" name="post_id" value="{{$posts->id}}">


                    <label style="color:white">Türkçe </label><br>
                    <textarea id="editor" name="tr" rows=5 cols=60 maxlength=250></textarea>
                    <br>

                    <label style="color:white">İngilizce </label><br>
                    <textarea id="editor1" name="en" rows=5 cols=60 maxlength=250></textarea>
                    <br>


                    <label style="color:white"> Rusça </label><br>
                    <textarea id="editor2" id="editor" name="ru" rows=5 cols=60 maxlength=250></textarea>

                    <br>

                    <label style="color:white"> Arapça </label><br>
                    <textarea id="editor3" name="sa" rows=30 cols=60 maxlength=250></textarea>
                    <br>
                    <label style="color:white">Fransızca </label><br>
                    <textarea id="editor4" name="fr" rows="50" cols="60" maxlength=250></textarea>
                    <br>








                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );

                            ClassicEditor
                            .create( document.querySelector( '#editor1' ) )
                            .catch( error => {
                                console.error( error );
                            } );

                            ClassicEditor
                            .create( document.querySelector( '#editor2' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                            ClassicEditor
                            .create( document.querySelector( '#editor3' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                            ClassicEditor
                            .create( document.querySelector( '#editor4' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>


                    <button class="btn btn-danger">Ekle</button>

                </form>

            </div>
        </div>

    </div>

    <section class="customer-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-7">

                    <div class="section-tittle  text-center mb-50">
                        <h2>Eklenen Ürün Detayları</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts->getLang as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 p-0">
                    <div class="single-cat mb-30">
                        <div class="cat-cap">
                            <div class="rating">
                                <ul>
                               
                                    <h6 style="color: wheat">  <a  href="{{route('detail',[ app()->getLocale() , $posts->slug ]  )}}"> Ürüne Git</a>
                                    </h6>  
                                          
                                </ul>
                            </div>
                            <p>@foreach ($posts->getLang as $item)
                                {!! $item->tr = Str::limit($item->tr, 100) !!} @endforeach
                               
                            </p>

                        </div><br><br>
                        <div class="cat-img">
                     
                        </div>
                        @foreach ($posts->getLang as $down)
                        <a style="color: red" href="{{route('deletelink',[ app()->getLocale() , $down->id ]  )}}"> Sil</a>
                 @endforeach
                    </div>
                </div>

                @endforeach
                @foreach ($posts->getLang as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 p-0">
                    <div class="single-cat mb-30">
                        <div class="cat-cap">
                            <div class="rating">
                                <ul>
                                
                                </ul>
                            </div>
                            <p>@foreach ($posts->getLang as $item)
                                {!! $item->fr = Str::limit($item->fr, 100) !!} @endforeach</p>
                        </div>
                       
                    </div>
                </div>

                @endforeach
                @foreach ($posts->getLang as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 p-0">
                    <div class="single-cat mb-30">
                        <div class="cat-cap">
                            <div class="rating">
                                <ul>
                                
                                </ul>
                            </div>
                            <p>@foreach ($posts->getLang as $item)
                                {!! $item->ru = Str::limit($item->fr, 100) !!} @endforeach</p>
                        </div>
                       
                    </div>
                </div>

                

                @endforeach
                
            </div>
            
        </div>

    </section>

</section>
@endsection