<div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                  <div class="list"><?php
include ("../coonect.php");
include ("../inc/queries.php");

$EID = $_GET["eid"];
?><script>
(function ($) {

       
$(function () {



  // Paginate it
  //$('#register_form').paginate({
   // limit: 100,
   // initialPage: 0
  //});

$(document).on('click', '#clear-filter', function(){       
    $('#myInput').val('');
    $('#myInput').trigger("keyup");

});
$(document).on('click', '#Unsub-filter', function(){       
    $('#myInput').val('Add');
    $('#myInput').trigger("keyup");

});
$(document).ready(function(){
 //dropdownslic

 //$("#SLIC").change( function () {
$(document.body).on('change','#SLIC',function(){
   var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
            //alert("Selected Text: " + selectedText + " Value: " + selectedValue);
	 
$('.list').fadeOut('slow');
$('.list').empty();
        
$('.loading').html(loader).fadeIn();

//disabled all the text fields
			$('.text').attr('disabled','true');
			 
			 
			//start the ajax
			$.ajax({

				//this is the php file that processes the data and send mail
				url: "Superweb/Pages/addlist.php",
				 
				//POST method is used
				type: "GET",
	 
				//pass the data        
				data: selectedValue, 
				 
				 
				
				//success
				success: function (html) { 
 //alert( response );            
					//if process.php returned 1/true (send mail success)                 
						//hide the form
						                
						 
						 
						 //hide the loader
						 $('.loading').fadeOut();   
						 
						//show the success message
						$('.message').html('Successfully Updated ! ').fadeIn('slow');
  
        loadtbl();		
$('.message').delay( 1000 ).fadeOut('slow');	 
$('.list').fadeIn();
						 
						 
					//if process.php returned 0/false
				              
				}      
			});
			 
			//cancel the submit button default behaviours
			return false;

    });



  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#register_form tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 
 
    });
  });

});

$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});
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
	
    
$('.list').load('Superweb/Pages/list.php?eid='+ $.urlParam('eid')); 
}


var loader='<center><img src="superweb/inc/loading.gif"></center>';
    $(".js-table").on("click", "td[data-url]", function () {

    if ($(this).data("url")=="NO"){
	    
	      alert("Please Select a SLIC To Subscribe To This Report");
return false;
};

    if ($(this).data("url")=="NONO"){
	
return false;
};
$('.list').fadeOut('slow');
$('.list').empty();
        
$('.loading').html(loader).fadeIn();

//disabled all the text fields
			$('.text').attr('disabled','true');
			 
			 
			//start the ajax
			$.ajax({

				//this is the php file that processes the data and send mail
				url: "Superweb/Pages/addlist.php",
				 
				//POST method is used
				type: "GET",
	 
				//pass the data        
				data:  $(this).data("url"),    
				 
				
				//success
				success: function (html) { 
 //alert( response );            
					//if process.php returned 1/true (send mail success)                 
						//hide the form
						                
						 
						 
						 //hide the loader
						 $('.loading').fadeOut();   
						 
						//show the success message
						$('.message').html('Successfully Updated ! ').fadeIn('slow');
  
        loadtbl();		
$('.message').delay( 1000 ).fadeOut('slow');	 
$('.list').fadeIn();
						 
						 
					//if process.php returned 0/false
				              
				}      
			});
			 
			//cancel the submit button default behaviours
			return false;

    });


//optout
 $(".opt-button").click( "[data-url]", function () {

   //  alert("Please Select A Slic To Subscribe To This Report");
$('.txtmessage').fadeOut('slow');
//$('.list').empty();
        
$('.loading').html(loader).fadeIn();

//disabled all the text fields
			$('.text').attr('disabled','true');
			 
			 
			//start the ajax
			$.ajax({

				//this is the php file that processes the data and send mail
				url: "Superweb/Pages/addlist.php",
				 
				//POST method is used
				type: "GET",
	 
				//pass the data        
				data:  $(this).data("url"),    
				 
				
				//success
				success: function (html) { 
 //alert( response );            
					//if process.php returned 1/true (send mail success)                 
						//hide the form
						                
						 
						 
						 //hide the loader
						 $('.loading').fadeOut();   
						 
						//show the success message
						$('.message').html('Successfully Updated ! ').fadeIn('slow');
  
        loadtbl();		
$('.message').delay( 1000 ).fadeOut('slow');	 
//$('.list').fadeIn();
						 
						 
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

<?php 
if(txtcheck($db,$EID )== True) { ?>
<div class="txtmessage" style="background-color:#FED0C7">In the Future, we will be adding reports that you can recieve on your phone as a text message. If you would like to recieve these reports please edit your profile to add your cell phone number. You can also OPT-OUT of recieving these reports by clicking the opt-out button below:
<br> <a href="?page=superweb&eid=<?php echo $EID; ?>&Updateme=1" class="button"><font color=' #b00b55'><u>Edit Profile</u></font></a> <button id="opt-button" class="opt-button" data-url='eid=<?php echo $EID ?>&Status=OPTOUT' >OPT-OUT</button></div>

<?php } ?>
<table><?php
echo " <table class='js-table table table-bordered table-striped' id='register_form' >  <thead><tr><th><font color='#000000'>Report</th><th><font color='#000000'>Description</th><th><font color='#000000'>SLIC</th><th><font color='#000000'>Add/Remove</th></tr> </thead>
  <tbody >";
while ( $row = $allreports->fetch_assoc() ) { 
	if(reportcheck($db,$EID, $row["rpt_id"] )== True) { 

echo  "<td data-url='eid=" . $EID . "&RPTID=" . $row["rpt_id"]. "&SLIC=None&Status=Remove'>".$row["report"] ."</td>"; 
echo "<td data-url='eid=". $EID. "&RPTID=". $row["rpt_id"]. "&SLIC=None&Status=Remove'>".$row["description"] ."</td><td data-url='eid=". $EID. "&RPTID=". $row["rpt_id"]. "&SLIC=None&Status=Remove'>";
 if($row["slic_specific"] == true) { 
reportSLIC($db,$EID, $row["rpt_id"])  ;
}
		}else{ ?>
<tr class='reserve-button paginate' >
<?php if($row["slic_specific"] == true) { 
// echo "<td data-url='NO'>".$row["report"] ."</td>"; 
//echo "<td data-url='NO'>".$row["description"] ."</td><td data-url='NONO'>";



//Dropdownme($db,$EID,$row["rpt_id"],"Add");
	
} else {
//echo  "<td data-url='eid=" . $EID . "&RPTID=" . $row["rpt_id"]. "&SLIC=None&Status=Add'>".$row["report"] ."</td>"; 
//echo "<td data-url='eid=". $EID. "&RPTID=". $row["rpt_id"]. "&SLIC=None&Status=Add'>".$row["description"] ."</td><td data-url='eid=". $EID. "&RPTID=". $row["rpt_id"]. "&SLIC=None&Status=Add'>";
}

	
}
echo "</td>";
if(reportcheck($db,$EID, $row["rpt_id"] )== True) { 
?> <td data-url="eid=<?php echo $EID; ?>&RPTID=<?php echo $row["rpt_id"];?>&Status=Remove"><div class= "obutton feature2" data-id="<?php echo $row["rpt_id"];?>">
    <a href="Superweb/Pages/addlist.php?eid=<?php echo $EID; ?>&RPTID=<?php echo $row["rpt_id"];?>&Status=Remove"><button class="reserve-button2">Remove</button></a>
</div></td> <?php }else{?> 
 <?php if($row["slic_specific"] == true) {  ?>

    <?php }else{ ?>
</div></td> <?php } }
Echo "</td>"; 
 echo "</tr>"; 


 } 
echo " </table> </div> <!-- /.post --> <!-- /.post --> </div></div>";
$allreports->free(); 

?>

