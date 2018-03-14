<?php

/*
	the footer includes all the javascript, style tags, etc, before the the closing </body> tag
*/

echo "
	<!-- any javascript needs to be linked here -->

   <!-- JQuery JS -->
   <script src='vendors/js/jquery.min.js'></script>

	<!-- Bootstrap JS -->
   <link href='vendors/js/bootstrap.min.js' rel='stylesheet'>

  	<!-- Angular JS -->
   <script src='vendors/js/angular.min.js'></script>

   ". /*$this->GetJS()*/"" /*$this->JS()*/."
";


?>
