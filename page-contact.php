<?php get_header(  ) ?>

<!-- contactMe start -->
<div class="contactMe">
    <div class="contactIn">
    	<h1>Contact Me</h1>
        <p><span>Book an Online Meeting: <a href="#">Click Here</a></span><br><span>Phone: <a href="tel:+647-694-3379">(647) 694-3379</a></span></p>
        <form method="post" action-xhr="/components/amp-form/submit-form-xhr" target="_top">
            <div class="inputCont">
                <input class="form-control" type="text" placeholder="Name*">
            </div>
            <div class="inputCont">
                <input class="form-control" type="tel" placeholder="Phone*">
            </div>
            <div class="inputCont">
                <input class="form-control" type="email" placeholder="Email*">
            </div>
            <div class="inputCont">
                <textarea class="form-control" rows="5" cols="5" name="comment" placeholder="Reason"></textarea>
            </div>
            <div class="inputCont">
                <amp-img width="632" height="135" layout="responsive" src="image/recaptcha.jpg" alt="Recaptcha"></amp-img>
            </div>
            <div class="btnCont">
                <input type="submit" value="Submit">
            </div>
            <div submit-success><template type="amp-mustache">Success! Thanks for trying the<code>amp-form</code> demo!</template> </div>
            <div submit-error><template type="amp-mustache">Error!</template></div>
        </form>
    </div>
</div>
<!-- contactMe end -->
<?php get_footer(); ?>