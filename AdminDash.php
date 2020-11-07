
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
<?php
 if(!isset($_SESSION)) {
session_start();
}
?>






<html lang="en">
  <head>
   <style type="text/css">
     



h5{

font-size: 25px;
font-family: calibri;
font-weight: 200;


}

h3{
    font-size: 35px;
    font-weight: 100px
}


.sidebar{

    background-color:#011a27    ;
   
   

}
.sidebar  h4{
  color: white;
 font-size: 18px;
font-family: calibri;
font-weight: 200;
font-size: 18px;

}




.top-navbar{
    background-color: white;
     list-style-type: none;
  margin: 0;
  padding: 0;
    
}
.navbar-brand{
    margin:none;
    padding:0;
}
.nav-link{
    width:160px;
    margin-bottom: 10%;
    margin-left:20px; 

}
.nav-link:hover{


}
.navbar-nav{
    margin-left: 10px;
}
.card-common{
    border: none
   
}
.card-common:hover{
    box-shadow: 1px 3px 5px;
    transform: translateY(-1px)
}

.icon-play{
 
    display: inline-block;
    height: 16%;
    width: 16%;
  }
  
 .top-navbar{
    background-color: white;
    height: 50px;
 }


  

   </style>
<script type="text/javascript">
    
</script>

    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script
    src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Montserrat|Titillium+Web&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  </head>
  <body>
      <!-- navbar -->

      <!-- end navbar -->
      
     <nav class="navbar navbar-expand-md navbar-light">
         <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar"   aria-expanded="true" aria-controls="mynavbar">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="myNavbar">
             <div class="container-fluid">
                 <div class="row">
                     <!-- sidebar-->
                     <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 sidebar fixed-top " style="width: 25vh; height: 100vh;">
                            <a href="#" style="margin-left:-15px;" > 
                            </a>
                         <ul class="navbar-nav flex-column nav-color nav nav-sidebar mt-5">
                                <li class=" mt-5 active">
                                    <a href="Home.php" class="nav-link sidebar-link">
                                <h4>   <img src="img1/home (1).png" width="12%" class="mr-1"><span  class="ml-4">Home</span></img></h4> </a>
                                </li>
                                <li class="nav-item mt-1 ">
                                        <a href="RobotData.php" class="nav-link sidebar-link">
                                 <h4><img src="img1/Robots.png" width="12%" class="mr-1"><span class="ml-4">Robots</span></img> </h4>  </a>
                                </li>
                                <li class="nav-item  mt-1 ">
                                        <a href="Visualization.php" class="nav-link sidebar-link">
                                <h4>   <img src="img1/Satistics.png" width="12%" class="mr-1"><span class="ml-4">Statistics</span></img></h4>   </a>
                                    </li>
                                    <li class="nav-item  mt-1">
                                            <a href="map.php" class="nav-link  sidebar-link ">
                                  <h4> <img src="img1/Maps (1).png" width="12%" class="mr-1"><span class="ml-4">Maps</span></img></h4>   </a>
                                </li>
                                <li class="nav-item  mt-1 ">
                                        <a href="#" class="nav-link   sidebar-link">
                                  <h4 class="side-link"><img src="img1/Charts (2).png" width="12%" class="mr-1"><span class="ml-4">Chart</span></img></h4>   </a>
                                    </li>
                                    <li class="nav-item  mt-1">
                                            <a href="info.php" class="nav-link  sidebar-link ">
                                 <h4> <img src="img1/home.png" width="12%" class="mr-1"><span class="ml-4">Info</span></h4>  </a>
                                </li>
                                <li class="nav-item  mt-1 ">
                                        
                                    </li>
                                <li class="nav-item  mt-5" >
                                            <a href="login.php" class="nav-link  sidebar-link">
                                  <h4>  <img src="log out logo.png" width="12%" class="mr-1"><span class="ml-4">Log Out</span></img></h4> </a>
                                </li>
                               
                         </ul>

                     </div>
                     
                     <!-- end of side bar-->
                     <!-- top navbar -->
                     <div class=" col-xl-12 col-lg-10 col-md-10 ml-auto fixed-top top-navbar"> 
                        <div class="row">
                           
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 " align="center">
                                  <a href="#" style="" > 
                                    <img class="hello" src="img1/logo.png"  style="margin-top: -20px; margin-left: -73px;  " >
                            </a>    

                            </div>

                            <div class="col-xl-7" style="margin-top: 20px; margin-left: 20px;"  >
                                <h5 style="">  Welcome   </h5> 

                            </div>
                            <div class="col-xl-1" align="right" style="border-right: 1px solid black; height: 50px;">
                                
                                       <h5 style="font-size: 16px;"> 
                                    <?php echo date("D")?>
                                   <?php echo date("d-M-Y"); 

                                    
                                    echo " </br>"; 
  
                            date_default_timezone_set('Asia/Kolkata'); 
                            echo "" . date("h:i");?></h5>
                            </div>
                            <div class="col-xl-1">
                                
                                    <h5 style="font-size: 16px;">Pune</h5>
                                    <h5 style="font-size: 16px;">5MW</h5>
                            </div>
                        </div>
                       

                         
                            
                                 
                         </div>

                     </div>

                
                 </div>
             </div>
         </div>

     </nav> 
   
    
  </body>
</html>
