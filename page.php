<?php get_header(); ?>
	
	
	<?php if (is_home()) { query_posts('posts_per_page=1'); } ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	

	<h2 id="title"><?php the_title(); ?></h2>
		<div id="body">
			<?php the_content(); ?>
		</div>
	</div>

	
	<?php endwhile; ?>
	
	<?php else : ?>
	
	<h2 id="title">Nothing found!</h2>
	
	<?php endif; ?>
	
<?php get_footer(); ?>