<form action="https://sdmstaging.5bb.com.mm/dashboard/on-call-filter" method="get" id="formCheck">
    <input type="hidden" name="sortName" value="" id="sortingName" />
    <div class="d-flex flex-wrap" style="gap: 0.5rem;">
        <div class="d-flex" style="gap: 0.5rem;">
            <div class="d-flex" style="gap: 0.5rem;">
                <input name="search" id="q" value="" type="search" placeholder="Search .."
                    aria-label="Search" class="form-control mr-sm-2 search-al" style="width: 300px;" />
                <x-form.select id="date_type" name="date_type" id="date_type">
                    <option value="created_date">Created Date</option>
                    <option value="admin_completed_date">Admin Completed Date</option>
                    <option value="5bb_completed_date">5bb Completed Date</option>
                </x-form.select>
            </div>
            <div class="d-flex" style="gap: 0.5rem;">
                <input name="from_date" value="2024-09-23" type="text" placeholder="YYYY-mm-dd" id="from_date"
                    class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" />
                <input name="to_date" value="2024-10-23" type="text" placeholder="YYYY-mm-dd" id="to_date"
                    class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" />
            </div>
        </div>
        <div class="d-flex" style="gap: 0.5rem;">
            <x-form.select name="lsp_id" id="lsp_id">
                <option value="62">
                    Test1
                </option>
                <option value="63">
                    GT LSP
                </option>
                <option value="64">
                    GT Admin LSP
                </option>
                <option value="65">
                    Testing ICT01
                </option>
                <option value="66">
                    YGN_TEST_01
                </option>
                <option value="67">
                    ENP_Test
                </option>
            </x-form.select>
            <x-form.select name="city_id">
                <option value="">Select City</option>
                <option value="1">
                    Yangon
                </option>
                <option value="2">
                    Mandalay
                </option>
                <option value="3">
                    Bago
                </option>
                <option value="4">
                    Pyay
                </option>
                <option value="5">
                    Mawlamyine
                </option>
                <option value="6">
                    NayPyiTaw
                </option>
                <option value="7">
                    Magway
                </option>
                <option value="8">
                    Pakokku
                </option>
                <option value="9">
                    Ayeyarwaddy
                </option>
                <option value="10">
                    Sagaing
                </option>
            </x-form.select>
            <x-form.select name="township_id" id="township_id">
                <option value=""> Select Township </option>
                <option value="26">
                    Thingangyun
                </option>
                <option value="36">
                    Thongwa
                </option>
                <option value="37">
                    Twante
                </option>
                <option value="55">
                    Waw
                </option>
                <option value="90">
                    Yangon
                </option>
                <option value="27">
                    Yankin
                </option>
                <option value="71">
                    Ye
                </option>
                <option value="186">
                    Yegyi
                </option>
                <option value="159">
                    Zabu Thiri
                </option>
                <option value="166">
                    Zeyar Thiri
                </option>
            </x-form.select>
            <x-form.select name="issue_type_id" id="issue_type_id">
                <option value=""> Select IssueType </option>
                <option value="1">
                    Cable Break
                </option>
                <option value="2">
                    High Optical Power
                </option>
                <option value="3">
                    Patch Cord Damage - Change
                </option>
                <option value="4">
                    ONU Damage - Change
                </option>
            </x-form.select>
        </div>
    </div>
    <div class="installation__filter__grid-wrapper my-4">
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="new" name="new" value="Pending" />
            <label for="new" class="form-check-label" style="color: rgb(236, 145, 26) !important;"> New (<span
                    id="new_count" class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="submitted" name="submitted" value="Submitted" />
            <label for="submitted" class="form-check-label" style="color: rgb(236, 145, 26) !important;"> Submitted
                (<span id="submitted_count" class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="on_going" name="on_going" value="On Going" />
            <label for="on_going" class="form-check-label" style="color: rgb(236, 145, 26) !important;"> On Going
                (<span id="ongoing_count" class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="complete" name="complete" value="Complete" />
            <label for="complete" class="form-check-label" style="color: rgb(236, 145, 26) !important;"> Complete
                (<span id="completed_count" class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="pending_job" name="pending_job" value="Pending Job" />
            <label for="pending_job" class="form-check-label"> Pending (<span id="pending_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="refund_request" name="refund_request" value="Refund Request" />
            <label for="refund_request" class="form-check-label"> Refund Request (<span id="refund_request_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="refund_list" name="refund" value="Refund" />
            <label for="refund_list" class="form-check-label"> Refund (<span id="refund_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="adminCompleted" name="admin_completed" />
            <label for="adminCompleted" class="form-check-label"> Admin Completed (<span id="admin_completed_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="noentry" name="noentry" value="No Entry" />
            <label for="noentry" class="form-check-label"> No Verify (<span id="no_verify_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="rejected" name="rejected" value="Rejected" />
            <label for="rejected" class="form-check-label"> Rejected (<span id="rejected_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="fixed" name="fixed" value="Fixed" />
            <label for="fixed" class="form-check-label"> Fixed (<span id="fixed_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="verified" name="verified" value="Verified" />
            <label for="verified" class="form-check-label"> Verified (<span id="verified_count"
                    class="d-inline">0</span>) </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem;">
            <input type="checkbox" id="overdue" name="overdue" value="Overdue" />
            <label for="overdue" class="form-check-label" style="color: rgb(255, 0, 0) !important;"> Overdue
                (<span id="overdue_count" class="d-inline">0</span>) </label>
        </div>
    </div>
</form>
