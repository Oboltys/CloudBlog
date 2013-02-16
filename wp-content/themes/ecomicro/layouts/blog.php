<?php if (have_posts()) { ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<div class="strip">
				<?php echo get_avatar( get_the_author_email(), '60' ); ?>
				<p class="day"><?php the_time('d'); ?></p>
				<p class="month"><?php the_time('M'); ?></p>
			</div>

			<div class="post_body">
				<div class="content">
					<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<div class="text">
					<?php
						$show = ide_option('post_content');
						if($show == 'excerpt')
							the_excerpt('(читать полностью...)');
						elseif($show == 'content')
							the_content('(читать полностью...)');
					?>
						<div class="clear"> </div>
					</div>

				</div><!-- content //-->

					<?php if(ide_option('post_meta')) : ?>
					<div class="meta">
						<?php if ( comments_open() && pings_open() ) { ?>
							<p><?php comments_popup_link('отзывов нет', '1 отзыв', 'отзывов (%)', '', ''); ?></p>
						<?php } ?>
						
						<p><?php the_category(', '); ?></p>

						<?php if(has_tag()) { ?><p class="tags"><?php the_tags(); ?></p><?php }; ?>
						<div class="clear"> </div>
					</div>
					<?php endif; ?>

					<?php if(ide_option('comment_snippets')) ide_comment_snippets( $post->ID); ?>
				
				</div><!-- post_body //-->
				
			<div class="clear"> </div>
		</div><!-- post //-->

	<?php endwhile; ?>
	
		<div class="pagination">
			<div class="alignleft"><?php next_posts_link('&laquo; Предыдущая страница') ?></div>
			<div class="alignright"><?php previous_posts_link('Следующая страница &raquo;') ?></div>
			<div class="clear"> </div>
		</div>

<?php } else {
		_e( !empty($empty_message) ? $empty_message : 'Не найдено!</h1>К сожалению, по вашему запросу ничего не найдено.');
	}
?>