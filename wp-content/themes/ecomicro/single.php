<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) { ?>
	<?php the_post(); ?>

		<div class="post">
			<div class="strip">
				<?php echo get_avatar( get_the_author_email(), '40' ); ?>
				<p class="day"><?php the_time('d'); ?></p>
				<p class="month"><?php the_time('M'); ?></p>
			</div>

			<div class="content">
				<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<div class="text">
					<?php the_content('(читать полностью...)'); ?>
					<div class="clear"> </div>
				</div>

					<div class="meta">
						<?php if ( comments_open() && pings_open() ) { ?>
							<p><?php comments_popup_link('Отзывов нет', '1 отзыв', 'Отзывов (%)', '', ''); ?></p>
						<?php } ?>
						
						<p><?php the_category(', '); ?></p>

						<?php if(has_tag()) { ?><p class="tags"><?php the_tags(); ?></p><?php }; ?>
						<div class="clear"> </div>
					</div>
				
				<?php if(ide_option('post_fullmeta')): ?>
				<ul class="postmetadata">
						<li>Опубликовано <?php the_time('l, d M Y') ?> в <?php the_time() ?>. Рубрика: <?php the_category(', ') ?>.</li>

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<li>Вы можете <a href="#respond">оставить отзыв</a>, или <a href="<?php trackback_url(); ?>" rel="trackback">трекбек</a> со своего сайта.</li>

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							<li>Отзывы закрыты, но вы можете оставить <a href="<?php trackback_url(); ?> " rel="trackback">трекбек</a> со своего сайта.</li>

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							<li>Вы можете оставить отзыв. Пинг сейчас закрыт.</li>

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							<li>Комментариии и пинг сейчас закрыты.</li>

						<?php } edit_post_link('Править','','.'); ?>

				</ul>
				<?php endif; ?>
					
					
				<?php comments_template(); ?>
			
			</div><!-- content //-->
		</div><!-- post //-->

<?php } else {
		_e('<h1>Ничего не найдено!</h1>К сожалению, по вашему запросу ничего не найдено.');
	}
?>
</div><!-- content //-->

<?php ide_sidebar(); ?>

<?php get_footer(); ?>