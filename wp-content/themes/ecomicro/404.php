<?php get_header(); ?>

<div id="content">
	<h1><?php _e('Ошибка 404 - Страница не найдена'); ?></h1>
	<?php _e('К сожалению, по вашему запросу ничего не найдено.'); ?>
	
	<p>
		<h3><?php _e('Sitemap'); ?></h3>
		<ul><?php wp_list_pages(); ?></ul>
	</p>
</div><!-- content //-->

<?php ide_sidebar(); ?>

<?php get_footer(); ?>