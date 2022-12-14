<?php if ($props['title'] || $props['content']) : ?>
    <div>

        <?php if ($props['title']) : ?>
            <<?= $props['title_element'] ?>><?= $props['title'] ?></<?= $props['title_element'] ?>>
        <?php endif ?>

        <?php if ($props['content']) : ?>
            <div><?= $props['content'] ?></div>
        <?php endif ?>

    </div>
<?php endif ?>
