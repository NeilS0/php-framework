<?php

class SystemCore{
	public function __construct()
	{
		//includes
		//$this->IncludeViews();
		//$this->IncludeControllers();
	}

	//private function IncludeViews()
	public function IncludeView(&$iview)
	{
		//1 - first check if the view exist
		$view_found = false;
		$scripts = scandir("views");		
		foreach ($scripts as $index => $file){
			if (pathinfo("views/".$file, PATHINFO_EXTENSION) === "php"){
				//$include_scripts[count($include_scripts)] = $file;
				if (substr($file, 0, -1 * strlen(".php")) == $iview){
					$view_found = true;
					break;
				}
			}
		}

		if (!$view_found){
			echo "VIEW DOES NOT EXIST";
		} else {
			include_once("system.view.php");
			include("views/{$iview}.php");
		}


/*
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
*/
	}

	//private function IncludeControllers()
	public function IncludeController(&$icontroller)
	{
		//1 - first check if the view exist
		$view_found = false;
		$scripts = scandir("controllers");		
		foreach ($scripts as $index => $file){
			if (pathinfo("controllers/".$file, PATHINFO_EXTENSION) === "php"){
				//$include_scripts[count($include_scripts)] = $file;
				if (substr($file, 0, -1 * strlen(".php")) == $icontroller){
					$view_found = true;
					break;
				}
			}
		}

		if (!$view_found){
			echo "CONTROLLER DOES NOT EXIST";
		} else {
			include_once("system.controller.php");
			include("controllers/{$icontroller}.php");
		}


		/*
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
			include_once("system.controller.php");
			include_once("controllers/".$script);
		}
		*/
	}
}
?>
