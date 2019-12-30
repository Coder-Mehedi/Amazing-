<!-- Footer start -->
<footer class="footer">
    <div class="ftrIn">
        <div class="ftrInLft">
        	<a class="ftrLogo" href="#"><amp-img width="208" height="63" layout="responsive" src="<?php the_field('footer_logo', 'option'); ?>" alt="Logo"></amp-img></a>
        	<span class="ftrPhone">Phone: <a href="tel:+647-694-3379"><?php the_field('contact_number', 'option') ?> </a></span>
        </div>
        <div class="ftrInRgt">
        	<p>&copy; <?php the_field('copyright_text', 'option') ?></p>
        </div>
	</div>
</footer>
<!-- Footer end -->
<amp-lightbox id="gPopup" layout="nodisplay">
    <div class="lightbox">
    	<button class="popClose" on="tap:gPopup.close">&nbsp;</button>
        <amp-img width="971" height="746" layout="responsive" src="<?php echo get_template_directory_uri() ?>/image/reviews.png" alt="Reviews"></amp-img>
    </div>
</amp-lightbox>

<?php wp_footer(); ?>

</body>
</html>
