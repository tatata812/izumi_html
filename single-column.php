<?php get_header();?>
	<main>
		<section class="column-single">
			<div class="column-single__inner inner--s">
				<h2 class="column-single__title"><?php the_title(); ?></h2>
				<div class="column-single__wrapper">
					<?php
					$terms = get_the_terms(get_the_ID(), 'column-tag');
					?>
					<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
					<ul class="column-single__tags">
						<?php foreach ($terms as $term) : ?>
						<li class="column-single__tag"><?php echo esc_html($term->name); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<time class="column-single__time" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
				</div>
				<div class="column-single__body wysiwyg">
					<?php the_content(); ?>
				</div>
				<nav class="navigation">
					<ul class="navigation__list">
						<li class="navigation__item navigation__item--prev">
							<?php
							$prev_post = get_previous_post();
							if ($prev_post) :
							?>
							<a class="navigation__link" href="<?php echo get_permalink($prev_post->ID); ?>">« 前へ</a>
							<?php endif; ?>
						</li>
						<li class="navigation__item navigation__item--archive">
							<a class="navigation__link" href="<?php echo esc_url( home_url('/news/') ); ?>">一覧</a>
						</li>
						<li class="navigation__item navigation__item--next">
							<?php
							$next_post = get_next_post();
							if ($next_post) :
							?>
							<a class="navigation__link" href="<?php echo get_permalink($next_post->ID); ?>">次へ »</a>
							<?php endif; ?>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</main>
	<?php get_footer();?>