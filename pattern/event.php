<!--
    pattern name : event-section
    description : this is an image, heading, and text in a pattern
-->

<?php
register_block_pattern(
    'my-plugin/event',
    array(
        'title' => __('event', 'my-plugin'),
        'categories' => array('wpdocs-patterns'),
        'content' => '<!-- wp:cover {"dimRatio":90,"overlayColor":"white","minHeight":50,"minHeightUnit":"vh","contentPosition":"top left","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"5vw","right":"5vw","bottom":"0vw","left":"5vw"},"margin":{"top":"0"}}}} -->
        <div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-left" style="margin-top:0;padding-top:5vw;padding-right:5vw;padding-bottom:0vw;padding-left:5vw;min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-white-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%;display: flex;align-items: center;"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"backgroundColor":"white","layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"bottom","justifyContent":"left"}} -->
        <div class="wp-block-group has-white-background-color has-background"><!-- wp:heading -->
        <h2 class="wp-block-heading">These are <br>the secrets</h2>
        <!-- /wp:heading -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:create-block/banner-discription-section {"mediaID":122} -->
        <section id="banner-description" class="wp-block-create-block-banner-discription-section"><div class="banner-description"><div class="banner-description__inner"><div class="row"><div class="col-lg-4"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-1.png"/></div></div><div class="col-lg-8"><div class="banner-description__inner_heading"><h4>Become more efficient</h4></div><div class="banner-description__inner_description"><p>Incorporating behavioral changes and making better use of current equipment.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-discription-section --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:create-block/banner-discription-section {"mediaID":124} -->
        <section id="banner-description" class="wp-block-create-block-banner-discription-section"><div class="banner-description"><div class="banner-description__inner"><div class="row"><div class="col-lg-4"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-2.png"/></div></div><div class="col-lg-8"><div class="banner-description__inner_heading"><h4>Watch my finances</h4></div><div class="banner-description__inner_description"><p>You should know how much money you have in the bank and how much money you make on a daily. basis.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-discription-section --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:create-block/banner-discription-section {"mediaID":125} -->
        <section id="banner-description" class="wp-block-create-block-banner-discription-section"><div class="banner-description"><div class="banner-description__inner"><div class="row"><div class="col-lg-4"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-3.png"/></div></div><div class="col-lg-8"><div class="banner-description__inner_heading"><h4>Track of tax deadlines</h4></div><div class="banner-description__inner_description"><p>Fines and interest can be imposed if tax returns and payments are not filed on time.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-discription-section --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:create-block/banner-discription-section {"mediaID":126} -->
        <section id="banner-description" class="wp-block-create-block-banner-discription-section"><div class="banner-description"><div class="banner-description__inner"><div class="row"><div class="col-lg-4"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-4.png"/></div></div><div class="col-lg-8"><div class="banner-description__inner_heading"><h4>Track of tax deadlines</h4></div><div class="banner-description__inner_description"><p>Meet day-to-day expenses like rent and wages to not face difficulties.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-discription-section --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":294,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="http://localhost/walletup/wp-content/uploads/2023/11/about-section-1.png" alt="" class="wp-image-294"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover -->       
        ',
    )
);
?>