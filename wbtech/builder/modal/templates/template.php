<?php

    $el = $this->el($props['modal_element']);

?>

<?= $el($props, $attrs) ?>
<?php foreach ($children as $child) : ?>
    <div uk-modal><?= $builder->render($child, ['element' => $props]) ?></div>
<?php endforeach ?>
<?= $el->end() ?>
