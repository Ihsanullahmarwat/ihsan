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


 $selec82 = mysqli_query($conn, "select * from hotel where hotel_id='$hotel85' ");
 
 $rows83 = mysqli_fetch_assoc($selec82);
 
		 		 

  
  // departed orders 
  
  
    if(isset($_GET['deactive']) && $_GET['deactive']=='inactive' ) {
		
		
		$queryyyy = "update order_items set status=0 where o_id=".$_GET['id'];
		
		if(mysqli_query($conn, $queryyyy )){
			
			echo "<script> alert ('Order submitted to Old Order list Successfully!...'); </script>";
		}else echo "<script> alert ('Sorry! Something went wrong ...'); </script>";
		
		
	}
	
	
	
  
	
	
	// Cancel Booking 
	
	
	    if(isset($_GET['can']) && $_GET['can']=='cancel' ) {
		
		
		$queryyyy = "update order_items  set status=2 where o_id=".$_GET['id'];
		
		if(mysqli_query($conn, $queryyyy )){
			
			echo "<script> alert ('Change Occured Successfully !...'); </script>";
		}else echo "<script> alert ('Sorry! Something went wrong ...'); </script>";
		
		
	}
  

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
  
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 
 

<script>
function print_this_page() {
 window.print();
}
</script>


				<div style="font-family: paprus  ; position:fixed; width:100% ; z-index:1 ;  " class="btn-success">
				    <h3 style="   color:white ;  padding-bottom : 10px"><span style="text-align:left">&nbsp;&nbsp;&nbsp;Welcome <?php echo $_SESSION['admin_username'] ; ?>!</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
					&nbsp;&nbsp;&nbsp;&nbsp;   New Orders  at &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&star;<?php echo $rows83['hotel_name'];?> &star; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="dashboard.php" class="btn" style="color:white ; border: 1px dotted white;  ">Home</a> </span> </h3>
				  </div>

	<div class="container-fluid  ">
	

					
					
					
					
					
	  <div class="col-md-12 col-md-offset-0 ; flash3 ;"  style="margin-top:100px;">
	

	
	
	
	
	
	
   
 
	
    <?php $conn = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );
		  
		  
		  
		  ?>
		
	
    <?php 

 
		
			$select_from312 = mysqli_query($conn, "select   client.c_id ,  client.c_name  , order_items.o_id , order_items.item_id , order_items.date , order_items.hotel_id
										
										from client join order_items
										
										on client.c_id = order_items.c_id  where status=1 AND hotel_id=$hotel85 GROUP BY o_id
     

										
										");
						
										
  

        $rows33333 = mysqli_num_rows($select_from312);
		
		

	?>
	
		
	

    <?php if($rows33333 != 0 ) { ?>
	
	
	
     <button class="col-md-12 col-md-12-2 increase_height_4_responsitivity ; flash ; label label-primary" style="outline:none ; border-radius: 10px 10px 0 0 ; margin-bottom: 20px ; margin-top: 20px ">
       <h5>
          <strong>
            <p style="font-family:	Papyrus"> <span style="font-size:25px;">N</span>ew &nbsp; <span style="font-size:30px;">O</span>rders 
	 
	</strong>
			     	</h5>
					</button>

	
 
	
	<table class="table table-responsive" style="background-color:rgba(115,114,42,0.6) ; font-family: serif ; color:white ; border-radius:10px;">


     <tr style="Background-color:teal; color:white">
     <th width="10%">Order ID</th>
     <th width="10%">Client ID</th>
     <th width="20%">Client Name</th>
     <th width="20%">Order Date</th>
     <th width="8%">Action</th>
     <th width="8%">Action</th>
     <th width="10%">Details</th>
     </tr>
   
     <?php while ($rows = mysqli_fetch_array($select_from312)) : ?>
     <tr>
     <td> <?php echo $rows['o_id']; ?> </td>
     <td> <?php echo $rows['c_id']; ?> </td>
     <td> <?php echo $rows['c_name']; ?> </td>
     <td> <?php echo $rows['date']; ?> </td>
	 <td> <a class="btn btn-danger col-md-12" href="new_orders.php?can=cancel&id=<?php echo $rows['o_id']; ?>">Cancel ?</a></td>
     <td> <a class="btn btn-warning col-md-12" href="new_orders.php?deactive=inactive&id=<?php echo $rows['o_id']; ?>">Do Departure</a></td>
     <td> <a class="btn btn-success col-md-12" href="specific_order_detials.php?view=viewsss&id=<?php echo $rows['o_id']; ?>">View Full Details</a></td>

	 <?php endwhile; ?>
     </tr>

   </table>
   
	<?php } else {?>
	
	
	     <button class="col-md-12 col-md-12-2 increase_height_4_responsitivity ; flash label label-primary" style="outline:none ; border-radius: 10px  ; margin-bottom: 20px ; margin-top: 20px ">
       <h5>
          <strong>
		  <p style="font-family:	Papyrus"><span style="font-size:20px;">N</span>o &nbsp; <span style="font-size:20px;">N</span>ew &nbsp; <span style="font-size:20px;">O</span>rders </p>
			</strong>
			     	</h5>
					</button>

	
	
	
	<?php }    ?>
	
	

	
   
  


     </main>
	 

	 


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>