<?php get_header(); ?>
    <div id="content">    
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <h2><?php the_title(); //get the title?></h2>
        <?php the_content(''); //get the content?>
        <?php endwhile; endif; //end the loop?>
        <small>index.php</small>

    </div>
<!-- End Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>