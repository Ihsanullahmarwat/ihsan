<?php 

session_start();

//session check
if(!isset($_SESSION['admin_username'])){
	
		echo "<script> window.location.assign('login.php'); </script>";
	
}

 
          
 $conn = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );

			
      $conn2 = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );          


		  
		 		$admin_name = $_SESSION['admin_username'];
		$admin_pass = $_SESSION['admin_password'];
		
		
 $select3240 = mysqli_query($conn2, "select * from admin where username='$admin_name' AND password='$admin_pass'");
 
 $rows67 = mysqli_fetch_assoc($select3240);
 
		 $hotel85 = $rows67['hotel_id']; 



 $selec82 = mysqli_query($conn2, "select * from hotel where hotel_id='$hotel85' ");
 
 $rows83 = mysqli_fetch_assoc($selec82);
 
  

  
  
  
  
    if(isset($_GET['dis']) && $_GET['dis']=='able' ) {
		
		
		$queryy  = "update menu set presence='no' where item_id=".$_GET['i_id'];
		
		if(mysqli_query($conn, $queryy)){
			
			echo "<script> alert ('item disabled Successfully!...'); </script>";
		}else echo "<script> alert ('Sorry! Something went wrong ...'); </script>";
		
		
	}
	
	
	
	  
    if(isset($_GET['en']) && $_GET['en']=='ena' ) {
		
		
		$queryy  = "update menu set presence='yes' where item_id=".$_GET['i_id'];
		
		if(mysqli_query($conn, $queryy)){
			
			echo "<script> alert ('item enabled Successfully!...'); </script>";
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
 
	transition:background-color, 0.2s linear;
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


				<div style="font-family: paprus  ; position:fixed; width:100% ; z-index:1 ; background-color:darkblue;  " >
				    <h3 style="   color:white ;  padding-bottom : 10px"><span style="text-align:center;">&nbsp;&nbsp;&nbsp;Welcome <?php echo $_SESSION['admin_username'] ; ?>!</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
					&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					&star; &nbsp; Menu at <?php echo $rows83['hotel_name'];?> &nbsp;&star; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="dashboard.php" class="btn" style="color:white ; border: 1px dotted white;  ">Home</a> </span> </h3>
				  </div>

	<div class="container-fluid  ">
	

					
					
					
					
					
	  <div class="col-md-12 col-md-offset-0 ; flash3 ;"  style="margin-top:100px;">
	

	
	
	
	
	
	
   
 
	
    <?php $conn2 = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );
		  
		  
		  
		  ?>
		
	
    <?php 

	/*

	$select_from = mysqli_query($conn2, "select   menu.item_id ,  menu.item_name,  menu.hotel_id, menu.price  , order_items.c_id  , order_items.O_id, c.c_name
										
										from menu join order_items
										
										on order_items.item_id = order_items.c_id
										
										inner join client c on c.c_id = order_items.item_id
										
										");


		$numb = mysqli_fetch_array($select_from);
										
			$select_fr = mysqli_query($conn2, "select DISTINCT o_id from order_items");
     

										
									while($sdlkfj = mysqli_fetch_assoc($select_fr)){
										 echo $sdlkfj['o_id']."<br>";
									}

		*/
		
		/* Association table data */
		
			$select_from312 = mysqli_query($conn2, "select * from menu where hotel_id='$hotel85'");
						
										
// where c_name='Sajid Ali Gulzar' //where o_id=2  

$rows33333 = mysqli_num_rows($select_from312);
		
		

	?>
	
		
	

    <?php if($rows33333 != 0 ) { ?>
	
	
	
     <button class="col-md-12 col-md-12-2 increase_height_4_responsitivity ; flash ; label label-primary" style="outline:none ; border-radius: 10px 10px 0 0 ; margin-bottom: 20px ; margin-top: 20px ">
       <h5>
          <strong>
            <p style="font-family:	Papyrus"> <span style="font-size:25px;">H </span>otel&nbsp; <span style="font-size:30px;">M</span>enu
	 
	</strong>
			     	</h5>
					</button>

	
 
	
	<table class="table table-responsive" style="background-color:rgba(115,114,42,0.6) ; font-family: serif ; color:white ; border-radius:10px;">


     <tr style="Background-color:teal; color:white">
     <th width="8%">Item ID</th>
     <th width="15%">Item Name</th> 
     <th width="5%">price</th>
     <th width="5%">presence</th>
     <th width="25%">Discription</th>
     <th width="9%">Action</th>
     <th width="9%">Action</th>
     <th width="9%">Action</th>
 
 
     </tr>

 
     <?php while ($rows = mysqli_fetch_array($select_from312)) : ?>
	 
	 	    	 <?php $vl9 = "sajid" ;$vl6 = "sajid" ; $vl4="fazal" ; $vl5="ihsan"; $v18 ="Disable"; if($rows['presence'] =="no"){ $vl9 = "green"; $vl6 = "rgba(200,10,100,0.5);"; $v18 ="Enable";  $vl4="en" ; $vl5="ena"; } else{ $vl9 = "red"; $v18 ="Disable";  $vl6 = "transparent"; $vl4="dis" ; $vl5="able";} ?>
 

     <tr style="background-color:<?php echo $vl6;?>">
     <td> <?php echo $rows['item_id']; ?> </td>
     <td> <?php echo $rows['item_name']; ?> </td>
     <td> <?php echo $rows['price']; ?> </td>
     <td> <?php echo $rows['presence']; ?> </td>
     <td> <?php echo $rows['description']; ?> </td>
 

	 <td> <a class="btn btn-danger col-md-12" href="enable_disable_items.php?can=cancel&i_id=<?php echo $rows['item_id']; ?>">Delete</a></td>
     <td> <a class="btn btn-info col-md-12" href="update_menu.php?upda=upda2&i_id=<?php echo $rows['item_id']; ?>">Update Record</a></td>
     <td> <a class="btn   col-md-12" style="background-color:<?php echo $vl9;?> ; color:white;" href="enable_disable_items.php?<?php echo $vl4; ?>=<?php echo $vl5; ?>&i_id=<?php echo $rows['item_id']; ?>"><?php echo $v18; ?></a></td>
 
 

	 <?php endwhile; ?>
     </tr>

   </table>
   
	<?php } else {?>
	
 

	     <button class="col-md-12 col-md-12-2 increase_height_4_responsitivity ; flash ; label label-primary" style="outline:none ; border-radius: 10px   ; margin-bottom: 20px ; margin-top: 20px ">
       <h5>
          <strong>
            <p style="font-family:	Papyrus"> 	<span style="font-size:20px;">N</span>o &nbsp;<span style="font-size:25px;">H </span>otel&nbsp; <span style="font-size:30px;">M</span>enu
	 
	</strong>
			     	</h5>
					</button>
	
	
	<?php }    ?>
	
	
	
	
   <!--Modal-->
   <!--Modal-->
   <!--Modal-->
   
   <!-- Trigger the modal with a button -->
     <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog" >
        <div class="modal-dialog">
         <!-- Modal content-->
           <div class="modal-content " >
             <div class="container-fluid col-md-12 col-md-offset-0 ">
              <h6>
                </h6>
                 <h5 class="col-md-12 col-md-12-5">
                 <br><br><br>
	              <strong>Vicancies</strong><br><br><br><br><br><br>
	             Sorry! Currently No Vacancies<br><br><br><br><br><br><br><br>
	            <p class="btn btn-danger col-md-12-1" data-dismiss="modal"> Close &times; </p>
              <br>
            <br> <br>
           </h5>
         </div>
        </div>
     </div>
   </div>
   
  


     </main>
	 

	 


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
