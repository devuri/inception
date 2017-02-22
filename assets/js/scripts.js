
jQuery.noConflict();


jQuery( document ).ready( function( $ ) {

	// Allow nth-of-type

	$.expr[':']['nth-of-type'] = function(elem, i, match) {
		var parts = match[3].split("+");
		return (i + 1 - (parts[1] || 0)) % parseInt(parts[0], 10) === 0;
	};

	// Add clear class to 1st column of each row

	// $( '.one-half:nth-of-type(2n-1)'    ).addClass( 'first' );	// 2 columns
	// $( '.one-third:nth-of-type(3n-2)'   ).addClass( 'first' );	// 3 columns
	// $( '.one-quarter:nth-of-type(4n-3)' ).addClass( 'first' );	// 4 columns


	// Menu - initialisation; assume browser has JS disabled, defaults show the menu to everyone, navigation toggle is hidden

	$( '.menu-toggle.open' ).addClass( 'visible' );
	$( '#site-header .site-navigation' ).addClass( 'hidden' );

	// Menu toggle

	$( '.menu-toggle' ).click( function () {

		$( '.menu-toggle' ).toggleClass( 'visible' );
		$( '#site-header .site-navigation' ).slideToggle();

	} );


} );