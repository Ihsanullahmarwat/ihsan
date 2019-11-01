<?php

session_start();

//session check
if(!isset($_SESSION['admin_username'])){
	
		echo "<script> window.location.assign('login.php'); </script>";
	
}

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

 
   <body  class="body">

  
 
 
<?php 	$id =  $_GET['id'];?>

					
				<div style="font-family: paprus  ; position:fixed; width:100% ; z-index:1 ;  " class="btn-success">
				    <h3 style=" text-align: center ; color:white ;  padding-bottom : 10px"> &star; Specific Order Detail &star; </span> </h3>
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


					



		
				

				    <!-- 1 -->
					<!-- Line  -->
 
					
			 	<div   class="form-group col-md-10 col-md-offset-1" style="border: 1px dotted green ; padding: 4px">
					<p class="btn btn-primary col-md-12"  style="text-align:center; font-size: 17px"> CLIENT DETAIL AGAINST ORDER ID : &nbsp; <?php echo $id;?> </p>
				   </div> 
					
					<div>

				   <div style="border: 1px dotted green ;"  class="form-group col-md-5 col-md-offset-1">
				   <p class="btn ; " title="Name">   <span style="font-family: paprus ; font-size: 17px ; color:brown ;"> Client Name : &nbsp; </span> <?php echo $rows['c_name'];?></p>
				   </div> 

				    <div style="border: 1px dotted green ;"  class="form-group col-md-5 col-md-offset-0">
					<p class="btn ; " title="Father Name">  <span style="font-family: paprus ; font-size: 17px ; color:brown ;">Client ID: &nbsp; </span><?php echo $rows['c_id'];?></p>
				   </div> 
				
				   </div>
				   
				   
				   
				   	 <div style="border: 1px dotted green ;"  class="form-group col-md-5 col-md-offset-1">
				   <p class="btn ; " title="Home Address"> <span style="font-family: paprus ; font-size: 17px ; color:brown ;"> Date & Time : &nbsp;</span><?php echo " On  &nbsp;&nbsp;   ".$rows['date']." &nbsp;&nbsp;&nbsp;  at  &nbsp;&nbsp;&nbsp;  ".$rows['time'];?></p>
				   </div> 
				   
				    <div style="border: 1px dotted green ;"  class="form-group col-md-5 col-md-offset-0">
				   <p class="btn ; " title="Home Address"> <span style="font-family: paprus ; font-size: 17px ; color:brown ;">  Email: &nbsp; </span><?php echo $rows['c_email']; ?></p>
				   </div> 
				   
				    
					
					
					<div style="border: 1px dotted green ;"  class="form-group col-md-10 col-md-offset-1">
				   <p class="btn ; " title="Home Address"> <span style="font-family: paprus ; font-size: 17px ; color:brown ;">  Address: &nbsp; </span><?php echo $rows['c_address'];?></p>
				   </div> 
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   <?php
				   
				   
				   				$select3324 = mysqli_query($conn2, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_amount , order_items.item_id , order_items.date , m.price , m.item_name
										
										from client join order_items
										
										on client.c_id = order_items.c_id 
										
										
										inner join menu m on m.item_id = order_items.item_id     where o_id='$id' order by item_id

										
										");
	
	
   
                                 
								 $glob = 0;
				   
				   
				   
				   ?>
				   
				   
				   
				    <div> 
					
				   	<div style="border: 1px dotted green ;padding:4px; "  class="form-group col-md-2 col-md-offset-1">
				   <p class=" btn   btn-block btn-primary" title="Home Address"> <span style="font-family: paprus ; font-size: 17px   ; color:white ;">  Item ID </p>
				   </div> 

				   	<div style="border: 1px dotted green ;padding:4px; "  class="form-group col-md-2 col-md-offset-0">
				   <p class=" btn   btn-block btn-primary" title="Home Address"> <span style="font-family: paprus ; font-size: 17px   ; color:white ;">  Item Name </p>
				   </div> 
				   
				    <div> 
				   	<div style="border: 1px dotted green ;padding:4px; "  class="form-group col-md-2 col-md-offset-0">
				   <p class=" btn   btn-block btn-primary" title="Home Address"> <span style="font-family: paprus ; font-size: 17px   ; color:white ;">  Item Amount </p>
				   </div> 

				   	<div style="border: 1px dotted green ;padding:4px; "  class="form-group col-md-2 col-md-offset-0">
				   <p class=" btn   btn-block btn-primary" title="Home Address"> <span style="font-family: paprus ; font-size: 17px   ; color:white ;">  Unit Price </p>
				   </div> 	

				   <div style="border: 1px dotted green ;padding:4px; "  class="form-group col-md-2 col-md-offset-0">
				   <p class=" btn   btn-block btn-primary" title="Home Address"> <span style="font-family: paprus ; font-size: 17px   ; color:white ;">  Collective Price </p>
				   </div> 
				   
				   </div> 
				   
				   
				        <?php while ($row231 = mysqli_fetch_array($select3324)) : ?>

						
										   
				   	<div style="border: 1px dotted green ;"  class="form-group col-md-2 col-md-offset-1">
				   <p style="padding-top:6px">&star;&nbsp;<?php echo $row231['item_id'];?></p>
				   </div> 

				   
				   	<div style="border: 1px dotted green ;"  class="form-group col-md-2 col-md-offset-0">
				   <p style="padding-top:6px"><?php echo $row231['item_name'];?></p>
				   </div> 

				   	<div style="border: 1px dotted green ;"  class="form-group col-md-2 col-md-offset-0">
				   <p style="padding-top:6px"><?php echo $row231['item_amount'];?></p>
				   </div> 

				   	<div style="border: 1px dotted green ;"  class="form-group col-md-2 col-md-offset-0">
				   <p style="padding-top:6px"><?php echo $row231['price'];?></p>
				   </div> 				   

				  	<div style="border: 1px dotted green ;"  class="form-group col-md-2 col-md-offset-0">
				   <p style="padding-top:6px"><?php echo ($row231['price']*$row231['item_amount']);?></p>
				   </div> 
						
						
						
						
						<?php $glob = ($glob+($row231['price']*$row231['item_amount']));?>
						<?php endwhile; ?>
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   

				   
			

					<div>
					

		
				   	<div   class="form-group col-md-3 col-md-offset-1" style="border: 1px dotted green ; padding: 4px">
					<a class="btn btn-warning col-md-12" href="print_bill.php?view=viewsss&id=<?php echo $rows['o_id']; ?>">Print Bill</a>
				   </div> 
				   
					<div style=" border: 1px dotted green ; padding: 4px"  class="form-group col-md-4 col-md-offset-0 text-center">
				   <p class="btn  btn-block " title="H " style="background-color:teal"> <span style="font-family: paprus ;   ;  color:white ;">  Total Amount   </span></p>
				   </div> 
				   
				   	 <div style="border: 1px dotted green ; padding: 4px "  class="form-group col-md-3 col-md-offset-0">
				   <p class="btn btn-success btn-block " style="text-align:center ;"><?php echo $glob.'&nbsp;&nbsp;&nbsp;&nbsp; Pakistani Rupees';?> </p>
				   </div>
				   
				   

				    </div>
					
					
					
					
					
					
				    <!-- 9  -->
					<!-- Line  -->					

				   

				   

					
					
						</div>
								
			            </div>
						

		

  
 
				
			        

	 
	 
	 
	 

  
  
  
<script>
function myfun(){
window.print();
}
</script>





     </main>
	 

                   
	 <!--   Jump Button   --> 
	 
	 <a id="previous_page" title="Go to Previous Page" class="flash" href="#">&#10163;</a>
  
  
  
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
