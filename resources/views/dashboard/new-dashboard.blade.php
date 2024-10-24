<x-layouts.dashboard-content>
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
</x-layouts.dashboard-content>
