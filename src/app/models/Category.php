<?php
namespace models;
/**
 * @table("name"=>"category")
 */
class Category{
	/**
	 * @id()
	 * @column("name"=>"id","dbType"=>"int(11)")
	 * @validator("type"=>"id","constraints"=>["autoinc"=>true])
	 */
	private $id;

	/**
	 * @column("name"=>"name","dbType"=>"varchar(100)")
	 * @validator("type"=>"length","constraints"=>["max"=>100,"notNull"=>true])
	 */
	private $name;

	/**
	 * @column("name"=>"des","nullable"=>true,"dbType"=>"text")
	 */
	private $des;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getName(){
		return $this->name;
	}


	public function setName($name){
		$this->name=$name;
	}


	public function getDes(){
		return $this->des;
	}


	public function setDes($des){
		$this->des=$des;
	}


	 public function __toString(){
		return ($this->name??'no value').'';
	}

}