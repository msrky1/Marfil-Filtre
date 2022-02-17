@extends('layouts.app')

@section('content')
<div class="slider-area">
    <div class="single-slider slider-height2 slider-bg2 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xxl-12">

                    <div class="hero-caption hero-caption2">
                        <h2 ><font face="Arial" size="30px" color="white">{{__('iletisim')}}</font></h2>
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
                <h2 class="contact-title"><font face="Arial" size="25px" color="white">{{__('iletisimuzun')}}</font></h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="">
                    <div class="row">
                        <span class="border border-primary"><br>
                            <p style="color:white">{{__('pazarlamasorumlusu')}} - Mahmut DERİNKUYU </p>
                            <p style="color:white">GSM: 0531 851 92 72 (WhatsApp,Viber,Telegram) </p>
                            <p style="color:white">Mail: mahmut@marfilfiltre.com </p>

                        </span>
                        <span class="border border-primary"><br>

                            <p style="color:white"> {{__('satinalmasorumlusu')}} - Murat BAKICI </p>
                            <p style="color:white">GSM: 0532 510 56 14 (WhatsApp,Viber,Telegram) </p>
                            <p style="color:white">Mail: murat@marfilfiltre.com </p>

                        </span>
                        <span class="border border-primary"><br>

                            <p style="color:white"> {{__('uretimsorumlusu')}} - Adem ÇETİNTAŞ </p>
                            <p style="color:white">GSM: 0532 137 86 29 (WhatsApp,Viber,Telegram) </p>
                            <p style="color:white">Mail: adem@marfilfiltre.com </p>
                        </span>
                        <span class="border border-primary"><br>

                            <p style="color:white"> {{__('yurtdisipazarlama')}} - Ziver KAYIŞOĞLU </p>
                            <p style="color:white">GSM: 0532 303 68 41 (WhatsApp,Viber,Telegram) </p>
                            <p style="color:white">Mail: marfil@marfilfiltre.com </p>

                        </span>
                    </div>
                </form>
            </div>


            <div class="col-lg-3 offset-lg-4">
                <div style="align-content:bottom">
                    <div class="media contact-info">

                        <div class="media-body">
                            <span class="contact-info__icon"></i></span>
                            <h5 style="color:#ffb545"> Marfil Filtre Otomotiv Sanayi ve Ticaret LTD. ŞTİ. </h5>

                            <h3>Dulkadiroğlu/Kahramanmaraş/TURKIYE</h3> <br>

                            <h6 style="color:white"> KMTSO Sicil No: 18143</h6>
                            <h6 style="color:white"> Mersis No: 0612137450500001</h6> <br><br>

                            <h2 style="color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                    <path
                                        d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                </svg> {{__('bankabilgileri')}} </h3>

                                <h5 style="color:white"> {{__('bankaadi')}}: </h5>
                                <h5 style="color:white"> Swift Kodu: </h5>
                                <h5 style="color:white"> TL Iban: </h5>
                                <h5 style="color:white"> USD Iban: </h5>
                                <h5 style="color:white"> Euro Iban: </h5>






                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

