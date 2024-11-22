@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <form action="https://sdmstaging.5bb.com.mm/dashboard/area-code-search" method="get"
                                class="search">
                                <input id="q" name="q" type="search" placeholder="Search .."
                                    aria-label="Search" value="" class="form-control mr-sm-2">
                            </form>
                        </div>
                        <div class="excel-btn col-md-6 ml-auto"><a
                                href="https://sdmstaging.5bb.com.mm/dashboard/area-code/create"
                                class="btn float-right add-new-btn">Add New</a></div>
                    </div>
                    <div class="table-responsive">
                        <table id="sorting-table list-area-table" class="plan-tb table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold" style="width: 10%;"> Area Code </th>
                                    <th class="font-weight-bold"> LSP Team</th>
                                    <th class="font-weight-bold"> Created At </th>
                                    <th class="font-weight-bold"> Installation Over Due Days </th>
                                    <th class="font-weight-bold"> Relocation Over Due Days </th>
                                    <th class="font-weight-bold"> On Call Over Due Hours </th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5BB_YGN_FX</td>
                                    <td><span class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Lucky Joint YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Telco Speed YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                E Power YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Gigger Bit YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                GN YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Power Deal YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Net Villa</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Access 24 YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                ICT Test</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                GN Plan UP</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                SG Power</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                REDBOX</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                MNIT</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Qurvice Com YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                A8 YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Tele Brother YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Spectrum Network YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                May Than Sin Tun YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                TZ YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                BS TNOD YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                ICT LSP Testing</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                CAC YGN</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                M9</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                SSLH</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                ICT Testing LSP</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Shwe Emperor Group</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Shwe Emperor Group</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                CM LSP</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Test1</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                GT LSP</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                GT Admin LSP</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                Testing ICT01</a>&nbsp;&nbsp; </span> <span
                                            class="badge badge-pill badge-warning area-code-color"><a href="#"
                                                class="area-lsp">
                                                YGN_TEST_01</a>&nbsp;&nbsp; </span></td>
                                    <td> 25/06/2020 17:47:53</td>
                                    <td> 3</td>
                                    <td> 3</td>
                                    <td> 48</td>
                                    <td><a href="https://sdmstaging.5bb.com.mm/dashboard/area-code/1/edit"
                                            class="plan-edit-btn">Edit</a></td>
                                    <td><button onclick="alert(`Can't delete this request. Related transactions exist.`)"
                                            class="plan-dlt-btn">Delete</button></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
