@extends('partials._layout')

@section('content')
    <div class="sdm__box sdm__box--rounded">
        <x-newdashboard.filter />
    </div>
    <div class="sdm__box sdm__box--rounded">
        <x-newdashboard.overview.overview-items />
    </div>
    <section class="overdue__wrapper">
        <div class="sdm__box sdm__box--rounded">
            <x-newdashboard.overdue.installation />
        </div>
        <div class="sdm__box sdm__box--rounded">
            <x-newdashboard.overdue.oncall />
        </div>
        <div class="sdm__box sdm__box--rounded">
            <x-newdashboard.overdue.relocation />
        </div>
    </section>
@endsection
