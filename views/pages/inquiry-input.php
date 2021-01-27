<?php
  $step = 1;

  $breadcrumb = [
    [
      "link" => false,
      "text" => "業務用（法人の方）ご注文・お問い合わせ",
    ],
  ];
?>
<?php include './_inquiry-head.php'; ?>
  <div class="layout">
    <h2 class="inquiry-h2">入力内容</h2>

    <!-- change post destination to "/inquiry/confirm" -->
    <form class="form" method="post" action="inquiry-confirm.php">
      <p class="form__top-text"><span class="required"></span>は必須項目となります。必ずご記入ください。</p>
      <div class="form__row">
        <div class="form__row-left">お問い合わせ項目</div>
        <div class="form__row-right">
          <label class="clickable"><input type="radio" name="inquiry-type" value="お問い合わせ">お問い合わせ</label>
          <span class="spacer"></span>
          <label class="clickable"><input type="radio" name="inquiry-type" value="その他">その他</label>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left">商品名</div>
        <div class="form__row-right">
          <input type="text" name="product-name" class="form__text-input">
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">氏名</div>
        <div class="form__row-right">
          <input type="text" name="name-kanji" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">氏名 よみがな</div>
        <div class="form__row-right">
          <input type="text" name="name-kana" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">会社or団体名</div>
        <div class="form__row-right">
          <input type="text" name="organization-name" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">部署名</div>
        <div class="form__row-right">
          <input type="text" name="department-name" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">郵便番号</div>
        <div class="form__row-right">
          <input type="number" name="postal-code-1" minlength="3" maxlength="3" class="form__text-input form__text-input--postal" required>
          <span class="spacer">-</span>
          <input type="number" name="postal-code-2" minlength="4" maxlength="4" class="form__text-input form__text-input--postal" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">住所</div>
        <div class="form__row-right">
          <input type="text" name="address" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">お電話番号</div>
        <div class="form__row-right">
          <input type="tel" name="phone" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left required">メールアドレス</div>
        <div class="form__row-right">
          <input type="email" name="email" class="form__text-input" required>
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left">FAX</div>
        <div class="form__row-right">
          <input type="tel" name="fax" class="form__text-input">
        </div>
      </div>
      <div class="form__row">
        <div class="form__row-left">お問い合わせ内容</div>
        <div class="form__row-right">
          <textarea name="message" cols="30" rows="10" class="form__text-input"></textarea>
        </div>
      </div>
      <h2 class="inquiry-h2">個人情報の取り扱い</h2>
      <p>個人情報の取り扱いについて、詳しくは弊社の<a href="https://www.imcjpn.co.jp/policy/">プライバシーポリシー</a>をご覧ください。</p>
      <div class="form__row">
        <div class="form__row-left">個人情報の取り扱い</div>
        <div class="form__row-right">
          <label class="clickable"><input type="checkbox" id="personal-info" required>&nbsp;同意します</label>
        </div>
      </div>
      <div class="button-wrapper">
        <input class="button button--blue" type="submit" value="入力内容確認">
      </div>
    </form>

  </div>
<?php include './_inquiry-foot.php'; ?>
