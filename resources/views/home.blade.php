<?php
use App\Http\Controllers\DB;
use App\Http\Controllers\CarController;
use App\Car;
?>

@extends ('layouts.app')

@section('content')
  <div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 mb-4">
    <div class="item-1">
    <a><img src="{{ asset('storage' . '/' . $car_picture->image_path) }}" width="350" height="280"></a>
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
    <div class="d-flex action">
    <a href="contact.html" class="btn btn-primary">Rent Now</a>
    </div>
    </div>
    </div>
    </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section pt-0 pb-0 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form method="GET" action="/searched" class="trip-form">
          @csrf
            <div class="row align-items-center mb-4">
              <div class="col-md-6">
                <h3 class="m-0">Begin your trip here</h3>
              </div>
              <div class="col-md-6 text-md-right">
                <span class="text-primary"><?php echo Car::count(); ?></span> <span>cars available</span></span>
              </div>
            </div>
              <div class="row">
              <form >
                <div class="form-group col-md-3">
                  <label for="cf-3">Journey date</label>
                  <input type="text" id="cf-3" name='sd' placeholder="Your pickup address" class="form-control datepicker px-3">
                </div>
                <div class="form-group col-md-3">
                  <label for="cf-4">Return date</label>
                  <input type="text" id="cf-4" name='ed' placeholder="Your pickup address" class="form-control datepicker px-3">
                </div>
              </div>
                  <div class="row">
                  <div class="col-lg-6">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
  <div class="container">
  <div class="row">
    <div class="col-lg-3">
      <h3>Our Offer</h3>
      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
      <p>
      <a href="#" class="btn btn-primary custom-prev">Previous</a>
      <span class="mx-2">/</span>
      <a href="#" class="btn btn-primary custom-next">Next</a>
      </p>
    </div>
    <div class="col-lg-9">
    <div class="nonloop-block-13 owl-carousel">
    @foreach($cars as $c)
    <div class="item-1">
    @foreach($cars_pictures as $key => $image)
      @if($c->id == $image->car_id)
        <a><img src="{{ asset('storage' . '/' . $image->image_path) }}"></a>
        @endif
    @endforeach
    <div class="item-1-contents">
    <div class="text-center">
      <h3><a>{{ $c->brand }} {{ $c->type }}</a></h3>
      <div class="rent-price"><span>${{ $c->day_price }}</span>/day</div>
      </div>
      <ul class="specs">
        <li>
          <span>Doors</span>
          <span class="spec">{{ $c->doors }}</span>
        </li>
        <li>
          <span>Seats</span>
          <span class="spec">{{ $c->seats }}</span>
        </li>
        <li>
          <span>Transmission</span>
          <span class="spec">{{ $c->gearbox }}</span>
        </li>
        <li>
          <span>Year</span>
          <span class="spec">{{ $c->year }}</span>
        </li>
      </ul>
    </div>
  </div>
  @endforeach
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
  <div class="container">
  <div class="row">
  <div class="col-12 text-center mb-5">
  <h2 class="text-white">Our services</h2>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-4">
  <div class="service-1">
  <span class="service-1-icon">
  <span class="flaticon-car-1"></span>
  </span>
  <div class="service-1-contents">
  <h3>Repair</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
  </div>
  </div>
  </div>
  <div class="col-lg-4">
  <div class="service-1">
  <span class="service-1-icon">
  <span class="flaticon-traffic"></span>
  </span>
  <div class="service-1-contents">
  <h3>Car Accessories</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
  </div>
  </div>
  </div>
  <div class="col-lg-4">
  <div class="service-1">
  <span class="service-1-icon">
  <span class="flaticon-valet"></span>
  </span>
  <div class="service-1-contents">
  <h3>Own a Car</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
  </div>
  </div>
  </div>
  </div>
  </div>
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
  <div class="site-section bg-light">
  <div class="container">
  <div class="row justify-content-center text-center mb-5">
  <div class="col-7 text-center mb-5">
  <h2>Customer Testimony</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-4 mb-4 mb-lg-0">
  <div class="testimonial-2">
  <blockquote class="mb-4">
  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
  </blockquote>
  <div class="d-flex v-card align-items-center">
  <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
  <span>Mike Fisher</span>
  </div>
  </div>
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
  <div class="testimonial-2">
  <blockquote class="mb-4">
  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
  </blockquote>
  <div class="d-flex v-card align-items-center">
  <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
  <span>Jean Stanley</span>
  </div>
  </div>
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
  <div class="testimonial-2">
  <blockquote class="mb-4">
  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
  </blockquote>
  <div class="d-flex v-card align-items-center">
  <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
  <span>Katie Rose</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection