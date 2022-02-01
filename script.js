$(document).ready(function(){
    $('.post-container').owlCarousel({
        loop:true,
        pagination:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
            1400:{
                items:5
            }


        }
    })
});



  var navLinks=document.getElementById("navLinks");
  function showMenu(){
      navLinks.style.right="0";
  }
  function hideMenu(){
      navLinks.style.right="-200px";
  }
