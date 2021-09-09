<?php
namespace models;
/**
 * @table("name"=>"user")
 */
class User{
	/**
	 * @id()
	 * @column("name"=>"id","dbType"=>"int(11)")
	 * @validator("type"=>"id","constraints"=>["autoinc"=>true])
	 */
	private $id;

	/**
	 * @column("name"=>"firstname","dbType"=>"varchar(65)")
	 * @validator("type"=>"length","constraints"=>["max"=>65,"notNull"=>true])
	 */
	private $firstname;

	/**
	 * @column("name"=>"lastname","dbType"=>"varchar(65)")
	 * @validator("type"=>"length","constraints"=>["max"=>65,"notNull"=>true])
	 */
	private $lastname;

	/**
	 * @column("name"=>"email","dbType"=>"varchar(255)")
	 * @validator("type"=>"email","constraints"=>["notNull"=>true])
	 * @validator("type"=>"length","constraints"=>["max"=>255])
	 */
	private $email;

	/**
	 * @column("name"=>"password","nullable"=>true,"dbType"=>"varchar(255)")
	 * @validator("type"=>"length","constraints"=>["max"=>255])
	 * @transformer("name"=>"password")
	 */
	private $password;

	/**
	 * @column("name"=>"suspended","nullable"=>true,"dbType"=>"tinyint(1)")
	 * @validator("type"=>"isBool")
	 */
	private $suspended;

	/**
	 * @column("name"=>"idOrganization","dbType"=>"int(11)")
	 * @validator("type"=>"notNull")
	 */
	private $idOrganization;


	public function getId(){
		return $this->id;
	}


	public function setId($id){
		$this->id=$id;
	}


	public function getFirstname(){
		return $this->firstname;
	}


	public function setFirstname($firstname){
		$this->firstname=$firstname;
	}


	public function getLastname(){
		return $this->lastname;
	}


	public function setLastname($lastname){
		$this->lastname=$lastname;
	}


	public function getEmail(){
		return $this->email;
	}


	public function setEmail($email){
		$this->email=$email;
	}


	public function getPassword(){
		return $this->password;
	}


	public function setPassword($password){
		$this->password=$password;
	}


	public function getSuspended(){
		return $this->suspended;
	}


	public function setSuspended($suspended){
		$this->suspended=$suspended;
	}


	public function getIdOrganization(){
		return $this->idOrganization;
	}


	public function setIdOrganization($idOrganization){
		$this->idOrganization=$idOrganization;
	}


	 public function __toString(){
		return ($this->idOrganization??'no value').'';
	}

}