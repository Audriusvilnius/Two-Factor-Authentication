@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card rounded-4">
                    <div class="card-header text-bg-dark card rounded-4">
                        <h1 class="pb-3">{{ __('Home security dashboard') }}</h1>
                    </div>
                    {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div> --}}
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 align-items-stretch g-4 py-5">
                    @forelse ($security as $item)
                        {{-- Security status --}}
                        @if ($item->status == 1)
                            <div id="{{ $item }}" class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                            <path
                                                d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                            <path
                                                d="M10 13a1 1 0 0 1 1-1v-1a2 2 0 0 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                        </svg>
                                        <small>Home armed</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Security activated</h3>
                                        <a href="{{ route('security-all_disarmed', $item->status) }}"
                                            class="btn btn-danger mt-2 fs-4">Disarm</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->status == 0)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                            <path
                                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                        </svg>
                                        <small>Home unarmed</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Security deactivated</h3>
                                        <a href="{{ route('security-all_armed', $item->status) }}"
                                            class="btn btn-warning mt-2 fs-4">Secure</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->status == 2)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-house-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                            <path
                                                d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 1 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z" />
                                        </svg>
                                        <small>Home armed</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                        <a href="{{ route('security-all_disarmed', $item->status) }}"
                                            class="btn btn-warning mt-2 fs-4">Disarm</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Dors status --}}
                        @if ($item->doors == 1)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                            <path
                                                d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
                                            <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
                                        </svg>
                                        <small>Door lock</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Doors are locked</h3>
                                        @if ($item->status == 0)
                                            <a href="{{ route('security-door_unlock', $item->doors) }}"
                                                class="btn btn-danger mt-2 fs-4">Unlock</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->doors == 0)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                            <path
                                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                                        </svg>
                                        <small>Door unlock</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Doors are unlocked</h3>
                                        <a href="{{ route('security-door_lock', $item->doors) }}"
                                            class="btn btn-warning mt-2 fs-4">Lock</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->doors == 2)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                            <path
                                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                                        </svg>
                                        <small>Door open</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->doors == 3)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden text-bg-secondary rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                            <path
                                                d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                        </svg>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Door open</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Windows status --}}
                        @if ($item->windows == 1)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Windows closed</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->windows == 0)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Windows open</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->windows == 2)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Window open</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->windows == 3)
                            <div class="col text-center">
                                <div class="card card-cover h-100 overflow-hidden text-bg-secondary rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Windows open</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Indoor gate status --}}
                        @if ($item->indoor_gate == 1)
                            <div class="col text-center" id="indoor_gate">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-sign-do-not-enter" viewBox="0 0 16 16">
                                            <path
                                                d="M3.584 6V4h.69c.596 0 .886.355.886.998S4.867 6 4.274 6h-.69Zm.653-1.72h-.32v1.44h.32c.396 0 .582-.239.582-.718 0-.481-.188-.722-.582-.722Zm2.729.585v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.358-.579V6h-.319V4h.293l.933 1.436h.015V4h.319v2h-.291L8 4.56h-.013Zm3.142.305v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.236-.854V6h-.333V4.285h-.584V4h1.503v.285h-.586ZM4.496 11.72h.917V12H4.165v-2h1.248v.28h-.917v.57h.862v.268h-.862v.602Zm1.489-1.16V12h-.32v-2h.294l.933 1.436h.014v-1.435h.32V12h-.292l-.936-1.44h-.013Zm2.279-.275V12H7.93v-1.715h-.584V10H8.85v.284h-.586ZM9.3 11.72h.917V12H8.97v-2h1.248v.28H9.3v.57h.863v.268H9.3v.602ZM10.47 10h.765c.42 0 .674.244.674.616a.575.575 0 0 1-.368.56l.404.824h-.373l-.36-.769h-.414V12h-.328v-2Zm.328.273v.694h.381c.245 0 .387-.115.387-.34 0-.228-.147-.354-.378-.354h-.39ZM3.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-9Z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14Z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Indoor gate closed</h3>
                                        @if ($item->status == 0)
                                            <a href="{{ route('security-ingate_open', $item->indoor_gate) }}"
                                                class="btn btn-danger mt-2 fs-4">Open</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->indoor_gate == 0)
                            <div class="col text-center" id="indoor_gate">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Indoor gate open</h3>
                                        <a href="{{ route('security-ingate_close', $item->indoor_gate) }}"
                                            class="btn btn-warning mt-2 fs-4">Close</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->indoor_gate == 2)
                            <div class="col text-center" id="indoor_gate">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Indoor gate open</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Outdoor gate status --}}
                        @if ($item->outdoor_gate == 1)
                            <div class="col text-center" id="outdoor_gate">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-sign-do-not-enter" viewBox="0 0 16 16">
                                            <path
                                                d="M3.584 6V4h.69c.596 0 .886.355.886.998S4.867 6 4.274 6h-.69Zm.653-1.72h-.32v1.44h.32c.396 0 .582-.239.582-.718 0-.481-.188-.722-.582-.722Zm2.729.585v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.358-.579V6h-.319V4h.293l.933 1.436h.015V4h.319v2h-.291L8 4.56h-.013Zm3.142.305v.272c0 .566-.318.903-.83.903-.513 0-.833-.337-.833-.903v-.272c0-.569.32-.904.832-.904.513 0 .83.337.83.904Zm-.337.274v-.277c0-.413-.211-.617-.494-.617-.285 0-.495.204-.495.617v.277c0 .414.21.618.495.618.283 0 .494-.204.494-.618Zm1.236-.854V6h-.333V4.285h-.584V4h1.503v.285h-.586ZM4.496 11.72h.917V12H4.165v-2h1.248v.28h-.917v.57h.862v.268h-.862v.602Zm1.489-1.16V12h-.32v-2h.294l.933 1.436h.014v-1.435h.32V12h-.292l-.936-1.44h-.013Zm2.279-.275V12H7.93v-1.715h-.584V10H8.85v.284h-.586ZM9.3 11.72h.917V12H8.97v-2h1.248v.28H9.3v.57h.863v.268H9.3v.602ZM10.47 10h.765c.42 0 .674.244.674.616a.575.575 0 0 1-.368.56l.404.824h-.373l-.36-.769h-.414V12h-.328v-2Zm.328.273v.694h.381c.245 0 .387-.115.387-.34 0-.228-.147-.354-.378-.354h-.39ZM3.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-9Z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16Zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14Z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Outdoor gate closed</h3>
                                        <a href="{{ route('security-outgate_open', $item->outdoor_gate) }}"
                                            class="btn btn-danger mt-2 fs-4">Open</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->outdoor_gate == 0)
                            <div class="col text-center" id="outdoor_gate">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Outdoor gate open</h3>
                                        <a href="{{ route('security-outgate_close', $item->outdoor_gate) }}"
                                            class="btn btn-warning mt-2 fs-4">Close</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->outdoor_gate == 2)
                            <div class="col text-center" id="outdoor_gate">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Outdoor gate open</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Perimeter status --}}
                        @if ($item->perimeter == 1)
                            <div class="col text-center" id="perimeter">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                                            <path
                                                d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Perimeter is security</h3>
                                        <a href="{{ route('security-perimeter_disarmed', $item->perimeter) }}"
                                            class="btn btn-danger mt-2 fs-4">Disarm</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->perimeter == 0)
                            <div class="col text-center" id="perimeter">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Perimeter disarmed</h3>
                                        <a href="{{ route('security-perimeter_armed', $item->perimeter) }}"
                                            class="btn btn-warning mt-2 fs-4">Secure</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->perimeter == 2)
                            <div class="col text-center" id="perimeter">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Perimeter cross</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                        <a href="{{ route('security-perimeter_disarmed', $item->perimeter) }}"
                                            class="btn btn-warning mt-2 fs-4">Disarm</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Motion status --}}
                        @if ($item->motion == 1)
                            <div class="col text-center" id="motion">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Motion sensors are active</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->motion == 0)
                            <div class="col text-center" id="motion">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Motion sensors are deactive</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->motion == 2)
                            <div class="col text-center" id="motion">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Motion indoor</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Glass break status --}}
                        @if ($item->glass_break == 1)
                            <div class="col text-center" id="glass_break">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Glass break sensors are active
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->glass_break == 0)
                            <div class="col text-center" id="glass_break">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Glass break sensors are deactive
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->glass_break == 2)
                            <div class="col text-center" id="glass_break">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                            <path
                                                d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" />
                                        </svg>
                                        <small>Glass break</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Fire status --}}
                        @if ($item->smoke == 1)
                            <div class="col text-center" id="smoke">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: #00816A;">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                        </svg>
                                        <small>It's safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Smoke sensors are active
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->smoke == 0)
                            <div class="col text-center" id="smoke">
                                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg'); background: rgb(1, 132, 184);">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-shield-slash" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.093 3.093c-.465 4.275.885 7.46 2.513 9.589a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.32 11.32 0 0 0 1.733-1.525l-.745-.745a10.27 10.27 0 0 1-1.578 1.392c-.346.244-.652.42-.893.533-.12.057-.218.095-.293.118a.55.55 0 0 1-.101.025.615.615 0 0 1-.1-.025 2.348 2.348 0 0 1-.294-.118 6.141 6.141 0 0 1-.893-.533 10.725 10.725 0 0 1-2.287-2.233C3.053 10.228 1.879 7.594 2.06 4.06l-.967-.967zM3.98 1.98l-.852-.852A58.935 58.935 0 0 1 5.072.559C6.157.266 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.483 3.626-.332 6.491-1.551 8.616l-.77-.77c1.042-1.915 1.72-4.469 1.29-7.702a.48.48 0 0 0-.33-.39c-.65-.213-1.75-.56-2.836-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524a49.7 49.7 0 0 0-1.357.39zm9.666 12.374-13-13 .708-.708 13 13-.707.707z" />
                                        </svg>
                                        <small>It is not safe</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Smoke sensors are deactive
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($item->glass_break == 2)
                            <div class="col text-center" id="smoke">
                                <div class="card card-cover h-100 overflow-hidden text-bg-danger rounded-4 shadow-lg"
                                    style="background-image: url('unsplash-photo-1.jpg');">
                                    <div
                                        class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86"
                                            fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                        </svg>
                                        <small>Smoke indoor</small>
                                        <h3 class="pt-1 mt-1 mb-3 display-6 lh-1 fw-bold">Alarm</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <h2 class="list-group-item">No types yet</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
