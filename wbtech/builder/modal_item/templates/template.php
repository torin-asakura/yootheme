<?php ?>
  <div uk-modal <?= $props['full_width'] ? 'class="uk-modal-full"' : '' ?> id="<?= $props['id'] ?>">
    <?php if ($props['full_width']) : ?>
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <?php endif ?>
    <div class="uk-modal-dialog uk-modal-body">
      <?php if ($props['title']) : ?>
      <<?= $props['title_element'] ?> class="uk-modal-title"><?= $props['title'] ?></<?= $props['title_element'] ?>>
      <?php endif ?>
      <div class="uk-block"><?= $props['content'] ?></div>
    </div>
  </div>
<?php ?>
