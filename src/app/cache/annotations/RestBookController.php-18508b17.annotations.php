<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\RestBookController' => 
  array (
  ),
),
  'controllers\\RestBookController' => array(
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\items\\rest\\RestAnnotation', "resource"=>"models\\Book"),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "path"=>"/books/","inherited"=>false,"automated"=>false,"requirements"=>[],"priority"=>0)
  ),
  'controllers\\RestBookController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/links","priority"=>3000)
  ),
  'controllers\\RestBookController::all' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/", "priority"=> 0)
  ),
  'controllers\\RestBookController::one' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'keyValues'),
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "{keyValues}", "priority"=> -1)
  ),
  'controllers\\RestBookController::update' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'put', '#type' => 'Ubiquity\\annotations\\items\\router\\PutAnnotation', "{keyValues}")
  ),
  'controllers\\RestBookController::add' => array(
    array('#name' => 'post', '#type' => 'Ubiquity\\annotations\\items\\router\\PostAnnotation', "/")
  ),
  'controllers\\RestBookController::delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'delete', '#type' => 'Ubiquity\\annotations\\items\\router\\DeleteAnnotation', "{keyValues}")
  ),
  'controllers\\RestBookController::options' => array(
    array('#name' => 'options', '#type' => 'Ubiquity\\annotations\\items\\router\\OptionsAnnotation', "{resource}")
  ),
);

