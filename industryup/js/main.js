// (function(){

//     function bpChecks()
//         {
//             ifMinWidth(992, function() {
//                 jQuery(".header-sticky").sticky({ topSpacing: 0 }); 
                
//             });
//         }
//         function ifMinWidth(minWidth, callback)
// {
//     var w = jQuery(window).width();

//     var result = w > minWidth;
//     if (result) {
//         console.log("width ("+ w +") is greater than "+ minWidth);
//         if (callback !== undefined) { callback(); }
//     } else {
//         console.log("width ("+ w +") is NOT greater than "+ minWidth);
//     }
//     return result;
// };

// bpChecks();

    jQuery(document).ready(function() {
        /* ---------------------------------------------- /*
         * Hedaer Sticky
         /* ---------------------------------------------- */ 
        jQuery(".header-sticky").sticky({ topSpacing: 0 }

    //         ifMinWidth(992, function() {
    //         console.log("hello from callback 1");
    //     })
 ); 
    // jQuery(window).scroll(function(){
    //     if (jQuery(window).scrollTop() >= 100) {
    //         jQuery('.header-sticky').addClass('header-fixed-top');
    //         jQuery('.header-sticky').removeClass('not-sticky');
    //     }
    //     else {
    //         jQuery('.header-sticky').removeClass('header-fixed-top');
    //         jQuery('.header-sticky').addClass('not-sticky');
    //     }
    // });
        
        /* ---------------------------------------------- /*
         * Scroll top
         /* ---------------------------------------------- */

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.bs_upscr').fadeIn();
            } else {
                jQuery('.bs_upscr').fadeOut();
            }
        });
		
		jQuery('.bs_upscr').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 700);
			return false;
		});
    
})(jQuery);