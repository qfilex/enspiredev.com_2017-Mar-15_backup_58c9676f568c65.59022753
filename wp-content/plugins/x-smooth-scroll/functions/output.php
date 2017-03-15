<?php

// =============================================================================
// FUNCTIONS/OUTPUT.PHP
// -----------------------------------------------------------------------------
// Plugin output.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Smooth Scroll
//   02. Output
// =============================================================================

// Smooth Scroll
// =============================================================================

function x_smooth_scroll_template() {

  require( X_SMOOTH_SCROLL_PATH . '/views/site/smooth-scroll.php' );

}



// Output
// =============================================================================

require( X_SMOOTH_SCROLL_PATH . '/functions/options.php' );

if ( isset( $x_smooth_scroll_enable ) && $x_smooth_scroll_enable == 1 ) {

  add_action( 'wp_footer', 'x_smooth_scroll_template', 9999 );

}