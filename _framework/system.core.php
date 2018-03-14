<?php

/*
	system core is being use by system class
*/

class SystemCore{
	public function __construct()
	{
	}
	public function __destruct()
	{
	}

	//what this function basically does is just see if the view exist, then includes it
	//at the moment, the class name and the file name must be the same(include case senitivity)
	public function IncludeView(&$iview)
	{
		//1 - first check if the view exist
		$view_found = false;
		$scripts = scandir("views");
		foreach ($scripts as $index => $file){
			if (pathinfo("views/".$file, PATHINFO_EXTENSION) === "php"){
				if (substr($file, 0, -1 * strlen(".php")) == $iview){
					$view_found = true;
					break;
				}
			}
		}

		if (!$view_found){
			return false;
		} else {
			include_once("system.view.php");
			include("views/{$iview}.php");
			return true;
		}

		return false;
	}

	public function IncludeController(&$icontroller)
	{
		//1 - first check if the controller exist
		$controller_found = false;
		$scripts = scandir("controllers");
		foreach ($scripts as $index => $file){
			if (pathinfo("controllers/".$file, PATHINFO_EXTENSION) === "php"){
				if (substr($file, 0, -1 * strlen(".php")) == $icontroller){
					$controller_found = true;
					break;
				}
			}
		}

		if (!$controller_found){
			return false;
		} else {
			include_once("system.controller.php");
			include("controllers/{$icontroller}.php");
			return true;
		}

		return false;
	}
}
?>
