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
		$this->RegisterClass();
	}
	//public function RegisterController($viewname, $icontroller)
	public function RegisterController($icontroller)
	{
		$this->Controller = $icontroller;
		$this->RegisterClass();
	}

	public function Present()
	{
	}
};

?>
