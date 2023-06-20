@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Booking') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="vehicle" class="col-md-4 col-form-label text-md-end">{{ __('Vehicle') }}</label>

                                <div class="col-md-6">
                                    <select id="vehicle" name="vehicle_id" class="form-select @error('vehicle') is-invalid @enderror" aria-label="Default select example" required autofocus>
                                        <option selected>Open this select menu</option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->make }} ({{$vehicle->model}})</option>
                                        @endforeach
                                    </select>

                                    @error('vehicle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="book_at" class="col-md-4 col-form-label text-md-end">{{ __('End At') }}</label>

                                <div class="col-md-6">
                                    <input id="end_at" type="datetime-local" class="form-control @error('end_at') is-invalid @enderror" name="end_at" required autocomplete="current-end_at">

                                    @error('end_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Book Now') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
