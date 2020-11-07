<?php
//--------------Session----------------------------------------------------------------------------------
session_start();
if (isset($_request['username'])) {
	# code...

$username=$REQUEST['username'];
$_SESSION['uname']=$username;
header('location: Dashb.php');
}
//--------------------Ed of Session-----------------------------------------------------------------------

//----------------database connectivity for login page----------------------------------------------------
$db = @mysqli_connect("192.168.0.108:3306","pi","admin","nocca");
$error = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and password= '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
      	 $_SESSION['username']=$myusername;
        header("location: Home.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
      
   }
   //--------------------Connection Close-----------------------------------------------------------------------
  
?>
<html>
<style type="text/css">
	.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


</style>
   <head>
     <body class="bg-light">
     	<!-- -------------------Static section Start---------------------------------------------------------------->
     	
  

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<div class="row "  style="margin-top: 140px">
		<div class="col-md-4 mx-auto  ">
			
			<div align="center" class="bg-white">

			</div>

						
							<div class="card mt-2 shadow p-3 mb-5 bg-white rounded" >
								<div class="card-body" class="bg-red">
									 <form action="" method = "post" class="pt p-b-30"  >
					 	<div class="form-group" align="center" >
					 									<img src="img1/Nocca-logo.png" width="25%" >

					 			<h5>Welcome</h5>
					 	    </div>      

					 	</div>
		               	<div class="form-group pt-3" >
		               		   			               		
			                  <input class="form-control"  style="font-size:15px" type="text" name="username" placeholder="Username" required id="inp" />	

								</div>
		               	<div class="form-group pt-3">
		                  <input class="form-control" style="font-size:15px"  type="password" name="password" placeholder="Password" required id="ip2" />
		              </div>
		               	<div class="form-group pt-2">
		                  	<input  class="btn btn-dark"style="font-size:16px"  type="submit" value="Login" id="ip3" />
	                    </div>
		               </form>
		            
								</div>
								
							</div>
						
					   </div>
		               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
		               	<?php 
		               		if($error != null)
		               			echo $error;
		       			?>               		
		               	</div>
								
	      		
			<!----------------------------------------------End of Static section---------------------------------------------- -->
		</div>
   </body>
</html>