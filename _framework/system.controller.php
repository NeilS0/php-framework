<?php

//include_once "system.php";

abstract class IController{

	public $Action;

	public function __construct()
	{
		$this->Action = $_REQUEST["Action"];
	}

	//main function
	abstract public function ProcessEvents();

};

?>
