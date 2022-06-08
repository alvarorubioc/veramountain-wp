/* eslint-disable no-undef */
const distance = $( '.booking-bar' ).offset().top;

$( window ).scroll( function() {
	if ( $( this ).scrollTop() >= distance ) {
		$( '.booking-bar' ).addClass( 'booking-bar--fixed' );
	} else {
		$( '.booking-bar' ).removeClass( 'booking-bar--fixed' );
	}
} );
