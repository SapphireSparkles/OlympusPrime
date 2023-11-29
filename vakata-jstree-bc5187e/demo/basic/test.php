<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jstree basic demos</title>
	<style>
	html { margin:0; padding:0; font-size:62.5%; }
	body { max-width:800px; min-width:300px; margin:0 auto; padding:20px 10px; font-size:14px; font-size:1.4em; }
	h1 { font-size:1.8em; }
	.demo { overflow:auto; border:1px solid silver; min-height:100px; }
	</style>
	<link rel="stylesheet" href="./../../dist/themes/default/style.css" />
</head>
<body>
	<h1>HTML demo</h1>
	<div id="html" class="demo">
		<ul>

<?php
    $xml = simplexml_load_file('http://uwkp0008fa2e:8080/addins/inside_ftpcrawl.xml');

    //$jobs = array_map("strval", $xml->xpath("//list_item/dir"));

    $url = "http://uwkp0008fa2e:8080/addins/inside_ftpcrawl.xml";

$xmlfiledata = file_get_contents("$url");

$xmldata = new SimpleXMLElement($xmlfiledata);

$jobs = $xmldata->list->list_item;
    
 

    // We will store each category in an array. Each job in each category will be
    // an array storing the Title and URL.
    $categoryArray = array();

    // Loop over XML structure as before.
    foreach ($jobs as $jobDetails):
    $dir= "{$jobDetails->dir}";
     $minion = "{$jobDetails->minion}";
        //$category = $jobDetails->dir;
      $subdir = $jobDetails->subdir;
       $subsubdir = $jobDetails->subsubdir;
        $file = $jobDetails->file;
   $path = $jobDetails->path;
      $url = $jobDetails->url;
    $minion = $jobDetails->minion;
        // If the current category is not in the array yet, add it.
        if(empty($categoryArray[$dir])) {
            $categoryArray[$dir] = array();
        }
       // If the current category exists, add the job details to it.
        $categoryArray[$dir][] = array(
"dir" => $dir,            
 "subdir" => $subdir, 
          "subsubdir" => $subsubdir,  
          "file" => $file,    
          "minion" => $minion, 
            
        );
    endforeach;

     $subArray = array();

    // Loop over XML structure as before.
    foreach ($jobs as $subDetails):
    $sub = "{$subDetails->subdir}";
     $minion = "{$subDetails->minion}";
 $dir = "{$subDetails->dir}";
        //$category = $jobDetails->dir;
        //$subdir = $jobDetails->subdir;
          $subsubdir = $subDetails->subsubdirsubdir;
           $file = $subDetails->file;
   $path = $subDetails->path;
      $url = $subDetails->url;
        // If the current category is not in the array yet, add it.
        if(empty($subArray[$dir])) {
            $subArray[$dir] = array();
        }
        // If the current category exists, add the job details to it.
        $subArray[$dir][] = array(
            "subdir" => $sub, 
          "subsubdir" => $subsubdir,  
           "file" => $file,   
            "path" => $path, 
             "url" => $url,    
                "minion" => $minion, 
        );
    endforeach;
    
    
    $subsubArray = array();

    // Loop over XML structure as before.
    foreach ($jobs as $subDetails):
    $sub = "{$subDetails->subdir}";
    $minion = "{$subDetails->minion}";
  $dir = "{$subDetails->dir}";
        //$category = $jobDetails->dir;
        //$subdir = $jobDetails->subdir;
          $subsubdir = "{$subDetails->subsubdir}";
           $file = $subDetails->file;
   $path = $subDetails->path;
      $url = $subDetails->url;
        // If the current category is not in the array yet, add it.
        if(empty($subsubArray[$sub])) {
            $subsubArray[$sub] = array();
        }
        // If the current category exists, add the job details to it.
        $subsubArray[$sub][] = array(
            "subdir" => $sub, 
          "subsubdir" => $subsubdir,  
           "file" => $file,   
            "path" => $path, 
             "url" => $url,    
             "minion" => $minion, 
        );
    endforeach;
    
 
    $array = array_merge_recursive($subArray, $subsubArray);
   
   //$array = array_merge_recursive($categoryArray, $array);
  foreach($array as $subname => $subArray4):
 // echo '<li>top: ' . $subArray4[0]['dir'];
       echo "<li>" . $subArray4[0]['subdir'].  "<ul>" . PHP_EOL;
        
        //if ($subArray4[0]['subsubdir'] == "none"){}else{
 // echo  "<li>" . $subArray4[0]['subsubdir'];
//}
        // Within each category, output an inner list for each job.
     //   echo '<ul>';  
          
        foreach($subArray4 as $job4) {
	        
          echo    "<li data-jstree='{\"icon\":\"/addins/tree.png\">" . $job4["file"] . '</li>';
        
        }

        echo '</ul>';
        echo '</li>';
    endforeach;
    
    ?>
	
		</ul>
	</div>



	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="./../../dist/jstree.min.js"></script>
	
	<script>
	// html demo
	$('#html').jstree();

	// inline data demo
	$('#data').jstree({
		'core' : {
			
			'data' : [
				{ "text" : "Root node", "children" : [
						{ "text" : "Child node 1" },
						{ "text" : "Child node 2" }
				]}
			]
		}
	});

	// data format demo
	$('#frmt').jstree({
		'core' : {
			'data' : [
				{
					"text" : "Root node",
					"state" : { "opened" : true },
					"children" : [
						{
							"text" : "Child node 1",
							"state" : { "selected" : true },
							"icon" : "jstree-file"
						},
						{ "text" : "Child node 2", "state" : { "disabled" : true } }
					]
				}
			]
		}
	});

	// ajax demo
	$('#ajax').jstree({
		'core' : {
			'data' : {
				"url" : "./root.json",
				"dataType" : "json" // needed only if you do not supply JSON headers
			}
		}
	});

	// lazy demo
	$('#lazy').jstree({
		'core' : {
			'data' : {
				"url" : "//www.jstree.com/fiddle/?lazy",
				"data" : function (node) {
					return { "id" : node.id };
				}
			}
		}
	});

	// data from callback
	$('#clbk').jstree({
		'core' : {
			'data' : function (node, cb) {
				if(node.id === "#") {
					cb([{"text" : "Root", "id" : "1", "children" : true}]);
				}
				else {
					cb(["Child"]);
				}
			}
		}
	});

	// interaction and events
	$('#evts_button').on("click", function () {
		var instance = $('#evts').jstree(true);
		instance.deselect_all();
		instance.select_node('1');
	});
	$('#html')
	
		.on("changed.jstree", function (e, data) {
			
			  document.location = data.instance.get_node(data.node, true).children('a').attr('href');
			 if(data.selected.length) {
			//	alert('The selected node is: ' + data.instance.get_node(data.selected[0]).text);
			}
		})
		
		
		  $('#html')
        .on('click', '.jstree-anchor', function (e) {
            $(this).jstree(true).toggle_node(e.target);
        })
		$('#evts')
	
		.on("changed.jstree", function (e, data) {
			
			  document.location = data.instance.get_node(data.node, true).children('a').attr('href');
			  if(data.selected.length) {
				alert('The selected node is: ' + data.instance.get_node(data.selected[0]).text);
			}
		})

		.jstree({
			'core' : {
				'dblclick_toggle' : false,
				'multiple' : false,
				'data' : [
					{ "text" : "Root node", "children" : [
							{ "text" : "Child node 1", "id" : 1 },
							{ "text" : "Child node 2" }
					]}
				]
			}
		});
	</script>
</body>
</html>