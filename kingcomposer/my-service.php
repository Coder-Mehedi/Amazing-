<?php
$video_one = explode('/', $atts['video-one'])[3];
$video_two = explode('/', $atts['video-two'])[3];
$video_three = explode('/', $atts['video-three'])[3];
$video_four = explode('/', $atts['video-four'])[3];
?>



<!-- myServices start -->
<div class="myServices">
    <div class="mySvsCont">
    	<h2>My Services</h2>
        <div class="mySvsMid">
            <div class="mySvsIn">
            	<h6>Zoho products Customization & Training Services</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo $video_one ?>"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>Online Marketing Architect Solution</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo $video_two ?>"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>About My Service</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo $video_three ?>"></amp-youtube>
            </div>
            <div class="mySvsIn">
            	<h6>Web Design Services Architect</h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo $video_four ?>"></amp-youtube>
            </div>
        </div>
        <div class="btnBox">
        	<span>
            	<a class="moreBtn" href="#">See more</a>
            </span>
        </div>
    </div>
</div>
<!-- myServices end -->

<?php //print_r($atts) ?>

