
<?php
/**
 * Plugin Name: Stall Reje Functions




 * Version: 0.1.0
 */

/* Place custom code below this line. */


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'stall_reje_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'stall_reje_wrapper_end', 10);

function stall_reje_wrapper_start() {
  echo '<div id="page-wrapper">
    <div id="content-wrapper">
        <div id="news" class="pure-g">
          <div class="news-item-full pure-u-lg-1-2 pure-u-md-1">';
}

function stall_reje_wrapper_end() {
  echo '</div>
        </div>
        </div>';
}
/* Place custom code above this line. */
?>
