<?php if (!$props['status']) : ?>
    <a
        uk-toggle
        href="#<?= $props['modal_id'] ?>"
        id="<?= $props['id'] ?>"
        class="<?= $props['class'] ?>"
        style="<?= $props['css'] ?>"
        <?= $props['attributes'] ?>
    >
        <?= $props['content'] ?>
    </a>
<?php endif ?>
