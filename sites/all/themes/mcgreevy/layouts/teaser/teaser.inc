<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy TEASER'),
  'category' => t('Columns: 2'),
  'icon' => 'teaser.png',
  'theme' => 'panels_teaser',
  'css' => 'teaser.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
