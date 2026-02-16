<?php get_header();?>
	<main>
		<section class="contact-form">
			<div class="contact-form__inner inner--s">
				<h2 class="contact-form__title heading--lv2">
					<span class="en">
						<span class="text">CONTACT FORM</span>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png" alt="葉">
					</span>
					<span class="ja">お問い合わせフォーム</span>
				</h2>
				<?php echo do_shortcode( '[mwform_formkey key="39"]' ); ?>
			</div>
		</section>
	</main>
	<?php get_footer();?>


