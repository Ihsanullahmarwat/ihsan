
 <?php 
 session_start();
 



error_reporting("E-NOTICE");
 $conn = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );

			
      $conn2 = mysqli_connect("localhost", "root", "", "ihsan") 
          or die("Connection failed :: " . mysqli_error() );          


		  
		 $admin_name = $_SESSION['admin_username'];
		$admin_pass = $_SESSION['admin_password'];
		
		
 $select3240 = mysqli_query($conn2, "select * from admin where username='$admin_name' AND password='$admin_pass'");
 
 $rows67 = mysqli_fetch_assoc($select3240);
 
		 $hotel85 = $rows67['hotel_id']; 

  

 
 if(isset($_POST['submit28']) ) 
 {

 
   $item_name = $_POST['item_name'];
   $hotel_id = $hotel85;
   $price = $_POST['price'];
   $description  = $_POST['description'];
   $presence  = $_POST['availability'];

 $insert_into2 = "INSERT INTO menu (item_name ,hotel_id, price , description , presence ) VALUES ( '$item_name' ,'$hotel_id' ,'$price' , '$description','$presence') ";
 
 if(mysqli_query($conn2, $insert_into2)) {
    echo "<script> alert ('New dish  added to Menu Successfully.'); window.location.assign('enable_disable_items.php'); </script>";
 } else {
     echo "<script> alert ('Error in insertion.') </script>";
 }


 }

 
 
 


  ?>




<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                   <title>Gandhara Snow Peaks &reg;</title>
                    <!-- Bootstrap -->
                     <link href="css/bootstrap.min.css" rel="stylesheet">   
                       <!-- External CSS Link-->
                         <!-- External CSS Link-->

						   
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

.flash4
{
background:transparent;
margin-top:10px;
margin-bottom:10px;
 background-color:rgba(100,12,200,0.5);
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


.body {
        background-image: url("images/malam.jpg");
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
    top: 54%;
    left:48.5%;
    background-color: white;
    color: yellow;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
	border-radius: 100%;
}
#previous_page:hover {
    background-color: green;
    color: white;
	
}
	  </style>
<!-- footer CSS-->
<!-- footer CSS-->
<!-- footer CSS-->



 </head>
  <body class="body">
  
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 <!-- Java Script Section -->
 
   <!--   JavaScript for Top Button  it have style on the top also   -->
  



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

 
   <body>

  
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




  
 
						<br>

	
<div class="container"> 


 
	    
						<br>
						<br>
						<br>

	 
	 
<div class=" col-md-6 col-md-offset-3 ; flash4">

	 
	  				<form method="post" enctype="multipart/form-data"  >
				
					<br>
				<br> 			
				 			   
				   	<div class="form-group col-md-6 col-md-offset-3">
					<p class="btn ; flash" style="text-align:center ; font-size: 20px ; font-family: serif;"  >Add a New Dish to Menu</p>
 
				   </div> 
				
				
				<br>
				<br> 
				
				    <!-- 1 -->
					<!-- Line  -->
	 
				   
 
 			   
				   	<div class="form-group col-md-10 col-md-offset-1">
				   <input type="text" name="item_name"  placeholder="Item Name"   class="form-control" required >
				   </div> 

					 <div class="form-group col-md-10 col-md-offset-1">
				   <input type="text" name="price"  placeholder="Price"  class="form-control" required >
				   </div> 
				   
				   
				   	<div class="form-group col-md-10 col-md-offset-1">
				   <input type="text" name="description"  placeholder="Full Description"    class="form-control" required >
				   </div> 				   
				   
					<div class="form-group col-md-10 col-md-offset-1" style="color:white">
					Availability:&nbsp;&nbsp;&nbsp;&nbsp;
				   Yes : <input type="radio" name="availability"  value="yes"   class=" " required  checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   No: <input type="radio" name="availability"  value="no"   class=" " required >				   
				   </div> 	
 	
				   				   
				    <div>
					<div class="form-group col-md-5 col-md-offset-1">
				   <button type="reset" name="Reset" value="reset" class="btn btn-info btn-block">Reset</button>
				   </div>
					 <div>
				   
				   
				   
				   <div>
				   	<div class="form-group col-md-5 col-md-offset-0">
				   <button type="submit" name="submit28" class="btn btn-success btn-block">Submit</button>
				   </div> 
				    </div>
					

				   
				   <br><br>
				   
				   
				   </form>
	  
	  

	</div>
	</div>
	</div>
	</div>
  

     </main>
	 


	 <!--   Jump Button   -->                    
	 <!--   Jump Button   -->                    
	 <!--   Jump Button   --> 
	 
	 <a id="back2Top" title="Back to top" class="flash" href="#">&#10163;</a>
	 <a id="previous_page" title="Back to top" class="flash" href="#">&#10163;</a>
	 

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>
