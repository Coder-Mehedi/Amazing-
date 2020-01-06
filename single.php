<?php get_header(); ?>

<!-- Banner start -->
<div class="banner blogBnr">
    <div class="bnrIn">
        <div class="bnrTxt">
        	<h2>Blog</h2>
        </div>
    </div>
</div>
<!-- Banner end -->



<?php while ( have_posts() ) : the_post(); ?>

<!-- Blog start -->
<div class="blogCont">
	<div class="single-blog">
    	<div class="posted">
            <div class="pPersonPhoto">
            	<amp-img width="75" height="75" layout="intrinsic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ) ?>" alt="image"></amp-img>
            </div>
            <div class="pPersonName"><?php the_author( ) ?></div>
            <div class="pDate"><?php echo get_the_date() ?></div>
        </div>
    	<h1><?php the_title() ?></h1>
    	<amp-img width="1067" height="562" layout="responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="single image"></amp-img>
        <?php the_content( ); ?>
        <div class="sbBtm">
            <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

            <ul class="socialLink">
            	<li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $actual_link; ?>"></a></li>
            	<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $actual_link ?>"></a></li>
            	<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>"></a></li>
            	<li class="link"><a target="_blank" href="<?php echo $actual_link; ?>"></a></li>
            <?php //if(isset($_COOKIE['liked'])): ?>
            <div class="heart-container"></div>

            <?php //endif; ?>
            </ul>
            <div class="sbBtmBtn">
                <div>
                	<a class="btn" href="#">See All</a>
                </div>

<?php
$prev_post = get_adjacent_post(false, '', true);
$next_post = get_adjacent_post(false, '', false);
?>
		
                <div class="sb-prevNext">
        <?php if(!empty($prev_post)): ?>
                	<a class="btn" href="<?php echo get_permalink($prev_post->ID) ?>">Prev</a>
        <?php endif; ?>
        <?php if(!empty($next_post)): ?>
                	<a class="btn" href="<?php echo $next_post->guid ?>">Next</a>
        <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<?php
if ( comments_open() || get_comments_number() ) :
	// comments_template();
endif;
 ?>
<?php wpb_set_post_views(get_the_ID()); ?>
<?php endwhile; ?>
<?php // print_r($_COOKIE) ?>


<?php $data = array(
    'post_id' => get_the_ID(),
    'template_path' => get_template_directory_uri(),
    'permalink' => get_the_permalink( )
);
wp_localize_script( 'love_like', 'post_info', $data ) ?>

<?php get_footer() ?>
