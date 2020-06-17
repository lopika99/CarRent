@extends('layouts.admin_app')

@section('content')
<div class="ftco-blocks-cover-1" style="background-color: #576c73">
    <div class="ftco-cover-1">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">{{ __('Add new car') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/admin/storecar">
                                @csrf
                                <div class="form-group row">
                                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>

                                    <div class="col-md-6">
                                        <input id="brand" type="text" class="form-control border border-dark @error('plate') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autocomplete="brand" autofocus>

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
                                        <input id="type" type="text" class="form-control border border-dark @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

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
                                        <input id="plate" type="text" class="form-control border border-dark @error('plate') is-invalid @enderror" name="plate" value="{{ old('plate   ') }}" required autocomplete="plate" autofocus>

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
                                        <input id="doors" type="number" class="form-control border border-dark @error('doors') is-invalid @enderror" name="doors" value="{{ old('doors') }}" required autocomplete="doors">

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
                                        <input id="seats" type="number" class="form-control border border-dark @error('seats') is-invalid @enderror" name="seats" required autocomplete="seats">

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
                                        <input id="lugage" type="number" class="form-control border border-dark @error('lugage') is-invalid @enderror" name="lugage" value="{{ old('lugage') }}" required autocomplete="lugage">

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
                                        <input id="gearbox" type="text" class="form-control border border-dark @error('seagearboxts') is-invalid @enderror" name="gearbox" required autocomplete="gearbox">

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
                                        <input id="year" type="number" placeholder="YYYY" min="1980" max="2020"class="form-control border border-dark @error('year') is-invalid @enderror" name="year" required autocomplete="year">

                                        @error('year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="day_price" class="col-md-4 col-form-label text-md-right">{{ __('Day price') }}</label>

                                    <div class="col-md-6">
                                        <input id="day_price" type="text" class="form-control border border-dark @error('day_price') is-invalid @enderror" name="day_price" required autocomplete="day_price">

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
                                            {{ __('Add') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
