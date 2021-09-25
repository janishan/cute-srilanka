<?php 

$currTitle = esc_attr( $post->post_name );

$cats = explode(',',of_get_option('attractions-categories', '4'));
$attractPoints = explode(',',of_get_option('attractions-points', 'attract-point'));
    
?>


<div class="details-accordion-wrapper">
			<div class="full-width-image-wrapper">
                <img src="<?=get_template_directory_uri() . '/assets/images/destinations/full-width-'.$currTitle.'.jpg';?>" alt="">
			</div>
			<div class="accordions-wrapper">
            <?php
                    foreach ($cats as $cat) {
                        $catName = $cat;
                        $cat = str_replace(' ', '-', strtolower($cat));
                        $catIcon = of_get_option($cat.'-icon', '4');
                        $hasItems = false;

                        foreach ($attractPoints as $attractionPoint) {
                            $tempAttractionPoint = str_replace(' ', '-', strtolower($attractionPoint));
                            $tempPointCat = of_get_option($tempAttractionPoint.'-attraction-category', 'Cat');
                            $tempPointCat = str_replace(' ', '-', strtolower($tempPointCat));

                            $tempPointCity = of_get_option($tempAttractionPoint.'-attraction-city', 'City');
                            $tempPointCity = str_replace(' ', '-', strtolower($tempPointCity));

                            if($tempPointCity == $currTitle && $tempPointCat == $cat){
                               
                                $hasItems = true;
                            }
                        }

                        if(!$hasItems){
                            continue;
                        }
                ?>

                    <div class="accordion-wrapper">
                        <div class="accordion-heading-wrapper">
                            <span class="acco-icon"><img src="<?=$catIcon;?>" alt=""></span>
                            <h3 class="acco-title"><?=$catName;?></h3>
                        </div>
                        <div class="accordion-content-wrapper">
                            <div class="accordion-grid-wrapper">

                                <?php
                                    foreach ($attractPoints as $attractionPoint) {
                                        $pointName = $attractionPoint;
                                        $attractionPoint = str_replace(' ', '-', strtolower($attractionPoint));

                                        $pointTitle = of_get_option($attractionPoint.'-attraction', 'Name');
                                        $pointIntro = of_get_option($attractionPoint.'-attraction-intro', 'Intro');
                                        $pointTel = of_get_option($attractionPoint.'-attraction-tel', 'TEl');
                                        $pointLink = of_get_option($attractionPoint.'-attraction-view-link', 'View Link');
                                        $pointImage = of_get_option($attractionPoint.'-attraction-image', 'Image');
                                        $pointCat = of_get_option($attractionPoint.'-attraction-category', 'Cat');
                                        $pointCat = str_replace(' ', '-', strtolower($pointCat));

                                        $pointCity = of_get_option($attractionPoint.'-attraction-city', 'City');
                                        $pointCity = str_replace(' ', '-', strtolower($pointCity));

                                        if($pointCity != $currTitle){
                                            continue;
                                        }else if($pointCat != $cat){
                                            continue;
                                        }
                                ?>

                                    <div class="accordion-grid-item" data-cat="<?php echo $pointCat; ?>" data-city="<?php echo $pointCity; ?>">
                                        <div class="accordion-grid-item-image-wrapper">
                                            <div class="accordion-grid-item-image">
                                                <img src="<?=$pointImage;?>" alt="">
                                            </div>
                                        </div>
                                        <div class="accordion-grid-item-content-wrapper">
                                            <h4 class="item-title"><?=$pointTitle;?></h4>
                                            <p><?=$pointIntro;?></p>
                                            <p class="tel"><a href="tel:<?=$pointTel;?>">T: <?=$pointTel;?></a></p>
                                            <p class="view-link"><a href="<?=$pointLink;?>">View Location</a></p>
                                        </div>
                                    </div>

                                <?php
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
				
			</div>
		</div>