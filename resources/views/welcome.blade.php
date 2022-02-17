@extends('layouts.app')

@section('content')
@include('slider.slider')

<section class="latest-items section-padding fix">
    <div class="container">

        <div class="row">
            @include('slider.galery')

        </div>
    </div>

</section>

@endsection
