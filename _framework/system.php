<?php

//include_once "system.core.php";
require_once "system.core.php";

/*
	The is main framework class

	NOTE:
	the framework automatically includes the scripts contained in the folders: controllers, views
	because these folders are part of the framework.
*/

abstract class System{

	protected $View;	//our view for this page
	protected $Controller;	//our controller for this view
	private $System;		//system core

	public function __construct()
	{
		$this->System = new SystemCore();
	}
	public function __destruct()
	{
		unset($this->Controller);
		unset($this->View);
		unset($this->System);
	}

	public function RegisterClassView()
	{
		if ($this->System->IncludeView($this->View)){
			
			//after included, instaniate the view object
			eval("\$this->View = new {$this->View}();");
			
			return true;
		} else {

			echo "VIEW DOES NOT EXIST";
			return false;
		}
		return false;
	}
	public function RegisterClassController()
	{
		if ($this->System->IncludeController($this->Controller)){
			
			//after included, instaniate the controller object
			eval("\$this->Controller = new {$this->Controller}();");
			
			return true;
		} else {

			echo "CONTROLLER DOES NOT EXIST";
			return false;
		}
		return false;
	}



	//process controller
	public function ProcessController()
	{
		//$this->Controller->ProcessEvents($this->View->ViewData);
		$this->Controller->Process($this->View->ViewData);
	}
	
	//render the view
	public function RenderView()
	{
		$this->View->Render();
	}


};

?>