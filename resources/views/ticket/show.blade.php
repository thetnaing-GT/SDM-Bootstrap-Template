@extends('partials._layout') @section('content')
    <section class="sdm__box sdm__box--rounded">
        <div class="sdm__vertical-spacer" style="--vertical-gap: 3rem;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center" style="gap: 2rem">
                    <h2>NPT MMZ-FDT-31-FAT-08</h2>
                    <div class="d-flex" style="gap: 0.5rem">
                        <i class="fa-solid fa-check" style="color:dodgerblue; font-size: 1.5rem"></i>
                        <div id="verify-percent" class="odnsuspect-show__status">
                            82.5% verified
                        </div>
                    </div>
                </div>
                <button class="btn sdm__btn sdm__btn--primary">Already Fixed</button>
            </div>
            <div class="odnsuspect-show__info">
                    <div class="form-row">
                        <div class="form-group row col-md-6 mb-0">
                            <div class="col-md-5 text-right">
                                <p>OLT Name</p>
                            </div>
                            <div class="col-md-7 odnsuspect-show__info__value">
                                <p>NPT MMZ</p>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 mb-0">
                            <div class="col-md-5 text-right">
                                <p>FDT Name</p>
                            </div>
                            <div class="col-sm-10 col-md-7 odnsuspect-show__info__value">
                                <p>FDT-31</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group row col-md-6 mb-0">
                            <div class="col-md-5 text-right">
                                <p>Location</p>
                            </div>
                            <div class="col-sm-10 col-md-7 d-flex odnsuspect-show__info__value">
                                <p class="mr-2">19.74582900 / 96.06910470</p>
                                <i class="fa-solid fa-pencil"></i>
                                <i class="fa-solid fa-check ml-2"></i>
                            </div>
                        </div>
                        <div class="form-group row col-md-6 mb-0">
                            <div class="col-md-5 text-right">
                                <p>City &amp; Township</p>
                            </div>
                            <div class="col-sm-10 col-md-6 d-flex odnsuspect-show__info__value">
                                <p class="mr-2">NayPyiTaw , Zabu Thiri</p>
                                <i class="fa-solid fa-pencil"></i>
                                <i class="fa-solid fa-check ml-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group row col-md-6">
                            <div class="col-md-5 text-right">
                                <p>LSP Team</p>
                            </div>
                            <div class="col-sm-10 col-md-7 d-flex odnsuspect-show__info__value">
                                <p class="mb-0 mr-2">50% Above</p>
                                <button class="btn sdm__btn sdm__btn--sm sdm__btn--secondary">Switch</button>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

        <hr class="hr-separator hr-separator--thick" />
        <div class="sdm__horizontal-scrollbar">
            <table class="table table-hover sdm__table">
                <thead>
                    <tr>
                        <th>
                            <div class="sdm__table__column sdm__table__column--actionable">
                                <span>Order ID</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column sdm__table__column--actionable">
                                <span>Customer Account Number</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column">
                                <span>PPOE User Name</span>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column">
                                <span>Customer Name</span>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column">
                                <span>FAT</span>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column sdm__table__column--actionable">
                                <span>Suspected Date</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column sdm__table__column--actionable">
                                <span>Fixed Date</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                        </th>
                        <th>
                            <div class="sdm__table__column">
                                <span>Action</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="sdm__table__row">
                                <a href="https://sdmstaging.5bb.com.mm/dashboard/on-call/322955">322955</a>
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row sdm__table__row--actionable">
                                <span id="idYGN000000750">YGN000000750</span>
                                <x-icon.copy />
                            </div>
                        </td>
                        <td onclick="copyContent('YGNPXE0004084')">
                            <div class="sdm__table__row sdm__table__row--actionable">
                                <span id="idYGNPXE0004084">YGNPXE0004084</span>
                                <x-icon.copy />
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row">
                                <a href="https://sdmstaging.5bb.com.mm/dashboard/customer/139642" target="_blank">
                                    test_prepaid40
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row">
                                fat
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row">
                                06/01/2025 17:16:10
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row">
                                06/01/2025 17:16:10
                            </div>
                        </td>
                        <td>
                            <div class="sdm__table__row sdm__table__row--actionable">
                                <button class="btn btn-sm | sdm__btn sdm__btn--fluid sdm__btn--secondary sdm__btn--flat">Transfer</button>
                                <button class="btn btn-sm | sdm__btn sdm__btn--fluid sdm__btn--secondary sdm__btn--flat">Complete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
