<?php get_header();?>

	<!--begin the flexslider-->
<div class="flexslider">
	<ul class="slides">
		<li><img src="<?php bloginfo('template_url'); ?>/imgs/img1.jpg" width="940" height="400" alt="Image One"/></li>
		<li><img src="<?php bloginfo('template_url'); ?>/imgs/img2.jpg" width="940" height="400" alt="Image One"/></li>
		<li><img src="<?php bloginfo('template_url'); ?>/imgs/img3.jpg" width="940" height="400" alt="Image One"/></li>
	</ul>
</div>
	<!--end the flexslider-->

	<!--begin the widgets-->
<div id="widgets"
	 <section class="widgetItem">
		<?php if ( have_posts()): while(have_posts()): the_post();?>
		<?php the_content('');//homepage content?>
		<?php endwhile; endif;//end the loop?>
	</section>
	<section class="widget-item">
		<h2>Latest Post:</h2>
		<ul>
			<?php rewind_posts();//stop the loop?>
			<?php query_posts('showposts=4'); //directions for the second loop?>
			<?php while(have_posts()): the_post(); //start the second loop?>
			<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
			<?php endwhile;?>
		</ul>
	</section>
	<section class="widget-item">
		<h2>Contact Me:</h2>
		<p>Phone number: 206-543-2567<br>Email: <a href="mailto:drawinggravity@gmail.com">drawinggravity@gmail.com</a><br>Address: 123 Fake Street</p>
	</section>
</div>

        <small>frontpage.php</small>
<!--end the widgets-->

<?php get_footer();?>