<?php include '../shared/head.php'; ?>
<div class="ns-inquiry-confirm page">
  <h1 class="h1">業務用（法人の方）<br/>ご注文・お問い合わせ</h1>
  <?php $breadcrumb = [
    [
      "link" => "/inquiry",
      "text" => "業務用（法人の方）ご注文・お問い合わせ",
    ],
    [
      "link" => false,
      "text" => "入力内容確認",
    ],
  ]; ?>
  <?php include '../shared/breadcrumb.php'; ?>

  <div class="current-status">current-status</div>

  <a href="inquiry-complete.php">confirm</a>
</div>
<?php include '../shared/foot.php'; ?>
