/**
 *
 * Silverclean Lite WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2013-2020 Iceable Themes - https://www.iceablethemes.com
 *
 * Theme Customizer sections functions
 *
 */

( function( $ ) {

	// Add Silverclean Pro upgrade message
	upgrade = $('<a class="silverclean-customize-pro"></a>')
	.attr('href', "https://www.iceablethemes.com/shop/silverclean-pro/")
	.attr('target', '_blank')
	.text(silverclean_customizer_section_l10n.upgrade_pro)
	;
	$('.preview-notice').append(upgrade);
	// Remove accordion click event
	$('.silverclean-customize-pro').on('click', function(e) {
		e.stopPropagation();
	});

} )( jQuery );
