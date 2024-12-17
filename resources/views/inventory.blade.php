@extends('partials._layout') 
@section('content')
<div class="dashboard">
  @include('partials._sidebar')
  <main class="dashboard__content">
    <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
      @include('partials._header')
      <section class="dashboard__content__box">
        <form action="https://sdmstaging.5bb.com.mm/dashboard/inventory" method="get">
          <div class="inventory-search form-group row">
            <div class="col-md-8 d-flex">
              <input name="q" id="q" value="" type="search" placeholder="Search .." aria-label="Search" class="form-control mr-sm-2" />
              <x-form.select id="select-team" name="team">
                <option value="1" id="getTeamId"> Yangon Office</option>
              </x-form.select>
            </div>
            <div class="col-md-2 mt-sm-2 mt-md-0 ml-auto">
              <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn sdm__btn sdm__btn--primary" style="width: 70px !important; float: right;">
              Add
              </button>
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
                    <path fill="currentColor"
                      d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4-41 17-41h238c21.4 0 32.1-25.9 17-41z">
                    </path>
                  </svg>
                </th>
                <th scope="col" class="text-left">Category</th>
                <th scope="col" onclick="sortTable(2)" class="sort-header-style text-left">
                  Available Stock
                  <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                      d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4-41 17-41h238c21.4 0 32.1-25.9 17-41z">
                    </path>
                  </svg>
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
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal2" id="addRestock0">Restock</button>
                </td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal3" id="addReduce0">Reduce Stock</button>
                </td>
              </tr>
              <tr>
                <td class="text-left">Huawei</td>
                <td class="text-left">ONU Type</td>
                <td class="text-left">-2352</td>
                <td class="text-left">5</td>
                <td class="text-left">01/06/2024 13:24:43</td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal2" id="addRestock1">Restock</button>
                </td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal3" id="addReduce1">Reduce Stock</button>
                </td>
              </tr>
              <tr>
                <td class="text-left">Fiber Home</td>
                <td class="text-left">ONU Type</td>
                <td class="text-left">-2397</td>
                <td class="text-left">5</td>
                <td class="text-left">01/06/2024 13:25:25</td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal2" id="addRestock2">Restock</button>
                </td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal3" id="addReduce2">Reduce Stock</button>
                </td>
              </tr>
              <tr>
                <td class="text-left">SC-APC/SC-UPC</td>
                <td class="text-left">Fiber Patch Cord</td>
                <td class="text-left">-27921</td>
                <td class="text-left">5</td>
                <td class="text-left">30/07/2024 09:51:57</td>
                <td class="text-left">
                    <button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal2" id="addRestock3">Restock</button>
                </td>
                <td class="text-left"><button type="button" class="btn sdm__btn sdm__btn--table-ghost" data-toggle="modal" data-target="#exampleModal3" id="addReduce3">Reduce Stock</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
          <div role="document" class="modal-dialog">
            <div class="modal-content content-sector">
              <div class="all-content">
                <div class="modal-header">
                  <h5 id="exampleModalLabel" class="modal-title">Add Inventory</h5>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close cl-btn"><span aria-hidden="true">×</span></button>
                </div>
                <div id="inventory-modal-box" class="inventory-modal">
                  <div class="modal-body form-group box-content-sector">
                    <div class="item-section">
                      <span>Item Name</span><br />
                      <input type="text" id="itemName" name="itemName" required="required" class="form-control" />
                    </div>
                    <div class="item-section">
                      <span>Category</span><br />
                      <x-form.select id="select-category" name="categoryId">
                        <option value="1" id="team-id">ONU Type </option>
                        <option value="2" id="team-id">Fiber Patch Cord </option>
                        <option value="3" id="team-id">Termination Box </option>
                        <option value="4" id="team-id">Fiber Cable </option>
                        <option value="5" id="team-id">ONU Adapter </option>
                      </x-form.select>
                    </div>
                    <div class="item-section">
                      <span>Quantity</span><br />
                      <input type="number" name="quantity" id="quatity" min="1" pattern="\d+" required="required" class="form-control" />
                    </div>
                    <div class="item-section">
                      <span>Minimum Stock</span><br />
                      <input type="number" name="miniumStock" id="miniumStock" min="1" pattern="\d+" required="required" class="form-control" />
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" id="add_inventory_new" class="btn btn-warning save-btn ml">Add</button> <button type="button" data-dismiss="modal" class="btn btn-default close-btn mr-auto data-reset-btn">Close</button>
                  </div>
                  <input type="hidden" value="1" name="teamId" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
</div>
@endsection
