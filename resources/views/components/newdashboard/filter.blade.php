<div class="sdm-newdashboard__filter | d-flex justify-content-between align-items-center" style="gap: 2rem;">
    <form action="new-dashboard" id="form-filter" class="d-flex justify-content-between align-items-center"
        style="gap: 1rem;">
        <input name="from_date" type="date" placeholder="YYYY-mm-dd" id="from_date" value=""
            class="form-control" />
        <input name="to_date" type="date" placeholder="YYYY-mm-dd" id="to_date" value=""
            class="form-control" />
        <x-form.select name="city" id="city">
            <option value="">Select City</option>
            <option value="1" name="division" id="division">
                Yangon
            </option>
            <option value="2" name="division" id="division">
                Mandalay
            </option>
            <option value="3" name="division" id="division">
                Bago
            </option>
            <option value="4" name="division" id="division">
                Pyay
            </option>
            <option value="5" name="division" id="division">
                Mawlamyine
            </option>
            <option value="6" name="division" id="division">
                NayPyiTaw
            </option>
            <option value="7" name="division" id="division">
                Magway
            </option>
            <option value="8" name="division" id="division">
                Pakokku
            </option>
            <option value="9" name="division" id="division">
                Ayeyarwaddy
            </option>
            <option value="10" name="division" id="division">
                Sagaing
            </option>
        </x-form.select>
        <div class="d-flex justify-content-between align-items-center" style="gap: 0.5rem;">
            <x-form.checkbox id="family" name="family" value="1" label="Family" />
            <x-form.checkbox id="business" name="business" value="2" label="Business" />
        </div>
        <x-form.search type="submit" />
    </form>
    <div class="d-flex">
        <x-form.refresh-button />
    </div>
</div>
