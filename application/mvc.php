<?php

require "view/load.php";

require "model/model.php";

require "controller/controller.php";

define("base_url" , "https://users.sussex.ac.uk/~ag673/3dapp/assignment/");

$pageURI = $_SERVER["REQUEST_URI"];
$pageURI = substr($pageURI , strpos($pageURI , "index.php") + 10);

$pageURI = trim($pageURI , "/");

$pageURI = explode("?" , $pageURI)[0];


if (!$pageURI)
    new Controller("home");
else
    new Controller($pageURI);



function dump(...$args)
{
    echo "<pre>";
    var_dump(...$args);
    die;
}
?>