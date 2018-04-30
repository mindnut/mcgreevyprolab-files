<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): 
if ($view->result[$id]->node_sticky == 1) {
      $vars['classes_array'][$id] .= ' sticky';
    }

if (!empty($options['sticky']) == 'true') {
    $vars['classes_array'][$id] = "sticky-enabled";
  }
  ?>
  <div <?php if ($classes_array[$id]) { 
  print 'class="' . $classes_array[$id] .'"';  
  } 
  
  ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
