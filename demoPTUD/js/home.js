//Khi resize màn hình thì sẽ reload lại trang
window.addEventListener("resize", function () {
  "use strict";
  window.location.reload();
});
window.addEventListener("load", function () {

  // =============================================================Xử lý slider ảnh Hero
  let heroImage = document.querySelector(".hero-image img");
  let arr = [
    "./images/HOME/HeroImage2.png",
    "./images/HOME/HeroImage3.png",
    "./images/HOME/HeroImage.png",
  ];

  if (heroImage) {
    setInterval(function () {
      heroImage.src = arr[Math.floor(Math.random() * arr.length)];
    }, 2000);
  }

  // =============================================================Xử lý Light & Dark Mode
  let lightButton = document.querySelector(".light-button");
  let darkButton = document.querySelector(".dark-button");
  darkButton.addEventListener("click", function () {
    document.body.style.backgroundColor = "#1E272D";
    document
      .querySelectorAll(".heading")
      .forEach((item) => item.classList.add("dark"));
    // ==============================Phần Header
    document.querySelector(".header").classList.add("dark");

    // ==============================Phần Footer
    document.querySelector("footer").classList.add("dark");
    document
      .querySelectorAll(".boxfoot h2")
      .forEach((item) => item.classList.add("dark"));
    document
      .querySelectorAll(".boxfoot li")
      .forEach((item) => item.classList.add("dark"));
    document
      .querySelectorAll(".boxfoot li a")
      .forEach((item) => item.classList.add("dark"));
    // ==============================Phần Hero
    document.querySelector("section.hero").classList.add("dark");
    document.querySelector(".hero-slogan h1").classList.add("dark");
    document
      .querySelectorAll(".hero-slogan span")
      .forEach((item) => item.classList.add("dark"));
    document.querySelector(".hero-slogan p").classList.add("dark");
    document.querySelector(".hero-slogan .button .buy").classList.add("dark");

    // ==============================Phần Label
    document.querySelector(".label-container").classList.add("dark");

    // ==============================Phần Service
    document.querySelectorAll(".service .container .box").forEach((item) => {
      item.classList.add("dark");
    });

    document
      .querySelectorAll(".service .container .box .image")
      .forEach((item) => {
        item.classList.add("dark");
      });
    document.querySelectorAll(".service .container h2").forEach((item) => {
      item.classList.add("dark");
    });
    document.querySelectorAll(".service .container span").forEach((item) => {
      item.classList.add("dark");
    });

    // ==============================Phần Feature
    document.querySelector("section.feature").classList.add("dark");

    document.querySelectorAll(".feature .box span").forEach((item) => {
      item.classList.add("dark");
    });
    document.querySelectorAll(".feature .box li").forEach((item) => {
      item.classList.add("dark");
    });
    document.querySelectorAll(".details-hidden label").forEach((item) => {
      item.classList.add("dark");
    });
    document.querySelectorAll(".details-unhidden h2").forEach((item) => {
      item.classList.add("dark");
    });

    document
      .querySelectorAll("section.review .box-container .box")
      .forEach((item) => {
        item.classList.add("dark");
      });

    document.querySelector(".footer-logo").classList.add("dark");
    document.querySelector(".brands-menu").classList.add("dark");
    document.querySelector("section.review").classList.add("dark");
    document.querySelector("section.feature").classList.add("dark");
    document.querySelector("section.newest").classList.add("dark");
  });

  lightButton.addEventListener("click", function () {
    document.body.style.backgroundColor = "#fff";
    document
      .querySelectorAll(".dark")
      .forEach((item) => item.classList.remove("dark"));
  });

  // ============================================================= Scroll to top
  document.querySelector(".footer-logo img").addEventListener("click", function () {
      console.log("scroll");
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
});
