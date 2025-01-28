<template>
    <v-select label="name" @search="onSearch" @input="handleInput" @open="onOpen" :disabled="disabled"
        :loading="isLoading" :filterable="false" :options="paginatedOptions" :placeholder="placeholder"
        :reduce="(item) => item.value" :searchable="!error" :clearable="true" :value="selected">
        <template #spinner="{ loading }">
            <div v-if="loading" class="vs__spinner loading-spinner" style="border-left-color: #ec911a">
                Loading...
            </div>
        </template>

        <template #selected-option="{ name }">
            <span>{{ name }}</span>
        </template>

        <template #no-options>
            <div v-if="error" class="error-message" >
                {{ error }}
            </div>
            <div v-else>Sorry, no matching option.</div>
        </template>

        <template #list-footer>
            <li class="pagination" v-if="filteredOptions.length > limit">
                <button @click="prevPage" class="pagination-btn" :disabled="!hasPrevPage">
                    Prev
                </button>
                <button class="pagination-btn" :disabled="!hasNextPage" @click="nextPage">
                    Next
                </button>
            </li>
        </template>
    </v-select>
</template>

<script>
import VueSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import _ from "lodash";

export default {
    name: "AutoCompleteSelect",
    components: { "v-select": VueSelect },
    props: {
        endpoint: { type: String, required: true },
        placeholder: { type: String, required: true },
        disabled: { type: Boolean, default: false },
        hasError: { type: Function, default: () => false },
        errorMsg: { type: String, default: "" },
        headers: { type: Object, default: () => ({}) },
        dataMapper: { type: Function, required: true },
        selected: {type: [String, Object], default: null}
    },
    data() {
        return {
            allItems: [],
            query: "",
            offset: 0,
            limit: 7,
            isLoading: false,
            error: "",
        };
    },
    computed: {
        filteredOptions() {
            if (!this.query) {
                return this.allItems;
            }
            return this.allItems.filter((country) =>
                country.name.toLowerCase().includes(this.query.toLowerCase())
            );
        },
        paginatedOptions() {
            return this.filteredOptions.slice(this.offset, this.offset + this.limit);
        },
        hasNextPage() {
            return this.offset + this.limit < this.filteredOptions.length;
        },
        hasPrevPage() {
            return this.offset > 0;
        },
    },
    methods: {
        onSearch(search, loading) {
            this.query = search.trim();
            this.offset = 0;
            this.error = "";

            if (!this.query || this.query.length < 2) return;

            if (this.hasError && this.hasError()) {
                this.error =
                    this.errorMsg || "Please select the required value first.";
                return;
            }

            this.isLoading = true;
            loading(true);

            this.debouncedSearch(loading);
        },
        onOpen() {
            console.log("Hello");
            if (this.hasError && this.hasError()) {
                this.error =
                    this.errorMsg || "Please select the required value first.";
            } else {
                this.error = "";
            }
        },
        debouncedSearch: _.debounce(function (loading) {
            const url = this.endpoint.endsWith("/")
                ? `${this.endpoint}${this.query}`
                : `${this.endpoint}/${this.query}`;

            fetch(url, { headers: this.headers })
                .then((res) => {
                    if (!res.ok) {
                        throw new Error(`HTTP error! Status: ${res.status}`);
                    }
                    return res.json();
                })
                .then((json) => {
                    if (json.status && json.message) {
                        this.allItems = [];
                    } else {
                        this.allItems = json.map(this.dataMapper);
                    }
                })
                .catch((err) => {
                    console.error("Error fetching countries:", err);
                    this.allItems = [];
                })
                .finally(() => {
                    this.isLoading = false;
                    loading(false);
                });
        }, 350),
        prevPage() {
            this.offset = Math.max(this.offset - this.limit, 0);
        },
        nextPage() {
            if (this.hasNextPage) {
                this.offset += this.limit;
            }
        },
        handleInput(selectedValue) {
            console.log("Selected Value:", selectedValue);
            this.$emit("input", selectedValue);
        },
    },
};
</script>

<style scoped>
.pagination {
    padding: 0.25rem 0.5rem;
    display: flex;
    justify-content: space-between;
    gap: 0.5rem;
}

.pagination-btn {
    padding: 0.25rem;
    flex: 1;
    color: #2c2c2c;
    border-radius: 0.25rem;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px,
        rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
}

.pagination-btn:hover {
    background-color: #ec911a;
    color: #fffafa;
}

.error-message {
    color: #dc3545;
}
</style>
