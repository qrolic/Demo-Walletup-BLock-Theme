<!--
    pattern name : banner-decription-section
    description : this is an image, heading, and text in a pattern
-->

<?php
register_block_pattern(
    'my-plugin/banner-description',
    array(
        'title' => __('banner description', 'my-plugin'),
        'categories' => array('wpdocs-patterns'),
        'content' => '<!-- wp:group {"className":"banner-decription overflow-hidden","layout":{"type":"default"}} -->
        <div class="wp-block-group banner-decription overflow-hidden"><!-- wp:group {"className":"banner-decription__inner","layout":{"type":"default"}} -->
        <div class="wp-block-group banner-decription__inner"><!-- wp:group {"className":"container-fluid","layout":{"type":"default"}} -->
        <div class="wp-block-group container-fluid"><!-- wp:group {"className":"row","layout":{"type":"default"}} -->
        <div class="wp-block-group row"><!-- wp:group {"className":"col-lg-3 col-md-6 col-11 p-0","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-3 col-md-6 col-11 p-0"><!-- wp:create-block/banner-description-section {"mediaID":122} -->
        <section id="banner-description" class="wp-block-create-block-banner-description-section"><div class="banner-description"><div class="banner-description__inner"><div class="row banner"><div class="col-lg-4 col-md-4 col-4 p-0"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-1.png"/></div></div><div class="col-lg-8 col-md-8 col-8 p-0"><div class="banner-description__inner_heading"><h4>Become more <span> efficient </span></h4></div><div class="banner-description__inner_description"><p>Incorporating behavioral changes and making better use of current equipment.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-description-section --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-3 col-md-6 col-11 p-0","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-3 col-md-6 col-11 p-0"><!-- wp:create-block/banner-description-section {"mediaID":124} -->
        <section id="banner-description" class="wp-block-create-block-banner-description-section"><div class="banner-description"><div class="banner-description__inner"><div class="row banner"><div class="col-lg-4 col-md-4 col-4 p-0"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-2.png"/></div></div><div class="col-lg-8 col-md-8 col-8 p-0"><div class="banner-description__inner_heading"><h4>Watch your <span class="change-color"> finances </span></h4></div><div class="banner-description__inner_description"><p>You should know how much money you have in the bank and how much money you make on a daily. basis.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-description-section --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-3 col-md-6 col-11 p-0","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-3 col-md-6 col-11 p-0"><!-- wp:create-block/banner-description-section {"mediaID":125} -->
        <section id="banner-description" class="wp-block-create-block-banner-description-section"><div class="banner-description"><div class="banner-description__inner"><div class="row banner"><div class="col-lg-4 col-md-4 col-4 p-0"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-3.png"/></div></div><div class="col-lg-8 col-md-8 col-8 p-0"><div class="banner-description__inner_heading"><h4>Track of tax <span> deadlines </span></h4></div><div class="banner-description__inner_description"><p>Fines and interest can be imposed if tax returns and payments are not <br>filed on time.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-description-section --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"col-lg-3 col-md-6 col-11 p-0","layout":{"type":"default"}} -->
        <div class="wp-block-group col-lg-3 col-md-6 col-11 p-0"><!-- wp:create-block/banner-description-section {"mediaID":126} -->
        <section id="banner-description" class="wp-block-create-block-banner-description-section"><div class="banner-description"><div class="banner-description__inner"><div class="row banner"><div class="col-lg-4 col-md-4 col-4 p-0"><div class="banner-description__inner_img"><img src="http://localhost/walletup/wp-content/uploads/2023/11/banner-section-img-4.png"/></div></div><div class="col-lg-8 col-md-8 col-8 p-0"><div class="banner-description__inner_heading"><h4>Know your day-to-day<br><span class="change-color">expenses</span></h4></div><div class="banner-description__inner_description"><p>Meet day-to-day expenses like<br> rent and wages to not face<br> difficulties.</p></div></div></div></div></div></section>
        <!-- /wp:create-block/banner-description-section --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->',
    )
);
?>