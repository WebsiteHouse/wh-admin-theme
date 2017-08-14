<?php 
if ( __FILE__ == $_SERVER['SCRIPT_FILENAME'] ) { exit; }

// Custom Footer
function aquila_admin_footer_admin () {
	echo '<a href="https://websitehouse.ir/" class="mitoLink" target="_blank">طراحی و توسعه توسط وب سایت هاوس</a>';
}
add_filter('admin_footer_text', 'aquila_admin_footer_admin');

?>