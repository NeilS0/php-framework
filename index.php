<?php

/*
	this page just show a msg
*/

include "_framework/system.page.php";	//for creating a page

//create a page object
$Page = new Page();


//we need to set a view for this page
$Page->RegisterView("ViewLogin");
//we are passing through the class name of the view (the view we have created in the views folder)
//notice that the file name should be the same as the class name. - this is how it works for now...


//we need to set a controller for the view of this page
$Page->RegisterController("ControllerLogin");
//same story, we are passing through the class name of the controller for this view (the controller we have created in the controllers folder)

//do processing
//$Page->Render();

//send the page to the browser
$Page->Present();

?>
