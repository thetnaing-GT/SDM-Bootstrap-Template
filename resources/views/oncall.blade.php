@extends('partials._layout')

@section('content')
    <section class="sdm__box sdm__box--rounded">
        <x-oncall.links />
        <x-oncall.filter />
        <x-oncall.table />
    </section>
@endsection
