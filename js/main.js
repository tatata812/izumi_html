$(function () {

  /* =================================
  ヘッダー
   ================================= */
  const $body = $("body");
  const $hamburger = $("#jsHamburger");
  const $drawer = $("#jsDrawer");
  const $overlay = $("#jsDrawerOverlay");
  const $close = $("#jsDrawerClose");

  function openDrawer() {
    $drawer.addClass("is-open").attr("aria-hidden", "false");
    $overlay.addClass("is-open");
    $body.addClass("is-drawer-open");
    $hamburger.attr("aria-expanded", "true");
  }

  function closeDrawer() {
    $drawer.removeClass("is-open").attr("aria-hidden", "true");
    $overlay.removeClass("is-open");
    $body.removeClass("is-drawer-open");
    $hamburger.attr("aria-expanded", "false");
  }

  $hamburger.on("click", function () {
    if ($drawer.hasClass("is-open")) {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  $close.on("click", closeDrawer);
  $overlay.on("click", closeDrawer);

  // ドロワー内リンク押したら閉じる
  $drawer.on("click", "a", function () {
    closeDrawer();
  });

  // Escで閉じる
  $(document).on("keydown", function (e) {
    if (e.key === "Escape") closeDrawer();
  });

  // 念のため：PCに戻ったら閉じる（tab以上になった時）
  $(window).on("resize", function () {
    // ここはmixinのブレイクポイントに合わせて数値調整してな
    if (window.innerWidth > 900) closeDrawer();
  });

  /* =================================
  ページトップボタン
 ================================= */

  const $btn = $("#jsPageTop");

  function togglePageTop() {
    if ($(window).scrollTop() > 200) {
      $btn.addClass("is-show");
    } else {
      $btn.removeClass("is-show");
    }
  }

  togglePageTop();
  $(window).on("scroll", togglePageTop);

  $btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, 400);
  });


  /* =================================
  ページ内リンク　ヘッダーの高さ考慮
 ================================= */
  var $header = $('.header');

  function getHeaderH() {
    if (!$header.length) return 0;
    return $header.outerHeight() || 0;
  }

  function scrollToHash(hash, speed) {
    if (!hash || hash === '#') return;

    var $target = $(hash);
    if (!$target.length) return;

    var targetTop = $target.offset().top - getHeaderH();

    $('html, body').stop().animate({
        scrollTop: targetTop
      },
      typeof speed === 'number' ? speed : 400
    );
  }

  $(document).on('click', 'a[href^="#"]', function (e) {
    var href = $(this).attr('href');
    if (!href || href === '#') return;
    if (!$(href).length) return;

    e.preventDefault();

    if (history.pushState) {
      history.pushState(null, null, href);
    } else {
      location.hash = href;
    }

    scrollToHash(href, 400);
  });

  $(window).on('load', function () {
    if (location.hash) {
      scrollToHash(location.hash, 0);
    }
  });


  /* =================================
  アニメーション　フェードイン
 ================================= */
  $(window).scroll(function () {
    const windowHeight = $(window).height(); //ウィンドウの高さ
    const scroll = $(window).scrollTop(); //スクロール量

    $(".fade-in-js").each(function () {
      const targetPosition = $(this).offset().top; //要素の上からの距離
      if (scroll > targetPosition - windowHeight + 100) {
        $(this).addClass("action");
      }
    });
  });

  /* =================================
  トップページslick
 ================================= */

  $('.js-slick').slick({
    centerMode: true,
    centerPadding: '20%', // ←左右の見切れ量（PC）
    slidesToShow: 1,
    infinite: true,
    arrows: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 700,

    // ★ここ追加（画像矢印）
    prevArrow: `
    <button class="slick-arrow slick-prev" type="button">
      <img src="./img/common/arrow-prev.png" alt="前へ">
    </button>
  `,
    nextArrow: `
    <button class="slick-arrow slick-next" type="button">
      <img src="./img/common/arrow-next.png" alt="次へ">
    </button>
  `,

    responsive: [{
        breakpoint: 1024,
        settings: {
          centerPadding: '120px'
        }
      },
      {
        breakpoint: 768,
        settings: {
          centerPadding: '40px',
          arrows: false,
        }
      }
    ]
  });


})