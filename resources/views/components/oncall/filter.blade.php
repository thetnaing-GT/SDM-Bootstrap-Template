<form action="https://sdmstaging.5bb.com.mm/dashboard/on-call-filter" method="get" id="formCheck">
    <input type="hidden" name="sortName" value="" id="sortingName" />
    <div class="sdm__select__groupwrapper">
        <input name="search" id="q" value="" type="search" placeholder="Search .." aria-label="Search"
            class="form-control" />
        <x-form.select id="date_type" name="date_type" id="date_type">
            <option value="created_date">Created Date</option>
            <option value="admin_completed_date">Admin Completed Date</option>
            <option value="5bb_completed_date">5bb Completed Date</option>
        </x-form.select>
        <input name="from_date" value="2024-09-23" type="text" placeholder="YYYY-mm-dd" id="from_date"
            class="form-control filter-date flatpickr-input" readonly="readonly" />
        <input name="to_date" value="2024-10-23" type="text" placeholder="YYYY-mm-dd" id="to_date"
            class="form-control filter-date flatpickr-input" readonly="readonly" />
        <x-form.select name="lsp_id" id="lsp_id">
            <option value="62">Test1</option>
            <option value="63">GT LSP</option>
            <option value="64">GT Admin LSP</option>
            <option value="65">Testing ICT01</option>
            <option value="66">YGN_TEST_01</option>
            <option value="67">ENP_Test</option>
        </x-form.select>
        <x-form.select name="city_id">
            <option value="">Select City</option>
            <option value="1">Yangon</option>
            <option value="2">Mandalay</option>
            <option value="3">Bago</option>
            <option value="4">Pyay</option>
            <option value="5">Mawlamyine</option>
            <option value="6">NayPyiTaw</option>
            <option value="7">Magway</option>
            <option value="8">Pakokku</option>
            <option value="9">Ayeyarwaddy</option>
            <option value="10">Sagaing</option>
        </x-form.select>
        <x-form.select name="township_id" id="township_id">
            <option value=""> Select Township </option>
            <option value="26">Thingangyun</option>
            <option value="36">Thongwa</option>
            <option value="37">Twante</option>
            <option value="55">Waw</option>
            <option value="90">Yangon</option>
            <option value="27">Yankin</option>
            <option value="71">Ye</option>
            <option value="186">Yegyi</option>
            <option value="159">Zabu Thiri</option>
            <option value="166">Zeyar Thiri</option>
        </x-form.select>
        <x-form.select name="issue_type_id" id="issue_type_id">
            <option value=""> Select IssueType </option>
            <option value="1">Cable Break</option>
            <option value="2">High Optical Power</option>
            <option value="3">Patch Cord Damage - Change</option>
            <option value="4">ONU Damage - Change</option>
        </x-form.select>
    </div>
    <div class="sdm__checkbox__groupwrapper my-4">
        <x-form.checkbox name="new" value="Pending" label="New" />
        <x-form.checkbox name="submitted" value="Submitted" label="Submitted" />
        <x-form.checkbox name="on_going" value="On Going" label="On Going" />
        <x-form.checkbox name="complete" value="Complete" label="Complete" />
        <x-form.checkbox name="pending_job" value="Pending Job" label="Pending" />
        <x-form.checkbox name="refund_request" value="Refund Request" label="Refund Request" />
        <x-form.checkbox name="refund" value="Refund" label="Refund" />
        <x-form.checkbox name="admin_completed" label="Admin Completed" />
        <x-form.checkbox name="noentry" value="No Entry" label="No Verify" />
        <x-form.checkbox name="rejected" value="Rejected" label="Rejected" />
        <x-form.checkbox name="fixed" value="Fixed" label="Fixed" />
        <x-form.checkbox name="verified" value="Verified" label="Verified" />
        <x-form.checkbox name="overdue" value="Overdue" label="Overdue" />
    </div>
</form>
