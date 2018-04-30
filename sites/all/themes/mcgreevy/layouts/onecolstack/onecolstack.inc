<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Single column Stacked'),
  'category' => t('Columns: 1'),
  'icon' => 'onecol.png',
  'theme' => 'panels_onecolstack',
 
  'regions' => array(
  	'topsingle' => t('Top Column'),
  	'bottomsingle' => t('Bottom Column')
  	),

);
