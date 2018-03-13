<?php

//include_once "system.php";

abstract class IView{
	//abstract public function SetController(&$Controller);
	//abstract public function Present();	//this function presents the view to the browser

	public $Content;

	public function __construct()
	{
		$this->Content = "";
	}

	private function GetSandbox()
	{
		return $this->Content;
	}
};

?>
