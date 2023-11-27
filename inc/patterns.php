<?php 

function wpdocs_block_pattern_category() {
	register_block_pattern_category( 'wpdocs-patterns', array(
		'label' => __( 'custom patterns', 'text-domain' )
	) );
}

add_action( 'init', 'wpdocs_block_pattern_category' );
?>