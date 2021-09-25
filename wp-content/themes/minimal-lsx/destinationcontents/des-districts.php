
<div class="cities-wrapper search-parent">
    <h2 class="destination-list-heading big-heading"><?php echo of_get_option('des-list-title', 'The Wonderland'); ?></h2>
    
    <div class="search-wrapper">
        <div class="search-inner-wrapper">
            <div class="search-box">
                <label for="">Select District</label>
                <div class="search-filed">
                    <select name="districts" id="districts" class="search-select">
                    <option value="">Select District</option>
                    <?php 
                        $desDistrictNames = explode(',',of_get_option('des-districts', '4'));
                        foreach ($desDistrictNames as $desDistrictN) {
                            $desName = $desDistrictN;
                            $desDistrictN = str_replace(' ', '-', strtolower($desDistrictN));
                    ?>

                    
                        <option value="<?=$desDistrictN?>"><?=$desName?></option>
                    
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
    
<?php
    //$desDistrictNames = explode(',',of_get_option('des-districts', '4'));
    $fullWidthCount = $districtCount = 1;
    foreach ($desDistrictNames as $desDistrictName) {
        $desName = $desDistrictName;
        $desDistrictName = str_replace(' ', '-', strtolower($desDistrictName));
        
?>



    <?php if($districtCount % 6 == 1){ ?>
        <div class="citites-inner-wrapper grid-items-wrapper"> 
    <?php } ?>

        <div class="city-item grid-item" data-name="<?=$desDistrictName;?>">
            <div class="city-image-wrapper grid-item-image-wrapper">
                <img src="<?php echo of_get_option('des-box-image-'.$desDistrictName, get_template_directory_uri() . '/assets/images/districts/'.$desDistrictName . '.jpg'); ?>"/>
                <a href="<?php echo of_get_option('des-box-link-'.$desDistrictName, '#'); ?>"></a>
            </div>
            <h4 class="item-title"><?php echo of_get_option('des-box-title-'.$desDistrictName, 'City'); ?></h4>
            <p><?php echo of_get_option('des-box-intro-'.$desDistrictName, 'Lorem Ipsum'); ?></p>
            <p class="more-link grid-more-link"><a class="bttn primary-btn" href="<?php echo of_get_option('des-box-link-'.$desDistrictName, 'City'); ?>" tabindex="0">Learn more</a></p>
        </div>

    <?php if($districtCount % 6 == 0){ ?>
        </div>
    <?php } ?>

        <?php if($districtCount % 6 == 0){ ?>
        
            <div class="full-width-image-wrapper">
                <img src="<?php echo of_get_option('full-width-image-' . $fullWidthCount, get_template_directory_uri() . '/assets/images/districts/full-width-'.$fullWidthCount . '.jpg'); ?>"/>
            </div>

        <?php $fullWidthCount++; } ?>
 
<?php $districtCount++; } ?>

    
</div>