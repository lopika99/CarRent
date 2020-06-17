@extends('layouts.admin_app')

@section('content')
<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1" style="background-color: #576c73">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Edit car') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('updatecar', $car->id) }}">
                            {!! Form::open(['class' => 'form-horizontal', 'route' => ['updatecar', $car->id], 'method' => 'put']) !!}

                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ $car->brand }}" required autocomplete="brand" autofocus>

                                        @error('brand')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                                    <div class="col-md-6">
                                        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $car->type }}" required autocomplete="type">

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="plate" class="col-md-4 col-form-label text-md-right">{{ __('Plate') }}</label>

                                    <div class="col-md-6">
                                        <input id="plate" type="text" class="form-control @error('plate') is-invalid @enderror" name="plate" value="{{ $car->plate }}" autocomplete="plate">

                                        @error('plate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="doors" class="col-md-4 col-form-label text-md-right">{{ __('Doors') }}</label>

                                    <div class="col-md-6">
                                        <input id="doors" type="number" class="form-control @error('doors') is-invalid @enderror" name="doors" value="{{ $car->doors }}" autocomplete="doors">

                                        @error('doors')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="seats" class="col-md-4 col-form-label text-md-right">{{ __('Seats') }}</label>

                                    <div class="col-md-6">
                                        <input id="seats" type="number" class="form-control @error('seats') is-invalid @enderror" name="seats" value="{{ $car->seats }}" autocomplete="seats">

                                        @error('seats')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lugage" class="col-md-4 col-form-label text-md-right">{{ __('Lugage') }}</label>

                                    <div class="col-md-6">
                                        <input id="lugage" type="number" class="form-control @error('lugage') is-invalid @enderror" name="lugage" value="{{ $car->lugage }}" autocomplete="lugage">

                                        @error('lugage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gearbox" class="col-md-4 col-form-label text-md-right">{{ __('Gearbox') }}</label>

                                    <div class="col-md-6">
                                        <input id="gearbox" type="text" class="form-control @error('gearbox') is-invalid @enderror" name="gearbox" value="{{ $car->gearbox }}" autocomplete="gearbox">

                                        @error('gearbox')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                                    <div class="col-md-6">
                                        <input id="year" type="number" placeholder="YYYY" min="1980" max="2020" class="form-control @error('password') is-invalid @enderror" name="year"  autocomplete="new-password" value="{{ $car->year }}">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="day_price" class="col-md-4 col-form-label text-md-right">{{ __('Day price') }}</label>

                                    <div class="col-md-6">
                                        <input id="day_price" type="text" class="form-control @error('day_price') is-invalid @enderror" name="day_price" value="{{ $car->day_price }}" autocomplete="new-day_price">

                                        @error('day_price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                                {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
