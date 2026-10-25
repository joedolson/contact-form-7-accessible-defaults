(function ($) {
	$(function() {
		let $container = $( '.contact_page_wpcf7-new .contextual-help-sidebar, .contact_page_wpcf7 .contextual-help-sidebar');
		$container.append(
			'<p><a href="https://wordpress.org/plugins/contact-form-7-accessible-defaults/">' + cf7adb.title + '</a></p>'
		);
	});
}(jQuery));