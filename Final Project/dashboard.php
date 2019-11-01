<?php

session_start();

//session check
if(!isset($_SESSION['admin_username'])){
	
		echo "<script> window.location.assign('login.php'); </script>";
	
}

 $conn = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );
 
		  
		 		$admin_name = $_SESSION['admin_username'];
		$admin_pass = $_SESSION['admin_password'];
		
		
 $select3240 = mysqli_query($conn, "select * from admin where username='$admin_name' AND password='$admin_pass'");
 
 $rows67 = mysqli_fetch_assoc($select3240);
 
		 $hotel85 = $rows67['hotel_id']; 


 	
	$select66 = mysqli_query($conn, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_id , order_items.date , order_items.hotel_id
										
										from client join order_items on client.c_id = order_items.c_id  where status=0 AND hotel_id=$hotel85 GROUP BY o_id ");
 
 	$select67 = mysqli_query($conn, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_id , order_items.date , order_items.hotel_id
										
										from client join order_items on client.c_id = order_items.c_id  where status=2 AND hotel_id=$hotel85 GROUP BY o_id ");
 
 	$select68 = mysqli_query($conn, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_id , order_items.date , order_items.hotel_id
										
										from client join order_items on client.c_id = order_items.c_id  where status=1 AND hotel_id=$hotel85 GROUP BY o_id ");
 
 
  
 	$select87 = mysqli_query($conn, "select   * from menu where hotel_id='$hotel85' and presence='yes'");
 	$select88 = mysqli_query($conn, "select   * from menu where hotel_id='$hotel85' and presence='no'");
 	$select89 = mysqli_query($conn, "select   * from menu where hotel_id='$hotel85'");
 
 
 
 
 $rows66 = mysqli_num_rows($select66);
 $rows67 = mysqli_num_rows($select67);
 $rows68 = mysqli_num_rows($select68);
 $rows87 = mysqli_num_rows($select87);
 $rows88 = mysqli_num_rows($select88);
 $rows89 = mysqli_num_rows($select89);



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
                         <!-- External CSS Link-->
                           <link rel="stylesheet" href="stylesheet.css">
						   <!-- Favicon   -->
								<!-- Favicon   -->
								<link rel="shortcut icon" type="image/png" href="images/favicon.png">
								
									
									<!-- slider and back2Top button needs javascript libraries -->
								<!-- javascript libraries  -->
								    <script src="js/jquery.js"></script>
									<script src="js/bootstrap.min.js"></script>
	

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

/*.flash3:hover{
background-color: rgba(0, 255, 25, 0.4);
 box-shadow:0 0 60px yellow inset;
 border:1px dotted white;
}
</style>


<style>
.body {
        background-image: url("images/malam.jpg");
} 





.table tr:hover{
	background-color:gray;
	color: black;
	transition:background-color, 0.5s linear;
}



</style>






 </head>
  <body class="body">

<div class="container ">
	  <div class="col-md-12 col-md-offset-0 ;">




	

  
  
						<br>
						<br>
						<br>

  
  
  
  
  
  
			<div style="font-family: paprus ; ">
			
  					<div class="form-group col-md-8 col-md-offset-2 ; flash3" style="text-align:center ; text-size: 25px">
				   <a class="btn"  style="font-size: 25px ; text-decoration:none; color:WHITE" >Welcome <?php echo $_SESSION['admin_username'] ; ?>! &nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" class="btn btn-danger  ; flash">Log Out</a>  </a>
				   </div>
				   
				   	<div class="form-group col-md-4 col-md-offset-2 ">
				   <a href="new_orders.php"class="btn btn-success btn-block">NEW ORDERS &nbsp;&nbsp;&nbsp;
				   <span style=" background-color: red; color: white; " class="badge"><?php echo $rows68;?></span></a>
				   </div>
				   
				   	<div class="form-group col-md-4 col-md-offset-0 ">
				   <a href="old_orders.php"class="btn btn-success btn-block">OLD ORDERS&nbsp;&nbsp;&nbsp;
				   <span style=" background-color: red; color: white; " class="badge"><?php echo $rows66;?></span>
				   </a>
				   </div>
				   
			    	<div class="form-group col-md-4 col-md-offset-2 ">
				   <a href="canceled_orders.php"class="btn btn-success btn-block">CANCELED ORDERS&nbsp;&nbsp;&nbsp;
				   <span style=" background-color: red; color: white; " class="badge"><?php echo $rows67;?></span>
				   </a>
				   </div>
				   

				   
					<div class="form-group col-md-4 col-md-offset-0">
				   <a href="enable_disable_items.php"class="btn btn-success btn-block">MANIPULATE MENU&nbsp;&nbsp;&nbsp;
				   <span style=" background-color: blue; color: white; " class="badge"><?php echo $rows87;?></span>&nbsp;+
				   <span style=" background-color: gray; color: white; " class="badge"><?php echo $rows88;?></span>&nbsp;=&nbsp;
				   <span style=" background-color: red; color: white; " class="badge"><?php echo $rows89;?></span>
				   </a>
				    </div>
					
				   <div class="form-group col-md-8 col-md-offset-2">
				   <a href="add_new_item.php"class="btn btn-success btn-block">ADD A NEW ITEM TO MENU</a>
				   </div>				   
				   
				  
				   
				   
				   

				   
				   
 
				   
		    </div>
  
  
  
  
  
  
  
  
  
  
  
  
			        

 </div><!--   9909   -->
 </div>

 
                 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>