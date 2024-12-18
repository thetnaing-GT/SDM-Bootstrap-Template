# Button Documentation for Oncall Pages

## Table of Contents

### 1. [Oncall](#oncall)

- [Trash](#oncall-trash-button) _(Secondary)_
- [Export to Excel](#oncall-export-to-excel-button) _(Primary)_
- [Add New](#oncall-add-new-button) _(Primary)_
- **Table Buttons**
  - **Customer Name Column**
    - [Customer Detail](#oncall-customer-detail-link) _(Link)_
  - **Status Column**
    - [Status](#oncall-status-button) _(Tertiary)_

### 2. [Oncall Create](#oncall-create)

- [Search](#oncall-create-search-button) _(Primary)_

### 3. [Oncall Detail](#oncall-detail)

- [Delete](#oncall-detail-delete-button) _(Danger)_
- [Refund Request](#oncall-detail-refund-request-button) _(Secondary)_
- [Mark as Complete](#oncall-detail-mark-as-complete-button) _(Primary)_
- [Collapse](#oncall-detail-collapse-button) _(Icon)_
- [Edit Order Info Button](#oncall-detail-edit-order-info-button) _(Icon)_
- [Assigned LSP](#oncall-detail-edit-order-info-assigned-lsp-button) _(Secondary)_
- [Edit Customer Info Button](#oncall-detail-edit-customer-info-button) _(Icon)_
- [Customer Type](#oncall-detail-edit-customer-info-customer-type-button) _(Secondary)_
- [Edit Detail Button](#oncall-detail-edit-detail-button) _(Primary)_
- [Edit Images Remark Button](#oncall-detail-edit-images-remark-button) _(Primary)_
- [Edit Verification Button](#oncall-detail-edit-verification-button) _(Edit)_

### 4. [Oncall Trash](#oncall-trash)

- [Search Button](#oncall-trash-search-button) _(Primary)_
- **Table Buttons**
  - **Customer Account No**
    - [Customer Detail](#oncall-trash-customer-detail-link) _(Link)_
  - **Action Column**
    - [Restore](#oncall-trash-restore-button) _(Secondary)_
    - [Delete Permanent](#oncall-trash-delete-permanent-button) _(Danger)_

---

## 1. On Call ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call)) <a id="oncall"></a>

### **Trash** <a id="oncall-trash-button"></a>

| Attribute          | Description                                                                              |
| ------------------ | ---------------------------------------------------------------------------------------- |
| **Server Action**  | Fetch deleted oncall items.                                                              |
| **User Interface** | Redirects to [Oncall Trash Page](https://sdmstaging.5bb.com.mm/dashboard/on-call-trash). |
| **Type**           | Secondary                                                                                |

![Trash Button](/docs/assets/trash_button.png)

### **Add New** <a id="oncall-add-new-button"></a>

| Attribute          | Description                                                                                |
| ------------------ | ------------------------------------------------------------------------------------------ |
| **Server Action**  | ---                                                                                        |
| **User Interface** | Redirects to [Oncall Create Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/create). |
| **Type**           | Primary                                                                                    |

![Add New Button](/docs/assets/add-new_button.png)

### **Export to Excel** <a id="oncall-export-to-excel-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Primary     |

![Export to Excel Button](/docs/assets/export-to-excel_button.png)

### **Table Buttons**

#### **Customer Name** <a id="oncall-customer-detail-link"></a>

| Attribute          | Description                                                                                         |
| ------------------ | --------------------------------------------------------------------------------------------------- |
| **Server Action**  | Fetch details for specific oncall customer.                                                         |
| **User Interface** | Redirects to [Customer Detail Page](https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id). |
| **Type**           | Link                                                                                                |

![On Call Customer Button](/docs/assets/oncall-customer_button.png)

#### **Status** <a id="oncall-status-button"></a>

| Attribute          | Description                                                                                    |
| ------------------ | ---------------------------------------------------------------------------------------------- |
| **Server Action**  | Fetch details for a specific oncall entry.                                                     |
| **User Interface** | Redirects to [Oncall Detail Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/:oncall_id). |
| **Type**           | Tertiary                                                                                       |

![On Call Status Button](/docs/assets/oncall-status_button.png)

---

## 2. Oncall Create ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/create)) <a id="oncall-create"></a>

### **Search** <a id="oncall-create-search-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Primary     |

![Search Button](/docs/assets/search-primary_button.png)

---

## 3. OnCall Detail ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/322947)) <a id="oncall-detail"></a>

### **Delete** <a id="oncall-detail-delete-button"></a>

| Attribute          | Description                                                                   |
| ------------------ | ----------------------------------------------------------------------------- |
| **Server Action**  | Delete an item from oncall.                                                   |
| **User Interface** | Redirects to [Oncall Page](https://sdmstaging.5bb.com.mm/dashboard/on-call/). |
| **Type**           | Danger                                                                        |

![Delete Button](/docs/assets/delete_button.png)

### **Refund Request** <a id="oncall-detail-refund-request-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Secondary   |

![Refund Request Button](/docs/assets/refund-request_button.png)

### **Mark as Complete** <a id="oncall-detail-mark-as-complete-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Tertiary    |

![Mark as Complete Button](/docs/assets/mark-as-complete_button.png)

---

## 4. Oncall Trash ([View Page](https://sdmstaging.5bb.com.mm/dashboard/on-call-trash)) <a id="oncall-trash"></a>

### **Search** <a id="oncall-trash-search-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Primary     |

![Search Button](/docs/assets/search-primary-icon_button.png)

### **Table Buttons**

#### **Customer Account No** <a id="oncall-trash-customer-detail-link"></a>

| Attribute          | Description                                                                                         |
| ------------------ | --------------------------------------------------------------------------------------------------- |
| **Server Action**  | Fetch details for specific oncall customer.                                                         |
| **User Interface** | Redirects to [Customer Detail Page](https://sdmstaging.5bb.com.mm/dashboard/customer/:customer_id). |
| **Type**           | Link                                                                                                |

![On Call Customer Button](/docs/assets/oncall-customer_button.png)

#### **Restore** <a id="oncall-trash-restore-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Secondary   |

![Restore Button](/docs/assets/restore_button.png)

#### **Delete Permanent** <a id="oncall-trash-delete-permanent-button"></a>

| Attribute          | Description |
| ------------------ | ----------- |
| **Server Action**  | ---         |
| **User Interface** | ---         |
| **Type**           | Danger      |

![Delete Permanent Button](/docs/assets/delete-permanent_button.png)
