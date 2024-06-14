// فایل جاوااسکریت برای کنترل منو در حالت موبایل

const hamburger = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");

hamburger.addEventListener("click", () => {
  if (mobileMenu.classList.contains("menu-active")) {
    mobileMenu.classList.remove("menu-active");
    mobileMenu.style.removeProperty("transform", "translate(0%)");
    mobileMenu.style.removeProperty("-o-transform", "translate(0%)");
    mobileMenu.style.removeProperty("-ms-transform", "translate(0%)");
    mobileMenu.style.removeProperty("-moz-transform", "translate(0%)");
    mobileMenu.style.removeProperty("-webkit-transform", "translate(0%)");
    return;
  }

  mobileMenu.classList.add("menu-active");
  mobileMenu.style.setProperty("transform", "translate(0%)");
  mobileMenu.style.setProperty("-o-transform", "translate(0%)");
  mobileMenu.style.setProperty("-ms-transform", "translate(0%)");
  mobileMenu.style.setProperty("-moz-transform", "translate(0%)");
  mobileMenu.style.setProperty("-webkit-transform", "translate(0%)");
});
