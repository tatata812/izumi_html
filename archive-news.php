<?php get_header();?>
	<main>
		<section class="news-archive">
			<div class="news-archive__inner inner--s">
				<h2 class="news-archive__title heading--lv2">
					<span class="en">
						<span class="text">NEWS LIST</span>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png" alt="葉">
					</span>
					<span class="ja">お知らせ 一覧</span>
				</h2>
				<div class="news-archive__list">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="news-archive__item">
						<a class="news-archive__link" href="<?php the_permalink(); ?>">
							<div class="news-archive__thumbnail thumbnail">
								<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
								<?php endif; ?>
							</div>
							<div class="news-archive__contents">
								<div class="news-archive__wrapper">
									<time class="news-archive__time" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
									<?php
									$terms = get_the_terms(get_the_ID(), 'news-tag');
									?>
									<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
									<ul class="news-archive__tags">
										<?php foreach ($terms as $term) : ?>
										<li class="news-archive__tag"><?php echo esc_html($term->name); ?></li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>
								</div>
								<h3 class="news-archive__headline">
								<?php
								$title = get_the_title();
								if (mb_strlen($title, 'UTF-8') > 45) {
								echo mb_substr($title, 0, 45, 'UTF-8') . '…';
								} else {
								echo $title;
								}
								?>
								</h3>
								<p class="news-archive__text"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 120, '...')); ?></p>
							</div>
						</a>
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<p>現在、投稿がありません。</p>
					<?php endif; ?>
				</div>
				<nav class="pagination">
					<?php
					echo paginate_links([
						'total'     => max(1, $wp_query->max_num_pages),
						'current'   => max(1, get_query_var('paged')),
						'mid_size'  => 1,
						'end_size'  => 1,
						'prev_text' => '«',
						'next_text' => '»',
						'type'      => 'list',
					]);
					?>
				</nav>
			</div>
		</section>
	</main>
	<?php get_footer();?>