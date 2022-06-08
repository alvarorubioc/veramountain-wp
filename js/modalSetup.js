jQuery( document ).ready( function( $ ) {
	// -- trigger a video modal
	$( '.video-modal-1 img' ).click( function() {
		$( '#wb-form-popup-wrap' ).css( 'display', '-webkit-box' );
		$( '#modal_box_video_1' ).css( 'display', '-webkit-box' );
	} );

	// close the modal
	$( '#wb-form-popup-close' ).click( function() {
		$( '#wb-form-popup-wrap' ).hide();

		// Close video
		const url = $( '.iframe_video' ).attr( 'src' );
		$( '.iframe_video' ).attr( 'src', '' );
		$( '.iframe_video' ).attr( 'src', url );
	} );
} );
