<?php

include "_framework/system.page.php";	//for creating a page

//create a page object
$Page = new Page();


//we need to set a view for this page
$Page->RegisterView("ViewLogin");
//we are passing through the class name of the view (the view we have created in the views folder)
//notice that the file name should be the same as the class name. - this is how it works for now...
//it can be any view within the views folder

//we need to set a controller for the view of this page
$Page->RegisterController("ControllerLogin");
//same story, we are passing through the class name of the controller for this view (this is the class we created in the script under folder: controllers)

//do processing
//$Page->Render();

//send the page to the browser
$Page->Present();

?>
