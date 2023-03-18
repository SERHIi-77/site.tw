if ( typeof jQuery !== "undefined" ) {
    console.log( "jQuery підключено" );
  }

  
    $(document).ready(function(){
        $('.slider-general').slick({
            dots: true,
            infinite: true,
            speed: 400,
            fade: true,
            cssEase: 'linear'
          });
      });
 
// код для бургеров



const containerUserBurger = document.querySelector(".container-user-burger");
const menuBurgerUser = document.querySelector(".menuBurgerUser");

menuBurgerUser.addEventListener("click", () => {
  if (containerUserBurger.style.display === "flex") {
    containerUserBurger.style.display = "none";
  } else {
    containerUserBurger.style.display = "flex";
  }
});

document.addEventListener("click", (event) => {
  if (!containerUserBurger.contains(event.target) && !menuBurgerUser.contains(event.target)) {
    containerUserBurger.style.display = "none";
  }
});


// menu

const navbarChange= document.querySelector(".navbar-change");
const burgermenuNavMain = document.querySelector(".burgermenu-nav-main");

burgermenuNavMain.addEventListener("click", () => {
  if (navbarChange.style.display === "flex") {
    navbarChange.style.display = "none";
  } else {
    navbarChange.style.display = "flex";
  }
});

document.addEventListener("click", (event) => {
  if (!navbarChange.contains(event.target) && !burgermenuNavMain.contains(event.target)) {
    navbarChange.style.display = "none";
  }
});

// поиск по сайту


document.addEventListener("DOMContentLoaded", function() {
  const searchForm = document.querySelector("#search-input");
  if (searchForm) {
    searchForm.addEventListener("submit", function(event) {
      event.preventDefault();
      const query = event.target.querySelector("[name='query']").value;
      window.location.href = "/?p=catalog&search=" + query;
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const searchParams = new URLSearchParams(window.location.search);
  const searchTerm = searchParams.get("search");
  if (searchTerm && document.querySelector(".product-card")) {
    document.querySelectorAll(".product-card").forEach(function(card) {
      const cardText = card.innerText.toLowerCase();
      if (!cardText.includes(searchTerm.toLowerCase())) {
        card.style.display = "none";
      }
    });
  }
});



// скрул кнопка ап

$(function(){
  $(window).scroll(function(){
      if($(this).scrollTop() > 1000) 
      $(".scrolling").fadeIn();
      else
      $(".scrolling").fadeOut(400);
  })
})
