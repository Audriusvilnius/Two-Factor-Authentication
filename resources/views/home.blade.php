@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home security dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                    <div>
                        @foreach ($security as $item)
                            <div class="card-body">
                                <p> Home security status is {{ $item->status }}</p>
                                <p> {{ $item->doors }} </p>
                                <p> {{ $item->windows }} </p>
                                <p> {{ $item->indoor_gate }} </p>
                                <p> {{ $item->outdoor_gate }} </p>
                                <p> {{ $item->movement }} </p>
                                <p> {{ $item->glass_break }} </p>
                                <p> {{ $item->perimeter }} </p>
                                <p> {{ $item->smoke }} </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
