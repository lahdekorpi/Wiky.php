<?php
/* Wiky.php - A tiny PHP "library" to convert Wiki Markup language to HTML
 * Author: Toni Lähdekorpi <toni@lygon.net>
 *
 * Code usage under any of these licenses:
 * Apache License 2.0, http://www.apache.org/licenses/LICENSE-2.0
 * Mozilla Public License 1.1, http://www.mozilla.org/MPL/1.1/
 * GNU Lesser General Public License 3.0, http://www.gnu.org/licenses/lgpl-3.0.html
 * GNU General Public License 2.0, http://www.gnu.org/licenses/gpl-2.0.html
 * Creative Commons Attribution 3.0 Unported License, http://creativecommons.org/licenses/by/3.0/
 */

// This file demonstrates how to use Wiky.php.

// Include the library (obviously)
require_once("wiky.inc.php");

// Create a new wiky to any variable You'd like. Could be $mooming
// If you pass true to __construct (new wiky(true)), "S" PCRE modifier will be added to all regular expressions. This gives a performance boost when running parse thousands of times. Extreme usage only.
$wiky=new wiky;

// Call for the function parse() on the variable You created and pass some unparsed text to it, it will return parsed HTML or false if the content was empty. In this example we are loading the file input.wiki, escaping all html characters with htmlspecialchars, running parse and echoing the output
$input=file_get_contents("input.wiki");
$input=htmlspecialchars($input);
echo $wiky->parse($input);
