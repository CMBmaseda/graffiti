// Moon Button
jQuery('.page-theme-moon-button').on('click', function () {
  // buttons
  jQuery('.page-theme-lightbulb-button').addClass('disabled');
  jQuery('.page-theme-moon-button').removeClass('disabled');
  // content
  $("html").removeAttr('style');
  $("body").removeAttr('style');
  $("body").removeAttr('style');
  $("a").removeAttr('style');
  $('a').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
  $("input, input[type='password'], input[type='search']").removeAttr('style');
  $("input, input[type='password'], input[type='search']").removeAttr('style');
  $("input[type=file]").removeAttr('style');
  $("label").removeAttr('style');
  $(".page-theme-button a").removeAttr('style');
  $(".page-theme-button a").removeAttr('style');
  $(".page-theme-button a").removeAttr('style');
  $(".thumbs-inner ul li h4").removeAttr('style');
  $(".thumbs-inner ul li h5").removeAttr('style');
  $("textarea").removeAttr('style');
  $("textarea").removeAttr('style');
  $(".notice, .alert, #error_explanation").removeAttr('style');
  $("ul.icons li .icon").removeAttr('style');
  $("ul.icons li a:hover").removeAttr('style');
  $("wrapper").removeAttr('style');
  $(".content-wormholes a").removeAttr('style');
  $('.content-wormholes a').hover((function() {
    $(this).removeAttr('style');
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    $(this).removeAttr('style');
    })
  );
  $(".content-wormholes li").removeAttr('style');
});

// Lightbulb Button
jQuery('.page-theme-lightbulb-button').on('click', function () {
  // buttons
  jQuery('.page-theme-lightbulb-button').removeClass('disabled');
  jQuery('.page-theme-moon-button').addClass('disabled');
  // content
  $("html").css("background", "#e5dfee");
  $("body").css("background", "linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%)");
  $("body").css("color", "#8C001A"); // rgb(140,0,26)
  $("a").css("color", "rgba(23, 1, 23, 0.77)");
  $('a').hover((function() {
    $(this).css("color", "#8C001A");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 0.77)");
    })
  );
  $("input, input[type='password'], input[type='search']").css("color", "#8C001A");
  $("input, input[type='password'], input[type='search']").css("border", "1px solid #8C001A;");
  $("input[type=file]").css("color", "#8C001A");
  $("label").css("color", "rgba(23, 1, 23, 0.77)");
  $(".page-theme-button a").css("border", "rgba(23, 1, 23, 0.77)");
  $(".page-theme-button a").css("color", "rgba(23, 1, 23, 0.77)");
  $(".page-theme-button a").css("background", "rgba(23, 1, 23, 0.22)");
  $(".thumbs-inner ul li h4").css("color", "rgba(23, 1, 23, 0.77)");
  $(".thumbs-inner ul li h5").css("color", "rgba(23, 1, 23, 0.77)");
  $("textarea").css("border", "1px solid #8C001A;");
  $("textarea").css("color", "#8C001A");
  $(".notice, .alert, #error_explanation").css("color", "rgba(23, 1, 23, 0.99)");
  $("ul.icons li .icon").css("color", "rgba(23, 1, 23, 0.77)");
  $("ul.icons li a:hover").css("color", "inherit");
  $("wrapper").css("color", "#8C001A");
  $(".content-wormholes a").css("color", "rgba(255, 255, 255, 0.9)");
  $('.content-wormholes a').hover((function() {
    $(this).css("text-decoration", "underline");
    $(this).css("color", "rgba(255, 255, 255, 0.9)");
  }), (function() {
    $(this).css("text-decoration", "none");
    $(this).css("color", "rgba(255, 255, 255, 0.9)");
    })
  );
  $(".content-wormholes li").css("margin", "1px");
  $(".content-wormholes li").css("background-color", "#8C001A");
  $('input[type=submit]').hover((function() {
    $(this).css("color", "#FFFFFF");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 0.99)");
    })
  );
});


// function testFiring() {
// 	console.log('theme.js firing');
// }
// testFiring();
