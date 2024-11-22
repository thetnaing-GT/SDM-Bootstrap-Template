@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <div class="dashboard__content__box">
                    <x-newdashboard.filter />
                </div>
                <div class="dashboard__content__box">
                    <x-newdashboard.overview.overview-items />
                </div>
                <section class="overdue__wrapper">
                    <div class="dashboard__content__box">
                        <x-newdashboard.overdue.installation />
                    </div>
                    <div class="dashboard__content__box">
                        <x-newdashboard.overdue.oncall />
                    </div>
                    <div class="dashboard__content__box">
                        <x-newdashboard.overdue.relocation />
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
