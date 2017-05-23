<!--sidebar-->
<div id="sidebar">
	<!--begin the sub-nav-->
	<div id="sub-navigation" class="widget">
		<?php if (is_page()): ?>
		<h2 class="sub-navigation-title">
			<?php echo get_the_title($post->post_parent); ?></h2>
		<ul class="sub-navigation-items">
		<?php if($post->post_parent){
	wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => _('')));
 } else { //
	wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
     
    }
?></ul>
		
<?php endif ?>
<?php if (!(is_page())): ?>
		<h2 class="sub-navigation-title">Blog</h2>
		<ul class="sub-nagivation-items"></ul>php wp_list_categories(array('title_li' => _(')));
		<?php endif;?>
	</div>
	<!--end the sub-nav-->
	
<!--quotes-->
	<?php if (get_post_meta($post->ID, 'Quote', true)): //is there a quote? ?>
	<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); //then write out the quote?></blockquote>
	<?php endif;?>
<!--end the quotes-->
	
<!--sidebar-->
	<?php dynamic_sidebar(1); //call the widgets?? ?>
<!--end the dynamic sidebar-->
</div>
<!--end the sidebar-->
	
	