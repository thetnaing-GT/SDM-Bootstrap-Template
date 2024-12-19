# Button Documentation for Dashboard Pages

## Table of Contents

0. [Navigation](#navigation)
   - [Notification Button](#navigation-notification-button)
   - [Logout Button](#navigation-logout-button)
1. [New Dashboard](#newdashboard)
   - [Refresh Button](#newdashboard-refresh-button)
   - [Search Button](#newdashboard-search-button)
   - [Collapse Button](#newdashboard-collapse-button)
   - [Load More Button](#newdashboard-load-more-button)
2. [Installation](#installation)
3. [On Call](#oncall)
   - [Trash Button](#oncall-trash-button)
   - [Add New Button](#oncall-add-new-button)
   - [Status Button](#oncall-status-button)
   - [Customer Name Button](#oncall-customer-name-button)
4. [Customer](#customer)
   - [Search Button](#customer-search-button)
5. [LSPS](#lsps)
   - [Summary Popover Button](#lsps-summary-popover-button)
   - [Add New Button](#lsps-add-new-button)
   - [Detail LSP Button](#lsps-detail-button)
6. [Inventory](#inventory)
   - [Add New Button](#inventory-add-new-button)
   - [Restock Button](#inventory-restock-button)
   - [Reduce Button](#inventory-reduce-button)
7. [Plan](#plan)
   - [Add New Button](#plan-add-new-button)
   - [Edit Plan Button](#plan-edit-plan-button)
   - [Delete Plan Button](#plan-delete-plan-button)
8. [Area Code](#areacode)
   - [Add New Button](#areacode-add-new-button)
   - [Edit Area Code Button](#areacode-edit-areacode-button)
   - [Delete Area Code Button](#areacode-delete-areacode-button)
9. [Ports](#ports)
   - [OLT](#ports-olt)
     - [Add New Button](#ports-olt-add-new-button)
     - [Edit OLT Button](#ports-olt-edit-button)
   - [FDT](#ports-fdt)
     - [Edit FDT Button](#ports-fdt-edit-button)
   - [FAT](#ports-fat)
     - [Edit FAT Button](#ports-fat-edit-button)
     - [Detail FAT Button](#ports-fat-detail-button)
10. [Reports](#reports)
    - [General](#reports-general)
      - [Export Excel Button](#reports-general-export-excel-button)
      - [Customer Detail Button](#reports-general-customer-detail-button)
      - [Table Row Collapse Button](#reports-general-table-row-collapse-button)
    - [LSP](#reports-lsp)
      - [Export Excel Button](#reports-lsp-export-excel-button)
    - [LSP General](#reports-lsp-general)
      - [Export Excel Button](#reports-lsp-general-export-excel-button)
    - [Inventory](#reports-inventory)
      - [Export Excel Button](#reports-inventory-export-excel-button)
    - [On Call](#reports-oncall)
      - [Export Excel Button](#reports-oncall-export-excel-button)
      - [Customer Detail Button](#reports-oncall-customer-detail-button)

## 0. Navigation <a id="navigation"></a>

### **Notification** <a id="navigation-notification-button"></a>

- **Server Action:** fetch the notification related to user logged in.
- **User Interface:** Display popup just under notification icon
- **Type:**: Icon

![Notification Button](./docs/buttons/navigation-notification_button.png)

### **Logout** <a id="navigation-logout-button"></a>

- **Server Action:** Logged the user out,
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/login>
- **Type:** Icon

![Logout Button](./docs/buttons/navigation-logout_button.png)

## 1. New Dashboard ([View Page](https://sdmstaging.5bb.com.mm/dashboard/new-dashboard)) <a id="newdashboard"></a>

### **Refresh** <a id="newdashboard-refresh-button"></a>

- **Server Action:** Fetch updated data from the server.
- **User Interface:** Updates the page content.
- **Type:** Text.

![Refresh Button](./docs/buttons/refresh_button.png)

### **Search** <a id="newdashboard-search-button"></a>

- **Server Action:** Submit the search form.
- **User Interface:** Displays filtered data on the page.
- **Type:** Icon.

![Search Button](./docs/buttons/search_button.png)

### **Collapse** <a id="newdashboard-collapse-button"></a>

- **Server Action:** ---.
- **User Interface:** Minimize or expand a section using JavaScript .
- **Type:** Icon.

![Collapse Button](./docs/buttons/collapse_button.png)

### **Load More** <a id="newdashboard-load-more-button"></a>

- **Server Action:** Fetch and append additional data.
- **User Interface:** Dynamically loads more items to the current view.
- **Type:** Tertiary.

![Load More Button](./docs/buttons/loadmore_button.png)

---

## 2. Installation ([View Page](https://sdmstaging.5bb.com.mm/dashboard/installation)) <a id="installation"></a>

---

## 3. On Call ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call)) <a id="oncall"></a>

### **Trash** <a id="oncall-trash-button"></a>

- **Server Action:** Fetch deleted oncall items.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/on-call-trash>.
- **Type:** Secondary.

![Trash Button](./docs/buttons/trash_button.png)

### **Add New** <a id="oncall-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/on-call/create>.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

### Table Buttons

#### **Status** <a id="oncall-status-button"></a>

- **Server Action:** Fetch details for a specific oncall entry.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/on-call/:oncall_id>.
- **Type:** Tertiary.

![On Call Status Button](./docs/buttons/oncall-status_button.png)

#### **Customer Name** <a id="oncall-customer-name-button"></a>

- **Server Action:** Fetch details for specific oncall customer.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id>.
- **Type:** Link.

![On Call Customer Button](./docs/buttons/oncall-customer_button.png)

---

## 4. Customer ([View Page](https://sdmstaging.5bb.com.mm/dashboard/customer)) <a id="customer"></a>

### **Search** <a id="customer-search-button"></a>

- **Server Action:** Submit the search form.
- **User Interface:** Displays filtered data on the page.
- **Type:** Primary.

![Search Button](./docs/buttons/search-primary_button.png)

---

## 5. LSPS ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsps)) <a id="lsps"></a>

### **Summary Popover** <a id="lsps-summary-popover-button"></a>

- **Server Action:** Fetch the summary info of all lsps.
- **User Interface:** Display popup just beside ? icon
- **Type:** Icon

![Summary Popover Icon](./docs/buttons/summary-popover_button.png)

### **Add New** <a id="lsps-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/lsp/create>.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

### Table Buttons

#### **LSP Detail** <a id="lsps-detail-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/lsp/:lsp_id?name=installation>.
- **Type:** Link.

![LSP Detail Button](./docs/buttons/lsps-detail_button.png)

---

## 6. Inventory ([View Page](https://sdmstaging.5bb.com.mm/dashboard/inventory)) <a id="inventory"></a>

### **Add New** <a id="inventory-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Displays a modal for adding new inventory.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)
![Add New Inventory Modal](./docs/modals/add-new-inventory_modal.png)

### Table Buttons

#### **Restock** <a id="inventory-restock-button"></a>

- **Server Action:** ---.
- **User Interface:** Displays a restock modal for a specific inventory item.
- **Type:** Secondary.

![Restock Button](./docs/buttons/restock_button.png)
![Restock Modal](./docs/modals/inventory-item-restock_modal.png)

#### **Reduce** <a id="inventory-reduce-button"></a>

- **Server Action:** ---.
- **User Interface:** Displays a reduce stock modal for a specific inventory item.
- **Type:** Secondary.

![Reduce Stock Button](./docs/buttons/reduce-stock_button.png)
![Reduce Stock Modal](./docs/modals/inventory-item-reduce-stock_modal.png)

---

## 7. Plan ([View Page](https://sdmstaging.5bb.com.mm/dashboard/plan)) <a id="plan"></a>

### **Add New** <a id="plan-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/plan/create`.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

### Table Buttons

#### **Edit Plan** <a id="plan-edit-plan-button"></a>

- **Server Action:** Fetch details for specific plan entry.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/plan/:plan_id/edit`.
- **Type:** Secondary.

![Edit Button](./docs/buttons/edit_button.png)

#### **Delete Plan** <a id="plan-delete-plan-button"></a>

- **Server Action:** Delete an item from inventory.
- **User Interface:** If related transactions exist, show an alert saying `Can't delete this request. Related transactions exist.` else remove from view.
- **Type:** Danger.

![Delete Button](./docs/buttons/delete_button.png)

---

## 8. Area Code ([View Page](https://sdmstaging.5bb.com.mm/dashboard/area-code)) <a id="areacode"></a>

### **Add New** <a id="areacode-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/area-code/create`.
- **Type:** Primary.

![Add New Button](./docs/buttons/add-new_button.png)

### Table Buttons

#### **Edit Area Code** <a id="areacode-edit-areacode-button"></a>

- **Server Action:** Fetch detais for specific areacode entry.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/area-code/:areacode_id/edit`.
- **Type:** Secondary.

![Edit Button](./docs/buttons/edit_button.png)

#### **Delete Area Code** <a id="areacode-delete-areacode-button"></a>

- **Server Action:** Delete an item from areacode.
- **User Interface:** If related transactions exist, show an alert saying `Can't delete this request. Related transactions exist.` else remove from view.
- **Type:** Danger.

![Delete Button](./docs/buttons/delete_button.png)

---

## 9. Ports <a id="ports"></a>

### OLT <a id="ports-olt"></a>

#### **Add New** <a id="ports-olt-add-new-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/olt/create`.
- **Type:** Primary.

#### Table Buttons

##### **Edit OLT** <a id="ports-olt-edit-button"></a>

- **Server Action:** Fetch details for specific OLT port entry.
- **User Interface:** Opens a modal to edit a specific OLT port.
- **Type:** Icon.

![Edit Button](./docs/buttons/ports-olt-edit_button.png)
![Edit OLT Modal](./docs/modals/ports-olt-edit_modal.png)

---

### FDT <a id="ports-fdt"></a>

#### Table Buttons

##### **Edit FDT** <a id="ports-fdt-edit-button"></a>

- **Server Action:** Fetch details for specific FDT port entry.
- **User Interface:** Opens a modal to edit a specific FDT port.
- **Type:** Icon.

![Edit Button](./docs/buttons/ports-fdt-edit_button.png)
![Edit FDT Modal](./docs/modals/ports-fdt-edit_modal.png)

---

### FAT <a id="ports-fat"></a>

#### Table Buttons

##### **Edit FAT** <a id="ports-fat-edit-button"></a>

- **Server Action:** Fetch details for specific FAT port entry.
- **User Interface:** Opens a modal to edit a specific FAT port.
- **Type:** Icon.

![Edit Button](./docs/buttons/ports-fat-edit_button.png)
![Edit Modal](./docs/modals/ports-fat-edit_modal.png)

##### **Detail FAT** <a id="ports-fat-detail-button"></a>

- **Server Action:** Fetch details for specific FAT port entry.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/fat/24880`.
- **Type:** Secondary.

![Detail Button](./docs/buttons/ports-fat-detail_button.PNG)

---

## 10. Reports <a id="reports"></a>

### General <a id="reports-general"></a>

#### **Export to Excel** <a id="reports-general-export-excel-button"></a>

- **Server Action:** Exports an .xlsx file containing all general reports.
- **User Interface:** ---.
- **Type:** Primary.

![Export to Excel Button](./docs/buttons/export-to-excel_button.PNG)

#### Table Buttons

##### **General Report Customer Detail** <a id="reports-general-customer-detail-button"></a>

- **Server Action:** Fetch details of customer belonging to specific general report entry.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id`.
- **Type:** Link.

##### **Table Row Collapse Button** <a id="reports-general-table-row-collapse-button"></a>

- **Server Action:** ---.
- **User Interface:** Collapses or un-collapses the table row.
- **Type:** Icon.

![Collapse Button](./docs/buttons/table-row-collapse_button.PNG)

---

### LSP <a id="reports-lsp"></a>

#### **Export to Excel** <a id="reports-lsp-export-excel-button"></a>

- **Server Action:** Exports an .xlsx file containing all LSP reports.
- **User Interface:** ---.
- **Type:** Primary.

![Export to Excel Button](./docs/buttons/export-to-excel_button.PNG)

---

### LSP General <a id="reports-lsp-general"></a>

#### **Export to Excel** <a id="reports-lsp-general-export-excel-button"></a>

- **Server Action:** Exports an .xlsx file containing all LSP general reports.
- **User Interface:** ---.
- **Type:** Primary.

![Export to Excel Button](./docs/buttons/export-to-excel_button.PNG)

---

### Inventory <a id="reports-inventory"></a>

#### **Export to Excel** <a id="reports-inventory-export-excel-button"></a>

- **Server Action:** Exports an .xlsx file containing all inventory reports.
- **User Interface:** ---.
- **Type:** Primary.

![Export to Excel Button](./docs/buttons/export-to-excel_button.PNG)

---

### On Call <a id="reports-oncall"></a>

#### **Export to Excel** <a id="reports-oncall-export-excel-button"></a>

- **Server Action:** Exports an .xlsx file containing all oncall reports.
- **User Interface:** ---.
- **Type:** Primary.

![Export to Excel Button](./docs/buttons/export-to-excel_button.PNG)

#### Table Buttons

##### **On Call Customer Detail** <a id="reports-oncall-customer-detail-button"></a>

- **Server Action:** Fetch the details of customer belonging to specific oncall entry.
- **User Interface:** Redirects to the page: `https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id`.
- **Type:** Link.

---

### Notes <a id="notes"></a>

1. **Labels:**
   - **Server Action:** Describes the action performed by the server when the button is clicked.
   - **User Interface:** Describes the changes visible to the user on the page.
   - **Type:** Specifies the button type.

### Pages Left

[Customer Detail](https://sdmstaging.5bb.com.mm/dashboard/customer/139621)
[On Call Trash](https://sdmstaging.5bb.com.mm/dashboard/on-call-trash)
[On Call Create](https://sdmstaging.5bb.com.mm/dashboard/on-call/create)
[On Call Detail](https://sdmstaging.5bb.com.mm/dashboard/on-call/322947)
[LSP Create](https://sdmstaging.5bb.com.mm/dashboard/lsp/create)
[LSP Edit](https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation)
[LSP Detail](https://sdmstaging.5bb.com.mm/dashboard/lsp/2?name=installation)
[Plan Create](https://sdmstaging.5bb.com.mm/dashboard/plan/create)
[Plan Edit](https://sdmstaging.5bb.com.mm/dashboard/plan/1/edit)
[Area Code Create](https://sdmstaging.5bb.com.mm/dashboard/area-code/create)
[Area Code Edit](https://sdmstaging.5bb.com.mm/dashboard/area-code/1/edit)
[OLT Create](https://sdmstaging.5bb.com.mm/dashboard/olt/create)
[FAT Detail](https://sdmstaging.5bb.com.mm/dashboard/fat/13513)
