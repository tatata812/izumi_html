<div class="drawer pc-none">
    <div class="drawer-off">
        <button class="drawer-off__button">
            <div class="drawer-off__inner">
                <div class="drawer-off__wrapper">
                    <span class="drawer-off__line">
                        <span></span>
                        <span></span>
                    </span>
                    <span class="drawer-off__title">Menu</span>
                </div>
            </div>
        </button>
    </div>
    <div class="drawer-on">
        <div class="drawer-on__inner">
            <a class="drawer-on__logo" href="<?php echo esc_url( home_url('/') ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/layout/header/logo.png" alt="グリーン建設株式会社">
            </a>
            <nav class="drawer-on__nav">
                <ul class="drawer-on__list">
                    <li class="drawer-on__item"><a href="<?php echo esc_url( home_url('/') ); ?>">トップページ</a></li>
                    <li class="drawer-on__item"><a href="<?php echo esc_url( home_url('/about/') ); ?>">私たちについて</a></li>
                    <li class="drawer-on__item"><a href="<?php echo esc_url( home_url('/business/') ); ?>">事業内容</a></li>
                    <li class="drawer-on__item"><a href="<?php echo esc_url( home_url('/works/') ); ?>">施工実績</a></li>
                    <li class="drawer-on__item"><a href="https://saiyo.page/604260#main" target="_blank">採用情報</a></li>
                    <li class="drawer-on__item"><a href="<?php echo esc_url( home_url('/company/') ); ?>">会社案内</a></li>
                </ul>
                <ul class="drawer-on__links">
                    <li class="drawer-on__link"><a href="<?php echo esc_url( home_url('/news/') ); ?>">お知らせ</a></li>
                    <li class="drawer-on__link"><a href="<?php echo esc_url( home_url('/column/') ); ?>">お役立ち情報</a></li>
                    <li class="drawer-on__link"><a href="<?php echo esc_url( home_url('/privacy/') ); ?>">プライバシーポリシー</a></li>
                    <li class="drawer-on__link"><a href="<?php echo esc_url( home_url('/site/') ); ?>">サイトマップ</a></li>
                </ul>
            </nav>
            <a class="drawer-mail" href="<?php echo esc_url( home_url('/contact/') ); ?>">
                <i class="bi bi-envelope-fill"></i>
                <span>メールでお問い合わせ</span>
            </a>
            <div class="drawer-tel">
                <a class="drawer-tel__link" href="tel:072-246-9945">
                    <i class="bi bi-telephone-fill"></i>
                    <span>072-246-9945</span>
                </a>
                <span class="drawer-tel__caption">※勧誘や営業電話はお控えください。</span>
            </div>
        </div>
    </div>
</div>