<x-layouts.dashboard-content>
    <section class="dashboard__content__box">
        <div id="exist_customer">
            <div class=" form-row col-md-12 col-md-2">
                <div class="col-md-3"><input name="keyword" id="search_cm" type="search" placeholder="Search .."
                        value="" aria-label="Search" class="form-control mr-sm-2"> <input type="hidden"
                        id="customer_fill" name="exist_customer" class="customer_fill"></div>
                <div class="col-md-3"><select name="area_code" id="areaSelect" class="custom-select form-control">
                        <option value=" "> Select Area Code</option>
                        <option value="1" class="city">
                            5BB_YGN_FX</option>
                    </select></div>
                <div class="col-md-3"><button id="btn-search" onclick="SearchCu()" class="add-button"
                        style="height: 30px;">Search</button></div>
            </div>
            <div id="show-ocm" style="display: none;">
                <table id="customer_table" class="table col-md-12">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 220px;"> Customer Account No </th>
                            <th scope="col" style="width: 220px;"> PPOE User No </th>
                            <th scope="col" style="width: 250px;"> Customer Name </th>
                            <th scope="col" style="width: 160px;"> Area Code </th>
                            <th scope="col" style="width: 300px;"> FAT Port</th>
                            <th scope="col" style="width: 200px;"> Active Installation</th>
                            <th scope="col" style="width: 200px;"> Created At</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="customer-list-table"></div>
        <div id="pagination" class="pagination"></div>
    </section>
</x-layouts.dashboard-content>
