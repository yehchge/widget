<?php

// example of immutable value objects using the Div class

require_once 'HtmlWidgetInterface.php';
require_once 'Div.php';

// created the first two div objects
$div1 = new Div('This the content of the first div.');
$div2 = new Div('This is the content for the second div.');

// nest the two previous divs and create a new one
$div3 = $div1->nest($div2);

// render the new div
echo $div3->render();

/* displays the following
   <div><div>This is the content of the first div.</div><div>This is the content for second div.</div></div>
 */


