const loginForm = document.getElementById("loginForm");
const visualizer_login = document.getElementById("visualizer_login");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState == xhr.DONE && xhr.status == 200) {
      const data = xhr.response;
      if (data == "success") {
        window.location.href = "acceuil.php";
      } else {
        setTimeout(() => {
          visualizer_login.innerHTML = "";
        }, 3000);
        visualizer_login.innerHTML = data;
      }
    }
  };
  const formData = new FormData(loginForm);
  xhr.send(formData);
});

