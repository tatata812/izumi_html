<?php
	/*
	Template Name: お問い合わせ（完了）
	*/
?>

<?php get_header();?>
	<main>
		<section class="complete">
			<div class="complete__inner inner--s">
				<h2 class="complete__title heading--lv2">
					<span class="en">
						<span class="text">COMPLETE</span>
						<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/components/title/leaf.png" alt="葉">
					</span>
					<span class="ja">お問い合わせが完了いたしました</span>
				</h2>
				<p class="complete__text">
					この度はお問い合わせいただき、<br class="pc-none">誠にありがとうございます。<br>
					ご入力いただいた内容を確認のうえ、<br class="pc-none">担当より改めてご連絡いたします。<br>
					万が一、数日経っても返信がない場合は、<br>
					お手数ですが再度お問い合わせいただくか、<br class="pc-none">お電話にてご連絡ください。
				</p>
				<a class="complete__link" href="<?php echo esc_url( home_url('/') ); ?>">トップページに戻る</a>
			</div>
		</section>
	</main>
	<?php get_footer();?>


