<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Two column layout with full-width header and footer'),
  'category' => t('Columns: 2'),
  'icon' => 'mcgreevytwocol.png',
  'theme' => 'panels_twocol',

  'regions' => array(
    'topleft' => t('Top Left side'),
    'topfull' => t('Top Full length'),
    'bottomfull' => t('Bottom Full length'),
    'right' => t('Right side')
  ),
);
