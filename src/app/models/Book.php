<?php
namespace models;
/**
 * @table("name"=>"book")
 */
class Book{
	/**
	 * @id()
	 * @column("name"=>"id","dbType"=>"int(11)")
	 * @validator("type"=>"id","constraints"=>["autoinc"=>true])
	 */
	private $id;

	/**
	 * @column("name"=>"title","dbType"=>"varchar(100)")
	 * @validator("type"=>"length","constraints"=>["max"=>100,"notNull"=>true])
	 */
	private $title;

	/**
	 * @column("name"=>"des","nullable"=>true,"dbType"=>"text")
	 */
	private $des;

	/**
	 * @column("name"=>"image","nullable"=>true,"dbType"=>"varchar(255)")
	 * @validator("type"=>"length","constraints"=>["max"=>255])
	 */
	private $image;

	/**
	 * @column("name"=>"category","dbType"=>"int(11)")
	 * @validator("type"=>"notNull")
	 */
	private $category;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getTitle(){
		return $this->title;
	}


	public function setTitle($title){
		$this->title=$title;
	}


	public function getDes(){
		return $this->des;
	}


	public function setDes($des){
		$this->des=$des;
	}


	public function getImage(){
		return $this->image;
	}


	public function setImage($image){
		$this->image=$image;
	}


	public function getCategory(){
		return $this->category;
	}


	public function setCategory($category){
		$this->category=$category;
	}


	 public function __toString(){
		return ($this->category??'no value').'';
	}

}