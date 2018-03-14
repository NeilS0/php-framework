<?php

/*
	controller for the login page
*/ 

class ControllerIndex extends IController{	//IController gets included by the framework

	public function __construct()
	{
		parent::__construct();
	}
	public function __destruct()
	{
		parent::__destruct();
	}
	
	//this is the main function of the controller you need to implement
	//public function ProcessEvents(&$ViewData)	//ViewData - we get this from the view
	public function Process(&$ViewData)	//ViewData - we get this from the view
	{
		// print_r($ViewData);

		//set Msg
		$ViewData->Msg = "This is the index page.";

		//handle any events
		switch ($this->Action){
			case 'Signin':	//user has clicked on the Signin button
				// echo "your about to sign in";
				break;
			
			default:
				break;
		}
	}
};

?>
