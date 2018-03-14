<?php

//include_once "system.php";

abstract class IView{
	//abstract public function SetController(&$Controller);
	//abstract public function Present();	//this function presents the view to the browser

	public $Content;

	/*
	this variable, which will be an dynamic object
	*/
	public $ViewData;	//this the data the controller needs to update that the view can use

	public function __construct()
	{
		$this->Content = "";

		$this->ViewData = null;
	}

	/*this function is used by the layout
	private function GetSandbox()
	{
		return $this->Content;
	}
	*/


	abstract public function Render();
};

?>
