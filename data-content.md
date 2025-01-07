# Customer Detail Plan Change Modal Popover

## Data Content

```html
<div class='table sdm__popover-content'>
    <h6 class='sdm__popover-content__header'>
        Plan Change - Rules & Limitations (FX >> BS >> PX)
    </h6>
    <table class='sdm__popover-content__table'>
        <thead>
            <tr>
                <th class='sdm__popover-content__table--number'>No.</th>
                <th class='sdm__popover-content__table--process'>Process</th>
                <th class='sdm__popover-content__table--contact-person'>Contact Person</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='sdm__popover-content__table--number'>1</td>
                <td class='sdm__popover-content__table--process'>
                    <span>New service no does not exist in SDM! Please fill the valid service no.</span>
                    <span class='sdm__popover-content__table--favour'>SDM – Customer ထဲတွင် ရှိ၊ မရှိ စစ်ဆေးပါ။ Service No အသစ် မှန်ကန်စွာဖြည့်ရမယ်။</span>
                </td>
                <td class='sdm__popover-content__table--contact-person'></td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>2</td>
                <td class='sdm__popover-content__table--process'>
                    <span>Old Service No has no port.</span>
                    <span class='sdm__popover-content__table--favour'>Service No အဟောင်းတွင် port တွဲပေးရမည်။</span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>QC Team – Can Skip this step</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>3</td>
                <td class='sdm__popover-content__table--process'>
                    <span>Old Service No in BSS status should be Terminated (or) Suspend Permanent first!</span>
                    <span class='sdm__popover-content__table--favour'>Service No အဟောင်းသည် terminated သို့ Suspend Permanent ဖြစ်အောင် အရင်လုပ်ပေးပါ။</span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>CAC or Finance</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>4</td>
                <td class='sdm__popover-content__table--process'>
                    <span>New Service No in BSS status should be Active!</span>
                    <span class='sdm__popover-content__table--favour'>Service No အသစ်သည် BSS တွင် Active ဖြစ်အောင် အရင်လုပ်ပေးပါ။</span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>Service Provision</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>5</td>
                <td class='sdm__popover-content__table--process'>
                    <span>Please fill the ODN to New Service No.</span>
                    <span class='sdm__popover-content__table--favour'>Service No အသစ်တွင် port တွဲပေးရန် လိုအပ်ပါသည်။</span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>QC Team</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>System 1</td>
                <td class='sdm__popover-content__table--process'>
                    <span class='sdm__popover-content__table--favour'>
                        Customer account အဟောင်းရဲ့ နောက်ဆုံး installation status (or) relocation status က complete ဖြစ်နေရမယ် မဖြစ်ရင် Old Customer installation should be complete status! လို့ ပေါ်မည်။
                    </span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>Auto Installation Complete - Complete by system</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>System 2</td>
                <td class='sdm__popover-content__table--process'>
                    <span class='sdm__popover-content__table--favour'>
                        Customer account အသစ်ရဲ့ latest installation request status က new (or) complete ဖြစ်နေရမယ် မဖြစ်ရင် new customer installation should be New (or) Complete status without Assigned Lsp! လို့ ပေါ်မည်။
                    </span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>Auto Remove Assigned LSP - Make installation complete by system</td>
            </tr>
            <tr>
                <td class='sdm__popover-content__table--number'>System 3</td>
                <td class='sdm__popover-content__table--process'>
                    <span class='sdm__popover-content__table--favour'>
                        Please Check Again Your Accounts ဟု Error Alert ပြပါက Old Customer တွင် Installation မရှိပါ။ Installation ထည့်ပေးရန် လိုအပ်ပါသည်။
                    </span>
                </td>
                <td class='sdm__popover-content__table--contact-person'>Skip this step</td>
            </tr>
        </tbody>
    </table>
</div>
```

## JavaScript Code for Popover Initialization

Place the following JavaScript code inside the `$(document).ready(function () { ... })` block on the customer detail page:

```javascript
    var myDefaultWhiteList = $.fn.popover.Constructor.Default.whiteList;

    myDefaultWhiteList.table = [];
    myDefaultWhiteList.tbody = [];
    myDefaultWhiteList.tr = [];
    myDefaultWhiteList.td = [];
    myDefaultWhiteList.th = [];

    myDefaultWhiteList.td = ['data-option'];

    var myCustomRegex = /^data-my-app-[\w-]+/;
    myDefaultWhiteList['*'].push(myCustomRegex);

    $('[data-toggle="popover"]').popover({
        template: `<div class="popover" role="tooltip" style="max-width: 50%; "><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>`,
        sanitize: false,
        html: true,
        trigger: "click",
        container: 'body',
    });
```

## SCSS Styling for Popover Content

Add the following SCSS code to style the `data-content` within the popover:

```scss
.sdm__popover-content {
    &__header {
        font-size: 1rem;
        font-weight: bold;
    }

    &__table {
        width: 100%;

        &--number {
            width: 15%;
        }

        &--process {
            width: 60%;
        }

        &--contact-person {
            width: 25%;
        }

        &--favour {
            color: #ec911a;
        }

        th,
        td {
            padding: 10px;
            font-size: 0.7rem;
            line-height: 1;

            @media (min-width: 1200px) {
                font-size: 0.7125rem;
                line-height: 1.05;
            }

            @media (min-width: 1300px) {
                font-size: 0.8rem;
                line-height: 1.1;
            }

            @media (min-width: 1400px) {
                font-size: 0.85rem;
                line-height: 1.2;
            }

            @media (min-width: 1500px) {
                font-size: 0.9rem;
                line-height: 1.2;
            }

            span {
                display: block;
            }
        }
    }
}
```
