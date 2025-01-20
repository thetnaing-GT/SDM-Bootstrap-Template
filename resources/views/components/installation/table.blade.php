<div class="sdm__horizontal-scrollbar">
    <table id="sorting-table" class="table table-hover sdm__table">
        <thead>
            <tr>
                <th onclick="sortTable('id')">
                    <div class="sdm__table__column sdm__table__column--actionable">
                        <span>Order ID</span>
                        <i class="fa-solid fa-sort"></i>
                    </div>
                </th>
                <th>
                    <div class="sdm__table__column">
                        <span> Customer Account No</span>
                    </div>
                </th>
                <th>
                    <div class="sdm__table__column">
                        <span>PPOE User No</span>
                    </div>
                </th>
                <th>
                    <div class="sdm__table__column">
                        <span>Customer Name</span>
                    </div>
                </th>
                <th onclick="sortTable('areaCode')">
                    <div class="sdm__table__column sdm__table__column--actionable">
                        <span>Area Code/Township</span>
                        <i class="fa-solid fa-sort"></i>
                    </div>

                </th>
                <th onclick="sortTable('due')">
                    <div class="sdm__table__column sdm__table__column--actionable">
                        <span>Due Date</span>
                        <i class="fa-solid fa-sort"></i>
                    </div>
                </th>
                <th onclick="sortTable('overDue')">
                    <div class="sdm__table__column sdm__table__column--actionable">
                        <span>Overdue Days</span>
                        <i class="fa-solid fa-sort"></i>
                    </div>
                </th>
                <th>Request Status</th>
                <th>Current Status</th>
                <th>Verify Status</th>
                <th>Cable Meter</th>
                <th>Plan</th>
                <th>Priority</th>
                <th>Assigned LSP</th>
                <th>Address</th>
                <th onclick="sortTable('created_at')">
                    <div class="sdm__table__column sdm__table__column--actionable">
                        <span>Created At</span>
                        <i class="fa-solid fa-sort"></i>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    142502
                </td>
                <td onclick="InfoCopy('7777777')" class="cusrsor">
                    <div class="sdm__table__row sdm__table__row--actionable">
                        <span id="id7777777"> 7777777</span>
                        <x-icon.copy />
                    </div>
                </td>
                <td onclick="InfoCopy('AZIN PHYOE')">
                    <div class="sdm__table__row sdm__table__row--actionable">
                        <span id="idAZIN">AZIN PHYOE</span>
                        <x-icon.copy />
                    </div>
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
