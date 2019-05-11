/*------------------------------------------------------------------------------
 Theme JS file for graffiti theme
  brighten and darken the layout
----------------------------------------------------------------------------- */


// Moon Button
function moonFunction() {
  // buttons
  $('.page-theme-lightbulb-button').addClass('disabled');
  $('.page-theme-moon-button').removeClass('disabled');
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
  $(".breadcrumb a").removeAttr('style');
  $('.breadcrumb a').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
  $('.content-wormholes h2 a').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
  $(".thesis-statement p a").removeAttr('style');
  $('.thesis-statement p a').hover((function() {
    $(this).removeAttr('style');
  }), (function() {
    $(this).removeAttr('style');
    })
  );
  $(".thesis-pic svg polygon:nth-child(odd)").removeAttr('style');
  $(".thesis-pic svg polygon:nth-child(even)").removeAttr('style');
  $(".lightbox-image-wrapper svg polygon:nth-child(odd)").removeAttr('style');
  $(".lightbox-image-wrapper svg polygon:nth-child(even)").removeAttr('style');
}

// Lightbulb Button
function bulbFunction() {
  // buttons
  $('.page-theme-lightbulb-button').removeClass('disabled');
  $('.page-theme-moon-button').addClass('disabled');
  // content
  $("html").css("background", "#e5dfee");
  $("body").css("background", "linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%)");
  $("body").css("color", "rgba(23, 1, 23, 1)");
  $(".header").css("background", "#dad4ec");
  $(".thesis-statement p a").css("color", "#8C001A");
  $('.thesis-statement p a').hover((function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
  }), (function() {
    $(this).css("color", "#8C001A");
    })
  );
  $(".content-wormholes h2 a").css("color", "#8C001A");
  $('.content-wormholes h2 a').hover((function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
  }), (function() {
    $(this).css("color", "#8C001A");
    })
  );
  $(".thesis-pic a").css("color", "rgba(23, 1, 23, 1)");
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
  $(".breadcrumb a").css("color", "#8C001A");
  $('.breadcrumb a').hover((function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
  }), (function() {
    $(this).css("color", "#8C001A");
    })
  );
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
  $(".content-wormholes li").css("background", "-webkit-gradient(linear, 46% 37%, 64% 73%, from(rgba(23, 1, 23, 1)), to(rgba(46, 1, 23, 1)))");
  $('input[type=submit]').hover((function() {
    $(this).css("color", "#FFFFFF");
  }), (function() {
    $(this).css("color", "rgba(23, 1, 23, 1)");
    })
  );
  $(".thesis-pic svg polygon:nth-child(odd)").css("fill", "rgba(23, 1, 23, 1)");
  $(".thesis-pic svg polygon:nth-child(even)").css("fill", "#8C001A");
  $(".lightbox-image-wrapper svg polygon:nth-child(odd)").css("fill", "#dad4ec");
  $(".lightbox-image-wrapper svg polygon:nth-child(even)").css("fill", "#FFFFFF");
}

// Set Theme Cookie
function setCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}
function getCookie(key) {
  var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
  return keyValue ? keyValue[2] : null;
}

// Update Cookie/Theme Without Reload
$('.page-theme-moon-button').on('click', function () {
  setCookie('theme','1', '30');
  console.log('Dark Theme Cookie (Moon = 1): ' + getCookie('theme'));
  moonFunction();
});
$('.page-theme-lightbulb-button').on('click', function () {
  setCookie('theme','2', '30');
  console.log('Light Theme Cookie (Bulb = 2): ' + getCookie('theme'));
  bulbFunction();
});

// Persist Theme on New Page Load
if (getCookie('theme') == 1) {
  console.log('Theme Cookie (Moon: 1 , Bulb: 2): ' + getCookie('theme'));
  moonFunction();
}
if (getCookie('theme') == 2) {
  console.log('Theme Cookie (Moon: 1 , Bulb: 2): ' + getCookie('theme'));
  bulbFunction();
}


// console.log('theme.js firing');
