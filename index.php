<?php get_header(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
		<article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2> 
		<small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(', ');?></small>
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail' );?></a>
		<?php the_excerpt();?>
		<p class="read-more"><a href="<?php the_permalink();?>">Read More &raquo;</a></p>
		</article>
		<?php endwhile; endif; // end the loop ?>
        <small>index.php</small>
<!-- End Content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>