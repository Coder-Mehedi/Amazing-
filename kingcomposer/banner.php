<!-- Banner start -->
<div class="banner">
    <div class="bnrIn">
        <div class="homeBnrBox">
            <div class="homeBnrImg">
            	<amp-img width="294" height="294" layout="responsive" src="<?php echo $atts['banner_image'] ?>" alt="Image"></amp-img>
            </div>
            <div class="homeBnrTxt">
                <h1><?php echo $atts['heading_text'] ?></h1>
                <p><?php echo $atts['banner_description'] ?></p>
                <a class="bnrBtn1" href="<?php echo $atts['left_button_url'] ?>"><?php echo $atts['left_button_text'] ?></a>
                <a class="bnrBtn2" href="<?php echo $atts['right_button_url'] ?>"><?php echo $atts['right_button_text'] ?></a>
            </div>
        </div>       
    </div>
</div>
<!-- Banner end -->

<?php //print_r($atts) ?>
