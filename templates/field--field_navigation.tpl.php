<?php

/**
wraps each of the sets of links in a list item, NBD.
 */
?>
<?php foreach ($items as $delta => $item): ?>
<li>
      <?php print render($item); ?>
</li>
    <?php endforeach; ?>

