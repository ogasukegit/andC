<?php
  $displayOnPages = [
    'product',
  ];
?>

<?php if (in_array($pageName, $displayOnPages)): ?>
  <div class="ns-contact-widget" id="ns-contact-widget">
    <span class="close-button" id="close-button"></span>
    <p>ご注文・<br/>お問い合わせ</p>
    <a href="/contact" class="link-button">一般のお客様</a>
    <a href="/inquiry" class="link-button">法人のお客様</a>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      // close widget
      function closeContactWidget() {
        $('#ns-contact-widget').remove();
      }
  
      $('#close-button').on('click', closeContactWidget);
    });
  </script>
<?php endif ?>
