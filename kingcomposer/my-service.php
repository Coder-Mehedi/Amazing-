<?php // print_r($atts); ?>

<!-- myServices start -->
<div class="myServices">
    <div class="mySvsCont">
    	<h2><?php echo $atts['my_service_section_title'] ?></h2>
        <div class="mySvsMid">
        <?php foreach($atts['my_services'] as $single_service): ?>
            <?php $video_id = explode('/', $single_service->video_url)[3]; ?>
            <div class="mySvsIn">
            	<h6><?php echo $single_service->video_top_text ?></h6>
				<amp-youtube width="480" height="270" layout="responsive" data-param-modestbranding="1" data-param-rel="1" data-videoid="<?php echo $video_id ?>"></amp-youtube>
            </div>
        <?php endforeach; ?>
            
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

