<?php

include_once "system.core.php";

/*
NOTE:
the system should automatically include what is in the directories: controllers and views,
because those 2 folders are part of the framework. 
*/
abstract class System{

	protected $View;	//our view for this page
	protected $Controller;	//our controller for this view
	private $System;		//system core

	public function __construct()
	{
		$this->System = new SystemCore();
	}

	public function PrintViews()
	{
	}

	/*
	public function RegisterClass()
	{
		$this->System->IncludeView($this->View);
		$this->System->IncludeController($this->Controller);

		//instaniate the view and controller
		//$this->View = eval("new {$this->View}");
		//$this->Controller = eval("new {$this->Controller}");
	}
	*/
	public function RegisterClassView()
	{
		$this->System->IncludeView($this->View);

		//instaniate the view and controller
		//$this->View = eval("new {$this->View}");
		//$this->Controller = eval("new {$this->Controller}");
	}
	public function RegisterClassController()
	{
		$this->System->IncludeController($this->Controller);

		//instaniate the view and controller
		//$this->View = eval("new {$this->View}");
		//$this->Controller = eval("new {$this->Controller}");
	}

};

?>