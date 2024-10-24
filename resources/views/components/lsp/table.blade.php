<div class="table-responsive">
  <table id="sorting-table" class="table table-hover mb-0">
      <thead>
          <tr>
              <th class="table-width-15 sort-header-style">Name </th>
              <th class="sort-header-style" style="width: 300px;">Type </th>
              <th class="sort-header-style" style="width: 325px;">Area Code </th>
              <th onclick="sortTable(1)" class="sort-header-style text-center" style="width: 130px;">Warranty
                  <br>
                  Policy <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false"
                      data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                      </path>
                  </svg><!-- <i class="fas fa-sort"></i> --></th>
              <th onclick="sortTable(2)" class="sort-header-style text-center" style="width: 155px;">Assigned
                  <br>
                  Jobs <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false"
                      data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                      </path>
                  </svg><!-- <i class="fas fa-sort"></i> --></th>
              <th class="sort-header-style text-center" style="width: 180px;">OverDue Jobs </th>
              <th onclick="sortTable(3)" class="sort-header-style text-center" style="width: 175px;">Pending
                  <br>
                  Jobs <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false"
                      data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                      </path>
                  </svg><!-- <i class="fas fa-sort"></i> --></th>
              <th onclick="sortTable(4)" class="sort-header-style text-center" style="width: 168px;">
                  Assignable
                  <br> Jobs <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true"
                      focusable="false" data-prefix="fas" data-icon="sort" role="img"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                      <path fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                      </path>
                  </svg><!-- <i class="fas fa-sort"></i> -->
              </th>
              <th style="border-left: 1px solid rgb(222, 217, 217);"></th>
              <th class="sort-header-style d-flex" style="width: 168px;">Number of Active Teams</th>
          </tr>
      </thead>
      <tbody id="lsp-t-body">
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation">
                      <span class="lspName">Telco Speed YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="6339" id="assign_jobs_2">
                  <input type="hidden" name="overdue" value="1" id="overdue_2">
                  <input type="hidden" name="overdue_jobs" value="1" id="overdue_jobs_2">
                  <input type="hidden" name="remaining" value="1" id="remaining_2">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_2">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_2">
                  <input type="hidden" name="total" value="17" id="total_2">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  6339

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">1</span>
                  /
                  <span class="pr-2">
                      1

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">1</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_2">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">17</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/5?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/5?name=installation">
                      <span class="lspName">Gigger Bit YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="17202" id="assign_jobs_5">
                  <input type="hidden" name="overdue" value="40" id="overdue_5">
                  <input type="hidden" name="overdue_jobs" value="40" id="overdue_jobs_5">
                  <input type="hidden" name="remaining" value="40" id="remaining_5">
                  <input type="hidden" name="pending_jobs" value="112" id="pending_jobs_5">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_5">
                  <input type="hidden" name="total" value="4" id="total_5">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  17202

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">40</span>
                  /
                  <span class="pr-2">
                      40

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">40</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/5?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">112</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_5">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">4</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/3?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/3?name=installation">
                      <span class="lspName">E Power YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="22169" id="assign_jobs_3">
                  <input type="hidden" name="overdue" value="35" id="overdue_3">
                  <input type="hidden" name="overdue_jobs" value="35" id="overdue_jobs_3">
                  <input type="hidden" name="remaining" value="35" id="remaining_3">
                  <input type="hidden" name="pending_jobs" value="102" id="pending_jobs_3">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_3">
                  <input type="hidden" name="total" value="10" id="total_3">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  22169

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">35</span>
                  /
                  <span class="pr-2">
                      35

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">35</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/3?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">102</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_3">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">10</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/1?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/1?name=installation">
                      <span class="lspName">Lucky Joint YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="43939" id="assign_jobs_1">
                  <input type="hidden" name="overdue" value="63" id="overdue_1">
                  <input type="hidden" name="overdue_jobs" value="63" id="overdue_jobs_1">
                  <input type="hidden" name="remaining" value="63" id="remaining_1">
                  <input type="hidden" name="pending_jobs" value="243" id="pending_jobs_1">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_1">
                  <input type="hidden" name="total" value="10" id="total_1">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  43939

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">63</span>
                  /
                  <span class="pr-2">
                      63

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">63</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/1?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">243</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_1">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">10</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/7?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/7?name=installation">
                      <span class="lspName">Power Deal YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="34957" id="assign_jobs_7">
                  <input type="hidden" name="overdue" value="17" id="overdue_7">
                  <input type="hidden" name="overdue_jobs" value="17" id="overdue_jobs_7">
                  <input type="hidden" name="remaining" value="17" id="remaining_7">
                  <input type="hidden" name="pending_jobs" value="406" id="pending_jobs_7">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_7">
                  <input type="hidden" name="total" value="17" id="total_7">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  34957

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">17</span>
                  /
                  <span class="pr-2">
                      17

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">17</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/7?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">406</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_7">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">17</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/6?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/6?name=installation">
                      <span class="lspName">GN YGN</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="58712" id="assign_jobs_6">
                  <input type="hidden" name="overdue" value="418" id="overdue_6">
                  <input type="hidden" name="overdue_jobs" value="418" id="overdue_jobs_6">
                  <input type="hidden" name="remaining" value="418" id="remaining_6">
                  <input type="hidden" name="pending_jobs" value="279" id="pending_jobs_6">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_6">
                  <input type="hidden" name="total" value="11" id="total_6">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  58712

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">418</span>
                  /
                  <span class="pr-2">
                      418

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">418</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/6?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">279</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_6">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">11</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/8?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/8?name=installation">
                      <span class="lspName">Net Villa</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="1671" id="assign_jobs_8">
                  <input type="hidden" name="overdue" value="0" id="overdue_8">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_8">
                  <input type="hidden" name="remaining" value="0" id="remaining_8">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_8">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_8">
                  <input type="hidden" name="total" value="5" id="total_8">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  1671

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_8">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">5</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/11?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/11?name=installation">
                      <span class="lspName">Access 24 YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="28128" id="assign_jobs_11">
                  <input type="hidden" name="overdue" value="84" id="overdue_11">
                  <input type="hidden" name="overdue_jobs" value="84" id="overdue_jobs_11">
                  <input type="hidden" name="remaining" value="84" id="remaining_11">
                  <input type="hidden" name="pending_jobs" value="185" id="pending_jobs_11">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_11">
                  <input type="hidden" name="total" value="9" id="total_11">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  28128

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">84</span>
                  /
                  <span class="pr-2">
                      84

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">84</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/11?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">185</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_11">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">9</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/12?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/12?name=installation">
                      <span class="lspName">ICT Test</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="135" id="assign_jobs_12">
                  <input type="hidden" name="overdue" value="0" id="overdue_12">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_12">
                  <input type="hidden" name="remaining" value="0" id="remaining_12">
                  <input type="hidden" name="pending_jobs" value="5" id="pending_jobs_12">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_12">
                  <input type="hidden" name="total" value="12" id="total_12">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX /</span>
                  <span class="text-align-center">ODN /</span>
                  <span class="text-align-center">FAT </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">OML_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  135

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/12?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">5</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_12">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">12</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/18?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/18?name=installation">
                      <span class="lspName">GN Plan UP</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="180" id="assign_jobs_18">
                  <input type="hidden" name="overdue" value="0" id="overdue_18">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_18">
                  <input type="hidden" name="remaining" value="0" id="remaining_18">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_18">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_18">
                  <input type="hidden" name="total" value="1" id="total_18">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  180

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_18">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/22?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/22?name=installation">
                      <span class="lspName">SG Power</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="4582" id="assign_jobs_22">
                  <input type="hidden" name="overdue" value="0" id="overdue_22">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_22">
                  <input type="hidden" name="remaining" value="0" id="remaining_22">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_22">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_22">
                  <input type="hidden" name="total" value="13" id="total_22">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  4582

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_22">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">13</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/23?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/23?name=installation">
                      <span class="lspName">REDBOX</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="3636" id="assign_jobs_23">
                  <input type="hidden" name="overdue" value="0" id="overdue_23">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_23">
                  <input type="hidden" name="remaining" value="0" id="remaining_23">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_23">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_23">
                  <input type="hidden" name="total" value="1" id="total_23">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  3636

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_23">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/26?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/26?name=installation">
                      <span class="lspName">MNIT</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="1" id="assign_jobs_26">
                  <input type="hidden" name="overdue" value="0" id="overdue_26">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_26">
                  <input type="hidden" name="remaining" value="0" id="remaining_26">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_26">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_26">
                  <input type="hidden" name="total" value="1" id="total_26">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  1

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_26">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/28?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/28?name=installation">
                      <span class="lspName">Qurvice Com YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="6287" id="assign_jobs_28">
                  <input type="hidden" name="overdue" value="69" id="overdue_28">
                  <input type="hidden" name="overdue_jobs" value="69" id="overdue_jobs_28">
                  <input type="hidden" name="remaining" value="69" id="remaining_28">
                  <input type="hidden" name="pending_jobs" value="96" id="pending_jobs_28">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_28">
                  <input type="hidden" name="total" value="2" id="total_28">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  6287

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">69</span>
                  /
                  <span class="pr-2">
                      69

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">69</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/28?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">96</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_28">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">2</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/31?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/31?name=installation">
                      <span class="lspName">A8 YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="1422" id="assign_jobs_31">
                  <input type="hidden" name="overdue" value="3" id="overdue_31">
                  <input type="hidden" name="overdue_jobs" value="3" id="overdue_jobs_31">
                  <input type="hidden" name="remaining" value="3" id="remaining_31">
                  <input type="hidden" name="pending_jobs" value="3" id="pending_jobs_31">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_31">
                  <input type="hidden" name="total" value="1" id="total_31">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  1422

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">3</span>
                  /
                  <span class="pr-2">
                      3

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">3</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/31?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">3</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_31">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/32?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/32?name=installation">
                      <span class="lspName">Tele Brother YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="6089" id="assign_jobs_32">
                  <input type="hidden" name="overdue" value="20" id="overdue_32">
                  <input type="hidden" name="overdue_jobs" value="20" id="overdue_jobs_32">
                  <input type="hidden" name="remaining" value="20" id="remaining_32">
                  <input type="hidden" name="pending_jobs" value="61" id="pending_jobs_32">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_32">
                  <input type="hidden" name="total" value="6" id="total_32">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  6089

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">20</span>
                  /
                  <span class="pr-2">
                      20

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">20</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/32?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">61</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_32">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">6</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/33?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/33?name=installation">
                      <span class="lspName">Spectrum Network YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="4240" id="assign_jobs_33">
                  <input type="hidden" name="overdue" value="17" id="overdue_33">
                  <input type="hidden" name="overdue_jobs" value="17" id="overdue_jobs_33">
                  <input type="hidden" name="remaining" value="17" id="remaining_33">
                  <input type="hidden" name="pending_jobs" value="102" id="pending_jobs_33">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_33">
                  <input type="hidden" name="total" value="1" id="total_33">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  4240

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">17</span>
                  /
                  <span class="pr-2">
                      17

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">17</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/33?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">102</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_33">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/34?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/34?name=installation">
                      <span class="lspName">May Than Sin Tun YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="3802" id="assign_jobs_34">
                  <input type="hidden" name="overdue" value="15" id="overdue_34">
                  <input type="hidden" name="overdue_jobs" value="15" id="overdue_jobs_34">
                  <input type="hidden" name="remaining" value="15" id="remaining_34">
                  <input type="hidden" name="pending_jobs" value="68" id="pending_jobs_34">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_34">
                  <input type="hidden" name="total" value="1" id="total_34">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  3802

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">15</span>
                  /
                  <span class="pr-2">
                      15

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">15</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/34?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">68</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_34">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">1</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/35?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/35?name=installation">
                      <span class="lspName">TZ YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="3427" id="assign_jobs_35">
                  <input type="hidden" name="overdue" value="19" id="overdue_35">
                  <input type="hidden" name="overdue_jobs" value="19" id="overdue_jobs_35">
                  <input type="hidden" name="remaining" value="19" id="remaining_35">
                  <input type="hidden" name="pending_jobs" value="73" id="pending_jobs_35">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_35">
                  <input type="hidden" name="total" value="0" id="total_35">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  3427

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">19</span>
                  /
                  <span class="pr-2">
                      19

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">19</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/35?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">73</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_35">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/41?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/41?name=installation">
                      <span class="lspName">BS TNOD YGN</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="1540" id="assign_jobs_41">
                  <input type="hidden" name="overdue" value="1" id="overdue_41">
                  <input type="hidden" name="overdue_jobs" value="1" id="overdue_jobs_41">
                  <input type="hidden" name="remaining" value="1" id="remaining_41">
                  <input type="hidden" name="pending_jobs" value="4" id="pending_jobs_41">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_41">
                  <input type="hidden" name="total" value="0" id="total_41">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  1540

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">1</span>
                  /
                  <span class="pr-2">
                      1

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">1</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/41?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">4</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_41">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/42?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/42?name=installation">
                      <span class="lspName">ICT LSP Testing</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_42">
                  <input type="hidden" name="overdue" value="0" id="overdue_42">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_42">
                  <input type="hidden" name="remaining" value="0" id="remaining_42">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_42">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_42">
                  <input type="hidden" name="total" value="0" id="total_42">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_42">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/44?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/44?name=installation">
                      <span class="lspName">CAC YGN</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="1033" id="assign_jobs_44">
                  <input type="hidden" name="overdue" value="16" id="overdue_44">
                  <input type="hidden" name="overdue_jobs" value="16" id="overdue_jobs_44">
                  <input type="hidden" name="remaining" value="16" id="remaining_44">
                  <input type="hidden" name="pending_jobs" value="3" id="pending_jobs_44">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_44">
                  <input type="hidden" name="total" value="0" id="total_44">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  1033

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">16</span>
                  /
                  <span class="pr-2">
                      16

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">16</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/44?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">3</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_44">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/46?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/46?name=installation">
                      <span class="lspName">M9</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="34" id="assign_jobs_46">
                  <input type="hidden" name="overdue" value="0" id="overdue_46">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_46">
                  <input type="hidden" name="remaining" value="0" id="remaining_46">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_46">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_46">
                  <input type="hidden" name="total" value="0" id="total_46">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  34

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_46">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/48?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/48?name=installation">
                      <span class="lspName">SSLH</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_48">
                  <input type="hidden" name="overdue" value="0" id="overdue_48">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_48">
                  <input type="hidden" name="remaining" value="0" id="remaining_48">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_48">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_48">
                  <input type="hidden" name="total" value="0" id="total_48">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">OML_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_48">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/51?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/51?name=installation">
                      <span class="lspName">ICT Testing LSP</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_51">
                  <input type="hidden" name="overdue" value="0" id="overdue_51">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_51">
                  <input type="hidden" name="remaining" value="0" id="remaining_51">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_51">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_51">
                  <input type="hidden" name="total" value="0" id="total_51">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_51">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/52?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/52?name=installation">
                      <span class="lspName">Shwe Emperor Group</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_52">
                  <input type="hidden" name="overdue" value="0" id="overdue_52">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_52">
                  <input type="hidden" name="remaining" value="0" id="remaining_52">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_52">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_52">
                  <input type="hidden" name="total" value="0" id="total_52">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_52">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/53?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/53?name=installation">
                      <span class="lspName">Shwe Emperor Group</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="26" id="assign_jobs_53">
                  <input type="hidden" name="overdue" value="12" id="overdue_53">
                  <input type="hidden" name="overdue_jobs" value="12" id="overdue_jobs_53">
                  <input type="hidden" name="remaining" value="12" id="remaining_53">
                  <input type="hidden" name="pending_jobs" value="1" id="pending_jobs_53">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_53">
                  <input type="hidden" name="total" value="0" id="total_53">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 2</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  26

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">12</span>
                  /
                  <span class="pr-2">
                      12

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">12</span>
              </td>
              <td class="text-center">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/53?name=pending&amp;pending=1">
                      <span class="text-secondary font-weight-bold pr-2">1</span>
                  </a>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_53">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/61?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/61?name=installation">
                      <span class="lspName">CM LSP</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="33" id="assign_jobs_61">
                  <input type="hidden" name="overdue" value="2" id="overdue_61">
                  <input type="hidden" name="overdue_jobs" value="2" id="overdue_jobs_61">
                  <input type="hidden" name="remaining" value="4" id="remaining_61">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_61">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_61">
                  <input type="hidden" name="total" value="3" id="total_61">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  33

              </td>
              <td class="px-0 text-center">

                  <!--Remaining overdue job including legal 2 Days / remaining overdue job / remaining job-->
                  <span class="text-danger font-weight-bold pr-2">2</span>
                  /
                  <span class="pr-2">
                      2

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">4</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_61">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">3</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/62?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/62?name=installation">
                      <span class="lspName">Test1</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_62">
                  <input type="hidden" name="overdue" value="0" id="overdue_62">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_62">
                  <input type="hidden" name="remaining" value="0" id="remaining_62">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_62">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_62">
                  <input type="hidden" name="total" value="0" id="total_62">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_62">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/63?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/63?name=installation">
                      <span class="lspName">GT LSP</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_63">
                  <input type="hidden" name="overdue" value="0" id="overdue_63">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_63">
                  <input type="hidden" name="remaining" value="0" id="remaining_63">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_63">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_63">
                  <input type="hidden" name="total" value="0" id="total_63">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">OML_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_63">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/64?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/64?name=installation">
                      <span class="lspName">GT Admin LSP</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_64">
                  <input type="hidden" name="overdue" value="0" id="overdue_64">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_64">
                  <input type="hidden" name="remaining" value="0" id="remaining_64">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_64">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_64">
                  <input type="hidden" name="total" value="0" id="total_64">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">OML_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MGW_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PKU_BS</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_NPT_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MDY_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_BGO_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_MLM_PX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_PYA_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_64">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/65?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/65?name=installation">
                      <span class="lspName">Testing ICT01</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_65">
                  <input type="hidden" name="overdue" value="0" id="overdue_65">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_65">
                  <input type="hidden" name="remaining" value="0" id="remaining_65">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_65">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_65">
                  <input type="hidden" name="total" value="0" id="total_65">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_PX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_65">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
          <tr class="clickable-row"
              data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/66?name=installation">
              <td class="id-style">
                  <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/66?name=installation">
                      <span class="lspName">YGN_TEST_01</span>
                      <span class="is5bb">5BB</span>
                  </a>
                  <input type="hidden" name="assign_jobs" value="0" id="assign_jobs_66">
                  <input type="hidden" name="overdue" value="0" id="overdue_66">
                  <input type="hidden" name="overdue_jobs" value="0" id="overdue_jobs_66">
                  <input type="hidden" name="remaining" value="0" id="remaining_66">
                  <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_66">
                  <input type="hidden" name="activeTeam" value="0" id="active_team_66">
                  <input type="hidden" name="total" value="0" id="total_66">
              </td>
              <td class="">
                  <span class="text-align-center">FTTX </span>
              </td>
              <td class="">
                  <span class="badge badge-pill badge-warning area-code-color">5BB_YGN_FX</span>
              </td>
              <td class="text-center">
                  <span>Policy 1</span>
              </td>


              <td class="d-flex justify-content-center">
                  <!-- Assigned Jobs-->
                  0

              </td>
              <td class="px-0 text-center">

                  <span>0</span>
                  /
                  <span class="pr-2">
                      0

                  </span>
                  /
                  <span class="text-danger font-weight-bold pl-2">0</span>
              </td>
              <td class="text-center">
                  <span>0</span>







              </td>
              <td class="d-flex justify-content-center">
                  0
                  <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_66">






              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="pr-2">0</span>
                  /
                  <span class="pl-2">0</span>
              </td>
          </tr>
      </tbody>
      <tfoot id="lsp-t-footer">
          <tr class="" data-href="">
              <td class="id-style">
                  <span style="font-size: 13px" class="font-weight-bold">Total</span>
              </td>
              <td class="">

              </td>
              <td class="">

              </td>
              <td class="font-weight-bold d-flex justify-content-center">
                  NaN
              </td>

              <td class="px-0 text-center" style="width: 180px;">
                  <span class="font-weight-bold pr-2 text-danger">NaN</span>
                  /
                  <span class="font-weight-bold pr-2 pl-2">NaN</span>
                  /
                  <span class="font-weight-bold pl-2">NaN</span>
              </td>
              <td class="text-center">
                  <span class="font-weight-bold text-secondary pr-2 pl-2">NaN</span>
              </td>
              <td class="d-flex justify-content-center">
                  <span class="font-weight-bold">0</span>
              </td>
              <td style="border-left: 1px solid #ded9d9"></td>
              <td class="d-flex justify-content-start">
                  <span class="text-success font-weight-bold">0</span> / <span>196</span>
              </td>
          </tr>
      </tfoot>
  </table>
</div>
