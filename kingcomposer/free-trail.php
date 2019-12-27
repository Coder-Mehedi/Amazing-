<!-- freeTrial start -->
<div class="freeTrial">
    <div class="fTrialCont">
    	<h2><?php echo $atts['trail_title'] ?></h2>
        <p><?php echo $atts['trail_description']; ?></p>
        <div class="fTrialMid">
        	<?php foreach (explode(',', $atts['trail_image']) as $single_image) : ?>
	            <div class="fTrialIn">
	                <div class="fTrialImg">
	                    <amp-img width="506" height="441" layout="responsive" src="<?php echo wp_get_attachment_image_src($single_image, 'full')[0] ?>" alt="Image"></amp-img>
	                </div>
	            </div>
            <?php endforeach; ?>
        </div>
        <h4><?php echo $atts['trail_bottom_text'] ?></h4>
        <a class="ftBtn" href="<?php echo $atts['trail_button_url'] ?>"><?php echo $atts['trail_button_text'] ?></a>
    </div>
</div>
<!-- freeTrial end -->

