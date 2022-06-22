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
