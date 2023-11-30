<?php
register_block_pattern(
    'my-plugin/banner-description',
    array(
        'title' => __('banner description', 'my-plugin'),
        'categories' => array('wpdocs-patterns'),
        'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","right":"50px","bottom":"100px","left":"50px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"backgroundColor":"white","textColor":"black","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group alignfull has-black-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:100px;padding-right:50px;padding-bottom:100px;padding-left:50px">
        ',
    )
);
?>