<x-layouts.dashboard-content>
  <div class="dashboard__content__box">

        <div class="">
          <form action="https://sdmstaging.5bb.com.mm/dashboard/inventory" method="get" class="inventory-form">
            <div class="inventory-search form-group">
              <div class="d-flex">
                <input name="q" id="q" value="" type="search" placeholder="Search .." aria-label="Search" class="form-control mr-sm-2 col-md-3" style="margin-left: 0px;" />
                <select id="select-team" name="team" class="form-control col-md-3">
                  <option value="1" id="getTeamId"> Yangon Office</option>
                </select>
              </div>
              <div class="col-md-2">
                <a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning" style="width: 70px !important; float: right;">
                  Add
                </a>
              </div>
            </div>
          </form>

            <div class="inventory-table">
              <table id="sorting-table" class="table">
                <thead>
                  <tr>
                    <th scope="col" onclick="sortTable(0)" class="sort-header-style text-left">
                      Item Name
                      <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path
                          fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                        ></path>
                      </svg>
                      <!-- <i class="fas fa-sort"></i> -->
                    </th>
                    <th scope="col" class="text-left">Category</th>
                    <th scope="col" onclick="sortTable(2)" class="sort-header-style text-left">
                      Available Stock
                      <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path
                          fill="currentColor"
                          d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"
                        ></path>
                      </svg>
                      <!-- <i class="fas fa-sort"></i> -->
                    </th>
                    <th scope="col" class="text-left">Minimum Stock</th>
                    <th scope="col" class="text-left">Last Refilled At</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="product-list">
                  <tr>
                    <td class="text-left">ZTE</td>
                    <td class="text-left">ONU Type</td>
                    <td class="text-left">-6449</td>
                    <td class="text-left">5</td>
                    <td class="text-left">30/07/2024 10:01:30</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock0">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce0">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Huawei</td>
                    <td class="text-left">ONU Type</td>
                    <td class="text-left">-2352</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/06/2024 13:24:43</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock1">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce1">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Fiber Home</td>
                    <td class="text-left">ONU Type</td>
                    <td class="text-left">-2397</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/06/2024 13:25:25</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock2">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce2">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">SC-APC/SC-UPC</td>
                    <td class="text-left">Fiber Patch Cord</td>
                    <td class="text-left">-27921</td>
                    <td class="text-left">5</td>
                    <td class="text-left">30/07/2024 09:51:57</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock3">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce3">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">SC-APC/SC-APC</td>
                    <td class="text-left">Fiber Patch Cord</td>
                    <td class="text-left">690</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/06/2024 13:26:32</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock4">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce4">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">1 core OTB</td>
                    <td class="text-left">Termination Box</td>
                    <td class="text-left">-26722</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/06/2024 13:26:51</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock5">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce5">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">2 Core Cable</td>
                    <td class="text-left">Fiber Cable</td>
                    <td class="text-left">-203402.79 km</td>
                    <td class="text-left">0.005 km</td>
                    <td class="text-left">30/07/2024 09:54:58</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock6">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce6">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Huawei</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">-2274</td>
                    <td class="text-left">5</td>
                    <td class="text-left">30/07/2024 09:55:40</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock7">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce7">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">ZTE</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">-6213</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/08/2024 11:18:07</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock8">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce8">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Fiber Home</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">-1407</td>
                    <td class="text-left">5</td>
                    <td class="text-left">01/06/2024 13:25:43</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock9">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce9">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">ZTE Adapter</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">4060</td>
                    <td class="text-left">400</td>
                    <td class="text-left">02/09/2022 21:11:53</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock10">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce10">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Huawei</td>
                    <td class="text-left">ONU Type</td>
                    <td class="text-left">1315</td>
                    <td class="text-left">400</td>
                    <td class="text-left">21/09/2020 13:57:48</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock11">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce11">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Huawei Adapter</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">5369</td>
                    <td class="text-left">400</td>
                    <td class="text-left">02/09/2022 21:12:46</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock12">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce12">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">Fiber Home Adapter</td>
                    <td class="text-left">ONU Adapter</td>
                    <td class="text-left">1448</td>
                    <td class="text-left">400</td>
                    <td class="text-left">17/10/2023 09:29:55</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock13">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce13">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">ZTE</td>
                    <td class="text-left">Termination Box</td>
                    <td class="text-left">110</td>
                    <td class="text-left">300</td>
                    <td class="text-left">30/07/2024 09:52:33</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock14">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce14">Reduce Stock</a></td>
                  </tr>

                  <tr>
                    <td class="text-left">ZTE</td>
                    <td class="text-left">ONU Type</td>
                    <td class="text-left">590</td>
                    <td class="text-left">250</td>
                    <td class="text-left">23/08/2023 11:26:08</td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal2" id="addRestock15">Restock</a></td>
                    <td class="text-left"><a type="button" class="btn btn-outline-warning restock-btn" data-toggle="modal" data-target="#exampleModal3" id="addReduce15">Reduce Stock</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

        </div>
        <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content content-sector">
                    <div class="all-content">
                        <div class="modal-header">
                            <h5 id="exampleModalLabel" class="modal-title">Add Inventory</h5> <button type="button"
                                data-dismiss="modal" aria-label="Close" class="close cl-btn"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div id="inventory-modal-box" class="inventory-modal">
                            <div class="modal-body form-group box-content-sector">
                                <div class="item-section"><span>Item Name</span><br> <input type="text" id="itemName"
                                        name="itemName" required="required" class="form-control"></div>
                                <div class="item-section"><span>Category</span><br> <select id="select-category"
                                        name="categoryId" class="form-control">
                                        <option value="1" id="team-id">ONU Type
                                        </option>
                                        <option value="2" id="team-id">Fiber Patch Cord
                                        </option>
                                        <option value="3" id="team-id">Termination Box
                                        </option>
                                        <option value="4" id="team-id">Fiber Cable
                                        </option>
                                        <option value="5" id="team-id">ONU Adapter
                                        </option>
                                    </select></div>
                                <div class="item-section"><span>Quantity</span><br> <input type="number" name="quantity"
                                        id="quatity" min="1" pattern="\d+" required="required"
                                        class="form-control"></div>
                                <div class="item-section"><span>Minimum Stock</span><br> <input type="number"
                                        name="miniumStock" id="miniumStock" min="1" pattern="\d+"
                                        required="required" class="form-control"></div>
                            </div>
                            <div class="modal-footer"><button type="submit" id="add_inventory_new"
                                    class="btn btn-warning save-btn ml">Add</button> <button type="button"
                                    data-dismiss="modal"
                                    class="btn btn-default close-btn mr-auto data-reset-btn">Close</button></div><input
                                type="hidden" value="1" name="teamId">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="exampleModalLabel" class="modal-title">Restock</h5> <button type="button"
                            data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <form action="https://sdmstaging.5bb.com.mm/dashboard/inventory/update-restock" method="post"
                        id="restock-modal-box"><input type="hidden" name="_token"
                            value="RIU0knQQ8GGGHsnhunpY1GRuvp2VQWUYiWbV4Ldu">
                        <div class="modal-body form-group"></div>
                    </form>
                </div>
            </div>
        </div>
        <div id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="exampleModalLabel" class="modal-title">Reduce Stock</h5> <button type="button"
                            data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <form action="https://sdmstaging.5bb.com.mm/dashboard/inventory/reduce-restock" method="post"
                        id="reduce-modal-box"><input type="hidden" name="_token"
                            value="RIU0knQQ8GGGHsnhunpY1GRuvp2VQWUYiWbV4Ldu">
                        <div class="modal-body form-group"></div>
                    </form>
                </div>
            </div>
        </div>
  </div>

</x-layouts.dashboard-content>

