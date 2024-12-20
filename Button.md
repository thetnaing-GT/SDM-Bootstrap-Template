# Button Documentation for Dashboard Pages

## Table of Contents

### 0. [Navigation](#navigation)

- [Notification Button](#navigation-notification-button)(Primary)
- [Logout Button](#navigation-logout-button)(Text)

### 1. [New Dashboard](#newdashboard)

- [Refresh Button](#newdashboard-refresh-button)(Icon)
- [Search Button](#newdashboard-search-button)(Icon)
- [Collapse Button](#newdashboard-collapse-button)(Icon)
- [Load More Button](#newdashboard-load-more-button)(Tertiary)

### 2. [Installation](#installation)

### 3. [On Call](#oncall)

- [Trash Button](#oncall-trash-button)(Secondary)
- [Add New Button](#oncall-add-new-button)(Primary)
- [Status Button](#oncall-status-button)(Tertiary)
- [Customer Name Button](#oncall-customer-name-button)(Link)

### 4. [On Call Create](#oncall-create)

- [Search Button](#oncall-create-search-button)(Primary)

### 5. [On Call Detail](#oncall-detail)

- [Delete Button](#oncall-detail-delete-button)
- [Refund Request](#oncall-detail-refund-request-button)
- [Mark as Complete](#oncall-detail-mark-as-complete-button)

### 6. [On Call Trash](#oncall-trash)

- [Search Button](#oncall-trash-search-button)
- [Status Button](#oncall-trash-status-button)
- [Restore Button](#oncall-trash-restore-button)
- [Delete Permanent Button](#oncall-trash-delete-permanent-button)

### 7. [Customer](#customer)

- [Search Button](#customer-search-button)(Primary)

### 8. [Customer Detail](#customer-detail)

- [Edit Button](#customer-detail-edit-button)(Secondary)
- [Sync Button](#customer-detail-sync-button)(Primary-Icon)
- [Add Button](#customer-detail-add-button)(Primary)
- [Cancel Button](#customer-detail-cancel-button)(Transparent)

### 9. [LSPS](#lsps)

- [Summary Popover Button](#lsps-summary-popover-button)(Icon-Blue)
- [Add New Button](#lsps-add-new-button)(Primary)
- [Detail LSP Button](#lsps-detail-button)(Link)

### 10. [LSPS Create](#lsps-create)

- [Add Button](#lsps-create-add-button)(Primary)
- [Cancel Button](#lsps-create-cancel-button)(Transparent)

### 11. [LSPS Detail](#lsps-detail)

- [Edit Button](#lsps-detail-edit-button)(Secondary)
- [Add LSP Admin](#lsps-detail-add-lsp-admin-button)(Primary)
- [Add Button](#lsps-detail-add-button)(Primary)
- [Cancel Button](#lsps-detail-cancel-button)(Secondary)

### 12. [Inventory](#inventory)

- [Add New Button](#inventory-add-new-button)(Primary)
- [Restock Button](#inventory-restock-button)(Secondary)
- [Reduce Button](#inventory-reduce-button)(Secondary)

### 13. [Plan](#plan)

- [Add New Button](#plan-add-new-button)(Primary)
- [Edit Plan Button](#plan-edit-plan-button)(Secondary)
- [Delete Plan Button](#plan-delete-plan-button)(Danger)

### 14. [Plan Create](#plan-create)

- [Add Button](#plan-create-add-button)(Primary)
- [Cancel Button](#plan-create-cancel-button)(Transparent)

### 15. [Plan Edit](#plan-edit)

- [Save Button](#plan-edit-save-button)(Primary)
- [Cancel Button](#plan-edit-cancel-button)(Transparent)

### 16. [Area Code](#areacode)

- [Add New Button](#areacode-add-new-button)(Primary)
- [Edit Area Code Button](#areacode-edit-areacode-button)(Secondary)
- [Delete Area Code Button](#areacode-delete-areacode-button)(Danger)

### 17. [Area Code Create](#areacode-create)

- [Add Button](#areacode-create-add-button)(Primary)
- [Cancel Button](#areacode-create-cancel-button)(Transparent)

### 18. [Area Code Edit](#areacode-edit)

- [Edit Button](#areacode-edit-edit-button)(Primary)
- [Cancel Button](#areacode-edit-cancel-button)(Secondary)

### 19. [Ports](#ports)

- **OLT**
  - [Add New Button](#ports-olt-add-new-button)(Primary)
  - [Edit OLT Button](#ports-olt-edit-button)(Icon)
- **OLT Create**  
  - [Add Button](#ports-olt-create-add-button)(Primary)
  - [Cancel Button](#ports-olt-create-cancel-button)(Transparent)
- **FDT**
  - [Edit FDT Button](#ports-fdt-edit-button)(Icon)
- **FAT**
  - [Edit FAT Button](#ports-fat-edit-button)(Icon)
  - [Detail FAT Button](#ports-fat-detail-button)(Secondary)
- **FAT Detail**
  - [Refresh Button](#ports-fat-detail-refresh-button)(Icon-Primary)
  - [Customer Account Link](#ports-fat-detail-customer-acc-link)(Link)
  - [PPOE User Link](#ports-fat-detail-ppoe-user-link)(Link)
  - [Verified Button](#ports-fat-detail-verify)(Icon-Blue)

### 20. [Reports](#reports)

- **General**
  - [Export Excel Button](#reports-general-export-excel-button)(Primary)
  - [Customer Detail Button](#reports-general-customer-detail-button)(Link)
  - [Table Row Collapse Button](#reports-general-table-row-collapse-button)(Icon)
- **LSP**
  - [Export Excel Button](#reports-lsp-export-excel-button)(Primary)
- **LSP General**
  - [Export Excel Button](#reports-lsp-general-export-excel-button)(Primary)
- **Inventory**
  - [Export Excel Button](#reports-inventory-export-excel-button)(Primary)
- **On Call**
  - [Export Excel Button](#reports-oncall-export-excel-button)(Primary)
  - [Customer Detail Button](#reports-oncall-customer-detail-button)(Link)

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

## 4. Oncall Create(View Page)([https://](https://sdmstaging.5bb.com.mm/dashboard/on-call/create)) <a id="oncall-create"></a>

### **Search** <a id="oncall-create-search-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary.

![Search Button](./docs/buttons/search-primary_button.png)

---

## 5. OnCall Detail([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/322947)) <a id="oncall-detail"></a>

### **Delete** <a id="oncall-detail-delete-button"></a>

- **Server Action:** Delete an item from oncall
- **User Interface:** Redirects to oncall page <https://sdmstaging.5bb.com.mm/dashboard/on-call/>
- **Type:** Danger

![Delete Button](./docs/buttons/delete_button.png)

### **Refund Request** <a id="oncall-detail-refund-request-button"></a

- **Server Action:** ---.
- **User Interface** ---.
- **Type:** Primary

![Refund Request](./docs/buttons/refund-request_button.png)

### **Mark as Complete** <a id="oncall-detail-mark-as-complete-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Tertiary.

![Mark as Complete](./docs/buttons/mark-as-complete_button.png)

## 6. Oncall Trash([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call-trash)) <a id="oncall-trash">

### **Search** <a id="oncall-trash-search-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary.

![Search Button](./docs/buttons//search-primary-icon_button.png)

### Table Buttons

#### **Status** <a id="oncall-trash-status-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Tertiary.

![On Call Status Button](./docs/buttons/oncall-status_button.png)

#### **Restore** <a id="oncall-trash-restore-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary

![Restore Button](./docs/buttons/restore_button.png)

#### **Delete Permanent** <a id="oncall-trash-delete-permanent-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Danger

![Delete Permanent Button](./docs/buttons/delete-permanent_button.png)

---

## 7. Customer ([View Page](https://sdmstaging.5bb.com.mm/dashboard/customer)) <a id="customer"></a>

### **Search** <a id="customer-search-button"></a>

- **Server Action:** Submit the search form.
- **User Interface:** Displays filtered data on the page.
- **Type:** Primary.

![Search Button](./docs/buttons/search-primary_button.png)

---

## 8. Customer Detail([View Page](https://sdmstaging.5bb.com.mm/dashboard/customer/139621)) <a id="customer-detail"></a>  

### **Edit Button:** <a id="customer-detail-edit-button"></a>

- **Server Action:** ---.
- **User Interface:** Make all the fields editable. Show save and cancel button.
- **Type:** ---.

![Edit Button](./docs/buttons/edit_button.png)

### **Sync Button** <a id="customer-detail-sync-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary

![Sync Button](./docs/buttons/sync_button.png)

### **Save** <a id="customer-detail-add-button"></a>

- **Server Action:** ---.
- **User Interface:** Cancel the editable state. Submit updated data to server.
- **Type:** Primary

![Save Button](./docs/buttons/save_button.png)

### **Cancel** <a id="customer-detail-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** Cancel the editable state.
- **Type:** Transparent.

![Cancel Secondary Button](./docs/buttons/cancel-secondary_button.PNG)

---

## 9. LSPS ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsps)) <a id="lsps"></a>

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

## 10. LSPS Create ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsp/create)) <a id="lsps-create"></a>

### **Add** <a id="lsps-create-add-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary

![Add Button](./docs/buttons/add_button.png)

### **Cancel** <a id="lsps-create-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

---

## 11. LSPS Detail ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsp/5?)) <a id="lsps-detail"></a>

### **Edit Button:** <a id="lsps-detail-edit-button"></a>

- **Server Action:** ---.
- **User Interface:** Make all the fields editable. Show save and cancel button.
- **Type:** ---.

![Edit Button](./docs/buttons/edit_button.png)

### **ADD LSP to Admin** <a id="lsps-detail-add-lsp-admin-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary.

![Add LSP to Admin Button](./docs/buttons/add-lsp-to-admin_button.png)

![Edit Button](./docs/buttons/edit_button.png)

### **Save** <a id="lsps-detail-add-button"></a>

- **Server Action:** ---.
- **User Interface:** Cancel the editable state. Submit updated data to server.
- **Type:** Primary

![Save Button](./docs/buttons/save_button.png)

### **Cancel** <a id="lsps-detail-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** Cancel the editable state.
- **Type:** Transparent.

![Cancel Secondary Button](./docs/buttons/cancel-secondary_button.PNG)

---

## 12. Inventory ([View Page](https://sdmstaging.5bb.com.mm/dashboard/inventory)) <a id="inventory"></a>

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

## 13. Plan ([View Page](https://sdmstaging.5bb.com.mm/dashboard/plan)) <a id="plan"></a>

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

## 14. Plan Create ([View Page](https://sdmstaging.5bb.com.mm/dashboard/plan/create)) <a id="plan-create"></a>

### **Add** <a id="plan-create-add-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary.  

![Add Button](./docs/buttons/add_button.png)

### **Cancel** <a id="plan-create-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/plan>.
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

---

## 15. Plan Edit ([View Page](https://sdmstaging.5bb.com.mm/dashboard/plan/1/edit)) <a id="plan-edit"></a>

### **Save** <a id="plan-edit-save-button"></a>

- **Server Action:** Submit the updated data to server.
- **User Interface:** If successful, show the toast message and redirects to <https://sdmstaging.5bb.com.mm/dashboard/plan> page.
- **Type:** Primary.

![Save Button](./docs/buttons/save_button.png)

### **Cancel** <a id="plan-edit-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/plan>.
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

---

## 16. Area Code ([View Page](https://sdmstaging.5bb.com.mm/dashboard/area-code)) <a id="areacode"></a>

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

## 17. Area Code Create ([View Page](https://sdmstaging.5bb.com.mm/dashboard/area-code/create)) <a id="areacode-create"></a>

### **Add** <a id="areacode-create-add-button"></a>

- **Server Action:** Create the new area code with submitted data.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/area-code/>.
- **Type:** Primary.

![Add Button](./docs/buttons/add_button.png)

### **Cancel** <a id="areacode-create-cancel-button"></a

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/area-code/>.
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

---

## 18. Area Code Edit ([Viea Page](https://sdmstaging.5bb.com.mm/dashboard/area-code/1/edit)) <a id="areacode-edit"></a>

### **Edit** <a id="areacode-edit-edit-button"></a>

- **Server Action:** Update the specfic areacode with updated data.
- **User Interface:** If successful, show toast at the top and redirects to <https://sdmstaging.5bb.com.mm/dashboard/area-code/>.
- **Type:** Primary.

![Edit Button](./docs/buttons/edit_button.png)

### **Cancel** <a id="areacode-edit-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** Redirects to <https://sdmstaging.5bb.com.mm/dashboard/area-code/>
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

---

## 19. Ports <a id="ports"></a>

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

### OLT Create <a id="ports-olt-create"></a>

#### **Add** <a id="ports-olt-create-add-button"></a>

- **Server Action:** Create a new olt entry with submitted data.
- **User Interface:** If successful, redirects to <https://sdmstaging.5bb.com.mm/dashboard/olt/>.
- **Type:** Primary.

![Add Button](./docs/buttons/add_button.png)

#### **Cancel** <a id="ports-olt-create-cancel-button"></a>

- **Server Action:** ---.
- **User Interface:** redirects to <https://sdmstaging.5bb.com.mm/dashboard/olt/>.
- **Type:** Transparent.

![Cancel Button](./docs/buttons/cancel_button.png)

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

### FAT Detail <a id="ports-fat-detail"></a>

#### **Refresh** <a id="ports-fat-detail-refresh-button"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Primary.

![Refresh Primary Button](./docs/buttons/refresh-primary_button.png)

#### Table Buttons

##### **Customer Account Link** <a id="ports-fat-detail-customer-acc-link"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Link.

![Customer Account Link](./docs/buttons/customer-account_link.png)

#### **PPOE User Link** <a id="ports-fat-detail-ppoe-user-link"></a>

- **Server Action:** ---.
- **User Interface:** ---.
- **Type:** Link.

![PPOE User Link](./docs/buttons/ppoe-user-link_button.png)

#### **Verified** <a id="ports-fat-detail-verify"></a>

- **Server Action:** ---.
- **User Interface:** More info about specific portal verified status is shown.
- **Type:** Icon.

![Verify Icon](./docs/buttons/verify_button.jpg)

---

## 20. Reports <a id="reports"></a>

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
