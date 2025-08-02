const sign_up_form = document.getElementById("sign_up_form");
const visulizer_sign_up = document.getElementById("visulizer_sign_up");

sign_up_form.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/sign-up.php", true);
  xhr.onload = () => {
    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
      const data = xhr.response;
      if (data == "success") {
        window.location.href = "account-details.php";
      } else {
        setTimeout(() => {
          visulizer_sign_up.innerHTML = "";
        }, 3000);
        visulizer_sign_up.innerHTML = data;
      }
    }
  };
  const formData = new FormData(sign_up_form);
  xhr.send(formData);
});
