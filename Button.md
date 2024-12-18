# Button Documentation for Dashboard Pages

## Table of Contents

1. [New Dashboard](#new-dashboard)
   - [Refresh Button](#new-dashboard-refresh-button)
   - [Search Button](#new-dashboard-search-button)
   - [Collapse Button](#new-dashboard-collapse-button)
   - [Load More Button](#new-dashboard-load-more-button)
2. [Installation](#installation)
3. [On Call](#on-call)
   - [Trash Button](#on-call-trash-button)
   - [Add New Button](#on-call-add-new-button)
   - [Status Button](#on-call-status-button)
   - [Customer Name Button](#on-call-customer-name-button)
4. [Customer](#customer)
   - [Search Button](#customer-search-button)
5. [LSPS](#lsps)
   - [Add New Button](#lsps-add-new-button)
6. [Inventory](#inventory)
   - [Add New Button](#inventory-add-new-button)
   - [Restock Button](#inventory-restock-button)
   - [Reduce Button](#inventory-reduce-button)
7. [Plan](#plan)
   - [Add New Button](#plan-add-new-button)
   - [Edit Plan Button](#plan-edit-button)
   - [Delete Plan Button](#plan-delete-button)
8. [Area Code](#areacode)
   - [Add New Button](#areacode-add-new-button)
   - [Edit Area Code Button](#areacode-edit-button)
   - [Delete Area Code Button](#areacode-delete-button)
9. [Ports](#ports)
   - [OLT](#port-olt)
     - [Add New Button](#port-olt-add-new-button)
     - [Edit OLT Name Button](#port-olt-edit-name-button)
   - [FDT](#ports-fdt)
     - [Edit FDT Name Button](#port-fdt-edit-name-button)
   - [FAT](#port-fat)
     - [Edit FAT Name Button](#port-fat-edit-name-button)
     - [Detail FAT Item Button](#port-fat-item-detai-button)
10. [Reports](#reports)
    - [General](#report-general)
      - [Export Excel Button](#report-general-export-excel-button)
      - [Table Row Collpase Button](#report-general-table-row-collapse-button)
    - [LSP](#report-lsp)
      - [Export Excel Button](#report-lsp-export-excel-button)
    - [LSP General](#report-lsp-general)
      - [Export Excel Button](#report-lsp-general-export-excel-button)
    - [Inventory](#report-inventory)
      - [Export Excel Button](#report-inventory-export-excel-button)
    - [On Call](#report-oncall)
      - [Export Excel Button](#report-oncall-export-excel-button)
      - [Customer Detail Button](#report-oncall-customer-detail-button)

---

## 1. New Dashboard ([View Page](https://sdmstaging.5bb.com.mm/dashboard/new-dashboard)) <a id="new-dashboard"></a>

### Buttons

#### **Refresh** <a id="new-dashboard-refresh-button"></a>

- **Action:** Fetch updated data from the server.
- **UI Changes:** Updates the page content without navigating or opening a modal.
- **Type:** Icon.

![Refresh Button](./docs/buttons/refresh_button.png)

---

#### **Search** <a id="new-dashboard-search-button"></a>

- **Action:** Submit the search form.
- **UI Changes:** Displays filtered data on the page.
- **Type:** Icon.

![Search Button](./docs/buttons/search_button.png)

---

#### **Collapse** <a id="new-dashboard-collapse-button"></a>

- **Action:** Minimize or expand a section using JavaScript.
- **UI Changes:** Directly collapses or expands content without page reload.
- **Type:** Icon.

![Collapse Button](./docs/buttons/collapse_button.png)

---

#### **Load More** <a id="new-dashboard-load-more-button"></a>

- **Action:** Fetch and append additional data.
- **UI Changes:** Dynamically loads more items to the current view.
- **Type:** Tertiary.

![Load More Button](./docs/buttons/loadmore_button.png)

---

## 2. Installation([View Page](https://sdm-staging.5bb.com.mm/dashboard/staging)) <a id="installation"></a>

## 3. On Call ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call)) <a id="on-call"></a>

### Buttons

#### **Trash** <a id="on-call-trash-button"></a>

- **Action:** Redirect to the trash page.
- **UI Changes:** Opens `https://sdmstaging.5bb.com.mm/dashboard/on-call-trash`.
- **Type:** Secondary.

![Trash Button](./docs/buttons/trash_button.png)

---

#### **Add New** <a id="on-call-add-new-button"></a>

- **Action:** Open the "Add New On Call" form.
- **UI Changes:** Redirects to `https://sdmstaging.5bb.com.mm/dashboard/on-call/create`.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

---

### Table Row Buttons

#### **Status** <a id="on-call-status-button"></a>

- **Action:** Open details for a specific on-call entry.
- **UI Changes:** Redirects to `https://sdmstaging.5bb.com.mm/dashboard/on-call/:oncall_id`.
- **Type:** Icon.

![On Call Status Button](./docs/buttons/oncall-status_button.png)

---

#### **Customer Name** <a id="on-call-customer-name-button"></a>

- **Action:** Open details for a specific on-call customer.
- **UI Changes:** Redirects to `https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id`.
- **Type:** Icon.

![On Call Customer Button](./docs/buttons/oncall-customer_button.png)

---

## 4. Customer ([View Page]()) <a id="customer"></a>

#### **Search** <a id="customer-search-button"></a>

- **Action:** Submit the search form.
- **UI Changes:** Displays filtered data on the page.
- **Type:** Icon.

![Search Button](./docs/buttons/search_button.png)

---

## 5. LSPS ([View Page]()) <a id="lsps"></a>

#### **Add New** <a id="lsps-add-new-button"></a>

- **Action:** Open the "Add New LSP" form.
- **UI Changes:** Redirects to `https://sdmstaging.5bb.com.mm/dashboard/lsp/create`.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

---

## 6. Inventory ([View Page]()) <a id="inventory"></a>

#### **Add New** <a id="inventory-add-new-button"></a>

- **Action:** Open the "Add New Inventory" modal.
- **UI Changes:** Displays a modal for adding new inventory.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)
![Add New Inventory Modal](./docs/modals/add-new-inventory_modal.png)

---

### Table Row Buttons

#### **Restock** <a id="inventory-restock-button"></a>

- **Action:** Open the restock modal for a specific inventory item.
- **UI Changes:** Displays a restock modal.
- **Type:** Secondary.

![Restock Button](./docs/buttons/restock_button.png)
![Restock Modal](./docs/modals/inventory-item-restock_modal.png)

---

#### **Reduce** <a id="inventory-reduce-button"></a>

- **Action:** Open the reduce stock modal for a specific inventory item.
- **UI Changes:** Displays a reduce stock modal.
- **Type:** Secondary.

![Reduce Stock Button](./docs/buttons/reduce-stock_button.png)
![Reduce Stock Modal](./docs/modals/inventory-item-reduce-stock_modal.png)

---

## 7. Plan ([View Page]()) <a id="plan"></a>

#### **Add New** <a id="plan-add-new-button"></a>

- **Action:** Opens the "Add New Plan" form.
- **UI Changes:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/plan/create`.
- **Type:** Primary.

<div style="text-align: center;">
  <img src="./docs/buttons/add-new_button.png" alt="Add New Button">
</div>

### Table Row Buttons

#### **Edit** <a id="plan-edit-button"></a>

- **Action:** Opens the edit plan name form.
- **UI Changes:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/plan/:plan_id/edit`.
- **Type:** Secondary.

![Edit Button](./docs/buttons/edit_button.png)

---

#### **Delete** <a id="plan-delete-button"></a>

- **Action:** Delete an item from inventory.
- **UI Changes:** If related transactions exist, show an alert saying `Can't delete this request. Related transactions exist.` else delete an item.
- **Type:** Danger.

![Delete Button](./docs/buttons/delete_button.png)

---

## 8. Area Code ([View Page]()) <a id="areacode"></a>

#### **Add New** <a id="areacode-add-new-button"></a>

- **Action:** Opens the "Add New Plan" form.
- **UI Changes:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/area-code/create`.
- **Type:** Primary.

<div style="text-align: center;">
  <img src="./docs/buttons/add-new_button.png" alt="Add New Button">
</div>

### Table Row Buttons

#### **Edit** <a id="areacode-edit-button"></a>

- **Action:** Opens the edit plan name form.
- **UI Changes:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/area-code/:areacode_id/edit`.
- **Type:** Secondary.

![Edit Button](./docs/buttons/edit_button.png)

---

#### **Delete** <a id="areacode-delete-button"></a>

- **Action:** Delete an item from inventory.
- **UI Changes:** If related transactions exist, show an alert saying `Can't delete this request. Related transactions exist.` else delete an item.
- **Type:** Danger.

![Delete Button](./docs/buttons/delete_button.png)

---

## 9. Ports <a id="ports"></a>

## 10. Reports <a id="reports"></a>

## Notes <a id="notes"></a>

1. **Labels:**
   - **Action:** What the button does
   - **UI Changes:** How the button interacts with the page
   - **Type:** Button style
