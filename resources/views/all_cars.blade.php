@extends ('layouts.app')

@section('content')
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
<div class="row">
@foreach($cars as $car)
    <div class="col-lg-4 col-md-6 mb-4">
    <div class="item-1">
    @foreach($images as $key => $image)
        @if($car->id == $image->car_id)
            <a ><img src="{{ asset('storage' . '/' . $image->image_path) }}" alt="Image" class="img-fluid"></a>
            @continue
        @endif
    @endforeach
    <div class="item-1-contents">
    <div class="text-center">
    <h3><a href="#">{{$car->brand}} {{ $car->type }} </a></h3>
    <div class="rent-price"><span>${{ $car->day_price }}</span>/day</div>
    </div>
    <ul class="specs">
    <li>
    <span>Doors</span>
    <span class="spec">{{ $car->doors }}</span>
    </li>
    <li>
    <span>Seats</span>
    <span class="spec">{{ $car->seats }}</span>
    </li>
    <li>
    <span>Lugage</span>
    <span class="spec">{{ $car->lugage }}</span>
    </li>
    <li>
    <span>Transmission</span>
    <span class="spec">{{ $car->gearbox}}</span>
    </li>
    <li>
    <span>Year</span>
    <span class="spec">{{ $car->year}}</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
@endforeach
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