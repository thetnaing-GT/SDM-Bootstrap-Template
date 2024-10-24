<x-layouts.layout>
    <div class="overlay"></div>
    <div class="spanner">
        <div class="loader"></div>
    </div>
    <div class="dashboard">
        <x-layouts.sidebar />
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                <header class="dashboard__header">
                    <x-header.header-setting />
                </header>
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layouts.layout>
