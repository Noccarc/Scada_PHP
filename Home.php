<?php 
//database connection and Calculation--------------------------------------------------
if ($dbh = @new mysqli("192.168.0.108:3306","pi","admin","nocca")) {
foreach($dbh->query('SELECT SUM(Table_Clean) 
FROM Robot_data') as $row) {
echo "<tr>";
$sum=$row['SUM(Table_Clean)'] . "</td>";
echo "</tr>"; 
}
foreach($dbh->query('SELECT count(Auto_mode) 
FROM Robot_data') as $row) {
echo "<tr>";
$total=$row['count(Auto_mode)'] . "</td>";
echo "</tr>"; 
foreach($dbh->query('SELECT sum(Auto_mode=3) 
FROM Robot_data') as $row) {
echo "<tr>";
$count=$row['sum(Auto_mode=3)'] . "</td>";
echo "</tr>"; 
}

$sql=' select * from Robot_data';
 
$result = mysqli_query($dbh, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $status=$row[('Auto_mode')];
            if ($status=='4') {
                $s=$status;
                $array= array("$s");

                    }

  }
}







   }
}
elseif (!$dbh) {
    echo "Internet is not avalab";# code...
}
  
    # code...
//--------------------------------------End of Database Connection and calculations---------------------------------------
?>



</style>

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>       
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<body class="bg-light">
    <?php include 'AdminDash.php'?><!----------------------------------include header file------------------------------------->

<!--Start of Static Section-->
    <section>
        <div class="container-fluid">

              


     
  
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto ">
                    <div class="row mt-5" >
                        <div class="col-xl-4">
                            
                        </div>
                        <div class="col-xl-4">
                            
                        </div>
                        <div class="col-xl-4" align="right">
                                    <a href="Sites.php" ><img src="img1/notifications-tab.png" width="10%"></a>

                        </div>
                    </div>
                    <div class="row pt-md-5  mb-1 mt-1 ml-3">
                        <div class=" col-xl-4 col-sm-4 p-2">
                            <div class="card card-common mr-4" style="max-width: 27rem;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between"> 
                                                <img src="img1/Modules-Cleaned.png" class="icon-play">
                                        <div class="text-right ">
                                                <h5 >Panels Cleaned </h5>
                                                <h3 class="text-primary" style="font-weight: 150px; font-size: 25px"><?php echo $sum?></h3>
                                        </div>
                                       
                                    </div> 
                                               
                                        <div class="bh" style="border-top: 1px solid black">
                                        </div>
                                      
                                         Clean: 15 <br>
                                        Uncleaned: 15 <br>
                                        Total: 30 <br>
                                                                     </div>
                               
                            </div>
                            
                        </div>
                         <div class="col-xl-4 col-sm-4 p-2">
                                <div class="card card-common ml-3" style="max-width: 25rem;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between"> 
                                               <img src="img1/Robots-Running.png" class="icon-play">
                                                <div class="text-right" style="color:black">
                                                        <h5>Robot Running</h5>
                                            <h3 class="text-primary" style="font-size: 
                                            25px; font-weight: 150px"><?php echo "$count"; ?>/<?php echo $total?> </h3>

                                                </div>

                                            </div> 
                               
                                       
                                        <div class="bh" style="border-top: 1px solid black">
                                        </div>
                                      
                                         Under main:4 <br>
                                        Running:3 <br>
                                        Charging:6 <br>
                                       


                                       
                                         </div>
                                         
                                       
                                        
                                </div>     
                        </div>
                      

                        <div class="col-xl-4 col-sm-4 p-2" >
                                <div class="card card-common mr-4" style="max-width: 25rem;" >
                                        <div class="card-body" >


                                            <div class="d-flex justify-content-between " > 
                                                <img src="img1/Water-Saved.png" class="icon-play">
                                                <div class="text-right" style="color: black">
                                                        <h5 style="font-size: 20px;font-color:black">Water Saved</h5>

                                                        <h3 class="text-primary" style="font-weight: 150px; font-size: 23px">10000 Ltr</h3>
                                                        
                                                </div>
                                            </div >

                                                   

    

                                                    </div>
                                        </div>
                                            <div class="card card-body bg-white mr-4 mt-3 card-common" style="max-width: 25rem;"  >

                                                <div class="d-flex justify-content-between">
                                            <img src="img1/Modules-Cleaned.png" class="icon-play">
                                                <div class="text-right" style="color: black">
                                                        <h5 style="font-size: 20px;font-color:black">Working Hours</h5>

                                                        <h3 class="text-primary" style="font-weight: 150px; font-size: 23px">27 Hr</h3>
                                                        
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
    
                                            </div>  

                                             
                                        </div>
                                        
                                </div>
                            </a>
                            
                        </div>
                       
                    </div>

                </div>
            </div>
         
            <div class="row">
                <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto pt-md-4 mt-5">
                    <div class="row px-4">
                       
                        <div class="col-xl-12" style="margin-left:-18px">
                                <div class="card card-common  ml-4 card-responsive" style="max-width: 100rem; margin-right: 66px;" >
                                    <div class="card-body">
                                    <?php include 'weather.php'?>
       
                                 </div>
                                                                     </div>
                                       </div>


 
  
     
                                       
                                                                         </div>
                                    
                                </div>
                        </div>

                    </div>
                </div>
            </div>
     
                                                                <!-- end of static section -->
        </div>
    </section>
</body>
   <style type="style1.css"></style>

   
     <!-- end of card -->

   
    
   

