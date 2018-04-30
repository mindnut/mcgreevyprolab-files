<?php
// Plugin definition
$plugin = array(
  'title' => t('McGreevy Standard Press Layout for magicthumb'),
  'category' => t('Columns: 2'),
  'icon' => 'press.png',
  'theme' => 'panels_press',
  'css' => 'press.css',
  'regions' => array(
    'topleft' => t('Description'),
    'topright' => t('Images'),
	'botleft' => t('Ways To Start'),
    'botright' => t('Right Column')
  ),
);