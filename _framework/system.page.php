<?php

/*
	each new page (script) you create, needs to include this script and instaniate a Page object
*/

include_once "system.php";

class Page extends System{

	public function __construct()
	{
		parent::__construct();
	}
	public function __destruct()
	{
		parent::__destruct();
	}
	

	public function RegisterView($iview)
	{
		$this->View = $iview;
		$this->RegisterClassView();
	}

	public function RegisterController($icontroller)
	{
		$this->Controller = $icontroller;
		$this->RegisterClassController();
	}

	public function Present()
	{
		//first process the controller, because the controller affects the view
		$this->ProcessController();
		$this->RenderView();
	}
};

?>
