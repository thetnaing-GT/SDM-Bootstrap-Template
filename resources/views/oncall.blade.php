@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <x-oncall.links />
                    <x-oncall.filter />
                    <div class="d-flex flex-row p-2">
                        <p class="rounded mb-4 mt-2 px-2 py-2 bg-success text-white">0</p>
                    </div>
                    <x-oncall.table />
                </section>
            </div>
        </main>
    </div>
@endsection
