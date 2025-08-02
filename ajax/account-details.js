const other_detailsForm = document.getElementById("other-details");

other_detailsForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/account-details.php", true);
  xhr.onload = () => {
    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
      const data = xhr.response;
      if (data == "registered") {
        window.location.href = "acceuil.php";
      } else {
        alert(data);
      }
    }
  };
  const dataForm = new FormData(other_detailsForm);
  xhr.send(dataForm);
});
