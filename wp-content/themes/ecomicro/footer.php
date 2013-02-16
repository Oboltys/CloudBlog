
		<div class="clear"> </div>
	</div><!-- main //-->
	
	<div id="footer">

		<ul id="footerbar" class="noul">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar') ) : ?>
			<?php endif; ?>
		</ul><!-- footerbar //-->
		<div class="clear"> </div>
		
		<div class="copyright">
			<div class="content">
				<p class="text"><?php _e('Все права защищены '.date('Y').' &mdash; '); bloginfo('name'); ?>
				 </p>
				<?php
					if(function_exists('wp_nav_menu'))
						wp_nav_menu( array( 'fallback_cb' => '', 'container' => '', 'menu_class' => 'noul footer_nav', 'theme_location' => 'menu_footer' ) );
				?>
				<div id="idesigneco">Blogstyle.ru <a href="http://blogstyle.ru/">Шаблоны WordPress</a></div>
				<div class="clear"> </div>
			</div>
		</div><!-- copyright //-->

		<?php wp_footer(); ?>

	</div><!-- footer //-->

</div><!-- wrap //-->
	
</body>
</html>