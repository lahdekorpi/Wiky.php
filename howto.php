<?php
// This is a HOWTO:

// Include the library (obviously)
require_once("wiky.inc.php");

// Create a new wiky to any variable You'd like. Could be $mooming
// If you pass true to __construct (new wiky(true)), "S" PCRE modifier will be added to all regular expressions. This gives a performance boost when running parse thousands of times. Extreme usage only.
$wiky=new wiky;

// Call for the function parse() on the variable You created and pass some unparsed text to it, it will return parsed HTML or false if the content was empty. In this example we are loading the file input.wiki, escaping all html characters with htmlspecialchars, running parse and echoing the output
$input=file_get_contents("input.wiki");
$input=htmlspecialchars($input);
echo $wiky->parse($input);
