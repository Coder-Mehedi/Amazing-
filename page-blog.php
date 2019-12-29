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
<?php $posts_query = new WP_Query(['post_type' => 'posts']); ?>
            
<!-- Blog start -->
<div class="blogCont">
	<h2>Top  viewed</h2>
    <div class="blogRow">
<?php if ( $posts_query->have_posts() ) : ?>
            <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
        <div class="blogBox">
            <a class="blogImg" href="#">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="Post image"></amp-img>
            </a>
            <h6><a href="#"><?php the_title( ) ?></a></h6>
            <p>To Day Business Operations - Zoho One Review</p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view">15K</span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate">July 11/2019</span>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
    
    </div>
	<h2>Latest Posts</h2>
    <div class="blogRow">


<?php $recent_posts = new WP_Query(['post_type' => 'post']); ?>

<?php if ( $recent_posts->have_posts() ) : ?>
    <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

        <div class="blogBox">
            <a class="blogImg" href="<?php echo get_permalink() ?>">
                <amp-img width="366" height="207" layout="responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="Post image"></amp-img>
            </a>
            <h6><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h6>
            <p><?php echo substr(get_the_excerpt(), 0, 45) ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view">15K</span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date() ?></span>
            </div>
        </div>
	<?php endwhile; ?>

    </div>
    <ul class="pagination">
    	<?php $pagi_args = array('prev_text' => 'Prev',
	    'next_text' => 'Next',
	    'total' => $recent_posts->max_num_pages,
	    'mid_size' => 1
	     ); 
	?>
    <?php echo paginate_links($pagi_args); ?>
    </ul>
    
</div>
<!-- Blog end -->


<?php endif; ?>

<?php get_footer( ); ?>