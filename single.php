<?php get_header();?>
	<!--start content-->
<div id="content">
	<?php if (have_posts()): while(have_posts()): the_post();//loop?>
	<article id="post-<?php the_ID();?>" class="post">
		<h2><?php the_title();//post title?></h2>
		<small>Posted on <?php the_time('F j, Y');?> by <?php the_author();?> in <?php the_category(', ');?></small>
	<?php the_post_thumbnail('large');?>
	<?php the_content('');?>
	</article>
	<?php endwhile; endif;?>
	<small>single.php</small>
</div>

<?php get_sidebar();?>
<?php get_footer();?>
		