const section = document.querySelectorAll(".section");
const menu = document.querySelectorAll("a");

window.onscroll = () => {
  section.forEach((i) => {
    let top = window.scrollY;
    let offset = i.offsetTop - 90;
    let height = i.offsetHeight;
    let id = i.getAttribute("id");
    if (top >= offset && top < offset + height) {
      menu.forEach((link) => {
        link.classList.remove("active");
        document.querySelector("a[href*=" + id + "]").classList.add("active");
      });
    }
  });
};

const reveal = () => {
  var reveals = document.querySelectorAll(".reveal");

  for (let i = 0; i < reveals.length; i++) {
    const windowHeight = window.innerHeight;
    const elementTop = reveals[i].getBoundingClientRect().top;
    const elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
};

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

$(window).scroll(() => {
  if ($(this).scrollTop() > 0) {
    $(".navbar").addClass("afterscroll");
  } else {
    $(".navbar").removeClass("afterscroll");
  }
});

const header = document.querySelector("header");
const listItems = document.querySelectorAll(".list-item");
const toggleBtn = document.getElementsByName("toggleBtn");

$(".toggle-btn").click(() => {
  if (header.classList.contains("show-nav")) {
    header.classList.remove("show-nav");
    header.classList.add("hide-nav");
  } else {
    header.classList.add("show-nav");
    header.classList.remove("hide-nav");
  }
  listItems.forEach((item) => {
    item.classList.toggle("show");
  });
});