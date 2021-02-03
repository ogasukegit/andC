<div class="ns-footer" id="footer">
  <div class="layout">
    <div class="footer-wrapper">
      <div class="footer-left">
        <p class="footer-left__text">庭と家との調和</p>
        <a href="/"><img class="footer-left__logo" src="<?= $imgPath ?>/shared/logo_lg.png" alt="andC logo"></a>
      </div>
      <div class="footer-right">
        <div class="footer-menu">
          <a class="footer-menu__link" href="/">TOP</a>
          <a class="footer-menu__link" href="products">PRODUCTS</a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/about/profile.html" target="_blank">私たちについて<img class="external-link" src="<?= $imgPath ?>/shared/new-window.png"></a>
          <a class="footer-menu__link" href="https://www.imcjpn.co.jp/policy/" target="_blank">プライバシーポリシー<img class="external-link" src="<?= $imgPath ?>/shared/new-window.png"></a>
          <a class="footer-menu__link" href="/inquiry">商品注文・お問い合わせ</a>
        </div>
      </div>
    </div>
    <p class="copyright font-roboto">Copyright © Iwatani Materials Corp</p>
  </div>
  <div class="scroll-to-top-button" id="scroll-to-top-button"></div>
  <script type="text/javascript">
    // scroll to top
    const scrollToTopButton = document.getElementById('scroll-to-top-button');
    const scrollToTopAnchor = document.getElementById('scroll-to-top-anchor');

    const footer = document.getElementById('footer');

    function scrollToTop() {
      scrollToTopAnchor.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }

    scrollToTopButton.addEventListener('click', scrollToTop);


    document.addEventListener('scroll', () => {
      checkOffset();
    })

    function checkOffset() {
      const buttonRect = scrollToTopButton.getBoundingClientRect();
      const footerRect = footer.getBoundingClientRect();
      if (buttonRect.top + buttonRect.height >= footerRect.top) {
        scrollToTopButton.style.position = 'absolute';
        scrollToTopButton.style.top = `${0 - buttonRect.height}px`;
      }
      if (document.body.scrollTop + window.innerHeight < footerRect.top) {
        scrollToTopButton.style.position = 'fixed';
        scrollToTopButton.style.top = 'auto';
      }
    }
  </script>
</div>