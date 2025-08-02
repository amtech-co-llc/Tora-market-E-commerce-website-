const ratingsForm = document.getElementById("ratings-form");
const visualizer = document.getElementById("visualizer");
const submit_btn = document.getElementById("submit-btn");

ratingsForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/star-ratings.php", true);
  xhr.onload = () => {
    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
      const data = xhr.response;
      if (data == "success") {
        setTimeout(() => {
          visualizer.innerHTML = "";
          location.reload();
          submit_btn.disabled = false;
        }, 3000);
        visualizer.innerHTML =
          "<span style='color:green;text-align:center;font-weight:bold;'>Envoyé</span>";
        submit_btn.disabled = true;
      } else {
        setTimeout(() => {
          visualizer.innerHTML = "";
          submit_btn.disabled = false;
        }, 3000);
        visualizer.innerHTML = data;
        submit_btn.disabled = true;
      }
    }
  };
  const formData = new FormData(ratingsForm);
  xhr.send(formData);
});
