/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */
 function player(url) {
  newwindow=window.open(url,'name','height=640,width=640');
  if (window.focus) {newwindow.focus();}
  return false;
}  

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {

      init: function() {

        jQuery(document).ready(function($){
          $('.entry-content').magnificPopup({
            delegate: 'img', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true},
            callbacks: {
              elementParse: function(item) { item.src = item.el.attr('src'); }
            }

            // other options
          });
          $("body").fitVids();
          //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
          var MQL = 1170;

          //primary navigation slide-in effect
          if($(window).width() > MQL) {
            var headerHeight = $('.cd-header').height();
            $(window).on('scroll',
            {
                  previousTop: 0
              }, 
              function () {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop ) {
                  //if scrolling up...
                  if (currentTop > 0 && $('.cd-header').hasClass('is-fixed')) {
                    $('.cd-header').addClass('is-visible');
                  } else {
                    $('.cd-header').removeClass('is-visible is-fixed');
                  }
                } else {
                  //if scrolling down...
                  $('.cd-header').removeClass('is-visible');
                  if( currentTop > headerHeight && !$('.cd-header').hasClass('is-fixed')) {$('.cd-header').addClass('is-fixed');}
                }
                this.previousTop = currentTop;
            });
          }

          //open/close primary navigation
          $('.cd-primary-nav-trigger').on('click', function(){
            $('.cd-menu-icon').toggleClass('is-clicked'); 
            $('.cd-header').toggleClass('menu-is-open');
            
            //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
            if( $('.cd-primary-nav').hasClass('is-visible') ) {
              $('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
                $('body').removeClass('overflow-hidden');
              });
            } else {
              $('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
                $('body').addClass('overflow-hidden');
              }); 
            }
          });
        });
     // Show/Hide the directory navigation on-click
        $('.directory-toggle').click(function() {
            $(this).toggleClass("active");
            $('.division-directory').toggleClass("active");
            return false;
        });


        // For small screens - show/hide the search on-click
        $('.search-toggle').click(function() {
            $(this).toggleClass('active');
            $('.division-search').slideToggle();
            return false;
        });


        // For small screens - show the directory
        $('.division-menu').on('click', '.has-subnav a', function() {
            $(this).next().slideToggle('slow');
            $(this).toggleClass('active');

        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');

   

    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
