jQuery(".icon-container").click(function () {
    jQuery(".hamburger").toggleClass("expanded");
    jQuery("body").toggleClass("menu-push");
    jQuery("#menu").toggleClass("menu-open");
    jQuery(".menu-text").toggleClass("expanded-text");
  });
  
  
  jQuery(document).ready(function(jQuery) {
    jQuery('a[href^="#"]').bind('click.smoothscroll',function (e) {
      e.preventDefault();
      var target = this.hash,
          jQuerytarget = jQuery(target);
  
      jQuery('html, body').stop().animate( {
        'scrollTop': jQuerytarget.offset().top-40
      }, 900, 'swing', function () {
        window.location.hash = target;
      } );
    } );
  } );
   