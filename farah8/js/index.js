/**
 * @file
 * Js for Farah8 theme
 */
 // Load Icon animation
//  document.onreadystatechange = function () {
//   var state = document.readyState
//   if (state == 'complete') {
//          document.getElementById('interactive');
//          document.getElementById('load').style.visibility="hidden";
//   }
// }

document.onreadystatechange = function () {
    var load = document.getElementById("load"),

      show = function(){
        load.style.display = "block";
        setTimeout(hide, 5000); // 5 seconds
      },

      hide = function(){
        load.style.display = "none";
      };

    show();
  }();

 //Front Page Image Block Fade In
$(document).ready(function(){
    $("#block-frontpageblock p").hide(0).delay(600).fadeIn(3000)
});

//Front Page Blur Image on Scroll
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $("#front-parallax").css({
    width: (100 + scroll/4)  + "%",
    top: -(scroll/10)  + "%",
    "-webkit-filter": "blur(" + (scroll/100) + "px)",
    filter: "blur(" + (scroll/100) + "px)"
  });
  var text = $(this).scrollTop();
    if (text > 1100) {
      $('#block-frontpageblock').hide();
    }
    else {
      $('#block-frontpageblock').show();
    }
});
// Fades FrontPageBlock on Scroll
$(window).scroll(function() {
  $("#block-frontpageblock").css("opacity", 1 - $(window).scrollTop() / 350);
  });

// Arrow to scroll to top when clicked
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {    
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});

// // Changes text color of menu items on scroll
// var scroll_pos = 0;

//   $(document).scroll(function() { 

//       scroll_pos = $(this).scrollTop();
//       if(scroll_pos < 900) {
//           $("#return-to-top").css('background-color', '#263457');
//       } else {
//           $("#return-to-top").css('background-color', '#fff');
//           $("#return-to-top i").css('color', '#263457');
//           $("#return-to-top i").css('background-color', 'transparent');
//       }
//   });
