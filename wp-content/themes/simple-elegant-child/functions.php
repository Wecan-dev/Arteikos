<?php 

add_action( 'wp_enqueue_scripts', 'wi_child_enqueue_styles');
function wi_child_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
/*traducir*/
add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');
function translate_text($translated) {
     $translated = str_ireplace('Oferta',  'Compra',  $translated);
return $translated;
}


?>