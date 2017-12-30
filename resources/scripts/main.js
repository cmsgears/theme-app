jQuery(document).ready( function() {

	initPreloaders();

	initCmgTools();

	initListeners();

	initAutoHeight();
});

function initPreloaders() {

	// Hide global pre-loader spinner
	jQuery( '.container-main' ).imagesLoaded( { background: true }, function() {

		jQuery( '#pre-loader-main' ).fadeOut( 'slow' );
	});
}

function initCmgTools() {

	// Page Blocks
	if( jQuery().cmtBlock ) {

		jQuery( '.block' ).cmtBlock({
			fullHeight: true,
			blocks: {
				'block-about': { 'fullHeight': true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
				'block-contact': { 'fullHeight': true, 'heightAuto': true },
				'block-public': { 'fullHeight': true, heightAutoMobile: true, heightAutoMobileWidth: 1600 }
			}
		});
	}

	// Perspective Header
	if( jQuery().cmtHeader ) {

		jQuery( '#header-main' ).cmtHeader( { scrollDistance: 350 } );
	}

	// Smooth Scroll
	if( jQuery().cmtSmoothScroll ) {

		jQuery( '.smooth-scroll' ).cmtSmoothScroll();
	}

	// File Uploader
	if( jQuery().cmtFileUploader ) {

		jQuery( '.file-uploader' ).cmtFileUploader();
	}

	// Popups
	if( jQuery().cmtPopup ) {

		jQuery( '.popup' ).cmtPopup();
	}

	// Custom Select
	if( jQuery().cmtSelect ) {

		jQuery( '.cmt-select' ).cmtSelect( { iconHtml: '<span class="cmti cmti-chevron-down"></span>' } );
	}

	// Custom Checkbox
	if( jQuery().cmtCheckbox ) {

		jQuery( '.cmt-checkbox' ).cmtCheckbox();
	}

	// Form with Info
	if( jQuery().cmtFormInfo ) {

		jQuery( '.box-form' ).cmtFormInfo();
	}
}

function initListeners() {

	// Custom Scroller
	if( jQuery().mCustomScrollbar ) {

		jQuery( '.cscroller' ).mCustomScrollbar( { autoHideScrollbar: true } );
	}

	// Datepicker
	if( jQuery().datepicker ) {

		jQuery( '.datepicker' ).datepicker( { dateFormat: 'yy-mm-dd' } );
	}

	// Default Tabs
	if( jQuery().tabs ) {

		jQuery( '.tabs-default' ).tabs();
	}

	// Initialise the mobile button
	jQuery( '#btn-mobile-menu, #nav-mobile li' ).click( function() {

		jQuery( '#nav-mobile' ).slideToggle( 'slow' );
	});

	// Show/ Hide login box
	jQuery( '#btn-login, #btn-login-mobile' ).click( function() {

		jQuery( '#wrap-login-register' ).toggle( 'slow' );
	});

	// Show/ Hide settings box
	jQuery( '#btn-settings, #btn-settings-mobile' ).click( function( e ) {

		e.preventDefault();

		jQuery( '#box-settings' ).toggle( 'slow' );
	});
}

function initAutoHeight () {

	jQuery( '.header' ).css( 'height', jQuery( '.items' ).height() - 8 );

	if( window.innerWidth <= 1024  ) {

		jQuery( '.header' ).css( 'height', 'auto' );
	}
}