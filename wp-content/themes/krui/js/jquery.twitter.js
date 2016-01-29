jQuery.noConflict();
(function(jQuery) {
	/*
		jquery.twitter.js v1.0
		Last updated: 26 October 2008

		Created by Damien du Toit
		http://coda.co.za/blog/2008/10/26/jquery-plugin-for-twitter

		Licensed under a Creative Commons Attribution-Non-Commercial 3.0 Unported License
		http://creativecommons.org/licenses/by-nc/3.0/
	*/

	jQuery.fn.getTwitter = function(options) {
		var o = jQuery.extend({}, jQuery.fn.getTwitter.defaults, options);
	
		// hide container element
		jQuery(this).hide();
	
		// add heading to container element
		if (o.showHeading) {
			jQuery(this).append('<h3>'+o.headingText+'</h3>');
		}

		// add twitter list to container element
		jQuery(this).append('<ul id="twitter_update_list"><li></li></ul>');

		// hide twitter list
		jQuery("ul#twitter_update_list").hide();

		// add preLoader to container element
		var pl = jQuery('<p id="'+o.preloaderId+'">'+o.loaderText+'</p>');
		jQuery(this).append(pl);

		// add Twitter profile link to container element
		if (o.showProfileLink) {
			jQuery(this).append('<a id="profileLink" href="http://twitter.com/'+o.userName+'">http://twitter.com/'+o.userName+'</a>');
		}

		// show container element
		jQuery(this).show();
	
		jQuery.getScript("http://twitter.com/javascripts/blogger.js");
		jQuery.getScript("http://twitter.com/statuses/user_timeline/"+o.userName+".json?callback=twitterCallback2&count="+o.numTweets, function() {
			// remove preLoader from container element
			jQuery(pl).remove();

			// show twitter list
			if (o.slideIn) {
				jQuery("ul#twitter_update_list").slideDown("slow");
			}
			else {
				jQuery("ul#twitter_update_list").show();
			}

			// give first list item a special class
			jQuery("ul#twitter_update_list li:first").addClass("firstTweet");

			// give last list item a special class
			jQuery("ul#twitter_update_list li:last").addClass("lastTweet");
		});
	};

	// plugin defaults
	jQuery.fn.getTwitter.defaults = {
		userName: null,
		numTweets: 5,
		preloaderId: "preloader",
		loaderText: "Loading tweets...",
		slideIn: false,
		showHeading: true,
		headingText: "Latest Tweets",
		showProfileLink: true
	};
})(jQuery);