<?php 
include "simple_html_dom.php";

$input =  "http://0008fa2e:8080/addins/dataGrabber/Mor.html";

// Create a DOM object
$html = new simple_html_dom();
// Load HTML from a string
$html->load($input);

// Get the starting node
$startPoint = $html->find('div[class=b-widget__body]', 0);

// While the current node has a sibling
while ( $next = $startPoint->next_sibling() ) {
    // And as long as it's different from the end node => div.second
    if ( $next->tag == 'div' && $next->class == 'alert alert-warning margin-full20' )
        break;
    else{
        // Print the content
        echo $next->plaintext;
        echo '<br/>';
        // And move to the next node
        $startPoint = $next;
    }
}

?>