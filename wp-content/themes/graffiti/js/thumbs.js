/*------------------------------------------------------------------------------
 Thumbs JS file for graffiti theme
----------------------------------------------------------------------------- */

// Thumb img
jQuery(document).ready(function() {
  jQuery('.thumbs-inner ul li img').each(function() {
    var ratio = 1;  // 1:1 aspect ratio
    var width = jQuery(this).width(); // Current image width
    jQuery(this).attr('style','height:' + width*ratio + 'px;');
    // console.log('thumb width: ' + width);
  });
  // Handle resizing after page load
  $( window ).resize(function() {
    jQuery('.thumbs-inner ul li img').each(function() {
      var ratio = 1;
      var width = jQuery(this).width();
      jQuery(this).attr('style','height:' + width*ratio + 'px;');
      // console.log('resized thumb width: ' + width);
    });
  });
});

// Thumb iframe
jQuery(document).ready(function() {
  jQuery('.thumbs-inner ul li iframe').each(function() {
    var ratio = 1;  // 1:1 aspect ratio
    var width = jQuery(this).width(); // Current image width
    jQuery(this).attr('style','height:' + width*ratio + 'px;');
    // console.log('thumb width: ' + width);
  });
  // Handle resizing after page load
  $( window ).resize(function() {
    jQuery('.thumbs-inner ul li iframe').each(function() {
      var ratio = 1;
      var width = jQuery(this).width();
      jQuery(this).attr('style','height:' + width*ratio + 'px;');
      // console.log('resized thumb width: ' + width);
    });
  });
});


// console.log('thumbs.js firing');
