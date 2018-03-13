<?php

/*
	controller for the login page
*/ 
class ControllerLogin extends IController{	//IController gets included by the framework

	public function __construct()
	{
		parent::__construct();
	}
	
	//main function
	public function ProcessEvents()
	{
		switch ($this->Action){
			case 'Signin':
				echo "your about to sign in"
				break;
			
			default:
				break;
		}
	}
};

?>
