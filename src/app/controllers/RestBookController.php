<?php
namespace controllers;



/**
 * @rest("resource"=>"models\\Book")
 */
/**
 * @route("path"=>"/books/","inherited"=>false,"automated"=>false,"requirements"=>[],"priority"=>0)
 */
class RestBookController extends \Ubiquity\controllers\rest\RestResourceController {

	/**
	 * Returns all links for this controller.
	 * 
	 * @get("/links","priority"=>3000)
	*/
	public function index() {
		parent::index ();
	}

	/**
	* Returns a list of objects from the server.
	*
	* @get("/", "priority"=> 0)
	*/
	public function all() {
		$this->_getAll ();
	}

	/**
	* Get the first object corresponding to the $keyValues.
	*
	* @param string $keyValues primary key(s) value(s) or condition
	* @get("{keyValues}", "priority"=> -1)
	*/
	public function one($keyValues) {
		$this->_getOne ( $keyValues, $this->getRequestParam ( 'include', false ));
	}

	/**
	* Update an instance of $model selected by the primary key $keyValues.
	* Require members values in $_POST array
	* Requires an authorization with access token
	*
	* @param array $keyValues
	* @put("{keyValues}")
	*/
	public function update(...$keyValues) {
		$this->_update ( ...$keyValues );
	}

	/**
	* Insert a new instance of $model.
	* Require members values in $_POST array
	* Requires an authorization with access token
	*
	* @post("/")
	*/
	public function add() {
		$this->_add ();
	}

	/**
	* Delete the instance of $model selected by the primary key $keyValues.
	* Requires an authorization with access token
	*
	* @param array $keyValues
	* @delete("{keyValues}")
	*/
	public function delete(...$keyValues) {
		$this->_delete ( ...$keyValues );
	}

	/**
	* Route for CORS.
	*
	* @options("{resource}")
	*/
	public function options(...$resource) {}
}
