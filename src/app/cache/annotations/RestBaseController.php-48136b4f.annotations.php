<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\rest',
  '#uses' => array (
  'CacheManager' => 'Ubiquity\\cache\\CacheManager',
  'Controller' => 'Ubiquity\\controllers\\Controller',
  'ResponseFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\ResponseFormatter',
  'RestControllerUtilitiesTrait' => 'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait',
  'Startup' => 'Ubiquity\\controllers\\Startup',
  'DAO' => 'Ubiquity\\orm\\DAO',
  'UString' => 'Ubiquity\\utils\\base\\UString',
  'Router' => 'Ubiquity\\controllers\\Router',
  'OrmUtils' => 'Ubiquity\\orm\\OrmUtils',
  'EventsManager' => 'Ubiquity\\events\\EventsManager',
  'RestEvents' => 'Ubiquity\\events\\RestEvents',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\rest\\RestBaseController' => 
  array (
  ),
),
  'Ubiquity\\controllers\\rest\\RestBaseController::$responseFormatter' => array(
    array('#name' => 'var', '#type' => 'mindplay\\annotations\\standard\\VarAnnotation', 'type' => 'formatters\\ResponseFormatter')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::$requestFormatter' => array(
    array('#name' => 'var', '#type' => 'mindplay\\annotations\\standard\\VarAnnotation', 'type' => 'formatters\\RequestFormatter')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::$server' => array(
    array('#name' => 'var', '#type' => 'mindplay\\annotations\\standard\\VarAnnotation', 'type' => 'RestServer')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::checkPermissions' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'mixed', 'name' => 'datas'),
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'bool')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::requireAuth' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'action'),
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'boolean')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_get' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'condition'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean|string', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getOne' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'keyValues'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean|string', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getManyToOne' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string|boolean', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getOneToMany' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string|boolean', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getManyToMany' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string|boolean', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_update' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getRelationShip' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'id'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues')
  ),
  'Ubiquity\\controllers\\rest\\RestBaseController::_getTemplateFile' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'string')
  ),
);

