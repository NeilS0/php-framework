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
			// echo "VIEW DOES NOT EXIST";
			return false;
		} else {
			include_once("system.view.php");
			include("views/{$iview}.php");
			return true;
		}

		return false;
	}

	//private function IncludeControllers()
	public function IncludeController(&$icontroller)
	{
		//1 - first check if the controller exist
		$controller_found = false;
		$scripts = scandir("controllers");		
		foreach ($scripts as $index => $file){
			if (pathinfo("controllers/".$file, PATHINFO_EXTENSION) === "php"){
				//$include_scripts[count($include_scripts)] = $file;
				if (substr($file, 0, -1 * strlen(".php")) == $icontroller){
					$controller_found = true;
					break;
				}
			}
		}

		if (!$controller_found){
			//echo "CONTROLLER DOES NOT EXIST";
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
