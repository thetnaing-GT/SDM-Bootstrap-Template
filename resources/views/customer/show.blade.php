@extends('partials._layout')

@section('content')
    <div class="dashboard">
        @include('partials._sidebar')
        <main class="dashboard__content">
            <div class="cotainer-fluid d-flex flex-column" style="gap: 1.5rem;">
                @include('partials._header')
                <section class="dashboard__content__box">
                    <div class="d-flex align-items-center" style="gap: 1rem">
                        <div class="d-flex align-items-center">
                            <h1 class="fs-3 mb-0">YGNFX200820242</h1>
                            <span class="block">( YGNFX200820245 )</span>
                        </div>
                        <button class="btn | sdm__btn sdm__btn--ghost sdm__btn--pill">Edit</button>
                        <button class="btn | sdm__btn sdm__btn--primary sdm__btn--pill">Sync</button>
                        <button class="btn | sdm__btn sdm__btn--ghost sdm__btn--pill" data-bs-toggle="modal"
                            data-bs-target="#fxModal">
                            FX >> BS >> PX
                        </button>

                    </div>
                </section>
            </div>
        </main>
    </div>

    <div class="modal fade" id="fxModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center" style="gap: 0.5rem">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Plan Change</h1>
                        <button type="button" data-bs-toggle="popover" data-bs-placement="right"
                            data-bs-custom-class="custom-popover"
                            data-bs-content="
                       <div class='sdm__popover-content'>
  <h6 class='sdm__popover-content__header'>
    Plan Change - Rules & Limitations (FX >> BS >> PX)
  </h6>
  <table class='sdm__popover-content__table'>
    <thead>
      <tr>
        <th class='sdm__popover-content__table--number'>#</th>
        <th class='sdm__popover-content__table--process'>Process</th>
        <th class='sdm__popover-content__table--remark'>Remark</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class='sdm__popover-content__table--number'>1</td>
        <td class='sdm__popover-content__table--process'>
          <span>New service no does not exist in SDM! Please fill the valid service no.</span>
          <span>SDM – Customer ထဲတွင် ရှိ၊ မရှိ စစ်ဆေးပါ။ Service No အသစ် မှန်ကန်စွာဖြည့်ရမယ်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'></td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>2</td>
        <td class='sdm__popover-content__table--process'>
          <span>Old Service No has no port.</span>
          <span>Service No အဟောင်းတွင် port တွဲပေးရမည်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>QC Team – Can Skip this step</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>3</td>
        <td class='sdm__popover-content__table--process'>
          <span>Old Service No in BSS status should be Terminated (or) Suspend Permanent first!</span>
          <span>Service No အဟောင်းသည် terminated သို့ Suspend Permanent ဖြစ်အောင် အရင်လုပ်ပေးပါ။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>CAC or Finance</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>4</td>
        <td class='sdm__popover-content__table--process'>
          <span>New Service No in BSS status should be Active!</span>
          <span>Service No အသစ်သည် BSS တွင် Active ဖြစ်အောင် အရင်လုပ်ပေးပါ။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>Service Provision</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>5</td>
        <td class='sdm__popover-content__table--process'>
          <span>Please fill the ODN to New Service No.</span>
          <span>Service No အသစ်တွင် port တွဲပေးရန် လိုအပ်ပါသည်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>QC Team</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>System 1</td>
        <td class='sdm__popover-content__table--process'>
          <span>Customer account အဟောင်းရဲ့ နောက်ဆုံး installation status (or) relocation status က complete ဖြစ်နေရမယ်</span>
          <span>မဖြစ်ရင် Old Customer installation should be complete status! လို့ ပေါ်မည်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>Auto Installation Complete - Complete by system</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>System 2</td>
        <td class='sdm__popover-content__table--process'>
          <span>Customer account အသစ်ရဲ့ latest installation request status က new (or) complete ဖြစ်နေရမယ်</span>
          <span>မဖြစ်ရင် new customer installation should be New (or) Complete status without Assigned Lsp! လို့ ပေါ်မည်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>Auto Remove Assigned LSP - Make installation complete by system</td>
      </tr>
      <tr>
        <td class='sdm__popover-content__table--number'>System 3</td>
        <td class='sdm__popover-content__table--process'>
          <span>Please Check Again Your Accounts ဟု Error Alert ပြပါက</span>
          <span>Old Customer တွင် Installation မရှိပါ။ Installation ထည့်ပေးရန် လိုအပ်ပါသည်။</span>
        </td>
        <td class='sdm__popover-content__table--remark'>Skip this step</td>
      </tr>
    </tbody>
  </table>
</div>
"
                            class="mt-1 btn btn-rounded btn-primary btn-sm popover-trigger d-flex justify-content-center align-items-center justify-text"
                            style="border-radius: 21px; width: 25px; height: 25px;" data-original-title="" title="">
                            <svg class="svg-inline--fa fa-question fa-w-12" style="font-size: 13px;" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="question" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M202.021 0C122.202 0 70.503 32.703 29.914 91.026c-7.363 10.58-5.093 25.086 5.178 32.874l43.138 32.709c10.373 7.865 25.132 6.026 33.253-4.148 25.049-31.381 43.63-49.449 82.757-49.449 30.764 0 68.816 19.799 68.816 49.631 0 22.552-18.617 34.134-48.993 51.164-35.423 19.86-82.299 44.576-82.299 106.405V320c0 13.255 10.745 24 24 24h72.471c13.255 0 24-10.745 24-24v-5.773c0-42.86 125.268-44.645 125.268-160.627C377.504 66.256 286.902 0 202.021 0zM192 373.459c-38.196 0-69.271 31.075-69.271 69.271 0 38.195 31.075 69.27 69.271 69.27s69.271-31.075 69.271-69.271-31.075-69.27-69.271-69.27z">
                                </path>
                            </svg>
                        </button>

                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
