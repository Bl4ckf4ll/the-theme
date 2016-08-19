jQuery(function () {
	var post = jQuery('.post');

	post.on('click', function () {
		window.location.assign(jQuery(this).data('url'));
	})

	var app = jQuery("html");
	var header = jQuery('header');
	var wpadminbar = jQuery('#wpadminbar');
	var nav_sidebar = jQuery(".side-nav");
	var closing_nav = jQuery(".closing-nav");
	var content_wrapper = jQuery(".content-wrapper");
	var single_wrapper = jQuery(".single-content-wrapper");
	var button_menu = jQuery(".button-menu");

	console.log(wpadminbar);

	if (app.data('logged')) {
		header.css('top', wpadminbar.innerHeight());
		nav_sidebar.css('top', wpadminbar.innerHeight());
	}

	content_wrapper.css("padding-top", header.innerHeight() + 30);
	single_wrapper.css("padding-top", header.innerHeight());
	closing_nav.css("height", header.innerHeight());

	button_menu.click( function () {
		nav_sidebar.animate({'left': "0"}, 500);
	});

	closing_nav.children("span").click(function () {
		nav_sidebar.animate({'left': "-100%"}, 500);
	});
});
