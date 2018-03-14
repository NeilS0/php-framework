<?php

include_once "system.php";

class Page extends System{

	public function __construct()
	{
		parent::__construct();
	}
	
	//public function RegisterView($viewname, $iview)
	public function RegisterView($iview)
	{
		$this->View = $iview;
		$this->RegisterClassView();

		// echo "<pre>";
		// print_r($this->View);
		// echo "</pre>";
	}
	//public function RegisterController($viewname, $icontroller)
	public function RegisterController($icontroller)
	{
		$this->Controller = $icontroller;
		$this->RegisterClassController();

		// echo "<pre>";
		// print_r($this->Controller);
		// echo "</pre>";
	}

	public function Present()
	{
		//we need to first process the controller
		// then update the view
		//then show the view

		$this->ProcessController();
		$this->RenderView();
	}
};

?>
