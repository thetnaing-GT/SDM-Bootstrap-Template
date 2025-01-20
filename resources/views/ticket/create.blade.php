@extends('partials._layout')

@section('content')
    <section class="sdm__box sdm__box--rounded">
        <div class="sdm__vertical-spacer" style="--vertical-gap: 2rem;">
            <form action="#" method="get" id="formCheck">
                <div class="sdm__vertical-spacer" style="--vertical-gap: 1.5rem;">
                    <div class="d-flex justify-content-between">
                        <div class="row">
                            <div class="col-md-3">
                                <select name="type" id="type" class="form-control">
                                    <option value="null">Type</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="fat_id" id="fat_id" class="form-control">
                                    <option value="null">Search FAT Name</option>
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
                        </div>
                        <button class="btn sdm__btn sdm__btn--primary">Submit</button>
                    </div>
                </div>
            </form>
            <button class="ml-auto btn sdm__btn sdm__btn--primary">Add Suspect</button>
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
                                    <span>Order ID</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Customer Account Number</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column sdm__table__column--actionable">
                                    <span>PPOE User Name</span>
                                    <i class="fa-solid fa-sort"></i>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Customer Name</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Customer Address</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Status</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Assigned LSP</span>
                                </div>
                            </th>
                            <th>
                                <div class="sdm__table__column">
                                    <span>Created At</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
