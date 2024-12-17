@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <div id="exist_customer" class="d-flex flex-column" style="gap: 1rem">
                        <div class="row d-flex" style="gap: 0.5rem">
                            <div class="col-md-3 ">
                                <input name="keyword" id="search_cm" type="search" placeholder="Search .." value=""
                                    aria-label="Search" class="form-control mr-sm-2" /> <input type="hidden"
                                    id="customer_fill" name="exist_customer" class="customer_fill" />
                            </div>
                            <div class="col-md-3">
                                <x-form.select name="area_code" id="areaSelect">
                                    <option value=" "> Select Area Code</option>
                                    <option value="1" class="city"> 5BB_YGN_FX</option>
                                </x-form.select>
                            </div>
                            <div class="col-md-3">
                                <button onclick="SearchCu()" class="btn sdm__btn sdm__btn--primary">
                                    Search
                                </button>
                            </div>
                        </div>
                        <div id="show-ocm">
                            <table id="customer_table" class="table col-md-12">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 220px;">Customer Account No</th>
                                        <th scope="col" style="width: 220px;">PPOE User No</th>
                                        <th scope="col" style="width: 250px;">Customer Name</th>
                                        <th scope="col" style="width: 160px;">Area Code</th>
                                        <th scope="col" style="width: 300px;">FAT Port</th>
                                        <th scope="col" style="width: 200px;">Active Installation</th>
                                        <th scope="col" style="width: 200px;">Created At</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="customer-list-table"></div>
                    <div id="pagination" class="pagination"></div>
                </section>
            </div>
        </main>
    </div>
@endsection
