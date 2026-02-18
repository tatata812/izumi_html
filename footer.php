	<footer class="footer">
		<div class="footer__inner inner--s">
			<div class="footer-action">
				<h2 class="footer-action__title heading--lv2">
					<span class="en">
						<span class="text">CONTACT</span>
						<img class="icon"
							src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
							alt="葉">
					</span>
					<span class="ja">お問い合わせ</span>
				</h2>
				<div class="footer-action__box">
					<p class="footer-action__text">まずはお気軽にお問い合わせください！</p>
					<div class="footer-action__wrapper">
						<div class="footer-action__tel">
							<a class="footer-action__number" href="tel:072-246-9945"><span>TEL：</span>072-246-9945</a>
							<span class="footer-action__caption">※勧誘や営業電話はお控えください。</span>
						</div>
						<a class="footer-action__button button--lv1"
							href="<?php echo esc_url(home_url('/contact/')); ?>">
							<span class="text">メールでお問い合わせ</span>
							<i class="icon bi bi-caret-right-fill"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="footer-bar">
				<div class="footer-bar__box">
					<a class="footer-bar__logo" href=""><img
							src="<?php echo get_template_directory_uri(); ?>/img/layout/footer/logo.png"
							alt="グリーン建設株式会社"></a>
					<nav class="footer-bar__nav">
						<ul class="footer-bar__lists">
							<li class="footer-bar__row">
								<ul class="footer-bar__list">
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>
									</li>
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
									</li>
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/business/')); ?>">事業内容</a>
									</li>
								</ul>
							</li>
							<li class="footer-bar__row">
								<ul class="footer-bar__list">
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/works/')); ?>">施工実績</a>
									</li>
									<li class="footer-bar__item"><a href="https://saiyo.page/604260"
											target="_blank">採用情報</a></li>
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/company/')); ?>">会社案内</a>
									</li>
								</ul>
							</li>
							<li class="footer-bar__row">
								<ul class="footer-bar__list">
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/column/')); ?>">お役立ち情報</a>
									</li>
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a>
									</li>
									<li class="footer-bar__item"><a
											href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<div class="footer-bar__other">
					<div class="footer-bar__copyright"><small>Copyright © 2026<a
								href="<?php echo esc_url(home_url('/')); ?>">グリーン建設株式会社</a>
							All rights Reserved.</small></div>
					<ul class="footer-bar__links">
						<li class="footer-bar__link"><a
								href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a>
						</li>
						<li class="footer-bar__link"><a
								href="<?php echo esc_url(home_url('/site/')); ?>">サイトマップ</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- WordPress・footerの初期設定
============================================ -->
	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/drawer.js">
	</script>
	</body>

	</html>