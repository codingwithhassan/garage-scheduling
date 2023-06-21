@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="centered-content">
            <h1>Welcome to AGV Booking</h1>
            <p>Your number one source for online vehicle bookings. Simplify your garage experiences with us.</p>
            <a href="{{ route('booking.create') }}" class="btn btn-primary btn-lg">Book Now</a>
        </div>
    </section>
@endsection
