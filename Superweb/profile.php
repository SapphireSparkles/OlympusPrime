
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
	
    
//$('.list').load('Superweb/Pages/list.php?eid='+ $.urlParam.get('eid'));
$('.list').load('Superweb/Pages/list.php?eid='+ $.urlParam('eid')); 
$('.list2').load('Superweb/Pages/list2.php?eid='+ $.urlParam('eid')); 
$('.list3').load('Superweb/Pages/list3.php?eid='+ $.urlParam('eid')); 
$('.list').delay( 5000 ).fadeIn();
$('.list2').delay( 5000 ).fadeIn();
$('.list3').delay( 5000 ).fadeIn();
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
						$('.list').fadeOut('slow');                $('.list').empty();
						 	$('.list2').fadeOut('slow');                $('.list2').empty();
						 $('.list3').fadeOut('slow');                $('.list3').empty();
						 //hide the loader
						 $('.loading').fadeOut();   
						 
						//show the success message
						$('.message').html('Successfully Registered ! ').fadeIn('slow');
  
			
        loadtbl();		
$('.message').fadeOut	 
$('.list').fadeIn('slow');
$('.list2').fadeIn('slow');						 
$('.list3').fadeIn('slow');						 
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

.focus{border: 1px solid #FFB000;outline: none;}
        .blur{border: 1px solid #CCCCCC;outline: none;}
strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               

                <h3 class="profile-username text-center"><?php Username($db,$EID); ?></h3>

               <a href ="index.php?page=superweb"><button type="button" class="btn btn-block btn-primary btn-sm">Logout</button></a>

              
	<div class="message"></div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div   class="loading"></div>
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Subscribed</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Not Subscribed</a></li>
                    <li class="nav-item"><a class="nav-link" href="#recap" data-toggle="tab">Daily Recap</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                    <!-- Post -->
                   
                      <!-- /.user-block -->
                     
                      <?php include "pages/list.php"; ?> 
                
             <?php include "pages/list2.php"; ?> 
                   
                  <?php include "pages/list3.php"; ?> 

                  <div class="tab-pane" id="settings">
                  <?php include "pages/UpdateUser.php"; ?> 
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
 
  </div>