<?php

// Plugin definition
$plugin = array(
  'title' => t('NYSM Program Detail Two column'),
  'category' => t('Columns: 2'),
  'icon' => 'progdetail.png',
  'theme' => 'panels_progdetail',
//  'css' => 'progdetail.css',
  'regions' => array(
  'content' => t('Program Information'),
    'body' => t('Body Text'),
    'image' => t('images')
  ),
);
