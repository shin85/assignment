<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\rest',
  '#uses' => array (
  'CacheManager' => 'Ubiquity\\cache\\CacheManager',
  'DAO' => 'Ubiquity\\orm\\DAO',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\rest\\RestResourceController' => 
  array (
  ),
),
  'Ubiquity\\controllers\\rest\\RestResourceController::_getTemplateFile' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'string')
  ),
);

