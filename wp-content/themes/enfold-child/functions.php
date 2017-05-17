<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/* Moves Meta Data on the Blog Page */

function move_postmeta(){
?>
<script>
jQuery(window).load(function(){
jQuery( ".page .template-blog header.entry-content-header, .single-post .template-blog header.entry-content-header" ).each(function() {
jQuery( this ).find( ".post-meta-infos" ).insertAfter( jQuery(this).find('.entry-title') );
});
});
</script>
<?php
}
add_action('wp_footer', 'move_postmeta');

/* Tell Enfold to use the Enfold-child file for the PostSlider.php shortcode */
add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
	$template_url = get_stylesheet_directory();
    	array_unshift($paths, $template_url.'/shortcodes/');

	return $paths;
}