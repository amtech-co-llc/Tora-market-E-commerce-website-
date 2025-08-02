const mobile_menu = document.querySelector(".mobile-menu");
const before_menu = document.querySelector(".before-mobile-menu");
const menu_button = document.getElementById("menu-button");
const categorie_list = document.querySelector(".categories-list");
const slide_button = document.querySelectorAll(".scroll-btn");

const home_button = document.getElementById("home-btn");

const notification_drop = document.querySelector(
  ".see-notification .notification-contents"
);
const notification_bell = document.querySelector(".notifications");

menu_button.addEventListener("click", () => {
  setTimeout(() => {
    before_menu.classList.add("active");
    categorie_list.style.position = "static";
    slide_button.forEach((button_m) => {
      button_m.style.position = "static";
    });
  }, 300);
  window.scrollTo({ top: 0, behavior: "smooth" });
  document.getElementById("body").classList.add("noscroll");
});

window.addEventListener("click", (event) => {
  if (event.target === before_menu) {
    before_menu.classList.remove("active");
    document.querySelector("body").classList.remove("noscroll");
    setTimeout(() => {
      categorie_list.style.position = "sticky";
      slide_button.forEach((button_m) => {
        button_m.style.position = "absolute";
      });
    }, 300);
  }
});

notification_bell.addEventListener("click", () => {
  notification_drop.classList.add("show");
  document.querySelector("body").classList.add("noscroll");
});

// Click outside to hide the dropdown
document.addEventListener("click", (event) => {
  if (
    !notification_drop.contains(event.target) &&
    !notification_bell.contains(event.target)
  ) {
    notification_drop.classList.remove("show");
    document.querySelector("body").classList.remove("noscroll");
  }
});


