@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <div class="d-flex flex-column" style="gap: 0.5rem">
                        <x-lsp.action />
                        <x-lsp.table />
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
