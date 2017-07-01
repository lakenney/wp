/* 
 * Find any image that has the class align center and give it full bleed image on smaller screens.
 * This wraps the image in another element, figure, then use css to center align inside that element and 
 * remove magins we set on smaller screen.
 */

(function($){
	$('figure.wp-caption.aligncenter').removeAttr('style');
	$('img.aligncenter').wrap('<figure class="centered-image" />');
})(jQuery);



