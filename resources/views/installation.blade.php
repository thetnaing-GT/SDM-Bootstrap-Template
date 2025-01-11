@extends('partials._layout')

@section('content')
    <section class="sdm__box sdm__box--rounded">
        <x-installation.links />
        <x-installation.filter />
        <div class="d-flex flex-row p-2">
            <p class="rounded mb-4 mt-2 px-2 py-2 bg-success text-white">30</p>
        </div>
        <x-installation.table />
    </section>
@endsection
