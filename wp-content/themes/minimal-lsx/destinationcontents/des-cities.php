<?php $currCity = esc_attr( $post->post_name );// set the city here ?>

<div class="cities-wrapper search-parent">
    <h2 class="destination-list-heading big-heading"><?php echo of_get_option($currCity.'-district-title', $currCity); ?></h2>

    <div class="search-wrapper">
        <div class="search-inner-wrapper">
            <div class="search-box">
                <label for="citites">Select City</label>
                <div class="search-filed">
                    <select name="citites" id="citites" class="search-select">
                    <option value="">Select City</option>
                    <?php 
                        $desCityNames = explode(',',of_get_option($currCity.'-district-cities', '4'));
                        foreach ($desCityNames as $desCityN) {
                            $cityName = $desCityN;
                            $desCityN = str_replace(' ', '-', strtolower($desCityN));
                    ?>

                    
                        <option value="<?=$desCityN?>"><?=$cityName?></option>
                    
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="search-btn-wrapper">
                <button class="srch-btn bttn primary-btn">Search</button>
            </div>
        </div>
    </div>
    <div class="citites-inner-wrapper grid-items-wrapper search-results-wrapper"> </div>
    
    <div class="citites-inner-wrapper grid-items-wrapper"> 
<?php
    //$desCityNames = explode(',',of_get_option($currCity.'-district-cities', '4'));
    //$fullWidthCount = $districtCount = 1;
    foreach ($desCityNames as $desCityName) {
        $desCityName = str_replace(' ', '-', strtolower($desCityName));
?>

        <div class="city-item grid-item" data-name="<?=$desCityName;?>">
            <div class="city-image-wrapper grid-item-image-wrapper">
                <img src="<?php echo of_get_option('city-box-image-'.$desCityName, get_template_directory_uri() . '/assets/images/districts/'.$desDistrictName . '.jpg'); ?>"/>
                <a href="<?php echo of_get_option('city-box-link-'.$desCityName, '#'); ?>"></a>
            </div>
            <h4 class="item-title"><?php echo of_get_option('city-box-title-'.$desCityName, 'City'); ?></h4>
            <p><?php echo of_get_option('des-box-intro-'.$desCityName, 'Lorem Ipsum'); ?></p>
            <p class="more-link grid-more-link"><a class="bttn primary-btn" href="<?php echo of_get_option('city-box-link-'.$desCityName, 'City'); ?>" tabindex="0">Learn more</a></p>
        </div>
<?php } ?>

    </div>
</div>