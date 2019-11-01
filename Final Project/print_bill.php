<?php

session_start();

 $conn2 = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );    

?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                   <title>Hotel Auto Menu &reg;</title>
                    <!-- Bootstrap -->
                     <link href="css/bootstrap.min.css" rel="stylesheet">   
                       <!-- External CSS Link-->
                         <!-- External CSS Link removed due to the reason that it disturb some of the input fields -->
       
						    <!-- Favicon   -->
								<!-- Favicon   -->
								<link rel="shortcut icon" type="image/png" href="images/favicon.png">
								
								<!-- slider and back2Top button needs javascript libraries -->
								<!-- javascript libraries  -->
								    <script src="js/jquery.js"></script>
									<script src="js/bootstrap.min.js"></script>

	
	<!-- External CSS Link-->
<!-- External CSS Link-->
<!-- External CSS Link-->

 
<!-- Flash Css-->
<style>
.positions{position:float;}

.flash {
   animation-name: flash;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: black;}
    to {color: white;}
	
}

.flash2{
   animation-name: flash2;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash2 {
    from {color:transparent;}
    to {color: black;}
	
}

.flash3
{
background:transparent;
margin-top:20px;
margin-bottom:30px;
 box-shadow:0 0 30px #b8860b;
 border:1px dotted white;
 border-radius:20px;
 box-shadow-transition: 4s;
}

.flash4
{
background:transparent;
margin-top:10px;
margin-bottom:10px;
 background-color:rgba(30,40,100,0.6);
 border:1px dotted white;
 border-radius:20px;
 box-shadow-transition: 4s;
 padding-bottom:40px;
}

.flash4:hover{
color:skyblue;
}


/*.flash3:hover{
background-color: rgba(0, 255, 25, 0.4);
 box-shadow:0 0 60px yellow inset;
 border:1px dotted white;
}
</style>




<style>

#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 50px; /* Place the button at the bottom of the page */
    right: 5px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color:red; /*  a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 50% 50%; /* Rounded corners */
	transition: 1s;
	border:1.7px dotted white;
}

#myBtn:hover {
    background-color: transparent; /* Add a dark-grey background on hover */
	border-radius: 50%;
	border:1.7px dotted white;
}

</style>

<style>




@media screen and (min-width: 200px) and (max-width: 499px) {

.col-md-12-7{
	
	height:100%;
	margin-bottom:10px;
}	
	
	
.button_responsit{
	
	width:100%;
}	
	
.topphotoresponsitivity{
	height: 90px;
}


.slide_pic_responsitity12{
height:200px;
}
.navbar_responsitivity{
	
	margin-left:0px;
}

}







</style>

	  <style>
	  
	  #back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    bottom: 50px;
    right: 10px;
    background-color: brown;
    color: yellow;
    text-align: ;
    font-size: 30px;
    text-decoration: none;
	border-radius: 100%;
}
#back2Top:hover {
    background-color: green;
    color: white;
	
}
	  </style>

	  
	  	  
	  <style>
	  
	  #previous_page {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(180deg);
    -webkit-transform: rotate(218deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
    position: fixed;
    top: 50%;
    left:50%;
    background-color: transparent;
    color: yellow;
    text-align: ;
    font-size: 30px;
    text-decoration: none;
	border-radius: 100%;
}
#previous_page:hover {
    background-color: green;
    color: white;
	
}


	  </style>
	  
	  <script>


$(document).ready(function() {
	$('#previous_page').fadeIn();
    $("#previous_page").click(function(event) {
	window.history.back();
    });

});

</script>

<!-- footer CSS-->
<!-- footer CSS-->
<!-- footer CSS-->



 </head>

 
   <body oncontextmenu="return false" onkeydown="return false;" class="body">

  
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 
   <!--   JavaScript for Top Button  it have style on the top also   -->
  



<script>

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>

<script>
window.print();
</script>

<?php 	$id =  $_GET['id'];?>

					
				<div style="font-family: paprus ; background-color: gray ; position:fixed; width:100% ; z-index:1 ; ">
				    <h3 style=" text-align: center ; color:white ;  padding-bottom : 10px"> &star; Bill Against Order ID <?php echo $id; ?> &star; </span> </h3>
				  </div>
	
	<br>
	
	<div class="container " style="margin-bottom:40px">
	  <div class="col-md-12 col-md-offset-0 ;" >




  <?php 
  
  

  
	
				$select_from312 = mysqli_query($conn2, "select   client.c_id , client.c_email, client.c_address ,client.c_name  , order_items.o_id , order_items.item_id , order_items.date, order_items.time , m.price , m.item_name
										
										from client join order_items
										
										on client.c_id = order_items.c_id
										
										
										inner join menu m on m.item_id = order_items.item_id        where o_id='$id'

										
										");
	
	
   
     $rows = mysqli_fetch_array($select_from312);
     
	 
	   


 
	 
	 ?>
	 
	 
	 
	 
	   
<div class="col-md-12 " style="color: black; text-align: ; font-family: paprus ; margin-top:70px"  > 
<div class=" col-md-12 col-md-offset-0 ; " >


					



		
				

				
				   
				    
					<div style="border: 1px dotted green  ; padding: 20px; background-color:gray; color:white ;"  class="form-group col-md-10 col-md-offset-1">
				   <p class="btn ; " title="Home Address"> <span style="font-family: paprus ; font-size: 17px ; color:brown ;">  
				   </span style=" "><?php  echo "Client ID  &nbsp;:&nbsp;&nbsp; ".$rows['c_id']. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Client Name &nbsp;:&nbsp;&nbsp;". $rows['c_name'].  "&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Client Email &nbsp;:&nbsp;&nbsp;". $rows['c_email'] ." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ;?></p><br><br>
				   </span><?php  echo  "  &nbsp;&nbsp;&nbsp; From &nbsp;&nbsp;&nbsp; ".$rows['c_address'] ." &nbsp;&nbsp;&nbsp; "." On  &nbsp;&nbsp;   ".$rows['date']." &nbsp;&nbsp;&nbsp;  at  &nbsp;&nbsp;&nbsp;  ".$rows['time'];?></p>

				   
				   
				   </p>
				   </div> 					
					
 
				   
				   
				   
				   <hr>
				   
				   
				   
				   
				   
				   <?php
				   
				   
				   				$select3324 = mysqli_query($conn2, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_amount , order_items.item_id , order_items.date , m.price , m.item_name
										
										from client join order_items
										
										on client.c_id = order_items.c_id 
										
										
										inner join menu m on m.item_id = order_items.item_id     where o_id='$id' order by item_id

										
										");
	
	
   
                                 
								 $glob = 0;
				   
				   
				   
				   ?>
				   
				   
				   

				   
				   
				   
				        <?php while ($row231 = mysqli_fetch_array($select3324)) : ?>

						
										   
				   	<div style="border: 1px dotted green ;"  class="form-group col-md-10 col-md-offset-1">
				   <p style="padding-top:6px">&star;&nbsp;<?php echo  "Item ID :&nbsp;&nbsp;".$row231['item_id']." &nbsp;&nbsp;&nbsp;&nbsp;   Name:&nbsp;&nbsp;".$row231['item_name']." &nbsp;&nbsp;&nbsp;&nbsp; Item amount :&nbsp;&nbsp;".$row231['item_amount']."&nbsp; &nbsp;&nbsp;&nbsp; Unit Price :&nbsp;&nbsp;".$row231['price'] ."&nbsp; &nbsp;Col.Price&nbsp;&nbsp;".($row231['price']*$row231['item_amount']) ;?></p>
				   </div> 

				   
 
						
						
						
						
						<?php $glob = ($glob+($row231['price']*$row231['item_amount']));?>
						<?php endwhile; ?>
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   

				   
			


 								   <hr>
				   
				   				   <hr>
				   
				   

		

		
 
				   	 <div style="border: 1px dotted green ; padding: 4px "  class="form-group col-md-10 col-md-offset-1">
				   <p class="btn btn-success btn-block " style="text-align:center ; "><?php echo "Total Amount : &nbsp;&nbsp;&nbsp;". $glob.'&nbsp;&nbsp;&nbsp;&nbsp; Pakistani Rupees';?> </p>
				   </div>
				   
 
					
				 
					<br>
					<br>
					
					<div    class="form-group col-md-10 col-md-offset-1">
				   <p class=" " style="text-align:right; ">Manager Sign _______________________ </p>
				   </div>
					
					 
					
					
					
					
				    <!-- 9  -->
					<!-- Line  -->					

				   

				   

					
					
						</div>
								
			            </div>
						

		

  
 
				
			        

	 
	 
	 
	 

  
  
  
<script>






</script>





     </main>
	 


	 <!--   Jump Button   -->                    
	 <!--   Jump Button   -->                    
	 <!--   Jump Button   --> 
	 
	 <a id="previous_page" title="Go to Previous Page" class="flash" href="#">&#10163;</a>
  
  
  
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
