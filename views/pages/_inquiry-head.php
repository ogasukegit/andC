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
  <?php include('../shared/navigation.php'); ?>
  <h1 class="blue-header">法人のお客様<br/>お問い合わせフォーム</h1>
  <div class="layout">
    <?php include '../shared/breadcrumb.php'; ?>
    <div class="form-status">
      <?= formStatusLink(1, $step, "入力"); ?>
      <?= formStatusLink(2, $step, "入力内容確認"); ?>
      <?= formStatusLink(3, $step, "送信完了"); ?>
    </div>
  </div>
