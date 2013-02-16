<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>

	<h2 class="pagetitle"><?php _e('Результаты поиска для'); ?> «<?php the_search_query(); ?>»</h2>

	<?php endif; ?>
	
	<?php
		$empty_message = '<h1>Ничего не найдено</h1>К сожалению, по вашему запросу ничего не найдено.';
		include IDE_PATH.'layouts/blog.php';
	?>
</div><!-- content //-->

<?php ide_sidebar(); ?>

<?php get_footer(); ?>