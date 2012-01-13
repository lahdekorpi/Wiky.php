<?php
// This is a HOWTO:
require_once("wiky.inc.php"); // Include the library (obviously)
$wiky=new wiky; // Create a new wiky to any variable You'd like. Could be $mooming
echo $wiky->parse(file_get_contents("input.wiki")); // call for the function parse() on the variable You created and pass some unparsed text to it, it will return parsed HTML or false if the content was empty. In this example we are loading the file input.wiki and passing it's contents
