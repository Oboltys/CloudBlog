<?php
	get_header();
?>

	<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php _e('Рубрика:'); ?> &quot;<?php single_cat_title(); ?>&quot;</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php _e('Метка:'); ?> &quot;<?php single_tag_title(); ?>&quot;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив сайта</h2>
 	  <?php } ?>

	
	<?php include IDE_PATH.'layouts/blog.php'; ?>
	
	<?php else :

	if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>К сожалению, в рубрике &laquo;%s&raquo; еще ничего не опубликовано.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>К сожалению, за эту дату ничего не опубликовано.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>К сожалению, автор %s еще ничего не опубликовал.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Ничего не найдено.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php ide_sidebar(); ?>

<?php get_footer(); ?>
