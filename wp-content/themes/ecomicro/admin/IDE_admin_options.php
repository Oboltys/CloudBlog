<?php

	/*
		Copyright 2010, idesigneco.com
		http://idesigneco.com
	*/

	// theme specific options

	// checkbox options
	$IDE_checkboxes = array('nav', 'nav_cat', 'sidebar_page', 'sidebar_blog', 'post_author', 'post_fullmeta', 'post_img_resize', 'css_enable',
							'post_meta', 'comment_snippets');
	
	// setup the form fields
	$Form->elements(
		array('name' => 'Общее', 'id' => 'general'),	// section
		array(
			'logo_url' => array(
				'type' => 'text', 'label' => 'Лого',  'value' => IDE_URL.'images/logo.png',
				'info' => 'Полный адрес картинки (например: http://site.com/images/logo.png)'
			),
			'favicon_url' => array(
				'type' => 'text', 'label' => 'Иконка',  'value' => IDE_URL.'favicon.ico',
				'info' => 'Полный адрес иконки (например: http://site.com/favicon.ico). Фавиконки обычно появляются в адресной строке браузера.'
			),
			'site_layout' => array(
				'type' => 'select', 'label' => 'Ширина сайта',
				'info' => 'Насколько широким должен быть сайт?',
				'attribs' => array('options' => array('wide_compact' => 'Компактный', 'wide_medium' => 'Средний', 'wide' => 'Широкий', 'wide_very' => 'Очень широкий'))
			),
			'nav' => array(
				'type' => 'checkbox', 'label' => 'Страницы в навигации' , 'value' => 'on',
				'info' => 'Показывать ссылки на страницы в шапке сайта?'
			),
			'nav_cat' => array(
				'type' => 'checkbox', 'label' => 'Рубрики в навигации', 'value' => 'on',
				'info' => 'Показывать список рубрик под шапкой?'
			),
			'sidebar_page' => array(
				'type' => 'checkbox', 'label' => 'Боковое меню для страниц' , 'value' => 'on',
				'info' => 'Показывать боковое меню (с виджетами и т. п.) на статических страницах типа страницы <em>О нас</em>?'
			),
			'sidebar_blog' => array(
				'type' => 'checkbox', 'label' => 'Боковое меню для блога' , 'value' => 'on',
				'info' => 'Показывать боковое меню (с виджетами и т.п.) на страницах архивов, хронологических записей и т.п.?'
			),
			'analytics' => array(
				'type' => 'textarea', 'label' => 'Код Analytics',
				'info' => 'Вставьте сюда код Google Analytics, или любой другой',
			),
			'affiliate' => array(
				'type' => 'text', 'label' => 'Партнерский ID iDesignEco', 'value' => '',
				'info' => 'Введите свой цифровой ID партнера iDesignEco. Вы можете посмотреть его в <a href="http://idesigneco.com/members">партнерской секции</a>.
						  После указания ID, на сайте будет показываться маленькое лого iDesignEco в нижней части сайта с партнерской ссылкой, что будет приносить вам <a href="http://idesigneco.com/affiliates">реферальную комиссию</a> за подписку людей по ссылке.'
			)
		)
	);
	
	$Form->elements(
		array('name' => 'Записи блога', 'id' => 'posts'),	// section
		array(
			'post_content' => array(
				'type' => 'select', 'label' => 'Содержание',
				'info' => 'На главной странице, в архивах и т.п. показывать полное содержание записей или анонс?',
				'attribs' => array('options' => array('' => 'Без содержания', 'content' => 'Полное содержание', 'excerpt' => 'Анонс'))
			),
			'post_meta' => array(
				'type' => 'checkbox', 'label' => 'Мета-информация' , 'value' => 'on',
				'info' => 'Показывать информацию о рубриках, метках, дате и т.п. для архивов, главной, результатов поиска?'
			),
			'post_fullmeta' => array(
				'type' => 'checkbox', 'label' => 'Подробная мета-информация', 'value' => 'on',
				'info' => 'Показывать подробную мета-информацию под каждой записью? Она не показывается в списках, только на странице с самой записью.',
			),
			'post_img_resize' => array(
				'type' => 'checkbox', 'label' => 'Автоматический ресайзинг картинок', 'value' => 'on',
				'info' => 'Попытаться автоматически изменять размер картинок, чтобы они вписывались в дизайн?',
			),
			'comment_snippets' => array(
				'type' => 'checkbox', 'label' => 'Комментарии' , 'value' => 'on',
				'info' => 'Показывать последние комментарии как небольшие отрывки после каждой записи в архивах, на главной и т.п? В самой статье комментарии будут показаны полностью.'
			),
		)
	);

	$Form->elements(
		array('name' => 'Стили', 'id' => 'styles'),	// section
		array(
			'css_enable' => array(
				'type' => 'checkbox', 'label' => 'Включить пользовательские стили', 'value' => 'on',
				'info' => 'Хотите изменить стили темы?',
			),
			'css_bodycolor' => array(
				'type' => 'text', 'label' => 'Фон страницы',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_headercolor' => array(
				'type' => 'text', 'label' => 'Фон шапки сайта',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_sidebarcolor' => array(
				'type' => 'text', 'label' => 'Цвет фона бокового меню',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_sidebarwidgetcolor' => array(
				'type' => 'text', 'label' => 'Цвет фона области виджетов бокового меню',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_footerbarcolor' => array(
				'type' => 'text', 'label' => 'Цвет фона нижней части сайта',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_footerwidgetcolor' => array(
				'type' => 'text', 'label' => 'Цвет фона области виджетов в нижней части сайта',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_textcolor' => array(
				'type' => 'text', 'label' => 'Цвет текста',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_linkcolor' => array(
				'type' => 'text', 'label' => 'Цвет ссылки',  'value' => '',
				'info' => 'Hex-код, например: #CC0000.'
			),
			'css_append' => array(
				'type' => 'textarea', 'label' => 'Другие CSS-стили',
				'info' => 'Вы можете также указать свои стили, вставив код здесь.',
			)
		)
	);

$Form->elements(
		array('name' => 'Помощь', 'id' => 'help',
			'info' => '
				<ul class="tips">
					<li class="video">
						<a href="#" class="button" id="bt_ecovideo">Смотрите '.IDE_NAME.' video</a>
						<div id="ecovideo" title="'.IDE_CODE.'"> </div>
					</li>
					<li><strong>Виджеты</strong><br />
						Не забывайте добавить <a href="widgets.php">виджеты</a> в боковое меню или нижнюю часть сайта. Особенно виджет ecoSocial!</li>
					<li><strong>Нужна помощь?</strong><br />
						Если вам нужна помощь, вы всегда можете прочесть <a href="http://idesigneco.com/docs/'.IDE_CODE.'_documentation">'.IDE_NAME.' документацию</a>.</li>
				</ul>
			'),	// section
		null
	);
?>