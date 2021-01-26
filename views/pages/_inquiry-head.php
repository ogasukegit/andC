<?php
  function formStatusLink($thisStep, $activeStep, $bottomText) {
    return '
      <div class="form-status__step'.($thisStep == $activeStep ? ' form-status__step--active' : '').'">
        <span class="top-text">ステップ'.$thisStep.'</span>
        <span class="bottom-text">'.$bottomText.'</span>
      </div>
    ';
  }
?>

<?php include '../shared/head.php'; ?>
<div class="ns-inquiry page">
  <h1 class="h1">業務用（法人の方）<br/>ご注文・お問い合わせ</h1>
  <?php include '../shared/breadcrumb.php'; ?>
  <div class="layout">
    <div class="form-status">
      <?= formStatusLink(1, $step, "入力"); ?>
      <?= formStatusLink(2, $step, "入力内容確認"); ?>
      <?= formStatusLink(3, $step, "送信完了"); ?>
    </div>
  </div>
