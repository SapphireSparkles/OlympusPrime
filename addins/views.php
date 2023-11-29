<?php 
$views = 0;
$visitors_file = "visitors.txt";

// Load up the persisted value from the file and update $views
if (file_exists($visitors_file))
{
    $views = (int)file_get_contents($visitors_file); 
}

// Increment the views counter since a new visitor has loaded the page
$views++;

// Save the contents of this variable back into the file for next time
file_put_contents($visitors_file, $views);

?>