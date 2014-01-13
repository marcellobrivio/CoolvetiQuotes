<?php get_header(); ?>
	

	<?php $is_first = true; // Used to show only one post, sticky or not ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php if ($is_first == true) : ?>
	
	<div id="container" <?php post_class(); ?>>
		<div id="post-<?php the_ID(); ?>">
			<?php if (is_sticky()) : ?>
				<img class="stickystar" src="<?php bloginfo('template_directory'); ?>/images/star.png" alt="This quote is bookmarked" />
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>		
			<?php the_content(); ?>
			<p class="tags"><?php the_tags(); ?></p>
		</div>
	</div>
	
	<div id="controls">
		
		<?php next_post_link('%link', '<img id="previous" src="' . get_bloginfo('template_directory') . '/images/left-arrow.png" alt="%title" />'); ?>
		
		<?php previous_post_link('%link', '<img id="next" src="' . get_bloginfo('template_directory') . '/images/right-arrow.png" alt="%title" />'); ?>
				
	</div>
	
		<?php $is_first = false; ?>
		<?php else : // Don't show other posts ?>
		<?php endif; ?>
	
	<?php endwhile; ?>
	
	<?php else : ?>
	
	<h2 id="title">Nothing found!</h2>
	
	<?php endif; ?>
	
<?php get_footer(); ?>