import "bootstrap";
import Vue from "vue";
import AutoCompleteSelect from "./components/AutoCompleteSelect.vue";
import HierarchicalAutoCompleteSelect from "./components/HierarchicalAutoCompleteSelect.vue";

document.querySelectorAll('[data-bs-toggle="popover"]').forEach((popover) => {
  new bootstrap.Popover(popover, { sanitize: false, html: true });
});

window.copyContent = function (textToCopy) {
  navigator.clipboard
    .writeText(textToCopy)
    .then(() => {
      console.log("Text copied to clipboard:", textToCopy);
    })
    .catch((err) => {
      console.error("Failed to copy text:", err);
    });
};

window.Vue = Vue;

Vue.component("auto-complete-select", AutoCompleteSelect);

Vue.component("hierachical-auto-complete-select", HierarchicalAutoCompleteSelect)

const app = new Vue({
  el: "#app",
});
