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
  $(".thumbs-inner ul li h4").removeAttr('style');
  $(".thumbs-inner ul li h5").removeAttr('style');
  $('.thumbs-inner ul li h4').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
  $('.thumbs-inner ul li h5').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
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
  $("body").css("color", "rgba(23, 1, 23, 1)");
  $(".content-video a").css("color", "#8C001A");
  $('.content-video a').hover((function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
  }), (function() {
    $(this).css("color", "#8C001A");
    })
  );
  $(".content-frames a").css("color", "#8C001A");
  $('.content-frames a').hover((function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
  }), (function() {
    $(this).css("color", "#8C001A");
    })
  );
  $(".thesis-pic a").css("color", "rgba(23, 1, 23, 1)");
  $("input, input[type='password'], input[type='search']").css("color", "rgba(23, 1, 23, 1)");
  $("input, input[type='password'], input[type='search']").css("border", "1px solid rgba(23, 1, 23, 1);");
  $("input[type=file]").css("color", "rgba(23, 1, 23, 1)");
  $("label").css("color", "rgba(23, 1, 23, 1)");
  $(".thumbs-inner ul li h4").css("color", "rgba(23, 1, 23, 1)");
  $(".thumbs-inner ul li h5").css("color", "rgba(23, 1, 23, 1)");
  $('.thumbs-inner ul li h4').hover((function() {
    $(this).css("color", "#8C001A");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
    })
  );
  $('.thumbs-inner ul li h5').hover((function() {
    $(this).css("color", "#8C001A");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
    })
  );
  $("textarea").css("border", "1px solid rgba(23, 1, 23, 1);");
  $("textarea").css("color", "rgba(23, 1, 23, 1)");
  $(".notice, .alert, #error_explanation").css("color", "rgba(23, 1, 23, 1)");
  $("ul.icons li .icon").css("color", "rgba(23, 1, 23, 1)");
  $(".content-wormholes a").css("color", "rgba(255, 255, 255, 0.9)");
  $('.content-wormholes a').hover((function() {
    $(this).css("text-decoration", "underline");
    $(this).css("color", "rgba(255, 255, 255, 0.9)");
  }), (function() {
    $(this).css("text-decoration", "none");
    $(this).css("color", "rgba(255, 255, 255, 0.9)");
    })
  );
  $(".content-wormholes li").css("background", "-webkit-gradient(linear, 46% 37%, 64% 73%, from(rgba(23, 1, 23, 1)), to(rgba(46, 1, 23, 1)))");
  $('input[type=submit]').hover((function() {
    $(this).css("color", "#FFFFFF");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
    })
  );
});


// console.log('theme.js firing');
