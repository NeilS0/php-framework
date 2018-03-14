<?php

/*
    the header includes the doctype, the title, all links, etc, before the the opening <body> tag
*/

$additionalCSS = "";
if ($_SERVER["SCRIPT_NAME"] == "/register/login.php"){

//     echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

    $additionalCSS = "
    <!-- Font Awesome -->
    <link href='../vendors/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
    <!-- NProgress -->
    <link href='../vendors/nprogress/nprogress.css' rel='stylesheet'>
    <!-- Animate.css -->
    <link href='../vendors/animate.css/animate.min.css' rel='stylesheet'>
    ";
}

echo "
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <link rel='icon' href=''>

    <title>"./*$this->GetTitle()*/""."</title>

    <!-- Bootstrap core CSS -->
    <link href='vendors/css/bootstrap.min.css' rel='stylesheet'>

    $additionalCSS

    <!-- Custom styles for this template
    <link href='signin.css' rel='stylesheet'>
    -->
  </head>

";

unset($additionalCSS);


?>
