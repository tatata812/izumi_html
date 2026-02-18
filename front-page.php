<?php get_header();?>
<main>
	<section class="top-about">
		<div class="top-about__inner inner--l">
			<img class="top-about__img"
				src="<?php echo get_template_directory_uri(); ?>/img/pages/top/about/children.png"
				alt="子どもたち">
			<div class="top-about__contents">
				<h2 class="top-about__title heading--lv2">
					<span class="en">
						<span class="text">ABOUT US</span>
						<img class="icon"
							src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
							alt="葉">
					</span>
					<span class="ja">私たちについて</span>
				</h2>
				<div class="top-about__body">
					<p class="top-about__text">
						大阪府堺市堺区にあるグリーン建設株式会社は、<br>
						1988年の創業以来、公共造園工事を中心に、<br>
						地域の景観と環境づくりに携わってまいりました。
					</p>
					<p class="top-about__text">
						公共工事という<br class="pc-none">厳しい基準を満たす現場で経験を積み重ね、<br>
						「当たり前のことを当たり前に、<br class="pc-none">それ以上の品質を届ける」<br>
						という理念を大切にしています。
					</p>
					<p class="top-about__text">
						これまでに年間約100件に及ぶ工事を手掛け、<br>
						地域に根ざした信頼と実績を築いてきました。
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="top-feature">
		<div class="top-feature__inner inner--m">
			<div class="top-feature__contents">
				<h2 class="top-feature__title heading--lv2">
					<span class="en">
						<span class="text">FEATURE</span>
						<img class="icon"
							src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
							alt="葉">
					</span>
					<span class="ja">グリーン建設の特徴</span>
				</h2>
				<ul class="top-feature__list">
					<li class="top-feature__item">
						<span class="top-feature__number">01</span>
						<span class="top-feature__point">
							公共工事で<br class="pc-none">培った確かな<br>
							品質管理力
						</span>
					</li>
					<li class="top-feature__item">
						<span class="top-feature__number">02</span>
						<span class="top-feature__point">
							自社施工に<br class="pc-none">よる<br>
							責任あるものづくり
						</span>
					</li>
					<li class="top-feature__item">
						<span class="top-feature__number">03</span>
						<span class="top-feature__point">
							安全と環境<br class="pc-none">への配慮
						</span>
					</li>
					<li class="top-feature__item">
						<span class="top-feature__number">04</span>
						<span class="top-feature__point">
							地域密着の<br class="pc-none">信頼と実績
						</span>
					</li>
				</ul>
				<a class="top-feature__button button--lv1"
					href="<?php echo esc_url(home_url('/about/')); ?>">
					<span class="text">私たちについて見る</span>
					<i class="icon bi bi-caret-right-fill"></i>
				</a>
			</div>
			<img class="top-feature__img"
				src="<?php echo get_template_directory_uri(); ?>/img/pages/top/feature/park.png"
				alt="公園">
		</div>
	</section>
	<section class="top-business">
		<div class="top-business__inner inner--l">
			<img class="top-business__img"
				src="<?php echo get_template_directory_uri(); ?>/img/pages/top/business/road.jpg"
				alt="道">
			<div class="top-business__contents">
				<h2 class="top-business__title heading--lv2">
					<span class="en">
						<span class="text">BUSINESS</span>
						<img class="icon"
							src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
							alt="葉">
					</span>
					<span class="ja">事業内容</span>
				</h2>
				<p class="top-business__text">
					公共造園工事を中心に、<br class="pc-none">街の景観や環境を守る仕事を行っています。<br>
					道路や公園の植栽工事・緑地管理・<br class="pc-none">新設工事・整備など、<br>
					人々の生活を彩る緑を育み、<br class="pc-none">守ることが私たちの使命です。
				</p>
				<a class="top-business__button button--lv1"
					href="<?php echo esc_url(home_url('/business/')); ?>">
					<span class="text">事業内容を見る</span>
					<i class="icon bi bi-caret-right-fill"></i>
				</a>
			</div>
		</div>
	</section>
	<?php
        $works_query = new WP_Query([
        'post_type'           => 'works',
        'posts_per_page'      => 3,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
        ]);
?>
	<?php if ($works_query->have_posts()) : ?>
	<section class="top-works">
		<div class="top-works__inner inner--m">
			<div class="top-works__contents">
				<h2 class="top-works__title heading--lv2">
					<span class="en">
						<span class="text">WORKS</span>
						<img class="icon"
							src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
							alt="葉">
					</span>
					<span class="ja">施工実績</span>
				</h2>
				<p class="top-works__text">
					グリーン建設が、<br>
					これまでの施工実績をご紹介します。
				</p>
				<?php if ($works_query->post_count >= 3) : ?>
				<a class="top-works__button button--lv2"
					href="<?php echo esc_url(home_url('/works/')); ?>">
					<span class="text">実績を見る</span>
					<i class="icon bi bi-caret-right-fill"></i>
				</a>
				<?php endif; ?>
			</div>
			<div class="top-works__list">
				<?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
				<article class="top-works__item">
					<a class="top-works__link"
						href="<?php the_permalink(); ?>">
						<?php
                    $after_image = get_field('after_image');
				    ?>
						<div class="top-works__thumbnail thumbnail">
							<?php if ($after_image) : ?>
							<img src="<?php echo esc_url($after_image['sizes']['large']); ?>"
								alt="After｜<?php the_title(); ?>">
							<?php endif; ?>
						</div>
						<h3 class="top-works__headline">
							<?php
				        $title = get_the_title();
				    echo esc_html(mb_strlen($title, 'UTF-8') > 30 ? mb_substr($title, 0, 30, 'UTF-8') . '…' : $title);
				    ?>
						</h3>
					</a>
				</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<section class="top-other">
		<ul class="top-other__list">
			<li class="top-other__item top-other__item--recruit">
				<a class="top-other__link" href="https://saiyo.page/604260#main" target="_blank">
					<div class="top-other__box">
						<div class="top-other__button">
							<h2 class="top-other__title heading--lv2">
								<span class="en">
									<span class="text">RECRUIT</span>
									<img class="icon"
										src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
										alt="葉">
								</span>
								<span class="ja">採用情報</span>
							</h2>
							<img class="top-other__img"
								src="<?php echo get_template_directory_uri(); ?>/img/pages/top/other/arrow.png"
								alt="矢印">
						</div>
					</div>
				</a>
			</li>
			<li class="top-other__item top-other__item--company">
				<a class="top-other__link"
					href="<?php echo esc_url(home_url('/company/')); ?>">
					<div class="top-other__box">
						<div class="top-other__button">
							<h2 class="top-other__title heading--lv2">
								<span class="en">
									<span class="text">COMPANY</span>
									<img class="icon"
										src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
										alt="葉">
								</span>
								<span class="ja">会社案内</span>
							</h2>
							<img class="top-other__img"
								src="<?php echo get_template_directory_uri(); ?>/img/pages/top/other/arrow.png"
								alt="矢印">
						</div>
					</div>
				</a>
			</li>
		</ul>
	</section>
	<?php
        $column_query = new WP_Query([
        'post_type'           => 'column',
        'posts_per_page'      => 3,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
        ]);
?>
	<?php if ($column_query->have_posts()) : ?>
	<section class="top-column">
		<div class="top-column__inner inner--m">
			<h2 class="top-column__title heading--lv2">
				<span class="en">
					<span class="text">COLUMN</span>
					<img class="icon"
						src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
						alt="葉">
				</span>
				<span class="ja">お役立ち情報</span>
			</h2>
			<div class="top-column__list">
				<?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
				<article class="top-column__item">
					<a class="top-column__link"
						href="<?php the_permalink(); ?>">
						<div class="top-column__thumbnail thumbnail">
							<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
						</div>
						<time class="top-column__time"
							datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
						<h3 class="top-column__headline">
							<?php
                        $title = get_the_title();
				    echo esc_html(mb_strlen($title, 'UTF-8') > 40 ? mb_substr($title, 0, 40, 'UTF-8') . '…' : $title);
				    ?>
						</h3>
						<p class="top-column__text">
							<?php echo esc_html(wp_trim_words(get_the_excerpt(), 55, '...')); ?>
						</p>
						<?php
				            $terms = get_the_terms(get_the_ID(), 'column-tag');
				    ?>
						<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
						<ul class="top-column__tags">
							<?php foreach ($terms as $term) : ?>
							<li class="top-column__tag">
								<?php echo esc_html($term->name); ?>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</a>
				</article>
				<?php endwhile; ?>
			</div>
			<?php if ($column_query->post_count >= 3) : ?>
			<a class="top-column__button button--lv1"
				href="<?php echo esc_url(home_url('/column/')); ?>">
				<span class="text">一覧を見る</span>
				<i class="icon bi bi-caret-right-fill"></i>
			</a>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>
	<?php
        $news_query = new WP_Query([
        'post_type'           => 'news',
        'posts_per_page'      => 3,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
        ]);
?>
	<?php if ($news_query->have_posts()) : ?>
	<section class="top-news">
		<div class="top-news__inner inner--s">
			<h2 class="top-news__title heading--lv2">
				<span class="en">
					<span class="text">NEWS</span>
					<img class="icon"
						src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png"
						alt="葉">
				</span>
				<span class="ja">お知らせ</span>
			</h2>
			<div class="top-news__list">
				<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
				<article class="top-news__item">
					<a class="top-news__link"
						href="<?php the_permalink(); ?>">
						<time class="top-news__time"
							datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
						<div class="top-news__wrapper">
							<h3 class="top-news__headline">
								<?php
                            $title = get_the_title();
				    echo esc_html(mb_strlen($title, 'UTF-8') > 40 ? mb_substr($title, 0, 40, 'UTF-8') . '…' : $title);
				    ?>
							</h3>
							<?php
				                $terms = get_the_terms(get_the_ID(), 'news-tag');
				    ?>
							<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
							<ul class="top-news__tags">
								<?php foreach ($terms as $term) : ?>
								<li class="top-news__tag">
									<?php echo esc_html($term->name); ?>
								</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
					</a>
				</article>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php if ($news_query->post_count >= 3) : ?>
			<a class="top-news__button button--lv2"
				href="<?php echo esc_url(home_url('/news/')); ?>">
				<span class="text">一覧を見る</span>
				<i class="icon bi bi-caret-right-fill"></i>
			</a>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>
</main>
<?php get_footer();?>