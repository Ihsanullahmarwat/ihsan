<?php  

  session_start();  

  
$host="localhost";
$user="root";
$password="";
$db="ihsan";

$con = mysqli_connect($host,$user,$password,$db);


if(isset($_POST['submit'])){

   $uname=$_POST['username'];
   $password=$_POST['password'];


   $result=mysqli_query($con,"select * from admin where username='$uname'AND password='$password'");

   if(mysqli_num_rows($result)==1){
	   
	   	 $_SESSION['admin_username'] = $uname; 
		$_SESSION['admin_password'] = $password;
		
 
	  header('Refresh:4,url=dashboard.php');

   	}
   	  else{
   	  	echo "<script>alert('Sorry ! Your username or password is incorrect. Try again');window.location.assign('login.php');</script>";
   	  	exit();
   	  }
   }



?>






<!DOCTYPE html>
<html>
<head>


	<title>Login</title>
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
	
<style>
	body{
		margin:0 auto;
		background-image: url(sajid.jpg);
		background-repeat: no-repeat;
		background-position: fixed;
		background-size: 100% 100%;
	}

	.container{

		width: 400px;
		height:450px;
		text-align: center;
		margin:160px auto;
		background-color: rgba(44,62,80,0.7);
		border-radius:4px;

	}

	.container img{

		width: 150px;
		height:150px;
		margin-top: -60px;
		margin-right: 30px;
		text-align:center;
		border-radius: 50%;
	}


.container form{

	padding: 50px;
}

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

#pro_ig{margin-top:20% ; width: 60px; height: 60px; box-shadow:   0 0 40px blue; border:2px dotted green; background-color:white;}
@media screen and (min-width: 200px) and (max-width: 450px) {
	
	
	.container{

		width: 300px;
		height:300px;
		text-align: center;
		margin:160px auto;
		background-color: rgba(44,62,80,0.7);
		border-radius:4px;

	}

	.container img{

		width: 100px;
		height:100px;
		margin-top: -40px;
		margin-right: 30px;
		text-align:center;
		border-radius: 50%;
	}


.container form{

	padding: 30px;
}

 

#pro_ig{margin-top:20% ; width: 40px; height: 40px; box-shadow: 0 0 30px green; border: 1.990px dotted blue;}


   
}

</style>

</head>
<body> 

					<?php
			
			if(!isset($_SESSION['admin_username'])){
	
			?>
			
	<div class="container">
		<img src="download2.png">
		<form method="POST" action="#">
		

 
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Your User Name">

				
			</div>
			<div class="form-group">
			
				<input type="password" class="form-control" name="password" placeholder="Enter Your Password">
			</div>
			
			


			
			
			<div class="form-group">
			<input type="submit" class="form-control btn-success" name="submit" value="LOGIN">
			</div>			
			
 
		</form>
		
		
		
					<?php }if(isset($_SESSION['admin_username'])){ ?>
					<?php  $res = mysqli_fetch_assoc($result); ?>
					<?php  $res_set =  $res['id']; ?>
					<?php  $user_set =  $res['username']; ?>

						
						<?php $pro_pho = mysqli_query($con , "select pro_photo from admin where id=".$res_set);?>
						<?php $pro_pho_re = mysqli_fetch_assoc($pro_pho);?>
						<?php $pro_pho_set = $pro_pho_re['pro_photo'];?>
			
							<div class="container">
					<img src="images/<?php echo $pro_pho_set;?>">
					<form>
					
					
					<p style="text-align:center;font-size: 25px; color:white ; font-family: agency fb;">Welcome <span style="font-family: serif; font-size: 28px;"> <?php echo $user_set;?> </span>!</p>

 

						<img src="loading3.gif" id="pro_ig" style="">
						
			 
					</form>
			

			
			<?php } ?>
		
		
		
	</div>
	

</body>
</html>