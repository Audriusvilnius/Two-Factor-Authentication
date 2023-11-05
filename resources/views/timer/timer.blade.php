@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1>Processing Clock</h1>
        <div id="clockdiv">
            {{-- <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
            </div> --}}
            {{-- <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div> --}}
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>
    </div>
@endsection
