
	<style>
	
	h1 { font-size:1.8em; }
	.demo { overflow:auto; border:0px solid silver; min-height:100px; }
	#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
	</style>
	<link rel="stylesheet" href="/addins/dist/themes/default/style.css" />

<input type="button" value="Collapse All"  class="reserve-button3">
<input type="button" value="Expand All" class="reserve-button2" >
	<div id="html2" class="demo">
		<ul>
<?php

$servername = "localhost";
$username = "sa0392";
$password = "so_cal";
$database = "superweb";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$db = new mysqli($servername ,$username,$password, $database ); 
$alldir =  $db->query('select dir from ftp GROUP BY dir');
//echo " <ul>";

while ( $row = $alldir->fetch_assoc() ) { 
  $dir = $row["dir"];
  echo "<li>". $dir . "<ul>";
$allsubdir =  $db->query("select subdir from ftp  where dir = '$dir' GROUP BY subdir");
while ( $row2 = $allsubdir->fetch_assoc() ) { 
  $subdir = $row2["subdir"];
  echo  "<li>" . $subdir . "<ul>";
  $allsubsubdir =  $db->query("select subsubdir from ftp  where subdir = '$subdir' GROUP BY subsubdir");
//while ( $row3 = $allsubsubdir->fetch_assoc() ) { 
 // $subsubdir = $row3["subsubdir"];
 // if($subsubdir == "none"){ }else{ echo  "<li>" . $subsubdir . "<ul>"; }
$allfiles =  $db->query("select file, url  from ftp  where dir = '$dir' and  subdir = '$subdir'  GROUP BY file");
while ( $row4 = $allfiles->fetch_assoc() ) { 
  $file = $row4["file"];
   $url = $row4["url"];
   
   echo " <li><a href='".$url."'" ?> onclick="javascript:_paq.push(['trackEvent', 'Clicks', 'Links', 'FTP']);"
 <?php   echo" >" . $file. "</a></li>";
}
 if($subsubdir == "none"){ }else{ echo  "</li></ul>"; }
//}

}

echo "</li></ul>";
	}
	echo "</li>";	
	echo "</ul>";	
		
		
?>
	</ul>	
	</div>

<script src="http://uwkp0008fa2e:8080/superweb/js/js-url-2.5.3/url.min.js"></script>
	
	<script src="../addins/dist/jstree.min.js"></script>
	
	<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
		 (function($){  
			 
			 
			 

	// html demo
	$('#html2').jstree();
	 $(".reserve-button2").on("click", function () {
      $('#html2').jstree('open_all');
    });
		 $(".reserve-button3").on("click", function () {
      $('#html2').jstree('close_all');
    });
	
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
	$('#html2')
	
		.on("changed.jstree", function (e, data) {
			
			  document.location = data.instance.get_node(data.node, true).children('a').attr('href');
			 if(data.selected.length) {
			//	alert('The selected node is: ' + data.instance.get_node(data.selected[0]).text);
			}
		})
		
	
		  $('#html2')
        .on('click', '.jstree-anchor', function (e) { $(this).jstree(true).toggle_node(e.target);
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
		
		
					  
		
		
		 })(jQuery);
	</script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>