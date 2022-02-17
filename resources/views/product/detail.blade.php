@extends('layouts.detailapp')


@section('content')


<div class="device-notification">
  <a class="device-notification--logo" href="/">

    <p>MARFİL FİLTRE</p>
  </a>

</div>

<div class="perspective effect-rotate-left">
  <div class="container">
    <div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="/">
            <p>MARFİL FİLTRE</p>
          </a>


          <button class="header--cta cta">{{__('urunresmi')}}</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>{{(__('urunadii'))}}</span></li>
            <li><span>{{(__('urunresmi'))}}</span></li>
            <li><span>{{__('ozellikler')}}</span></li>



          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1>{{$posts->title}}</h1>
                @if (Auth::check() && Auth::user()->role_id==1)


                <form action="{{route('addimage', app()->getLocale())}}" enctype="multipart/form-data" method="POST">
                  @csrf
                  @csrf
                  <input type="hidden" name="post_id" value="{{$posts->id}}">
                    <input type="file" name="image" >

                    <button style="background-color:black  " type="submit"> Resim Ekle </button>

                </form>

                @endif


                  <span class="btn-background"></span>
                </button>
              </div>

            </div>
          </li>
          <li class="l-section section">
            <div class="work">
              <h2>{{__('urunresmi')}}</h2>
              <div class="work--lockup">
                <ul class="slider">





                  <li class="slider--item slider--item-center">
                    <a href="#0">
                      <div class="slider--item-image">
                        @foreach($posts->getImage as $item)
                        <img class="lightboxed" rel="group1" src="{{asset('storage')}}/images/{!!$item->images!!}"
                        data-link="{{asset('storage')}}/images/{!!$item->images!!}" alt="Image Alt" data-caption="Marfil Filtre" />   @endforeach
                      </div><br>

                    </a>
                    @if (Auth::check() && Auth::user()->role_id==1)
                    @foreach ($posts->getImage as $down)
                    <a style="color: red" href="{{route('deleteimage',[ app()->getLocale() , $down->id ]  )}}"> Sil</a>
             @endforeach

             @endif
                  </li>




                </ul>
              <!--  <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                    style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                  c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                  c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z" />
                    </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                    style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path
                        d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                    </g>
                  </svg>
                </div>
              </div>
            </div> -->
          </li>

          <li class="l-section section">
            <div class="hire">
              <p>@foreach($posts->getLang as $item)

                {!!$item->en!!}
              @endforeach</p>
              <!-- checkout formspree.io for easy form setup -->

            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav">
    <li class="is-active">{{__('urunadii')}}</li>
    <li>{{__('urunresmi')}}</li>
    <li>{{__('ozellikler')}}</li>


    <a href="{{route('urunler', app()->getLocale())}}">  <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
    </svg> </a>



  </ul>

</div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function () {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
  try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
      return true;
    }).catch(function (e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }
</script>
@endsection
