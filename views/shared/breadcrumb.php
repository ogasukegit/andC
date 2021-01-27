<div class="ns-breadcrumb">
  <a class="link" href="/">＆C TOP</a>
  <?php foreach ($breadcrumb as $value): ?>
    <?php if ($value['link']) { ?>
      <a class="link" href="<?= $value['link'] ?>"><?= $value['text'] ?></a>
    <?php } else { ?>
      <span><?= $value['text'] ?></span>
    <?php } ?>
  <?php endforeach ?>
</div>
