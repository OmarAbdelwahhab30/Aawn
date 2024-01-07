/*------------- #General --------------*/

var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

$('a[href="#"]').click(function ($) {
  $.preventDefault();
});

/*------------- #panel-responsive-items --------------*/

$(function () {
  $(".panel-responsive-btn").click(function () {
    let current_item_attr = $(this).attr("data-target"),
      current_item = $(".panel-responsive-item." + current_item_attr);

    if ($(this).hasClass("panel-responsive-open")) {
      current_item.addClass("active");
      if (current_item.hasClass("noScroll")) {
        $("body").attr("data-panel", "noScroll");
      }
      if (!current_item.hasClass("no-overlay")) {
        $(".side-overlay").addClass("active");
      }
    }
    if ($(this).hasClass("panel-responsive-close")) {
      $(".panel-responsive-item").removeClass("active");
      $("body").removeAttr("data-panel");
      $(".side-overlay").removeClass("active");
    }
  });
});

/*------------- #scroll-top btn   --------------*/

$(window).scroll(function () {
  if ($(this).scrollTop() > 200) {
    $(".scrollup").addClass("show");
  } else {
    $(".scrollup").removeClass("show");
    $(".scrollup").removeClass("active");
  }
});

$(".scrollup").click(function (e) {
  e.preventDefault();

  $(this).addClass("active");
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    1200
  );
});

/*------------- #show and hide password   --------------*/

$(".password-field .eye-icon").on("click", function () {
  var password_input = $(this).parent().find(".password-input");
  console.log(password_input);

  if (password_input.attr("type") === "password") {
    password_input.attr("type", "text");
    $(this).addClass("hide");
  } else {
    password_input.attr("type", "password");
    $(this).removeClass("hide");
  }
});

/*------------- # Fix 100vh viewport bug on mobile devices --------------*/

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);
