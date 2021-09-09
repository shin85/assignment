<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\Books' => 
  array (
  ),
),
  'controllers\\Books' => array(
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\items\\rest\\RestAnnotation', "resource"=>"models\\Book"),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "path"=>"/books/","inherited"=>false,"automated"=>false,"requirements"=>[],"priority"=>0)
  ),
  'controllers\\Books::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/links","priority"=>3000)
  ),
  'controllers\\Books::all' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "/", "priority"=> 0)
  ),
  'controllers\\Books::one' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'keyValues'),
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\items\\router\\GetAnnotation', "{keyValues}", "priority"=> -1)
  ),
  'controllers\\Books::update' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation'),
    array('#name' => 'put', '#type' => 'Ubiquity\\annotations\\items\\router\\PutAnnotation', "{keyValues}")
  ),
  'controllers\\Books::add' => array(
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation'),
    array('#name' => 'post', '#type' => 'Ubiquity\\annotations\\items\\router\\PostAnnotation', "/")
  ),
  'controllers\\Books::delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'keyValues'),
    array('#name' => 'delete', '#type' => 'Ubiquity\\annotations\\items\\router\\DeleteAnnotation', "{keyValues}"),
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation')
  ),
  'controllers\\Books::options' => array(
    array('#name' => 'options', '#type' => 'Ubiquity\\annotations\\items\\router\\OptionsAnnotation', "{resource}")
  ),
);

