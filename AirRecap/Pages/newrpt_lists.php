<script src="superweb/js/js-url-2.5.3/url.min.js"></script>
<link rel="stylesheet" type="text/css" href="superweb/DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="superweb/DataTables/datatables.min.js"></script>

<script>
(function ($) {

       
$(function () {
$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});
var loader='<center><img src="superweb/inc/loading.gif"></center>';


//$(document).ready(function(){
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return decodeURI(results[1]) || 0;
    }
}
 function loadtbl() {
	//var urlParams = new URLSearchParams(window.location.search);	
	
    
//$('.list').load('../Superweb/Pages/list.php?eid='+ $.urlParam.get('eid'));
$('.list').load('../Superweb/Pages/list.php?eid='+ $.urlParam('eid')); 

$('.list').delay( 5000 ).fadeIn();
}
console.log(window.location.search);

 loadtbl();
$('.loading').html(loader).delay( 2000 ).fadeIn();

 $('.loading').fadeOut();

    $(".js-table").on("click", "tr[data-url]", function () {
        
$('.loading').html(loader).fadeIn();

//disabled all the text fields
			$('.text').attr('disabled','true');
			 
			 
			//start the ajax
			$.ajax({

				//this is the php file that processes the data and send mail
				url: "../Superweb/Pages/addlist.php",
				 
				//POST method is used
				type: "GET",
	 
				//pass the data        
				data:  $(this).data("url"),    
				 
				
				//success
				success: function (html) { 
 //alert( response );            
					//if process.php returned 1/true (send mail success)                 
						//hide the form
						$('.list').fadeOut('slow');                $('.list').empty();
						 
						 
						 //hide the loader
						 $('.loading').fadeOut();   
						 
						//show the success message
						$('.message').html('Successfully Registered ! ').fadeIn('slow');
  
			
        loadtbl();		
$('.message').fadeOut	 
$('.list').fadeIn('slow');
						 
						 
					//if process.php returned 0/false
				              
				}      
			});
			 
			//cancel the submit button default behaviours
			return false;

    });

});
$(function () {

    $(".reserve-button2").on("click", "tr[data-url]", function () {
        window.location = $(this).data("url");
    });

});})(jQuery);
</script>
<style>
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
body {
	background: #fafafa;
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}
.focus{border: 1px solid #FFB000;outline: none;}
        .blur{border: 1px solid #CCCCCC;outline: none;}
strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background:  linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
cursor: pointer;
	
}
.list
{
    
}
.reserve-button2 {
	background: #f1f1f1 ;	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
.page-navigation a {
      margin: 0 2px;
      display: inline-block;
      padding: 3px 5px;
      color: #ffffff;
      background-color: #70b7ec;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }
    .page-navigation a[data-selected] {
      background-color: #3d9be0;
    }
</style>
	<div   class="loading"></div>
	<div class="message"></div>
<div class="list"></div>
