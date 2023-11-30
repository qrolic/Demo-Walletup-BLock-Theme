<?php
register_block_pattern(
    'my-plugin/secret',
    array(
        'title' => __('Secret', 'my-plugin'),
        'categories' => array('wpdocs-patterns'),
        'content' => '<!-- wp:group {"className":"secret","layout":{"type":"default"}} -->
        <div class="wp-block-group secret"><!-- wp:group {"className":"secret__inner","layout":{"type":"default"}} -->
        <div class="wp-block-group secret__inner"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-lg-7 col-md-7 col-12","layout":{"type":"constrained"}} -->
        <div class="wp-block-group col-lg-7 col-md-7 col-12"><!-- wp:heading -->
        <h2 class="wp-block-heading">These are   the secret</h2>
        <!-- /wp:heading -->
        
        <!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-lg-6 col-md-6 col-12","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-6 col-md-6 col-12"></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-6 col-md-6 col-12","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-6 col-md-6 col-12"></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-lg-6 col-md-6 col-12","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-6 col-md-6 col-12"></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-6 col-md-6 col-12","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-6 col-md-6 col-12"></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-5 col-md-5 col-12","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-5 col-md-5 col-12"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="http://localhost/walletup/wp-content/uploads/2023/11/about-section-1.png" alt="" class="wp-image-294"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
    )
);
?>