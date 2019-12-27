<!-- gRating start -->
<?php print_r($atts) ?>

<div class="gRating">
    <div class="gRatingTop">
        <h2><?php echo $atts['section_title'] ?></h2>
    </div>
    <div class="grCarousel">
        <div class="grCaroIn">
            <amp-carousel id="carousel" width="1200" height="630" layout="responsive" type="slides" autoplay delay="3000" on="slideChange:cSelector.toggle(index=event.index, value=true)">
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                    
                    <div class="slideMid">
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sadips ipsums aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sadips ipsums aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>
                <div class="slide-wrap">
                    <span class="gLogo"><amp-img width="241" height="80" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/gLogo.png" alt="gLogo"></amp-img></span>                   
                    <div class="slideMid">
                    	<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</p>
                    </div>
                    <span class="star"><amp-img width="243" height="41" layout="intrinsic" src="<?php echo get_template_directory_uri() ?>/image/star.png" alt="star"></amp-img></span>
                    <h6>Plain Jane</h6>
                </div>                
            </amp-carousel>
            <amp-selector id="cSelector" on="select:carousel.goToSlide(index=event.targetOption)" layout="container">
                <span option="0" selected></span>
                <span option="1"></span>
                <span option="2"></span>
                <span option="3"></span>
                <span option="4"></span>
            </amp-selector>
        </div>
    </div>
    <div class="gRatingBtm">
        <div class="grBtmIn">
            <span>See more reviews on:</span>
            <ul>
            	<li><a href="#"><amp-img width="194" height="56" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/upLogo.png" alt="upLogo"></amp-img></a></li>
            	<li><button on="tap:gPopup"><amp-img width="185" height="62" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/gLogo2.png" alt="gLogo2"></amp-img></button></li>
            	<li><a href="#"><amp-img width="241" height="66" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/udLogo.png" alt="udLogo"></amp-img></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- gRating end -->