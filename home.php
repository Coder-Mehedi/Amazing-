<?php get_header( ) ?>

<!-- Banner start -->
<div class="banner blogBnr">
    <div class="bnrIn">
        <div class="bnrTxt">
        	<h1>Blog</h1>
        </div>
    </div>
</div>
<!-- Banner end -->
<!-- wrong post type -->

<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
?>
            
<!-- Blog start -->
<div class="blogCont">
	<h2>Top  viewed</h2>
    <div class="blogRow">
<?php if ( $popularpost->have_posts() ) : ?>
    <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
    <?php $count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true); ?>
        <div class="blogBox">
            <a class="blogImg" href="<?php echo get_permalink() ?>">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="Post image"></amp-img>
            </a>
            <h6><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h6>
            <p><?php echo substr(get_the_excerpt(), 0, 45) ?></p>
            <div class="postTime">
                <span class="viewLike">
                    <span class="view"><?php echo $count; ?></span>
                    <span class="like">115</span>
                </span>
                <span class="postDate"><?php echo get_the_date() ?></span>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
    
    </div>
	<h2>Latest Posts</h2>
    <div class="blogRow">


<?php $recent_posts = new WP_Query(['post_type' => 'post']); ?>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        $count = get_post_meta(get_the_ID(), 'wpb_post_views_count', true);
?>

        <div class="blogBox">
            <a class="blogImg" href="<?php echo get_permalink() ?>">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="Post image"></amp-img>
            </a>
            <h6><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h6>
            <p><?php echo substr(get_the_excerpt(), 0, 45) ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view"><?php echo $count ?? 0; ?></span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date() ?></span>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>

    </div>
    <ul class="pagination">
    	
    <?php echo paginate_links(array('prev_text' => 'Prev',
        'next_text' => 'Next',
        'mid_size' => 1
         )); ?>
    </ul>
    
</div>
<!-- Blog end -->



<?php get_footer( ); ?>