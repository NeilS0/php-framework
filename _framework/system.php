<?php

include_once "system.core.php";

/*
the system should automatically include what is in dirs: controllers and views,
because the dirs controllers, view is part of the framework 
*/
abstract class System{

	protected $View;
	protected $Controller;

	private $System;		//system core

	public function __construct()
	{
		//$this->System = null;
		$this->System = new SystemCore();
	}

	public function PrintViews()
	{
	}

	public function RegisterClass()
	{
		$this->System->IncludeView($this->View);
		$this->System->IncludeController($this->Controller);

		//instaniate the view and controller
		//$this->View = eval("new {$this->View}");
		//$this->Controller = eval("new {$this->Controller}");
	}
};

?>