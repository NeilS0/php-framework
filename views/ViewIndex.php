<?php

/*
	view for the index page
*/ 
	
class ViewIndex extends IView{	//IView gets included by the framework

	public function __construct()
	{
		parent::__construct();

		/*
		ViewData - this is the link between the view and the controller
		whatever we want the controller to update within the view, we can add them dynamically to this object

		we need to setup our view's model data or any data that we want the controller to update that will be used by the view
		*/
		//in this case we want the controller to set Msg, which we then use by the view in the Render function
		$this->ViewData->Msg = null;	//add Msg dynamically to object $this->ViewData
		//... add more members
	}

	public function Render()
	{
		//the controller has updated Msg, or it may not have done anything to it at all
		//we now just show whatever string is in Msg.
		$this->Content = "<h1>{$this->ViewData->Msg}</h1>";

		include_once "layouts/layout.basic.php";	//the layout this view is using
	}

};

?>
