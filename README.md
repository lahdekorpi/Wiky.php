# Wiky.php

Wiky.php is a tiny PHP "library" to convert Wiki Markup language to HTML.
It's basically an attempt to recreate [wiky.js](https://github.com/tanin47/wiky.js) with regular expressions, wrapped in a tiny PHP code.

## Code usage under any of these licenses:
* Apache License 2.0, http://www.apache.org/licenses/LICENSE-2.0
* Mozilla Public License 1.1, http://www.mozilla.org/MPL/1.1/
* GNU Lesse general Public License 3.0, http://www.gnu.org/licenses/lgpl-3.0.html
* Creative Commons Attribution 3.0 Unported License, http://creativecommons.org/licenses/by/3.0/

## Supported Syntax
* == Heading ==
* === Subheading ===
* ==== Subsubheading ====
* ''''' Bold-italic '''''
* ''' Bold '''
* '' Italic ''
* ---- Horizontal Line
* : Indentation
* :: Subindentation
* * Unordered list (up to four levels "**** text")
* # Ordered list (up to four levels "#### text")
* [[file:http://example.com/image.jpg title]] an image ([[file|img:http|https|ftp://example.com/image.jpg optional]])
* [http://example.com An Example Link] a link ([http|https|ftp://example.com mandatory])

## Howto use
```php
require_once("wiky.inc.php"); // Include the library (obviously)
$wiky=new wiky; // Create a new wiky to any variable You'd like. Could be $mooming
echo $wiky->parse(file_get_contents("input.wiki")); // Call for the function parse() on the variable You created and pass some unparsed text to it, it will return parsed HTML or false if the content was empty. In this example we are loading the file input.wiki and passing it's contents
```

## Known issues
* Unordered and ordered lists can not be mixed (any help and/or ideas would be great)
