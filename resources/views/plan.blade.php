@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <div class="row">
                        <div class="col-md-3">
                            <form action="https://sdmstaging.5bb.com.mm/dashboard/plan-search" method="get" class="search">
                                <input id="q" name="q" type="search" placeholder="Search .."
                                    aria-label="Search" value="" class="form-control" />
                            </form>
                        </div>
                        <div class="excel-btn col-md-6 ml-auto">
                            <a href="https://sdmstaging.5bb.com.mm/dashboard/plan/create"
                                class="btn float-right add-new-btn">Add
                                New
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table id="sorting-table" class="plan-tb table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th onclick="sortTable(0)" class="sort-header-style">
                                        Plan
                                        <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="sort" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fas fa-sort"></i> -->
                                    </th>
                                    <th onclick="sortTable(1)" class="sort-header-style">
                                        Created At
                                        <svg class="svg-inline--fa fa-sort fa-w-10" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="sort" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fas fa-sort"></i> -->
                                    </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS_Special</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/1/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XXS_BGO</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/6/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XS_BGO</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/2/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XXSPlus_Special</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/3/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Eco</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/4/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XS</td>
                                    <td>26/06/2020 15:52:04</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/5/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Small_BGO</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/7/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XXS</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/8/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XS_Plus_BGO</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/9/edit"
                                            class="plan-edit-btn">Edit</a>
                                    </td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>M_Special</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/10/edit"
                                            class="plan-edit-btn">Edit</a></td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>XSPlus_Special</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/11/edit"
                                            class="plan-edit-btn">Edit</a></td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>S_Special</td>
                                    <td>26/06/2020 15:52:05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/plan/12/edit"
                                            class="plan-edit-btn">Edit</a></td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
