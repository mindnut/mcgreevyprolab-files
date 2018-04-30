<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Three column Press'),
  'category' => t('Columns: 3'),
  'icon' => 'mcgreevytwocol.png',
  'theme' => 'panels_threecolpress',
  'css' => 'twocol.css',
  'regions' => array(
    'navarea' => t('Nav Area'),
    'topfull' => t('Top Full length'),
    'topleft' => t('Top Left side'),
    'topright' => t('Top side'),
    'botright' => t('Bottom right'),
    'botleft' => t('Bottom left'),
    'botfull' => t('Bottom full')
  ),
);
