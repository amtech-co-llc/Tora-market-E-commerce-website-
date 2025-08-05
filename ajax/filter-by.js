const filterFormAll = document.getElementById("filterFormAll");
const filterLocation = document.getElementById("filterLocation");
const filterPriceMin = document.getElementById("filterPriceMin");
const filterPriceMax = document.getElementById("filterPriceMax");
const filterCurrency = document.getElementById("filterCurrency");
const filterState = document.getElementById("filterState");
const sous_categorie = document.getElementById("sous_categorie");

// Container where data will be displayed
const resultContainer = document.getElementById("card-container");

// Attach input/change listeners to all fields
[
  filterLocation,
  filterPriceMin,
  filterPriceMax,
  filterCurrency,
  filterState,
  sous_categorie,
].forEach((field) => {
  field.addEventListener("input", fetchFilteredData);
  field.addEventListener("change", fetchFilteredData);
});

function fetchFilteredData() {
  // Collect form values
  const formData = new FormData();
  formData.append("location", filterLocation.value);
  formData.append("price_min", filterPriceMin.value);
  formData.append("price_max", filterPriceMax.value);
  formData.append("currency", filterCurrency.value);
  formData.append("state", filterState.value);
  formData.append("sous_categorie", sous_categorie.value);

  // Create XMLHttpRequest
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/filter-by.php", true);

  xhr.onload = () => {
    if (xhr.status === 200) {
      resultContainer.innerHTML = xhr.responseText;
    }
  };

  xhr.send(formData);
}
