<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
	.body{
	color: 	#C8C8C8	rgb(200,200,200)
	}
	.h5{

	}
	  
	 
		<?php include 'card.css' ?>
	</style>
	<title></title>
</head>
<body style="background-color: #F0F0F0">
	
<?php
							$db = mysqli_connect("localhost","root","","demo");
							if($qw="select status from robot where Robot_no=1"){
      						$qq = mysqli_query($db,$qw);
      						
     						 while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC)) 
						    {
						    	?>
						    	<?php
                            }
						} else {
    							echo "0 results";
						}
						?>

                  
					<?php include 'headerfile.php' ?>

       				 <div class="col-xl-10 col-lg-9 col-md-8 pt-1  ml-auto ">
           					
       				 			<div class="row pt-4 px-4">
       				 						
       				 					
            						<div class="col-xl-4 col-sm-6 p-2">
                   							 <a href="Robot.php?id=1" style="text-decoration:none">
                       										 <div class="card card-common ml-auto" style="border:0;" >
                           											    <div class="card-header">
                                											<div class="d-flex justify-content-between">
                                							<img src="img1/robotsrunning.png" class="mr-3" style="width: 15%" >
                                												
                                														  	<div >
                                       							<h5 style="font-family: calibri;font-size: 22px;" >Robots Running</h5>
                                        									<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>


                                    										
                                    														
                                											</div>
                            											</div>
                            											<div class="card-body">
                            												<?php include 'progess.php'?>
                            											</div>>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						 <div class="col-xl-4 col-sm-6 p-2">
                   							 <a href="Visualization.php" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0;" >
                           											    <div class="card-header">
                                											<div class="d-flex justify-content-between">
                                							       <img src="img1/modules cleaned.png" class="mr-3"  style="width: 20%" >

                                														  	<div>
                                       							<h5 style="font-family: calibri;font-size: 22px;" >Modules Cleaned</h5>
                                        						<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>


                                    										
                                    														
                                											</div>
                            											</div>
                            								<div class="card-body">
                            								<?php include 'wind.php'?>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						<div class="col-xl-4 col-sm-6 p-2 ">
                   							 <a href="Visualization.php" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0;">
                           											    <div class="card-body">
                                											<div class="d-flex justify-content-between">
                                														  	<div class=" nav-item-color ">
                                       							<h5 style="font-family: calibri;font-size: 22px;" >water saved</h5>
                                        								<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>

                                			<img src="img1/watersaved.png" class="mr-3"  style="width: 12%" class="ico-responsive">

                                    										
                                    														
                                											</div>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						</div>
               						<div class="row pt-3 px-4">
               							
               					
               				 <div class="col-xl-4 col-sm-6 p-2">
                   							 <a href="Robot.php" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0;">
                           											    <div class="card-body">
                                											<div class="d-flex justify-content-between">
                                														  	<div class=" nav-item-color ">
                                       							<h5 style="font-family: calibri;font-size: 22px;" >Capacity With Robot</h5>
                                        																	<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>

                                			<img src="img1/capacity.png" class="mr-3" style="  width: 10%" class="ico-responsive">

                                    										
                                    														
                                											</div>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						











               						<div class="col-xl-4 col-sm-6 p-2">
                   							 <a href="Robot.php" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0;" >
                           											    <div class="card-body">
                                											<div class="d-flex justify-content-between">
                                														  	<div class=" nav-item-color ">
                                       							<h5 style="font-family: calibri;font-size: 22px;" >Temperature</h5>
                                        						<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>

                                			<img src="img1/temperature-8.png" class="mr-3" style="width: 10%" class="ico-responsive">

                                    										
                                    														
                                											</div>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						<div class="col-xl-4 col-sm-6 p-2">
                   							 <a href="Robot.php" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0;" >
                           											    <div class="card-body">
                                											<div class="d-flex justify-content-between">
                                														  	<div class="text-center nav-item-color ">
                                       							<h5 style="font-family: calibri;font-size: 22px;" >Wind Speed</h5>
                                        																	<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>

                                				<img src="img1/wind.png" class="mr-3" style="width: 18%" class="ico-responsive">

                                    										
                                    														
                                											</div>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						</div>

               						 <div class="row mt-3 pt-3 px-4">
               						 	
               						
               						  <div class="col-xl-12 col-sm-6 p-2">
                   							 <a href="#" style="text-decoration:none">
                       										 <div class="card card-common" style="border:0; height: 200px">
                           											    <div class="card-body">
                                											<div class="d-flex justify-content-between">
                                										<img src="wind-8.png" class="mr-3" style="width: 10%">

                                    														<div class="text-right nav-item-color ">
                                       															<h5 style="font-family: calibri;
		font-size: 22px;">Wind Speed</h5>
                                        																	<h4 style="color: #0084c4;"> 6/20</h4>
                                    														</div>
                                											</div>
                            											</div>

                        									  </div>
                       
                   							   </a>

               						 </div>
               						 
               						 </div>
               			</div>


               				

</body>
</html>