# Button Documentation for LSP Pages

## Table of Contents

### 1. [LSPS](#lsps)

- [Summary Popover](#lsps-summary-popover-button) *(Icon)*
- [Add New](#lsps-add-new-button) *(Primary)*
- **Table**
  - **LSP Name Column**
    - [LSP Detail](#lsps-detail-button) *(Link)*

### 2. [LSPS Create](#lsps-create)

- [Add](#lsps-create-add-button) *(Primary)*
- [Cancel](#lsps-create-cancel-button) *(Transparent)*

### 3. [LSPS Detail](#lsps-detail)

- [Edit](#lsps-detail-edit-button) *(Secondary)*
- [Add LSP Admin](#lsps-detail-add-lsp-admin-button) *(Primary)*
- [Save](#lsps-detail-save-button) *(Primary)*
- [Cancel](#lsps-detail-cancel-button) *(Secondary)*

---

## 1. LSPS ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsps)) <a id="lsps"></a>

### **Summary Popover** <a id="lsps-summary-popover-button"></a>

- **Server Action:** Fetch the summary info of all LSPs.
- **User Interface:** Displays a popup beside the "?" icon.
- **Type:** Icon

![Summary Popover Icon](/docs/buttons/summary-popover_button.png)

### **Add New** <a id="lsps-add-new-button"></a>

- **Server Action:** None.
- **User Interface:** Redirects to [LSP Create Page](https://sdmstaging.5bb.com.mm/dashboard/lsp/create).
- **Type:** Primary

![Add New](/docs/buttons/add-new_button.png)

### Table

#### **LSP Detail** <a id="lsps-detail-button"></a>

- **Server Action:** None.
- **User Interface:** Redirects to the LSP Detail Page, e.g., [LSP Detail](https://sdmstaging.5bb.com.mm/dashboard/lsp/:lsp_id?name=installation).
- **Type:** Link

![LSP Detail](/docs/buttons/lsps-detail_button.png)

---

## 2. LSPS Create ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsp/create)) <a id="lsps-create"></a>

### **Add** <a id="lsps-create-add-button"></a>

- **Server Action:** None.
- **User Interface:** Confirms and submits form data.
- **Type:** Primary

![Add](/docs/buttons/add_button.png)

### **Cancel** <a id="lsps-create-cancel-button"></a>

- **Server Action:** None.
- **User Interface:** Cancels and redirects to the previous page.
- **Type:** Transparent

![Cancel](/docs/buttons/cancel_button.png)

---

## 3. LSPS Detail ([View Page](https://sdmstaging.5bb.com.mm/dashboard/lsp/5)) <a id="lsps-detail"></a>

### **Edit** <a id="lsps-detail-edit-button"></a>

- **Server Action:** None.
- **User Interface:** Makes all fields editable and displays "Save" and "Cancel" buttons.
- **Type:** Secondary

![Edit](/docs/buttons/edit_button.png)

### **Add LSP Admin** <a id="lsps-detail-add-lsp-admin-button"></a>

- **Server Action:** None.
- **User Interface:** Opens a form to add an admin to the LSP.
- **Type:** Primary

![Add LSP Admin](/docs/buttons/add-lsp-to-admin_button.png)

### **Save** <a id="lsps-detail-save-button"></a>

- **Server Action:** Submits the updated data to the server.
- **User Interface:** Cancels the editable state and updates the table.
- **Type:** Primary

![Save](/docs/buttons/save_button.png)

### **Cancel** <a id="lsps-detail-cancel-button"></a>

- **Server Action:** None.
- **User Interface:** Cancels the editable state and reverts changes.
- **Type:** Secondary

![Cancel](/docs/buttons/cancel-secondary_button.png)
