<?php
register_block_pattern(
    'my-plugin/contact-form',
    array(
        'title'      => __( 'contact form', 'my-plugin' ),
        'categories'  => array( 'wpdocs-patterns' ),
        'content'    => '<!-- wp:group {"className":"contact-form","layout":{"type":"default"}} -->
        <div class="wp-block-group contact-form"><!-- wp:group {"className":"contact-form__inner","layout":{"type":"default"}} -->
        <div class="wp-block-group contact-form__inner"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
        <div class="wp-block-group container"><!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:heading -->
        <h2 class="wp-block-heading">Newsletter Registration</h2>
        <!-- /wp:heading --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:contact-form-7/contact-form-selector {"id":385,"hash":"30f5194","title":"newsletter registration"} -->
        <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="30f5194" title="newsletter registration"]</div>
        <!-- /wp:contact-form-7/contact-form-selector --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
    )
);
?>