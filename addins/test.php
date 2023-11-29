<?php



$xml = simplexml_load_file("inside_ftpcrawl.xml");
//simplexml_load_string($x);

$groups = array_map("strval", $xml->xpath("//list_item/dir"));

$groups = array_flip(array_flip($groups));

foreach ($groups as $group) {
$newfile = substr($group, strrpos($group, '/') + 1);
        echo "<b>$newfile:</b><br>" . PHP_EOL;
     
        $elements = $xml->xpath("//list_item[dir = '$group']");
   
        foreach ($elements as $e)
            echo "  " . $e->file  . "<br>".PHP_EOL;
        
        echo PHP_EOL;
    }     ?>