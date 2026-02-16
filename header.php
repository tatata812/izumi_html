<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google Tag Manager
	============================================ -->

	<!-- meta情報
	============================================ -->
	<title>
		<?php
		if ( is_front_page() || is_home() ) {
			bloginfo('name');
		} else {
			wp_title('｜', true, 'right');
			bloginfo('name');
		}
		?>
	</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="keyword" content="グリーン建設株式会社, 大阪府堺市, 公共造園工事, 造園工事, 公共工事">

	<!-- IE対応（標準モード）
	============================================ -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- webフォント
	============================================ -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- Josefin Sans -->
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<!-- Zen Kaku Gothic New -->
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	
	<!-- Webアイコン
	============================================ -->
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

	<!-- ViewPort
	============================================ -->
	<meta name="viewport" content="width=device-width">

	<!-- css
	============================================ -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

	<!-- OGP
	============================================ -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo get_template_directory_uri(); ?>/ogp.jpg">
	<meta property="og:image" content="" sizes="1200×630">
	<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:locale" content="ja_JP">

<!-- WordPress・headerの初期設定
============================================ -->
<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="header-bar">
			<a class="header-bar__logo" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/logo.png" alt="グリーン建設株式会社"></a>
			<nav class="header-bar__nav">
				<ul class="header-bar__list">
					<li class="header-bar__item"><a href="<?php echo esc_url( home_url('/') ); ?>">トップページ</a></li>
					<li class="header-bar__item"><a href="<?php echo esc_url( home_url('/about/') ); ?>">私たちについて</a></li>
					<li class="header-bar__item"><a href="<?php echo esc_url( home_url('/business/') ); ?>">事業内容</a></li>
					<li class="header-bar__item"><a href="<?php echo esc_url( home_url('/works/') ); ?>">施工実績</a></li>
					<li class="header-bar__item header-bar__item--external">
						<a href="https://saiyo.page/604260#main" target="_blank">
							<i class="icon bi bi-box-arrow-up-right"></i>
							<span class="text">採用情報</span>
						</a>
					</li>
					<li class="header-bar__item"><a href="<?php echo esc_url( home_url('/company/') ); ?>">会社案内</a></li>
				</ul>
				<a class="header-bar__button" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a>
			</nav>
		</div>
		<div class="header-visual">
			<?php if ( is_front_page() ) : ?>
			<h1 class="header-visual__title header-visual__title--top"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--top.png" alt="確かな技術で、緑と安心を守る"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<video class="header-visual__video" src="<?php echo get_template_directory_uri(); ?>/video/visual--top.mp4" autoplay muted loop playsinline></video>
			<?php elseif ( is_page('about') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--about"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--about.png" alt="私たちについて"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--about.jpg"></img>
			<?php elseif ( is_page('business') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--business"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--business.png" alt="事業内容"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--business.jpg"></img>
			<?php elseif ( is_post_type_archive('works') || is_singular('works')  ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--works"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--works.png" alt="施工実績"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--works.jpg"></img>
			<?php elseif ( is_page('company') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--company"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--company.png" alt="会社案内"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--company.jpg"></img>
			<?php elseif ( is_post_type_archive('news') || is_singular('news')  ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--news"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--news.png" alt="お知らせ"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--news.jpg"></img>
			<?php elseif ( is_post_type_archive('column') || is_singular('column')  ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--column"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--column.png" alt="お役立ち情報"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--column.jpg"></img>
			<?php elseif ( is_page('contact') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--contact.png" alt="お問い合わせ"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--contact.jpg"></img>
			<?php elseif ( is_page('complete') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub header-visual__title--complete"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--complete.png" alt="お問い合わせ完了"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--complete.jpg"></img>
			<?php elseif ( is_page('privacy') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--privacy.png" alt="プライバシーポリシー"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--privacy.jpg"></img>
			<?php elseif ( is_page('site') ) : ?>
			<h1 class="header-visual__title header-visual__title--sub"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--site.png" alt="サイトマップ"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--site.jpg"></img>
			<?php elseif ( is_404() ) : ?>
			<h1 class="header-visual__title header-visual__title--sub"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/copy--notfound.png" alt="このページは存在しません"></h1>
			<span class="header-visual__scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/scroll.png" alt="scroll"></span>
			<img class="header-visual__img" src="<?php echo get_template_directory_uri(); ?>/img/layout/header/visual--notfound.jpg"></img>
			<?php endif; ?>
		</div>
		<?php get_template_part('inc/template-parts/drawer'); ?>
		<?php get_template_part('inc/template-parts/breadcrumb'); ?>
	</header>