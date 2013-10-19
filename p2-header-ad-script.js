// P2 Categories - JavaScript Document
// since @1.2

// append our #p2HeaderAd to the current #header
var $p2HeaderAdContent = jQuery('#p2HeaderAd');
jQuery('#header').append($p2HeaderAdContent);

// 
jQuery('#p2HeaderAd').css('visibility', 'visible');

// we could make our ad visible via fadeIn - see http://api.jquery.com/fadeIn/
// lovely approach, but doesn't play nice with P2 :-(
// jQuery('#p2HeaderAd').delay(1000).fadeIn('slow', function () {
	// could add something here upon completion	
// });