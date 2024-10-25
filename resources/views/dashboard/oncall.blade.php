<x-layouts.dashboard-content>
  <div class="dashboard__content__box">
    <div class="first-section-btn">
      <div class="excel-btn align-btn mb-5">
        <button type="button" id="trash-update" data-href="https://sdmstaging.5bb.com.mm/dashboard/on-call-trash" class="btn button-trash">Trash</button>
        <a href="https://sdmstaging.5bb.com.mm/dashboard/on-call/create" class="btn btn-info list-new-btn">Add New</a>
      </div>
    </div>
    <div class="on-call-container">
      <div class="form-group row search-filter-position mb-5">
        <form action="https://sdmstaging.5bb.com.mm/dashboard/on-call-filter" method="get" id="formCheck" class="col-md-12 row on-call-form-search">
          <input type="hidden" name="sortName" value="" id="sortingName" />
          <div class="col-md-12 row">
            <div class="date-group col-md-12">
              <div class="installation-search"><input name="search" id="q" value="" type="search" placeholder="Search .." aria-label="Search" class="form-control mr-sm-2 search-al" style="width: 300px;" /></div>

              <div class="col-md-2 input-group">
                <select id="date_type" name="date_type" class="custom-select form-control">
                  <option value="created_date">Created Date</option>
                  <option value="admin_completed_date">Admin Completed Date</option>
                  <option value="5bb_completed_date">5bb Completed Date</option>
                </select>
              </div>
              <div class="col-md-2 input-group date"><input name="from_date" value="2024-09-23" type="text" placeholder="YYYY-mm-dd" id="from_date" class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" /></div>
              <div class="col-md-2 input-group date"><input name="to_date" value="2024-10-23" type="text" placeholder="YYYY-mm-dd" id="to_date" class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" /></div>
            </div>
          </div>
          <div class="col-md-12 row mt-3">
            <div class="col-md-2 input-group">
              <select name="lsp_id" id="lsp_id" class="custom-select form-control">
                <option value="">Select LSP</option>
                <option value="1">
                  Lucky Joint YGN
                </option>
                <option value="2">
                  Telco Speed YGN
                </option>
                <option value="3">
                  E Power YGN
                </option>
                <option value="5">
                  Gigger Bit YGN
                </option>
                <option value="6">
                  GN YGN
                </option>
                <option value="7">
                  Power Deal YGN
                </option>
                <option value="8">
                  Net Villa
                </option>
                <option value="9">
                  WYP PYAY
                </option>
                <option value="10">
                  Tun Tech BGO
                </option>
                <option value="11">
                  Access 24 YGN
                </option>
                <option value="12">
                  ICT Test
                </option>
                <option value="13">
                  Max Integrate MLM
                </option>
                <option value="14">
                  Telco Speed MDY
                </option>
                <option value="15">
                  Lucky Joint MDY
                </option>
                <option value="16">
                  Deleted Acc
                </option>
                <option value="17">
                  GN MDY
                </option>
                <option value="18">
                  GN Plan UP
                </option>
                <option value="19">
                  E Power NPT
                </option>
                <option value="20">
                  MTD NPT
                </option>
                <option value="21">
                  GN NPT
                </option>
                <option value="22">
                  SG Power
                </option>
                <option value="23">
                  REDBOX
                </option>
                <option value="24">
                  Max Integrate MDY
                </option>
                <option value="25">
                  M2 MDY
                </option>
                <option value="26">
                  MNIT
                </option>
                <option value="27">
                  F&amp;C Network Solution Group
                </option>
                <option value="28">
                  Qurvice Com YGN
                </option>
                <option value="29">
                  A8 BGO
                </option>
                <option value="30">
                  4NetSYS MGW
                </option>
                <option value="31">
                  A8 YGN
                </option>
                <option value="32">
                  Tele Brother YGN
                </option>
                <option value="33">
                  Spectrum Network YGN
                </option>
                <option value="34">
                  May Than Sin Tun YGN
                </option>
                <option value="35">
                  TZ YGN
                </option>
                <option value="36">
                  Spectrum Network NPT
                </option>
                <option value="37">
                  Golden Ruby Telecommunication Co.,Ltd
                </option>
                <option value="38">
                  AZH MDY
                </option>
                <option value="39">
                  Speed4U MDY
                </option>
                <option value="40">
                  A8 NPT
                </option>
                <option value="41">
                  BS TNOD YGN
                </option>
                <option value="42">
                  ICT LSP Testing
                </option>
                <option value="43">
                  Z &amp; B BGO
                </option>
                <option value="44">
                  CAC YGN
                </option>
                <option value="45">
                  EMS MLM
                </option>
                <option value="46">
                  M9
                </option>
                <option value="47">
                  GN BGO
                </option>
                <option value="48">
                  SSLH
                </option>
                <option value="49">
                  Shay Yay Sat HPA
                </option>
                <option value="50">
                  Royal S7 BGO
                </option>
                <option value="51">
                  ICT Testing LSP
                </option>
                <option value="52">
                  Shwe Emperor Group
                </option>
                <option value="53">
                  Shwe Emperor Group
                </option>
                <option value="61">
                  CM LSP
                </option>
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
              </select>
            </div>
            <div class="col-md-2 input-group">
              <select name="city_id" class="custom-select form-control">
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
              </select>
            </div>
            <div class="col-md-2 input-group">
              <select name="township_id" class="form-control custom-select">
                <option value=""> Select Township </option>
                <option value="1">
                  Ahlone
                </option>
                <option value="46">
                  Amarapura
                </option>
                <option value="83">
                  Aung Myay Tha Zan
                </option>
                <option value="189">
                  Aunglan
                </option>
                <option value="53">
                  Bago
                </option>
                <option value="2">
                  Bahan
                </option>
                <option value="14">
                  Botataung
                </option>
                <option value="86">
                  Chan Aye Thazan
                </option>
                <option value="82">
                  Chan Mya Thazi
                </option>
                <option value="193">
                  Chaungsone
                </option>
                <option value="68">
                  Chaungzon
                </option>
                <option value="28">
                  Cocokyun
                </option>
                <option value="3">
                  Dagon
                </option>
                <option value="15">
                  Dagon Seikkan
                </option>
                <option value="57">
                  Daik-U
                </option>
                <option value="29">
                  Dala
                </option>
                <option value="183">
                  Danubyu
                </option>
                <option value="16">
                  Dawbon
                </option>
                <option value="190">
                  Dedaye
                </option>
                <option value="158">
                  Dekkhina Thiri
                </option>
                <option value="87">
                  East Dagon
                </option>
                <option value="192">
                  Hinthada
                </option>
                <option value="4">
                  Hlaing
                </option>
                <option value="92">
                  Hlaing Tharyar
                </option>
                <option value="39">
                  Hlegu
                </option>
                <option value="40">
                  Hmawbi
                </option>
                <option value="41">
                  Htantabin
                </option>
                <option value="164">
                  Htaukkyant
                </option>
                <option value="42">
                  Insein
                </option>
                <option value="184">
                  Kalay
                </option>
                <option value="5">
                  Kamayut
                </option>
                <option value="54">
                  Kawa
                </option>
                <option value="30">
                  Kawhmu
                </option>
                <option value="31">
                  Khayan
                </option>
                <option value="32">
                  Kungyangon
                </option>
                <option value="67">
                  Kyaikmaraw
                </option>
                <option value="6">
                  Kyauktada
                </option>
                <option value="33">
                  Kyauktan
                </option>
                <option value="7">
                  Kyimyindaing
                </option>
                <option value="8">
                  Lanmadaw
                </option>
                <option value="9">
                  Latha
                </option>
                <option value="73">
                  Lewe
                </option>
                <option value="181">
                  Ma-Ubin
                </option>
                <option value="172">
                  Magway
                </option>
                <option value="84">
                  Maha Aung Myay
                </option>
                <option value="119">
                  Mandalay
                </option>
                <option value="66">
                  Mawlamyine
                </option>
                <option value="182">
                  Mawlamyinegyun
                </option>
                <option value="10">
                  Mayangon
                </option>
                <option value="17">
                  Mingala Taungnyunt
                </option>
                <option value="43">
                  Mingaladon
                </option>
                <option value="70">
                  Mudon
                </option>
                <option value="108">
                  Nay Pyi Taw
                </option>
                <option value="80">
                  North Dagon
                </option>
                <option value="21">
                  North Okkalapa
                </option>
                <option value="58">
                  Nyaunglebin
                </option>
                <option value="191">
                  Oakthar
                </option>
                <option value="157">
                  Ottara Thiri
                </option>
                <option value="11">
                  Pabedan
                </option>
                <option value="173">
                  Pakokku
                </option>
                <option value="51">
                  Patheingyi
                </option>
                <option value="22">
                  Pazundaung
                </option>
                <option value="179">
                  Pobba Thiri
                </option>
                <option value="167">
                  Pyapon
                </option>
                <option value="63">
                  Pyay
                </option>
                <option value="52">
                  Pyigyidagun
                </option>
                <option value="72">
                  Pyinmana
                </option>
                <option value="12">
                  Sanchaung
                </option>
                <option value="13">
                  Seikkan
                </option>
                <option value="34">
                  Seikkyi Kanaungto
                </option>
                <option value="59">
                  Shwegyin
                </option>
                <option value="44">
                  Shwepyitha
                </option>
                <option value="81">
                  South Dagon
                </option>
                <option value="23">
                  South Okkalapa
                </option>
                <option value="45">
                  Taikkyi
                </option>
                <option value="24">
                  Tamwe
                </option>
                <option value="74">
                  Tatkone
                </option>
                <option value="188">
                  Taungdwingyi
                </option>
                <option value="185">
                  temp
                </option>
                <option value="25">
                  Thaketa
                </option>
                <option value="56">
                  Thanatpin
                </option>
                <option value="69">
                  Thanbyuzayat
                </option>
                <option value="35">
                  Thanlyin
                </option>
                <option value="187">
                  Theinzayat
                </option>
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
              </select>
            </div>
            <div class="col-md-3">
              <select name="issue_type_id" class="form-control custom-select">
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
                <option value="5">
                  Adapter Damage - Change
                </option>
                <option value="6">
                  WAN IP not assigned to ONU
                </option>
                <option value="7">
                  OLT,FDT,FAT,port Change
                </option>
                <option value="8">
                  Cancel
                </option>
                <option value="9">
                  Terminated
                </option>
                <option value="10">
                  Customer Pending
                </option>
                <option value="11">
                  Wifi Error
                </option>
              </select>
            </div>
          </div>
          <div class="form-group grid-container">
            <div class="form-check check-one">
              <input type="checkbox" id="new" name="new" value="Pending" class="form-check-input" />
              <label for="new" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                New(
                <p id="new_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="submitted" name="submitted" value="Submitted" class="form-check-input" />
              <label for="submitted" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                Submitted(
                <p id="submitted_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="on_going" name="on_going" value="On Going" class="form-check-input" />
              <label for="on_going" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                On Going(
                <p id="ongoing_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="complete" name="complete" value="Complete" class="form-check-input" />
              <label for="complete" class="form-check-label" style="color: rgb(236, 145, 26) !important;">
                Complete(
                <p id="completed_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="pending_job" name="pending_job" value="pending_job" class="form-check-input" />
              <label for="pending_job" class="form-check-label">
                Pending(
                <p id="pending_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="refund_request" name="refund_request" value="Refund Request" class="form-check-input" />
              <label for="refund_request" class="form-check-label">
                Refund Request(
                <p id="refund_request_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="refund_list" name="refund" value="Refund" class="form-check-input" />
              <label for="refund_list" class="form-check-label">
                Refund(
                <p id="refund_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="adminCompleted" name="admin_completed" class="form-check-input" />
              <label for="adminCompleted" class="form-check-label">
                Admin Completed(
                <p id="admin_completed_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="noentry" name="noentry" value="noentry" class="form-check-input" />
              <label for="noentry" class="form-check-label">
                No Verify(
                <p id="no_verify_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="rejected" name="rejected" value="rejected" class="form-check-input" />
              <label for="rejected" class="form-check-label">
                Rejected(
                <p id="rejected_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="fixed" name="fixed" value="fixed" class="form-check-input" />
              <label for="fixed" class="form-check-label">
                Fixed(
                <p id="fixed_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="verified" name="verified" value="verified" class="form-check-input" />
              <label for="verified" class="form-check-label">
                Verified(
                <p id="verified_count" class="d-inline">0</p>
                )
              </label>
            </div>
            <div class="form-check check-one">
              <input type="checkbox" id="overdue" name="overdue" value="Overdue" class="form-check-input" />
              <label for="overdue" class="form-check-label" style="color: rgb(255, 0, 0) !important;">
                Overdue(
                <p id="overdue_count" class="d-inline">0</p>
                )
              </label>
            </div>
          </div>
        </form>
      </div>
      <div class="d-flex flex-row">
        <div class="p-2"></div>
        <div class="rounded mb-4 mt-2 px-2 py-2 bg-success text-white">0</div>
      </div>
      <div class="table-responsive">
        <table id="sorting-table" class="table table-hover mb-0" style="table-layout: fixed;">
          <thead>
            <tr>
              <th onclick="sortTable('id')" class="sort-header-style" style="width: 80px;">
                Order ID
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th onclick="sortTable('pos_created_date')" class="sort-header-style" style="width: 100px;">
                POS Created Date
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th style="width: 160px;">Customer Account No</th>
              <th style="width: 160px;">PPOE User No</th>
              <th style="width: 140px;">Customer Name</th>
              <th onclick="sortTable('areaCode')" class="sort-header-style" style="width: 140px;">
                Area Code/Township
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th onclick="sortTable('complainDate')" class="sort-header-style" style="width: 120px;">
                Complain date
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th onclick="sortTable('due')" class="sort-header-style" style="width: 120px;">
                Due Date
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th onclick="sortTable('overDue')" class="sort-header-style" style="width: 120px;">
                Overdue Days
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
                <!-- <i class="fas fa-sort"></i> -->
              </th>
              <th style="width: 50px;">FOC</th>
              <th style="width: 100px;">Status</th>
              <th style="width: 100px;">Verify Status</th>
              <th style="width: 100px;">Complain Type</th>
              <th style="width: 100px;">Assigned LSP</th>
              <th onclick="sortTable('created_at')" class="sort-header-style" style="width: 100px;">
                Created At
                <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                  <path
                    fill="currentColor"
                    d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                  ></path>
                </svg>
              </th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</x-layouts.dashboard-content>
