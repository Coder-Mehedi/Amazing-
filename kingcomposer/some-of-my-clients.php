<?php $image_ids = explode(',', $atts['client-logo']) ?>


<!-- Clients start -->
<div class="clients">
	<h2>Some Of My Clients</h2>
    <ul>
    <?php foreach($image_ids as $single_image_id): ?>
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo wp_get_attachment_image_src( $single_image_id, 'full' )[0]; ?>" alt="Logo"></amp-img></a></li>
    <?php endforeach; ?>

    </ul>
</div>
<!-- Clients end -->

<?php get_footer( ) ?>