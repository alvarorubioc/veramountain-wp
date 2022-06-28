/* eslint-disable no-undef */
( function( $ ) {
	const dropdownContainer = $( '.dropdown' );

	// Toggles the sub-menu when dropdown toggle button clicked
	dropdownContainer.find( '.dropdown-btn' ).click( function( e ) {
		e.preventDefault();
		$( this ).toggleClass( 'dropdown-open' );

		$( this ).nextAll( 'div' ).contents().unwrap();
		$( this ).nextAll( '.aside-filter--items' ).slideToggle( 300 );

		// jscs:disable
		$( this ).attr( 'aria-expanded', $( this ).attr( 'aria-expanded' ) === 'false'
			? 'true' : 'false' );
		// jscs:enable
	} );
}( jQuery ) );

// When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {
	scrollFunction();
};

function scrollFunction() {
	if ( document.body.scrollTop > 500 || document.documentElement.scrollTop > 500 ) {
		document.getElementById( 'top-bar' ).style.top = '0';
	} else {
		document.getElementById( 'top-bar' ).style.top = '-60px';
	}
}
