<?php
//has the whole submenu for the related links field
//including the input, header, and all the links
//very tidy.
?>
<li class="<?php print $classes; ?>"<?php print $attributes; ?>>
<input id="collapse-related" name="accordion-group" type="radio"/>
  <?php if (!$label_hidden): ?>
    <h4 class="accordion-h tertiary-nav-h"<?php print $title_attributes; ?>>
	    <!-- Two labels toggle the radio buttons. -->
							<label class="accordion-dismiss" for="collapse-all"><?php print $label ?></label><!-- Triggers #collapse-all radio button, above. -->
							<label class="accordion-toggle" for="collapse-related"><?php print $label ?></label><!-- Opens this section. -->
    </h4>    
  <?php endif; ?>
  <div class="accordion-body">
  <ul class="accordion-inner tertiary-nav-list">
    <?php foreach ($items as $delta => $item): ?>
      <li class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></li>
    <?php endforeach; ?>
  </ul>
  </div>
</li>