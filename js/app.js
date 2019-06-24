jQuery(document).ready(function()
{
	setTimeout(function()
	{
		var sticky = jQuery('.sticky');
		var initTop = sticky.offset().top;
		var endTop = jQuery('div.google-adsense-entry-footer-content').offset().top - sticky.height() + 135;

		jQuery(window).scroll(function()
		{
		    var scroll = jQuery(window).scrollTop();

		  	if (scroll >= initTop && scroll < endTop) 
		  	{
		  		sticky.addClass('fixed');
		  	}	
		  	else
		  	{
		  		sticky.removeClass('fixed');
		  	}
		});
	}, 
	500);
});
