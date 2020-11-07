<?php 
$conn = new mysqli("192.168.0.108:3306","pi","admin","nocca");//Databse Connectivity
if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
if ($id=$_GET['id']) {
  # code...
$sql = "SELECT * FROM Robot_data where Robot_No=$id";     //query for select Data
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

//function cal($table_no,$Op_Hour,$B_p) {
      $Robot_No=$row['Robot_No'];
    $table_no=$row['Table_Clean'];
        $Op_Hour=$row['Operational_Hour'];
        $Date=$row['Date'];
  }
}
}

if (isset($_POST['mode'])&&isset($_POST['action'])&&isset($_POST['id']) ){
$mode=$_POST['mode'];
  $action=$_POST['action'];
  $id=$_POST['id'];
 if ($mode=='T') {
 $SQL = "UPDATE Robot_data SET Auto_mode= $action where Robot_No=$id";
}
elseif ($mode=='A') {
  $SQL = "UPDATE Robot_data SET  Theft_mode= $action where Robot_No=$id";
}
elseif ($mode=='D') {
  $SQL = "UPDATE Robot_data SET Manual_mode= $action where Robot_No=$id";
}
      $result = mysqli_query($conn,$SQL);
}
?>
<!DOCTYPE html>
<html>
<head>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   
	 <script type="text/javascript">
    

      $(document).ready(function(){ 

           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
            
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  


                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  

                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  




 </script> 
		        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

	<style type="text/css">
	#table-wrapper {
  position:relative;
}




#table-scroll {
  height:750px;
  width:230px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:230px;

}
#table-wrapper1 table {
  width:600px;

}
#table-wrapper table * {
  
}
#table-wrapper table thead th .text {

  position:absolute;   
  top:20px;
  height:30px;
  width:35%;
  border:1px solid red;
}
	
	.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 20px;
  border-radius: 50px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: grey;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 15px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}


input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 0px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 10px;
}

.slider.round:before {
  border-radius: 50%;
}

 td{
        padding: 10px; /* Apply cell padding */
        margin-left: 5px;
    }

		
	</style>
  <script type="text/javascript">
    
   
function sortTable(n) {
  console.log(n);

  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase()> y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done ANDw the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

  </script>
  <?php include 'AdminDash.php' ?> <!--Include the Header File-->
  <?php include 'Robo1.php'?>
  <!--Include the Javascript File-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
     
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>
	<script
    src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body class="bg-light">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>

        <div class="col-xl-2 col-lg-9 col-md-8 " style="margin-left: 330px">

		        <div class="justify-content-between">
		        	<div class="row  mb-1 ">
                 <div class="col-xl-2 pt-3  ">

                 <div class="d-flex justify-content-between">
                 	<form class="mt-5" action="RobotData.php" method="post" >
        <h5 align="center" style="font-size: 16px"><input type="text" id="search" name="search" style="width: 100px;   border-radius:4px; border:none;" placeholder="Search"></h5>

        				
        			
                         </form>
                         
									</div>
       
          </div>
        	
					</div>
          <!--Take the table wrapper for Wrap the data into the table-->
	<div id="table-wrapper">
		<div id="table-scroll">
			
		<div  id="customers">
        <input type='hidden' id='sort' value='asc'>

	<table class="table-hover"  id="myTable2"  style=" border-collapse: collapse; border-color: red; border-bottom: 30px; border-top: 30px" >
	
		
	
	<tr >
		<th >
             <h5 onclick="sortTable(0)" style="font-size: 18px; font-weight: 100px">Robot No</h5>
  
		</th>
      <th >
             <h5 onclick="sortTable(0)" style="font-size: 18px; font-weight: 100px">Date</h5>
  
    </th>
	
	</tr>



<?php


							$db = mysqli_connect("192.168.1.108:3306","pi","admin","nocca");

							
							if($qw="select * from Robot_data"){
										$qq = mysqli_query($db,$qw);
     						 			while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC)) 
						    			{

						    			$robot_status=$r['Robot_No'];
						    			$id=$r['Auto_mode'];
						    			$Op=$r['Theft_mode'];
                     $date=$r['Date'];


						    				if($robot_status=='1'){
						    				$color="#008000";
						    				$text="Running";
						    				$s="green";

						    				}
						    				else{
						    					$color="red";
						    					$text="Stopped";
						    					$s="red";

						    					}

						    					?>
		<tr class="spacer bg-white"  id="employee_table">
	<td>
	<a href="Statistics.php?id=<?php echo $r['Robot_No']; ?> ">	<h5 style="font-size: 18px">Robot   <?php echo $r['Robot_No']; ?></h5></a>
	</td>
    <td>
  <h5 style="font-size: 18px">  <?php echo $r['Date']; ?></h5></a>
  </td>


	
	</tr>
	

<?php 	

						    				}
						    			}


?>
</table>
    </div>

</div>
        <div class="col-xl-8 col-lg-9 col-md-8 " style="margin-left: 250px; margin-top: -750px">

            <div id="table-wrapper1">
    <div id="table-scroll1">
      
    <div  id="customers">
        <input type='hidden' id='sort' value='asc'>

  <table class="table-hover"  id="myTable2"  style=" border-collapse: collapse; border-color: red; border-bottom: 30px; border-top: 30px" >
    <tr align="center">
      <th >
        Robot No
      </th>
      <th>
        Table Clean
      </th>
      <th>
        Op Hour
      </th>
      <th>
        Date
      </th>
      <th>
        
      </th>
      
    </tr>
    <tr align="center">
      <td>
        <?php echo  $Robot_No
?>
      </td>
      <td>
        <?php echo $table_no?>

      </td>
      <td>
         <?php echo $Op_Hour?>

      </td>
      <td>
         <?php echo  $Date?>

      </td>
    </tr>
</table>
</div>
</div>
</div>
</div>

<?php 







?>
</div>
	</div>
</div>
</body>
</html>
