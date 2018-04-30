<?php

// Plugin definition
$plugin = array(
  'title' => t('Online Services and Ordering stuff'),
  'category' => t('Columns: 3'),
  'icon' => 'mcgreevytwocol.png',
  'theme' => 'panels_dropbox',
    'css' => 'dropbox.css',

  'regions' => array(
    'navarea' => t('Nav Area'),
    'topleft' => t('Top Left side'),
    'topfull' => t('Top Full length'),
    'topone' => t('Top First Quarter'),
    'toptwo' => t('Top Second Quarter'),
    'topthree' => t('Top Third Quarter'),
    'topfour' => t('Top Fourth Quarter'),
    'bottomfull' => t('Bottom Full length'),
    'right' => t('Right side')
  ),
);
