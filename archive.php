<?php get_header(); ?>
	
	<div id="archive">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php if (is_sticky()) : ?>
					<img class="stickystar" src="<?php bloginfo('template_directory'); ?>/images/star.png" alt="This quote is bookmarked" />
				<?php endif; ?>
			</h2>
			<?php the_content(); ?>
			<p class="tags"><?php the_tags(); ?></p>
		</div>

	<?php endwhile; ?>
	
	<?php else : ?>
	
	<h2 id="title">Nothing found!</h2>
	
	<?php endif; ?>
	
		<div id="pagination">
		
			<?php previous_posts_link('<img id="previous" src="' . get_bloginfo('template_directory') . '/images/left-arrow.png" alt="Previous posts" />'); ?>
		
			<?php next_posts_link('<img id="next" src="' . get_bloginfo('template_directory') . '/images/right-arrow.png" alt="Next posts" />'); ?>
		
		</div>
	
	</div>
	
<?php get_footer(); ?>