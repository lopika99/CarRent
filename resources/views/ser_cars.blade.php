<?php use App\Http\Controllers\ReserveController; ?>

@extends ('layouts.app')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Our For Rent Cars</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
<div class="container">
<div class="col-lg-6 col-md-4 mb-4">
<h3>Available cars between: {{ $from ?? '' }} - {{ $to ?? ''}}</h3>

</div>
@section('content')

<div class="row">
@foreach($cars as $car)
<div class="col-lg-4 col-md-6 mb-4">
    <div class="item-1">
        @foreach($pictures as $key => $pic)
            @if($car->id == $pic->car_id)
                <a><img src="{{ asset('storage' . '/' . $pic->image_path) }}" width="350" height="240"></a>
            @endif
        @endforeach
        <div class="item-1-contents">
            <div class="text-center">
                
                <h3><a> {{ $car->brand }} {{ $car->type }}</a></h3>
                <div class="rent-price"><span>$ {{ $car->day_price }}</span>/day</div>
            </div>
            <ul class="specs">
                <li>
                    <span>Doors</span>
                    <span class="spec"> {{ $car->doors }} </span>
                </li>
                <li>
                    <span>Seats</span>
                    <span class="spec"> {{ $car->seats }} </span>
                </li>
                <li>
                    <span>Transmission</span>
                    <span class="spec"> {{ $car->gearbox }} </span>
                </li>
                <li>
                    <span>Year</span>
                    <span class="spec"> {{ $car->year }} </span>
                </li>
            </ul>
            <div class="d-flex action">
                <form method="POST" action="/storereserve">
                {!! Form::open(['class' => 'form-horizontal', 'route' => ['updateuser', $car->id, $from, $to], 'method' => 'post']) !!}
                    @csrf
                    <input type="hidden" id="from" name="from" value="{{ $from }}">
                    <input type="hidden" id="to" name="to" value="{{ $to }}">
                    <input type="hidden" id="car_id" name="car_id" value="{{ $car->id }}">
                    <button type="submit" class="btn btn-primary">Rent Now</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endforeach
</div>

<div class="container site-section mb-5">
<div class="row justify-content-center text-center">
<div class="col-7 text-center mb-5">
<h2>How it works</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
</div>
</div>
<div class="how-it-works d-flex">
<div class="step">
<span class="number"><span>01</span></span>
<span class="caption">Time &amp; Place</span>
</div>
<div class="step">
<span class="number"><span>02</span></span>
<span class="caption">Car</span>
</div>
<div class="step">
<span class="number"><span>03</span></span>
<span class="caption">Details</span>
</div>
<div class="step">
<span class="number"><span>04</span></span>
<span class="caption">Checkout</span>
</div>
<div class="step">
<span class="number"><span>05</span></span>
<span class="caption">Done</span>
</div>
</div>
</div>

@endsection