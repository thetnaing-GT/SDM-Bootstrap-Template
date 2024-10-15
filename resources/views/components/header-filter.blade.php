<div class="header__filter container-fluid bg-light">
    <div class="px-3 py-3 d-flex justify-content-between align-items-center" style="gap: 2rem">
        <form action="new-dashboard" id="form-filter" class="d-flex justify-content-between align-items-center"
            style="gap: 1rem">
            <input name="from_date" type="date" placeholder="YYYY-mm-dd" id="from_date" value=""
                class="form-control" />
            <input name="to_date" type="date" placeholder="YYYY-mm-dd" id="to_date" value=""
                class="form-control" />
            <x-form.select />
            <div class="d-flex justify-content-between align-items-center" style="gap: 0.5rem">
                <x-form.checkbox id="family" name="family" value="1" label="Family" />
                <x-form.checkbox id="business" name="business" value="2" label="Business" />
            </div>
            <x-form.search-button type="submit" />
        </form>
        <div class="d-flex">
            <x-form.refresh-button />
        </div>
    </div>
</div>
