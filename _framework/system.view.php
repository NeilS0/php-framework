<?php

/*
	all views need to implement this
*/

abstract class IView{

	public $Content;	//the html the layout uses
	public $ViewData;	//this is the object we send to the controller, the controller can use this to set data inside the view

	public function __construct()
	{
		$this->Content = "";
		$this->ViewData = null;	//NOTE: ViewData will be used as an object
	}
	public function __construct()
	{
		unset($this->Content);
		unset($this->ViewData);
	}

	//views need to implement
	abstract public function Render();

	//this function is used by the layout
	public function GetSandbox()
	{
		return $this->Content;
	}
};

?>
