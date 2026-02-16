<?php get_header();?>
  <main>
    <section class="site-map">
      <div class="site-map__inner inner--s">
        <h2 class="site-map__title">サイトマップ一覧</h2>
        <ul class="site-map__list">
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>トップページ</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/about/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>私たちについて</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/business/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>事業内容</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/works/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>施工実績</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/company/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>会社案内</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/news/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>お知らせ</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/column/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>お役立ち情報</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>お問い合わせ</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/privacy/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>プライバシーポリシー</span>
            </a>
          </li>
          <li class="site-map__item">
            <a href="<?php echo esc_url( home_url('/site/') ); ?>">
              <i class="bi bi-caret-right-fill"></i>
              <span>サイトマップ</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <?php get_footer();?>