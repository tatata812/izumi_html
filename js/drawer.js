document.addEventListener('DOMContentLoaded', function () {
    const drawerOn = document.querySelector('.drawer-on');
    const openButton = document.querySelector('.drawer-off__button');
    const drawerLinks = document.querySelectorAll('.drawer-on a');
    const line = document.querySelector('.drawer-off__line');
    const bars = line ? line.querySelectorAll('span') : [];
    if (!drawerOn || !openButton) return;
    // 線にアニメーションを仕込む（CSSをいじらず JS で付与）
    bars.forEach(bar => {
        bar.style.transition = 'transform 0.3s ease';
        bar.style.transformOrigin = 'center'; // なくてもOKだが一応
    });
    // ハンバーガー → クロス
    const makeCross = () => {
        if (bars.length < 2) return;
        bars[0].style.transform = 'translateY(3px) rotate(20deg)';
        bars[1].style.transform = 'translateY(-3px) rotate(-20deg)';
    };
    // クロス → 元の2本線
    const resetBars = () => {
        bars.forEach(bar => {
            bar.style.transform = '';
        });
    };
    const openDrawer = () => {
        drawerOn.classList.add('is-open');
        makeCross();
        // document.body.classList.add('body-fixed'); // 背景固定したいなら使う
    };
    const closeDrawer = () => {
        drawerOn.classList.remove('is-open');
        resetBars();
        // document.body.classList.remove('body-fixed');
    };
    // 開くボタン（トグル）
    openButton.addEventListener('click', function () {
        if (drawerOn.classList.contains('is-open')) {
            closeDrawer();
        } else {
            openDrawer();
        }
    });
    // ドロワー内のリンクを押したら閉じる
    drawerLinks.forEach(link => {
        link.addEventListener('click', function () {
            closeDrawer();
        });
    });
});
