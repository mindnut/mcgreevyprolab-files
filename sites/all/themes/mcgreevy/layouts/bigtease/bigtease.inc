<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Big tease'),
  'category' => t('Columns: 2'),
  'icon' => 'teaser.png',
  'theme' => 'panels_bigtease',
  'css' => 'teaser.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
