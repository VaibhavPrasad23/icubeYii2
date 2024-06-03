let login = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () =>{
    login.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector(".header .navbar");

document.querySelector('#menu-btn').onclick = () =>{
    login.classList.remove('active');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    login.classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".gallery-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    spaceBetween:20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0:{
            slidesPerView:1,
        },
        700:{
            slidesPerView:2,
        },
    }
})



jQuery(document).ready(function($) {
    $(".site-login").submit(function(event) {
         event.preventDefault(); // stopping submitting
         var data = $(this).serializeArray();
         var url = $(this).attr('action');
         $.ajax({
             url: url,
             type: 'post',
             dataType: 'json',
             data: data
         })
         .done(function(response) {
             if (response.data.success == true) {
                 alert("Wow you commented");
             }
         })
         .fail(function() {
             console.log("error");
         });
     
     });
 });