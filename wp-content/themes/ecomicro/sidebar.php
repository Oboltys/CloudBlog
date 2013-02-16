<ul id="sidebar" class="noul">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right_sidebar') ) : ?>
	<?php include (TEMPLATEPATH . "/inc.php"); ?>
	<h1><?php _e('Информация'); ?></h1>
	<?php _e('Поместите сюда какие-нибудь виджеты'); ?>
	
	<?php endif; ?>
</ul><!-- sidebar //-->