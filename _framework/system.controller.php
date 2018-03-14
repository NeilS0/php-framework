<?php

/*
	all controllers need to implement this
*/

abstract class IController{

	/*
	
	we use the idea of an Action, when a user clicks a button like submitting a form, that button needs to have attribute name='Action' and attribute value='what_type_of_action_this_is'.

	eg: <button class='btn btn-primary' name='Action' value='Signin'>Sign In</button>

	*/
	public $Action;

	public function __construct()
	{
		$this->Action = $_REQUEST["Action"];
	}
	public function __destruct()
	{
		unset($this->Action);
	}

	//main function
	//abstract public function ProcessEvents(&$ViewData);
	abstract public function Process(&$ViewData);

};

?>
