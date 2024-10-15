<div class="table-responsive">
  <table id="sorting-table" class="table table-hover mb-0">
    <thead>
      <tr>
        <th class="table-width-15 sort-header-style">Name</th>
        <th class="sort-header-style" style="width: 300px;">Type</th>
        <th class="sort-header-style" style="width: 325px;">Area Code</th>
        <th onclick="sortTable(1)" class="sort-header-style text-center" style="width: 130px;">
          Warranty
          <br />
          Policy
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th onclick="sortTable(2)" class="sort-header-style text-center" style="width: 155px;">
          Assigned
          <br />
          Jobs
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th class="sort-header-style text-center" style="width: 180px;">OverDue Jobs</th>
        <th onclick="sortTable(3)" class="sort-header-style text-center" style="width: 175px;">
          Pending
          <br />
          Jobs
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th onclick="sortTable(4)" class="sort-header-style text-center" style="width: 168px;">
          Assignable
          <br />
          Jobs
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th style="border-left: 1px solid rgb(222, 217, 217);"></th>
        <th class="sort-header-style d-flex" style="width: 168px;">Number of Active Teams</th>
      </tr>
    </thead>
    <tbody id="lsp-t-body">
      <tr class="clickable-row" data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation">
        <td class="id-style">
          <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation">
            <span class="lspName">Telco Speed YGN</span>
          </a>
          <input type="hidden" name="assign_jobs" value="6339" id="assign_jobs_2" />
          <input type="hidden" name="overdue" value="1" id="overdue_2" />
          <input type="hidden" name="overdue_jobs" value="1" id="overdue_jobs_2" />
          <input type="hidden" name="remaining" value="1" id="remaining_2" />
          <input type="hidden" name="pending_jobs" value="0" id="pending_jobs_2" />
          <input type="hidden" name="activeTeam" value="0" id="active_team_2" />
          <input type="hidden" name="total" value="17" id="total_2" />
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
          <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_2" />
        </td>
        <td style="border-left: 1px solid #ded9d9;"></td>
        <td class="d-flex justify-content-start">
          <span class="pr-2">0</span>
          /
          <span class="pl-2">17</span>
        </td>
      </tr>
      <tr class="clickable-row" data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/5?name=installation">
        <td class="id-style">
          <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/5?name=installation">
            <span class="lspName">Gigger Bit YGN</span>
          </a>
          <input type="hidden" name="assign_jobs" value="17202" id="assign_jobs_5" />
          <input type="hidden" name="overdue" value="40" id="overdue_5" />
          <input type="hidden" name="overdue_jobs" value="40" id="overdue_jobs_5" />
          <input type="hidden" name="remaining" value="40" id="remaining_5" />
          <input type="hidden" name="pending_jobs" value="112" id="pending_jobs_5" />
          <input type="hidden" name="activeTeam" value="0" id="active_team_5" />
          <input type="hidden" name="total" value="4" id="total_5" />
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
          <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_5" />
        </td>
        <td style="border-left: 1px solid #ded9d9;"></td>
        <td class="d-flex justify-content-start">
          <span class="pr-2">0</span>
          /
          <span class="pl-2">4</span>
        </td>
      </tr>
      <tr class="clickable-row" data-href="https://sdmstaging.5bb.com.mm/dashboard/lsp/3?name=installation">
        <td class="id-style">
          <a href="https://sdmstaging.5bb.com.mm/dashboard/lsp/3?name=installation">
            <span class="lspName">E Power YGN</span>
          </a>
          <input type="hidden" name="assign_jobs" value="22169" id="assign_jobs_3" />
          <input type="hidden" name="overdue" value="35" id="overdue_3" />
          <input type="hidden" name="overdue_jobs" value="35" id="overdue_jobs_3" />
          <input type="hidden" name="remaining" value="35" id="remaining_3" />
          <input type="hidden" name="pending_jobs" value="102" id="pending_jobs_3" />
          <input type="hidden" name="activeTeam" value="0" id="active_team_3" />
          <input type="hidden" name="total" value="10" id="total_3" />
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
          <input type="hidden" name="acceptable_jobs" value="0" id="acceptable_jobs_3" />
        </td>
        <td style="border-left: 1px solid #ded9d9;"></td>
        <td class="d-flex justify-content-start">
          <span class="pr-2">0</span>
          /
          <span class="pl-2">10</span>
        </td>
      </tr>
    </tbody>
    <tfoot id="lsp-t-footer">
      <tr class="" data-href="">
        <td class="id-style">
          <span style="font-size: 13px;" class="font-weight-bold">Total</span>
        </td>
        <td class=""></td>
        <td class=""></td>
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
        <td style="border-left: 1px solid #ded9d9;"></td>
        <td class="d-flex justify-content-start"><span class="text-success font-weight-bold">0</span> / <span>196</span></td>
      </tr>
    </tfoot>
  </table>
</div>
