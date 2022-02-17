
<!doctype html>
<html class="no-js" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Marfil</title>
    <meta name="description" content="Marfil Filtre, aslen 2002 yılında Türkiye’nin Kahramanmaraş ilinde kurulmuştur, 2020 yılına kadar fason üretimi yapan firma, ürün araştırma, ortak üretim, araştırma ve geliştirme, Yurtiçi Pazarlama ve İhracat konularındaki birikimini toparlayarak 2020 yılında Marfil Markası ile kurumsal bir işletmeye adım atmış bu konuda Türkiye’nin sayılı firmalarındandır, Marfil Filtre, yetenekli işçi ekibine, olgun yönetim anlayışına, gelişmiş ve yüksek teknoloji ekipmanlara sahiptir. 
    Ana ürünler (Otomotiv Filtresi) 
    -	Yakıt Filtresi, 
    -	Yağ Filtresi, 
    -	Hava Filtresi, 
    -	Kabin Filtresi, 
    -	Filtre Grubu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/icon/xfavicon.png.pagespeed.ic.jILojjAr1o.png">

    <link rel="stylesheet"
        href="{{asset('assets')}}/css/A.bootstrap.min.css owl.carousel.min.css slicknav.css animate.min.css magnific-popup.css fontawesome-all.min.css themify-icons.css slick.css nice-select.css,Mcc.B4I0LAmLmB.css.pagespe.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/A.style.css.pagespeed.cf.5LG3ED0kWy.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slider.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>


    
  


    <link rel="shortcut icon" href="{{asset('assets')}}/favicon.png" type="image/x-icon">
</head>

<body class="body-bg">
    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="header-info-left d-none d-sm-block">
                                        <ul class="header-social">
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="logo">
                                        <a href="/{{App::getLocale()}}"><img
                                                src="{{asset('assets')}}/img/logo/xlogo.png.pagespeed.ic.xm-XFuawlp.png" alt=""></a>
                                    </div>
                                  
                                   
                                 <ul> 
                                    <div class="header-info-right d-none d-lg-block">
                                        <a href="{{route('iletisim' , app()->getLocale() )}}" class="btn_2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                            </a>
                                    </div>
                                     <li>
                                         
                                        <a @if (app()->isLocale('tr'))
                                            style="background-color: red"
                                         @endif
                                         href="/tr"> TR |  </a>
                                        
                                        
                                        
                                        
                                        <a @if (app()->isLocale('en'))
                                        style="background-color:rgb(163, 137, 19)"
                                     @endif href="/en"> EN |    </a>  
                                   
                                         <a 
                                         
                                         @if (app()->isLocale('ru'))
                                            style="background-color:#590A3B"
                                         @endif

                                         href="/ru"> RU |  </a>
                                          <a
                                          @if (app()->isLocale('fr'))
                                            style="background-color:#2121FF"
                                         @endif
                                          
                                          href="/fr"> FR |</a> 
                                          <a 
                                          @if (app()->isLocale('sa'))
                                            style="background-color:green"
                                         @endif
                                          href="/sa">عربى </a>                                   
                                        
                                        </li></ul>

              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">

                                <div class="main-menu d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/{{ App::getLocale() }}">{{__('anasayfa')}}</a></li>
                                            <li><a href="{{ route('urunler', app()->getLocale()) }}">{{__('urunler')}}</a></li>
                                            <li><a href="{{ route('hakkimizda', app()->getLocale()) }}">{{__('hakkimizda')}}</a></li>
                                            <li><a>{{__('kurumsal')}}</a>
                                                <ul class="submenu">
                                                  
                                                    <li><a href="{{ route('kalite', app()->getLocale()) }}">{{__('kalite')}}</a></li>
                                                 
                                                </ul>
                                            </li>
                                          
                                            <li><a href="{{ route('iletisim', app()->getLocale()) }}">{{__('iletisim')}}</a></li>
                                            
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
@yield('content')


<footer>
    <div class="footer-wrapper">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-menu d-flex justify-content-between flex-wrap">
                            <div class="logo">
                                <img src="{{asset('assets')}}/img/logo/xlogo.png.pagespeed.ic.xm-XFuawlp.png" alt="">
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="/{{ App::getLocale() }}">{{__('anasayfa')}}</a></li>
                                    <li><a href="{{ route('hakkimizda', app()->getLocale()) }}">{{__('hakkimizda')}}</a></li>
                                    <li><a href="{{ route('urunler', app()->getLocale()) }}">{{__('urunler')}}</a></li>
                                    <li><a href="{{ route('iletisim', app()->getLocale()) }}">{{__('iletisim')}}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>{{__('hakkimizdakisa')}}</p>
                                    </div>
                                </div>

                                <div class="socila mt-50">
                                    <a href="#" class="btn_02"><i class="fab fa-instagram"></i>Instagram</a>
                                    <a href="#" class="btn_02"><i
                                            class="fab fa-facebook-f"></i>Facebook</a>
                                    <a href="#" class="btn_02"><i class="fab fa-twitter"></i>Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <img src="{{asset('assets')}}/img/icon/location.svg" alt="">
                                <h4>{{__('adres')}}</h4>
                                <ul>
                                    <li>
                                        <p>Kahramanmaraş/TURKIYE</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>Copyright &copy;
                                   {{__('telifhakki')}} |
                                    Marfil</i> </a><br>

                                    <a href="http://www.kahramanmedya.com.tr/">Kahraman Medya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top">
    <a class="wrapper" title="Go to Top" href="#">
        <div class="arrows-container">
            <div class="arrow arrow-one">
            </div>
            <div class="arrow arrow-two">
            </div>
        </div>
    </a>
</div>


<script src="{{asset('assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js bootstrap.min.js.pagespeed.jc.TBjnucQRqR.js"></script>
<script>eval(mod_pagespeed_u1gUoaaXE_);</script>
<script>eval(mod_pagespeed_WbDF3cxKq2);</script>

<script src="{{asset('assets')}}/js/owl.carousel.min.js slick.min.js.pagespeed.jc.4RHvWKSN_e.js"></script>
<script>eval(mod_pagespeed_EGtkiJIjgo);</script>
<script>eval(mod_pagespeed_aW86gGmi7t);</script>
<script
    src="{{asset('assets')}}/js/jquery.slicknav.min.js wow.min.js jquery.magnific-popup.js jquery.nice-select.min.js jquery.counterup.min.js waypoints.min.js contact.js.pagespeed.jc.VsnzaB4Hf-.js"></script>
<script>eval(mod_pagespeed_cKOtDbjEuP);</script>

<script>eval(mod_pagespeed_u4y0KggLas);</script>
<script>eval(mod_pagespeed_byRrNsFTKW);</script>
<script>eval(mod_pagespeed_$tj8V37S2T);</script>
<script>eval(mod_pagespeed_$9VIVt5dIU);</script>
<script>eval(mod_pagespeed_u24H4jdFDn);</script>

<script>eval(mod_pagespeed_0SlrTlmba0);</script>
<script
    src="{{asset('assets')}}/js/jquery.form.js jquery.validate.min.js mail-script.js jquery.ajaxchimp.min.js plugins.js main.js.pagespeed.jc.xUY6pkFGEX.js"></script>
<script>eval(mod_pagespeed_3CrgPEMOVf);</script>
<script>eval(mod_pagespeed_Ab8QQTG9HF);</script>
<script>eval(mod_pagespeed_BvxqohQf6X);</script>
<script>eval(mod_pagespeed_alCOU$MPeX);</script>

<script>eval(mod_pagespeed_aTXhT9fsuN);</script>
<script>eval(mod_pagespeed_SFofWDl9tu);</script>


<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>