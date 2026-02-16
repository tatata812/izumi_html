<?php get_header();?>
	<main>
		<section class="column-archive">
			<div class="column-archive__inner inner--s">
				<h2 class="column-archive__title heading--lv2">
					<span class="en">
						<span class="text">COLUMN LIST</span>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png" alt="葉">
					</span>
					<span class="ja">お役立ち情報 一覧</span>
				</h2>
				<div class="column-archive__list">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="column-archive__item">
						<a class="column-archive__link" href="<?php the_permalink(); ?>">
							<div class="column-archive__thumbnail thumbnail">
								<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
								<?php endif; ?>
							</div>
							<time class="column-archive__time" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
							<h3 class="column-archive__headline">
								<?php
								$title = get_the_title();
								if (mb_strlen($title, 'UTF-8') > 35) {
								echo mb_substr($title, 0, 35, 'UTF-8') . '…';
								} else {
								echo $title;
								}
								?>
							</h3>
							<p class="column-archive__text">
								<?php echo esc_html(wp_trim_words(get_the_excerpt(), 45, '...')); ?>
							</p>
							<?php
							$terms = get_the_terms(get_the_ID(), 'column-tag');
							?>
							<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
							<ul class="column-archive__tags">
								<?php foreach ($terms as $term) : ?>
								<li class="column-archive__tag"><?php echo esc_html($term->name); ?></li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
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