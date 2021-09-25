<?php $currCity = esc_attr( $post->post_name ); // set the city here ?>

<div class="sub-page-main-content-row destination-main-content-row">
    <div class="sub-page-main-content-wrapper">
        <h1 class="section-title"><?php echo of_get_option($currCity.'-district-title', $currCity); ?></h1>
        <p><?php echo of_get_option($currCity.'-district-intro', 'Lorem Ipsum'); ?></p>
    </div>
</div>