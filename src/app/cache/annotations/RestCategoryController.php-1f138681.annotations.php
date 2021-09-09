<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\RestCategoryController' => 
  array (
  ),
),
  'controllers\\RestCategoryController' => array(
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\items\\rest\\RestAnnotation', "resource"=>"models\\Category"),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "path"=>"/categories/","inherited"=>false,"automated"=>false,"requirements"=>[],"priority"=>0)
  ),
  'controllers\\RestCategoryController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/links","priority"=>3000)
  ),
  'controllers\\RestCategoryController::all' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/", "priority"=> 0)
  ),
  'controllers\\RestCategoryController::one' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'keyValues'),
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "{keyValues}", "priority"=> -1)
  ),
  'controllers\\RestCategoryController::update' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'put', '#type' => 'Ubiquity\\annotations\\items\\router\\PutAnnotation', "{keyValues}")
  ),
  'controllers\\RestCategoryController::add' => array(
    array('#name' => 'post', '#type' => 'Ubiquity\\annotations\\items\\router\\PostAnnotation', "/")
  ),
  'controllers\\RestCategoryController::delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'delete', '#type' => 'Ubiquity\\annotations\\items\\router\\DeleteAnnotation', "{keyValues}")
  ),
  'controllers\\RestCategoryController::options' => array(
    array('#name' => 'options', '#type' => 'Ubiquity\\annotations\\items\\router\\OptionsAnnotation', "{resource}")
  ),
);

