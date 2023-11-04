@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
                            <div class="card-body d-flex justify-content-center">
                                <div class="card m-1 " style="width: 18rem;">
                                    <div class="card-body">
                                        @if ($item->status == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                                <path
                                                    d="M10 13a1 1 0 0 1 1-1v-1a2 2 0 0 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            <h5 class="card-title">Home armed</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Disarm</a>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                            </svg>
                                            <h5 class="card-title">Home disarmed</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Arm</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="card m-1" style="width: 18rem;">
                                    <div class="card-body">
                                        @if ($item->doors == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
                                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
                                            </svg>
                                            <h5 class="card-title">Door lock</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Unlock</a>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                                <path
                                                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                            </svg>
                                            <h5 class="card-title">Door unlock</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Unlock</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="card m-1 " style="width: 18rem;">
                                    <div class="card-body">
                                        @if ($item->windows == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <h5 class="card-title">Window close</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Disarm</a>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                fill="currentColor" class="bi bi-house-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                                <path
                                                    d="M10 13a1 1 0 0 1 1-1v-1a2 2 0 0 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            <h5 class="card-title">Window open</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Arm</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="card m-1 " style="width: 18rem;">
                                    <div class="card-body">
                                        @if ($item->indoor_gate == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <h5 class="card-title">Indoor gate close</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Disarm</a>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                fill="currentColor" class="bi bi-house-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                                <path
                                                    d="M10 13a1 1 0 0 1 1-1v-1a2 2 0 0 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            <h5 class="card-title">Indoor gate open</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Arm</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="card m-1 " style="width: 18rem;">
                                    <div class="card-body">
                                        @if ($item->outdoor_gate == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <h5 class="card-title">Outdoor gate close</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Disarm</a>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                fill="currentColor" class="bi bi-house-lock" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                                <path
                                                    d="M10 13a1 1 0 0 1 1-1v-1a2 2 0 0 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            <h5 class="card-title">Outdoor gate open</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make
                                                up
                                                the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Arm</a>
                                        @endif
                                    </div>
                                </div>
                            </div>






                            <p> Movement sensor {{ $item->movement }} </p>
                            <p> Glass break {{ $item->glass_break }} </p>
                            <p> Inner perimeter {{ $item->perimeter }} </p>
                            <p> Smoke sensor {{ $item->smoke }} </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
