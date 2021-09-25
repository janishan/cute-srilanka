 ( function( $, window, document, undefined ) {
 
     'use strict';
 
     var $document    = $( document ),
         $window      = $( window ),
         windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
         windowWidth  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  
     $document.ready( function() {

        // insta feed slider

        var instaSlideEl = $('.instafeed-slider'),
            featuredAccoSlideEl = $('.featured-accommodation-wrapper .lsx-to-slider-inner'),
            thingsToDoSlideEl = $('.things-to-do-wrapper .lsx-to-slider-inner'),
            gallerySliderEl = $('.details-gallery-wrapper .gallery');


            if(instaSlideEl.length > 0){
                instaSlideEl.slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    appendArrows : instaSlideEl.parent().find('.slider-nav'),
                    arrows: true,
                    dots: false,
                    autoplay: false,
                    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
                    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
                    responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            slidesToShow: 2
                          }
                        }
                      ]
                }) 
            }

            if(featuredAccoSlideEl.length > 0){
                featuredAccoSlideEl.slick('destroy');
                featuredAccoSlideEl.slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    appendArrows : featuredAccoSlideEl.parents('.featured-accommodation-wrapper').find('.slider-nav'),
                    arrows: true,
                    dots: false,
                    autoplay: false,
                    adaptiveHeight: false,
                    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
                    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                adaptiveHeight: true
                            }
                        },
                      ]
                });
            }

            if(thingsToDoSlideEl.length > 0){
                thingsToDoSlideEl.slick('destroy');
                thingsToDoSlideEl.slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    appendArrows : thingsToDoSlideEl.parents('.things-to-do-wrapper').find('.slider-nav'),
                    arrows: true,
                    dots: false,
                    autoplay: false,
                    adaptiveHeight: false,
                    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
                    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>'
                });
            }
            if(gallerySliderEl.length > 0){
                
                if(gallerySliderEl.hasClass('slick-initialized')){
                    gallerySliderEl.slick('destroy');
                }
                    
                gallerySliderEl.find('> br').remove();
            }
            
  
  
        
        // destination map

        var destinations = $('article[data-city]');
            if(destinations.length > 0){
                
                destinations.each(function(){
                    var _this = $(this),
                        _city = _this.data('city'),
                        _parent = _this.parents('.row');

                        _parent.attr('data-city', _city);
                        $('.city-pointer[id="'+_city+'"]').addClass('show-city-pointer');
                });

                var mapPointers = $('.city-pointer');

                mapPointers.on('click', function(){
                    var mapPoint = $(this),
                        pointName = mapPoint.attr('id');

                        $('body').addClass('show-city');
                        $('.row[data-city]').removeClass('active');
                        $('.row[data-city="'+pointName+'"]').addClass('active');
                        $('.city-pointer').removeClass('active-city-pointer');
                        $('.city-pointer[id="'+pointName+'"]').addClass('active-city-pointer');
                    
                        console.log(pointName);
                });

                $('.city-close').on('click', function(){
                    $('body').removeClass('show-city');
                    $('.row[data-city]').removeClass('active');
                    $('.city-pointer').removeClass('active-city-pointer');
                });

                $('.destination-title-wrapper, .destination-wrapper .lsx-widget').wrapAll('<div class="wrap-to-flex"></div>');

                if($(window).width() > 767){
                    var firstCity = jQuery('article[data-city]').eq(0).attr('data-city');
                    $('.city-pointer[id="'+firstCity+'"]').trigger('click');
                }


            }
        

            //destination overview

            var desMainContentEl = $('.destination-main-content-row');
            if(desMainContentEl.length > 0){
                $('body').addClass('destination-overview-template');
            }

            //append breadcrumb after hero slider

            var BC = $('.breadcrumbs-inner-wrapper');
            if(BC.length > 0){
                var bcHtml = BC.html();
                $('.wrap.main').find('> .content').prepend('<div class="bc-wrapper"><div class="bc-inner-wrapper">'+bcHtml+'</div></div>');
                BC.parents('.breadcrumbs-container').remove();
            }


            //accordions

            var acEls = $('.accordion-wrapper');
            if(acEls.length > 0){
                acEls.each(function(){
                    var acEl = $(this),
                        acTitle = acEl.find('.accordion-heading-wrapper'),
                        acCont = acEl.find('.accordion-content-wrapper');

                        acTitle.on('click', function(){
                            acEl.toggleClass('acco-open');
                            acCont.slideToggle(500);
                        });
                });

                acEls.eq(0).find('.accordion-heading-wrapper').trigger('click');
            }
        

            // search

            if($('.search-select').length > 0){
                $('.search-select').select2();

                $('.srch-btn').on('click', function(){
                    var srchBox = $('.search-select'),
                        srchVal = srchBox.val(),
                        parent = $('.search-parent'),
                        resultParentEl = $('.search-results-wrapper');

                        console.log(srchVal)
                        if(srchVal != ''){
                            parent.addClass('filtered');
                            var resultEl = $('.grid-item[data-name='+srchVal+']').clone();
                            resultParentEl.html('').append(resultEl);

                        }else{
                            parent.removeClass('filtered');
                        }
                });
            }
            function scrollFunctions(el){
            var $body = jQuery('body');
            
            function check_scroll() {
                //ceheck scroll
                var scrollcontrol = el.scrollTop();
                    
                if(scrollcontrol > 0){
                    $body.addClass('window-scrolled scrolled');
                }else{
                    $body.removeClass('window-scrolled scrolled');
                }  
            }
            
            el.on('load scroll', function() {
                check_scroll();
            }).trigger('scroll');
        }
        
        scrollFunctions(jQuery(window));
     });

     $window.on('resize', function(e){
        //avoid call this function multiple times
        if (isResizing) clearTimeout(isResizing);
        isResizing = setTimeout(function(){
            OnResizeAdjustments(); // add all functions which should trigger on resize.
        },100);
    
    });
    
    function OnResizeAdjustments(){
        //fullHeightMV();
    }
 
 } )( jQuery, window, document );
 