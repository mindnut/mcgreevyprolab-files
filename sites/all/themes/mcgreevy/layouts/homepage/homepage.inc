<?php

// Plugin definition
$plugin = array(
  'title' => t('Mcgreevy Homepage Layout'),
  'category' => t('Columns: 3'),
  'icon' => 'homepage.png',
  'theme' => 'panels_homepage',
  'css' => 'homepage.css',
  'regions' => array(
    'topbanner' => t('Top Banner Area'),
    'toptwo-one' => t('Top first half'),
    'toptwo-two' => t('Top Second half'),
    'topone' => t('Top First Quarter'),
    'toptwo' => t('Top Second Quarter'),
    'topthree' => t('Top Third Quarter'),
    'topfour' => t('Top Fourth Quarter'),
    'middleone' => t('Middle First Third'),
    'middletwo' => t('Middle Second Third'),
    'middlethree' => t('Middle Last Third'),
    'bottomone' => t('Bottom First Half'),
    'bottomtwo' => t('Bottom Last Half'),
    'bottomtwoa' => t('Bottom Quarter 1'),
    'bottomtwob' => t('Bottom Quarter 2'),
    'bottomtwoc' => t('Bottom Quarter 3'),
    'bottomtwod' => t('Bottom Quarter 4'),
    'bottom' => t('Full Bottom')
  ),
);
