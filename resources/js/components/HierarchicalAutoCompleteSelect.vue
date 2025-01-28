<template>
  <div class="mb-4 row">
    <div class="col-md-3">
      <auto-complete-select
        placeholder="Select a country"
        @input="onCountrySelected"
        :endpoint="countryEndpoint"
        :dataMapper="countryMapper"
        :selected="selectedCountry"
      />
    </div>

    <div class="col-md-3">
      <auto-complete-select
        placeholder="Select a city"
        @input="onCitySelected"
        :endpoint="cityEndpoint"
        :dataMapper="citiyMapper"
        :headers="cityHeaders"
        :errorMsg="cityErrorMessage"
        :hasError="() => !selectedCountry"
        :selected="selectedCity"
      />
    </div>

    <div class="col-md-3">
      <auto-complete-select
        placeholder="Select a township"
        @input="onTownshipSelected"
        :endpoint="townshipEndpoint"
        :dataMapper="townshipMapper"
        :errorMsg="townshipErrorMessage"
      />
    </div>
  </div>
</template>

<script>
import AutoCompleteSelect from "./AutoCompleteSelect.vue";

export default {
  name: "HierarchicalAutoCompleteSelect",
  components: {
    AutoCompleteSelect,
  },
  data() {
    return {
      selectedCountry: null,
      selectedCity: null,
      selectedTownship: null,
      baseCountryEndpoint: "https://restcountries.com/v3.1/name",
      cityErrorMessage: "Country is required",
      townshipErrorMessage:
        "You must select a city before choosing a township.",
      cityHeaders: {
        "x-rapidapi-host": "wft-geo-db.p.rapidapi.com",
        "x-rapidapi-key": "46376297d5mshbd205f9e8899661p10d893jsneed279cc1fc5",
      },
      hasError: this.selectedCountry === null,
    };
  },
  computed: {
    countryEndpoint() {
      return this.baseCountryEndpoint;
    },
    cityEndpoint() {
      return this.selectedCountry
        ? `https://wft-geo-db.p.rapidapi.com/v1/geo/cities?countryIds=${this.selectedCountry}`
        : "";
    },
    townshipEndpoint() {
      return this.selectedCountry && this.selectedCity
        ? `https://restcountries.com/v3.1/name/${this.selectedCountry}/${this.selectedCity}/township`
        : "";
    },
  },
  methods: {
    countryMapper(country) {
      return {
        name: country.name.common,
        value: country.cca2,
      };
    },
    citiyMapper(city) {
      return {
        name: country.name.common,
        value: country.cca2,
      };
    },
    townshipMapper(township) {
      return {
        name: country.name.common,
        value: country.cca2,
      };
    },
    onCountrySelected(countryValue) {
      console.log("Country selected:", countryValue);
      this.selectedCountry = countryValue;
      this.selectedCity = null;
      this.selectedTownship = null;
    },

    onCitySelected(cityValue) {
      console.log("City selected:", cityValue);
      this.selectedCity = cityValue;
      this.selectedTownship = null;
    },

    onTownshipSelected(townshipValue) {
      console.log("Township selected:", townshipValue);
      this.selectedTownship = townshipValue;
    },

    initializeFromURL() {
      const urlParams = new URLSearchParams(window.location.search);

      this.selectedCountry = urlParams.get("country") || null;
      this.selectedCity = urlParams.get("city") || null;

      if (this.selectedCountry) {
        this.onCountrySelected(this.selectedCountry);
      }
      if (this.selectedCity) {
        this.onCitySelected(this.selectedCity);
      }
      if (this.selectedTownship) {
        this.onTownshipSelected(this.selectedTownship);
      }
    },
  },
};
</script>
