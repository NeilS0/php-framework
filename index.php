<?php

include "_framework/system.page.php";	//for creating a page

/*
abstract class IView{
	abstract public function SetController(&$Controller);
	abstract public function Present();	//this function presents the view to the browser
};

abstract class IController{

};

interface ITest{

};
*/

/*
the system should automatically include what is in dirs: controllers and views,
because the dirs controllers, view is part of the framework 
*/
/*
abstract class System{
	protected $View;

	public function __construct()
	{
		$this->System = null;
	}

	public function PrintViews()
	{
	}
};
*/

/*
//the purpose is so that the framwork automatically handles includes, so that we can just use the classes without having to include them ourselfs.
//get file lists of controllers dir
$scripts = scandir("controllers");
//store only the php scripts
$include_scripts = array();
foreach ($scripts as $index => $file){
	if (pathinfo("controllers/".$file, PATHINFO_EXTENSION) === "php"){
		$include_scripts[count($include_scripts)] = $file;
	}
}
print_r($include_scripts);

//now include the script in dir controllers
foreach ($include_scripts as $index => $script){
	include_once("controllers/".$script);
}

abstract class SystemCore{
	public function __construct()
	{
		//includes
		$this->IncludeViews();
		$this->IncludeControllers();
	}
	private function IncludeViews()
	{
		//get file lists of views dir
		$scripts = scandir("views");
		//store only the php scripts
		$include_scripts = array();
		foreach ($scripts as $index => $file){
			if (pathinfo("views/".$file, PATHINFO_EXTENSION) === "php"){
				$include_scripts[count($include_scripts)] = $file;
			}
		}
		print_r($include_scripts);

		//now include the script in dir views
		foreach ($include_scripts as $index => $script){
			include_once("views/".$script);
		}
	}
	private function IncludeControllers()
	{
		//get file lists of controllers dir
		$scripts = scandir("controllers");
		//store only the php scripts
		$include_scripts = array();
		foreach ($scripts as $index => $file){
			if (pathinfo("controllers/".$file, PATHINFO_EXTENSION) === "php"){
				$include_scripts[count($include_scripts)] = $file;
			}
		}
		print_r($include_scripts);

		//now include the script in dir controllers
		foreach ($include_scripts as $index => $script){
			include_once("controllers/".$script);
		}
	}
}




//print_r($scripts);


class Page extends System{

	public function __construct()
	{
		parent::__construct();
	}
	
	//public function RegisterView($viewname, $iview)
	public function RegisterView($iview)
	{
		//$this->Views[$viewname]->Controller = array();
		//$this->Views[$viewname]->ViewClass = get_class($iview);
		//$this->Views[get_class($iview)]->Controller = null;
		$this->View->Class = $iview;

		echo "<pre>";
		print_r(get_class($iview));
		echo "</pre>";
	}
	//public function RegisterController($viewname, $icontroller)
	public function RegisterController($icontroller)
	{
		//$this->Views[$viewname]->Controller = [];
		//$this->View->Class = $icontroller]->Controller = [];
	}

	public function Present()
	{
	}
};
*/

//include "__framework/Page.php";

//create a page
$Page = new Page();
//$Page = new Page();	//each page can have multiple views

//each page can have multiple views
//$Page->RegisterView("ViewLogin", new ViewLogin()); //root/views/controllerlogin.php
//each view can have multiple controllers
//$Page->RegisterController("ViewLogin", new ControllerLogin);	//root/controllers/controllerlogin.php

//prints out all the views
//$System->PrintViews();

/*
class ViewLogin /*extends IView
{
}
class ControllerLogin /*extends IController
{
}
*/

//$Page->RegisterView(new ViewLogin());

echo substr("ControllerLogin.php", 0, -1 * strlen(".php"));
$rr = "ASD";
eval("\$rr = 86;");

//we need to set a view for this page
$Page->RegisterView("ViewLogin");	//pass through the name of the view class for this page
//$Page->RegisterController(new ControllerLogin);
//we are passing through the class name of the view (the view we have created in the views folder)
//notice that the file name should be the same as the class name. - this is how it works for now...
//it can be any view within the views folder

//we need to set a controller for the view of this page
$Page->RegisterController("ControllerLogin");	//pass through the name of the controller class for the view
//same story, we are passing through the class name of the controller for this view (this is the class we created in the script under folder: controllers)

//do processing
//$Page->Render();

//send the page to the browser
$Page->Present();




var_dump(empty($_SERVER['REDIS']));

echo "<pre>";
print_r($_SERVER['REDIS']);
echo "</pre>";

$REDIS = new Redis();
$addr=empty($_SERVER['REDIS']) ? 'localhost' : $_SERVER['REDIS'];
$REDIS->connect($addr);

echo "<pre>";
print_r(get_class_methods("Redis"));
echo "</pre>";

echo "<pre>";
print_r($REDIS);
echo "</pre>";


?>
