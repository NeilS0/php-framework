<?php

/*

	//this layout is use by the registration page
	this layout can be used by any view

*/

include_once("header.incl.php");	//includes the header

echo "
	<body class='text-center'>

	".$this->GetSandbox() /*gets the content of the page*/."

	";	
	
include_once("footer.incl.php");	//includes javascript, style tags

echo "
  </body>
</html>
";

/*
Views can have their own layouts, you can create your own layouts
*/

?>
