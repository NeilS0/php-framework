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

		//setup all the members the controller can access and needs to update
		$this->ViewData->Msg = null;
	}

	public function Render()
	{
		/*
		if ($this->ViewData->Msg){
			echo "yes, action is true";
		}
		*/
		echo $this->ViewData->Msg;
	}

};

?>
