<?php

// Plugin definition
$plugin = array(
  'title' => t('Simple-Page Two columns'),
  'category' => t('Columns: 2'),
  'icon' => 'twocolpage.png',
  'theme' => 'panels_twocolpage',
  'css' => 'twocolpage.css',
  'regions' => array(
  'body' => t('Body Text'),
    'right_col' => t('Right Column')
  ),
);
