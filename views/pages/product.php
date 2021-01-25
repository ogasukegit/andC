<?php
  $products = [
    [
      "text" => "室外機カバー",
      "link" => "/products/product1",
    ],
    [
      "text" => "商品名を追加",
      "link" => "/products/product2",
    ],
    [
      "text" => "商品名を追加",
      "link" => "/products/product3",
    ],
    [
      "text" => "商品名を追加",
      "link" => "/products/product4",
    ],
    [
      "text" => "商品名を追加",
      "link" => "/products/product5",
    ],
    [
      "text" => "商品名を追加",
      "link" => "/products/product6",
    ],
  ];
?>

<?php include('../shared/head.php'); ?>
<div class="ns-product page">

  <div class="left">
    <?php foreach ($products as $product): ?>
      <div class="">
        <h3><?= $product["text"] ?></h3>
        <p><?= $product["link"] ?></p>
      </div>
    <?php endforeach ?>
    <div class="blue-button">商品注文・お問い合わせ</div>
  </div>

  <div class="right">
    <h1>Product page</h1>
    <p>Lor em ip sum dol or sit am et co ns ec te tur, ad ip is ic ing el it. Qu asi, es se ul lam si nt sed, il lo vo lu pt at ib us ut re pu di an dae te mp or ib us ei us pe rf er en dis vo lu pt as. Qu ae di gn is si mos la ud an ti um in ve nt ore ma gni qu am pr ov id ent eos al iq uid.</p>
    <p>Lor em ip sum dol or sit am et co ns ec te tur, ad ip is ic ing el it. Qu asi, es se ul lam si nt sed, il lo vo lu pt at ib us ut re pu di an dae te mp or ib us ei us pe rf er en dis vo lu pt as. Qu ae di gn is si mos la ud an ti um in ve nt ore ma gni qu am pr ov id ent eos al iq uid.</p>
    <p>Lor em ip sum dol or sit am et co ns ec te tur, ad ip is ic ing el it. Qu asi, es se ul lam si nt sed, il lo vo lu pt at ib us ut re pu di an dae te mp or ib us ei us pe rf er en dis vo lu pt as. Qu ae di gn is si mos la ud an ti um in ve nt ore ma gni qu am pr ov id ent eos al iq uid.</p>
    <p>Lor em ip sum dol or sit am et co ns ec te tur, ad ip is ic ing el it. Qu asi, es se ul lam si nt sed, il lo vo lu pt at ib us ut re pu di an dae te mp or ib us ei us pe rf er en dis vo lu pt as. Qu ae di gn is si mos la ud an ti um in ve nt ore ma gni qu am pr ov id ent eos al iq uid.</p>
  </div>

</div>
<?php include('../shared/foot.php'); ?>
