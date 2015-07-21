<?php
/**
 * Components hooked to wp_footer
 *
 * @package truss
 * @author Matthew Eppelsheimer
 */

add_action( 'wp_footer', 'truss_document_ready', 100 );

/**
 * Wrap jQuery code that should run on document ready
 *
 * Wrap a `truss( 'document_ready')` call in jQuery's `jQuery(document).ready($){}`.
 *
 * @package truss
 * @author Matthew Eppelsheimer
 */
function truss_document_ready() { ?>
	jQuery( document ).ready(function(){
		<?php truss( 'document_ready' ); ?>
	});
<?php
}

