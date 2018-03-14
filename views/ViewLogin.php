<?php

/*
	view for the login page
*/ 
	//print_r(get_class_methods(IView));
class ViewLogin extends IView{	//IView gets included by the framework

	//public $Data;

	public function __construct()
	{
		parent::__construct();

		/*
		ViewData - this is the link between the view and the controller
		whatever we want the controller to update within the view, we can dynamically add to this object

		setup our view's model data or any data that we want the controller to update that will be used by the view

		*/
		//in this case we want the controller to set Msg, which we then use by the view in the Render function
		$this->ViewData->Msg = null;
		//... add more
	}

	public function Render()
	{
		/*
		if ($this->ViewData->Msg){
			echo "yes, action is true";
		}
		*/
		echo $this->ViewData->Msg;

		//the controller has updated Msg, we now just show whatever string is in it.
		$this->Content = "<h1>{$this->ViewData->Msg}</h1>";

		//$this->UseLayout("layout.basic.php");
		include_once "layouts/layout.basic.php";
	}

};

?>
