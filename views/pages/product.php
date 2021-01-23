<?php
  $articles = [
    [
      "title" => "Title 1",
      "description" => "Description 1",
    ],
  ];
?>

<?php include('../shared/head.php'); ?>
<div class="ns-product">

  <h1>Product page</h1>
  <h1>Product page</h1>
  <?php foreach ($articles as $article): ?>
    <div class="">
      <h3><?= $article["title"] ?></h3>
      <p><?= $article["description"] ?></p>
    </div>
  <?php endforeach ?>

</div>
<?php include('../shared/foot.php'); ?>
