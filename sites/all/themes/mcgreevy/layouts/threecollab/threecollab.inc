<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Three column layout with full-width header and footer'),
  'category' => t('Columns: 3'),
  'icon' => 'mcgreevytwocol.png',
  'theme' => 'panels_threecollab',
  'css' => 'twocol.css',
  'regions' => array(
    'navarea' => t('Nav Area'),
    'topleft' => t('Top Left side'),
    'topfull' => t('Top Full length'),
    'bottomfull' => t('Bottom Full length'),
    'right' => t('Right side')
  ),
);
