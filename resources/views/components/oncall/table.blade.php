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
