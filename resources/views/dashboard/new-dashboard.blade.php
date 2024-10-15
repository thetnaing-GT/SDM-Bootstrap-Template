<x-layout>
    <div class="overlay"></div>
    <div class="spanner">
        <div class="loader"></div>
    </div>
    <div class="dashboard">
        <x-sidebar />
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                <header class="d-flex flex-column" style="gap: 1rem">
                    <x-header-setting />
                    <x-header-filter />
                </header>
                <section class="overview__wrapper">
                    <x-overview-items />
                </section>
                <section class="overdue__wrapper">
                    <x-overdue.installation />
                    <x-overdue.oncall />
                    <x-overdue.relocation />
                </section>
            </div>
        </main>
    </div>
</x-layout>
