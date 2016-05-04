<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	
    <div id="main-content" class="mh-content">
		hello from page.php
		<?php
		
    	while (have_posts()) : the_post();
			mh_before_page_content();
			get_template_part('content', 'page');
			comments_template();
		endwhile; 
		?>
		bye from page.php
	</div>
	
	<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>