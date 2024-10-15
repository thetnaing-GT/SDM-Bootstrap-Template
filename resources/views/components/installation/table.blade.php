<div class="table-responsive">
  <table id="sorting-table" class="table table-hover installation-table mb-0">
    <thead>
      <tr>
        <th onclick="sortTable('id')" class="sort-header-style" style="width: 60px;">
          Order ID
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
        <th style="width: 160px;">Customer Name</th>
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
        <th onclick="sortTable('due')" class="sort-header-style" style="width: 100px;">
          Due
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th onclick="sortTable('overDue')" class="sort-header-style" style="width: 100px;">
          Overdue Days
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
        <th style="width: 100px;">Request Status</th>
        <th style="width: 120px;">Current Status</th>
        <th style="width: 120px;">Verify Status</th>
        <th style="width: 100px;">Cable Meter</th>
        <th style="width: 150px;">Plan</th>
        <th style="width: 100px;">Priority</th>
        <th style="width: 100px;">Assigned LSP</th>
        <th style="width: 200px;">Address</th>
        <th onclick="sortTable('created_at')" class="sort-header-style" style="width: 100px;">
          Created At
          <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
            <path
              fill="currentColor"
              d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
            ></path>
          </svg>
          <!-- <i class="fas fa-sort"></i> -->
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          142538
          <span class="cu-type-style"></span>
        </td>
        <td onclick="InfoCopy('MDY000000674')" class="cusrsor">
          <span id="idMDY000000674"> MDY000000674</span><span style="padding-left: 10px;"></span>
          <svg
            class="svg-inline--fa fa-copy fa-w-14 dashboard-icon"
            style="color: rgb(108, 178, 235);"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="copy"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"
            ></path>
          </svg>
          <!-- <i class="fas fa-copy dashboard-icon" style="color: rgb(108, 178, 235);"></i> -->
        </td>
        <td onclick="InfoCopy('MDYPXE0000555')">
          <span id="idMDYPXE0000555"> MDYPXE0000555</span><span style="padding-left: 10px;"></span>
          <svg
            class="svg-inline--fa fa-copy fa-w-14 dashboard-icon"
            style="color: rgb(108, 178, 235);"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="copy"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"
            ></path>
          </svg>
          <!-- <i class="fas fa-copy dashboard-icon" style="color: rgb(108, 178, 235);"></i> -->
        </td>
        <td>
          Customer 1
        </td>
        <td>
          5BB_YGN_FX / Aunglan
        </td>
        <td>
          15/10/2024 00:00:00
        </td>
        <td>
          0 Day
        </td>
        <td><button class="status-btn-Complete">Complete</button></td>
        <td>
          Activation
        </td>
        <td>
          No Verify
        </td>
        <td>
          60
        </td>
        <td>
          Small
        </td>
        <td>
          Default
        </td>
        <td>
          ICT Test
        </td>
        <td>
          33,34
        </td>
        <td>
          11/10/2024 09:29:39
        </td>
      </tr>
      <tr>
        <td>
          142502
          <span class="cu-type-style"></span>
        </td>
        <td onclick="InfoCopy('7777777')" class="cusrsor">
          <span id="id7777777"> 7777777</span><span style="padding-left: 10px;"></span>
          <svg
            class="svg-inline--fa fa-copy fa-w-14 dashboard-icon"
            style="color: rgb(108, 178, 235);"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="copy"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"
            ></path>
          </svg>
          <!-- <i class="fas fa-copy dashboard-icon" style="color: rgb(108, 178, 235);"></i> -->
        </td>
        <td onclick="InfoCopy('AZIN PHYOE')">
          <span id="idAZIN" phyoe=""> AZIN PHYOE</span><span style="padding-left: 10px;"></span>
          <svg
            class="svg-inline--fa fa-copy fa-w-14 dashboard-icon"
            style="color: rgb(108, 178, 235);"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="copy"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            data-fa-i2svg=""
          >
            <path
              fill="currentColor"
              d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"
            ></path>
          </svg>
          <!-- <i class="fas fa-copy dashboard-icon" style="color: rgb(108, 178, 235);"></i> -->
        </td>
        <td>
          AZIN PHYOE
        </td>
        <td>
          5BB_YGN_FX / Htaukkyant
        </td>
        <td>
          16/12/2024 00:00:00
        </td>
        <td>
          0 Day
        </td>
        <td><button class="status-btn-Complete">Complete</button></td>
        <td>
          Activation
        </td>
        <td>
          No Verify
        </td>
        <td>
          16
        </td>
        <td>
          XS_BGO
        </td>
        <td>
          Default
        </td>
        <td>
          ICT Test
        </td>
        <td>
          AZIN PHYOE
        </td>
        <td>
          01/10/2024 13:56:33
        </td>
      </tr>
    </tbody>
  </table>
