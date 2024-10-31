<form action="https://sdmstaging.5bb.com.mm/dashboard/installation-filter" method="get" id="formCheck">
    <input type="hidden" name="sortName" value="" id="sortingName" />
    <div class="d-flex flex-wrap" style="gap: 0.5rem">
        <div class="d-flex" style="gap: 0.5rem;">
            <div class="d-flex" style="gap: 0.5rem">
                <input name="q" id="q" value="" type="search" placeholder="Search ..."
                    aria-label="Search" class="form-control" style="width: 300px;" />
                <x-form.select name="date_type" id="date_type">
                    <option value="created_date">Created Date</option>
                    <option value="admin_completed_date">Admin Completed Date</option>
                    <option value="5bb_completed_date">5bb Completed Date</option>
                </x-form.select>
            </div>
            <div class="d-flex" style="gap: 0.5rem">
                <input name="from_date" value="2024-07-01" type="text" placeholder="YYYY-mm-dd" id="from_date"
                    class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" />
                <input name="to_date" value="2024-10-22" placeholder="YYYY-mm-dd" type="text" id="to_date"
                    class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" />
            </div>
        </div>
        <div class="d-flex" style="gap: 0.5rem;">
            <x-form.select name="lsp_id" id="lsp_id">
                <option value="">Select LSP</option>
                <option value="1"> Lucky Joint YGN</option>
                <option value="2"> Telco Speed YGN</option>
                <option value="3"> E Power YGN</option>
                <option value="5"> Gigger Bit YGN</option>
                <option value="6"> GN YGN</option>
                <option value="7"> Power Deal YGN</option>
                <option value="8"> Net Villa</option>
                <option value="9"> WYP PYAY</option>
                <option value="10"> Tun Tech BGO</option>
                <option value="11"> Access 24 YGN</option>
                <option value="12"> ICT Test</option>
                <option value="13"> Max Integrate MLM</option>
                <option value="14"> Telco Speed MDY</option>
                <option value="15"> Lucky Joint MDY</option>
                <option value="16"> Deleted Acc</option>
                <option value="17"> GN MDY</option>
                <option value="18"> GN Plan UP</option>
                <option value="19"> E Power NPT</option>
                <option value="20"> MTD NPT</option>
                <option value="21"> GN NPT</option>
                <option value="22"> SG Power</option>
                <option value="23"> REDBOX</option>
                <option value="24"> Max Integrate MDY</option>
                <option value="25"> M2 MDY</option>
                <option value="26"> MNIT</option>
                <option value="27"> F&amp;C Network Solution Group</option>
                <option value="28"> Qurvice Com YGN</option>
                <option value="29"> A8 BGO</option>
                <option value="30"> 4NetSYS MGW</option>
                <option value="31"> A8 YGN</option>
                <option value="32"> Tele Brother YGN</option>
                <option value="33"> Spectrum Network YGN</option>
                <option value="34"> May Than Sin Tun YGN</option>
                <option value="35"> TZ YGN</option>
                <option value="36"> Spectrum Network NPT</option>
                <option value="37"> Golden Ruby Telecommunication Co.,Ltd</option>
                <option value="38"> AZH MDY</option>
                <option value="39"> Speed4U MDY</option>
                <option value="40"> A8 NPT</option>
                <option value="41"> BS TNOD YGN</option>
                <option value="42"> ICT LSP Testing</option>
                <option value="43"> Z &amp; B BGO</option>
                <option value="44"> CAC YGN</option>
                <option value="45"> EMS MLM</option>
                <option value="46"> M9</option>
                <option value="47"> GN BGO</option>
                <option value="48"> SSLH</option>
                <option value="49"> Shay Yay Sat HPA</option>
                <option value="50"> Royal S7 BGO</option>
                <option value="51"> ICT Testing LSP</option>
                <option value="52"> Shwe Emperor Group</option>
                <option value="53"> Shwe Emperor Group</option>
                <option value="61"> CM LSP</option>
                <option value="62"> Test1</option>
                <option value="63"> GT LSP</option>
                <option value="64"> GT Admin LSP</option>
                <option value="65"> Testing ICT01</option>
                <option value="66"> YGN_TEST_01</option>
                <option value="67"> ENP_Test</option>
            </x-form.select>
            <x-form.select name="city_id" id="city_id">
                <option value="">Select City</option>
                <option value="1"> Yangon</option>
                <option value="2"> Mandalay</option>
                <option value="3"> Bago</option>
                <option value="4"> Pyay</option>
                <option value="5"> Mawlamyine</option>
                <option value="6"> NayPyiTaw</option>
                <option value="7"> Magway</option>
                <option value="8"> Pakokku</option>
                <option value="9"> Ayeyarwaddy</option>
                <option value="10"> Sagaing</option>
            </x-form.select>
            <x-form.select name="township_id" id="township_id">
                <option value=""> Select Township </option>
                <option value="164"> Htaukkyant</option>
                <option value="42"> Insein</option>
                <option value="7"> Kyimyindaing</option>
                <option value="8"> Lanmadaw</option>
                <option value="9"> Latha</option>
            </x-form.select>
        </div>
    </div>
    <div class="installation__filter__grid-wrapper my-4">
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="new" name="new" value="Pending" />
            <label for="new" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                New (<span id="new_count" class="d-inline">1</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="submitted" name="submitted" value="Submitted" />
            <label for="submitted" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                Submitted (<span id="submitted_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="on_going" name="on_going" value="On Going" />
            <label for="on_going" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                On Going (<span id="ongoing_count" class="d-inline">3</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="complete" name="complete" value="Complete" />
            <label for="complete" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                Complete (<span id="completed_count" class="d-inline">25</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="pending_job" name="pending_job" value="Pending Job" />
            <label for="pending_job" class="form-check-label">
                Pending (<span id="pending_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="refund_request" name="refund_request" value="Refund Request" />
            <label for="refund_request" class="form-check-label">
                Refund Request (<span id="refund_request_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="refund_list" name="refund" value="Refund" />
            <label for="refund_list" class="form-check-label">
                Refund (<span id="refund_count" class="d-inline">1</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="termination" name="termination" value="Termination" />
            <label for="termination" class="form-check-label">
                Termination (<span id="termination_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="adminCompleted" name="admin_completed" />
            <label for="adminCompleted" class="form-check-label">
                Admin Completed (<span id="admin_completed_count" class="d-inline">2</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="cancelled" name="cancelled" value="Cancelled" />
            <label for="cancelled" class="form-check-label">
                Cancelled (<span id="cancelled_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="noentry" name="noentry" value="No Entry" />
            <label for="noentry" class="form-check-label">
                No Verify (<span id="no_verify_count" class="d-inline">13</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="rejected" name="rejected" value="Rejected" />
            <label for="rejected" class="form-check-label">
                Rejected (<span id="rejected_count" class="d-inline">2</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="fixed" name="fixed" value="Fixed" />
            <label for="fixed" class="form-check-label">
                Fixed (<span id="fixed_count" class="d-inline">0</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="verified" name="verified" value="Verified" />
            <label for="verified" class="form-check-label">
                Verified (<span id="verified_count" class="d-inline">9</span>)
            </label>
        </div>
        <div class="d-flex align-items-center" style="gap: 0.3rem">
            <input type="checkbox" id="overdue" name="overdue" value="Overdue" />
            <label for="overdue" class="form-check-label" style="color: rgb(255, 0, 0) !important;">
                Overdue (<span id="overdue_count" class="d-inline">1</span>)
            </label>
        </div>
    </div>
</form>
