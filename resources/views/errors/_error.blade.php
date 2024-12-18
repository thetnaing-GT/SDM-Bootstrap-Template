@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content" style="overflow: hidden">
            @include('partials._header')
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                <div class="text-center">
                    <p class="lead text-muted">@yield('error_message', 'Something went wrong.')</p>
                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-arrow-left-circle"></i> Go Back
                    </a>
                </div>
            </div>
        </main>
    </div>
@endsection
