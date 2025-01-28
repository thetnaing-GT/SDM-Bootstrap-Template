@extends('partials._layout')

@section('content')
    <section class="sdm__box sdm__box--rounded">
        <div id="app" class="mb-4">
            <div class="mb-4">

            </div>
            <div class="mb-4">
                <form action="{{ route("filterForm") }}">
                    <hierachical-auto-complete-select></hierachical-auto-complete-select>
                    <div class="col-md-3">
                        <select name="olt_id" id="olt_id" class="form-control">
                            <option value="null">Search OLT Name</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="sdm__vertical-spacer" style="--vertical-gap: 2rem;">
            <form action="#" method="get" id="formCheck">
                <div class="sdm__vertical-spacer" style="--vertical-gap: 1.5rem;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="type" id="type" class="form-control">
                                        <option value="null">Type</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="olt_id" id="olt_id" class="form-control">
                                        <option value="null">Search OLT Name</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="fdt_id" id="fdt_id" class="form-control">
                                        <option value="null">Search FDT Name</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="fat_id" id="fat_id" class="form-control">
                                        <option value="null">Search FAT Name</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a href="{{ route('ticketCreate') }}" class="btn sdm__btn sdm__btn--primary">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <select name="fat_id" id="fat_id" class="form-control sdm__select">
                                <option value="null">Select LSP</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="olt_id" id="olt_id" class="form-control sdm__select">
                                <option value="null">Select City</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="fdt_id" id="fdt_id" class="form-control sdm__select">
                                <option value="null">Select Township</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input name="from_date" value="2024-07-01" type="text" placeholder="YYYY-mm-dd"
                                id="from_date" class="form-control mr-sm-2 filter-date flatpickr-input"
                                readonly="readonly" />
                        </div>
                        <div class="col-md-3">
                            <input name="to_date" value="2024-10-22" placeholder="YYYY-mm-dd" type="text" id="to_date"
                                class="form-control mr-sm-2 filter-date flatpickr-input" readonly="readonly" />
                        </div>
                        <div class="col-md-3">
                            <button class="btn sdm__btn sdm__btn--primary fs-14">Search</button>
                        </div>
                    </div>
                    <div class="sdm__checkbox-group" style="--min-width: 160px;">
                        <div class="sdm__checkbox">
                            <input type="checkbox" id="suspect" name="suspect" value=""
                                class="sdm__checkbox__input" />
                            <label for="suspect" class="sdm__checkbox__label"> Suspect (<span id="suspect">*</span>)
                            </label>
                        </div>
                        <div class="sdm__checkbox">
                            <input type="checkbox" id="no_odn_issue" name="no_odn_issue" value=""
                                class="sdm__checkbox__input" />
                            <label for="no_odn_issue" class="sdm__checkbox__label">No ODN Issue (<span
                                    id="suspect">*</span>) </label>
                        </div>
                        <div class="sdm__checkbox">
                            <input type="checkbox" id="already_fixed" name="already_fixed" value=""
                                class="sdm__checkbox__input" />
                            <label for="already_fixed" class="sdm__checkbox__label">Already Fixed (<span
                                    id="fix">*</span>) </label>
                        </div>
                        <div class="sdm__checkbox">
                            <input type="checkbox" id="complete" name="complete" value="On Going"
                                class="sdm__checkbox__input" />
                            <label for="complete" class="sdm__checkbox__label"> Complete (<span id="complete">*</span>)
                            </label>
                        </div>
                    </div>
                </div>
            </form>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <div class="sdm__horizontal-scrollbar">
                <table class="table table-hover sdm__table">
                    <thead>
                        <tr>
                            <th>
                                <div class="sdm__table__column">
                                    <span>ID</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>OLT</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>FDT</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column sdm__table__column--actionable">
                                    <span>FAT</span>
                                    <i class="fa-solid fa-sort"></i>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Suspect Count</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Issue Status</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Type</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>LSP</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Township</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Location</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Issue Date</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="sdm__table__row">
                                    130443
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FDT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row sdm__table__row--actionable">
                                    <button class="btn sdm__status sdm__status--new">
                                        Suspect
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="sdm__table__row">
                                    130443
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FDT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row sdm__table__row--actionable">
                                    <button class="btn btn-sm sdm__status sdm__status--ongoing">
                                        No ODN
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="sdm__table__row">
                                    130443
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FDT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row sdm__table__row--actionable">
                                    <button class="btn sdm__status sdm__status--complete">
                                        Complete
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                            <td>
                                <div class="sdm__table__row">
                                    FAT
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
