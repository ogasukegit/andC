<?php include '../shared/head.php'; ?>
<div class="ns-inquiry page">
  <div class="layout">
    <h1 class="h1">業務用（法人の方）<br/>ご注文・お問い合わせ</h1>
    <?php
      $breadcrumb = [
        [
          "link" => false,
          "text" => "業務用（法人の方）ご注文・お問い合わせ",
        ],
      ];
    ?>
    <?php include '../shared/breadcrumb.php'; ?>
    <div class="form-status">
      <div class="form-status__step form-status__step--active">ステップ1<br>入力</div>
      <div class="form-status__step">ステップ2<br>入力内容確認</div>
      <div class="form-status__step">ステップ3<br>送信完了</div>
    </div>
    <h2 class="h2">入力内容</h2>

    <a href="inquiry-confirm.php">next</a>
  </div>
</div>
<?php include '../shared/foot.php'; ?>
