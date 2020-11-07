<!-- 
1. here we have the authority to fetch data through databse according to the conditions 
2. if we want fetch the data according to Robot No or According to date or up to date or between two dates 
3. according to the conditions containts of table are going to be change.
4. according to our conditions there is option of pdf convert so through that we are able to download data in pdf format

 -->


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#table-wrapper {
  position: relative;
  background-color: white;
  border-radius: 25px;
}

.button{
   
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
#table-scroll {
  height:550px;
  width: 800px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
}
#table-scroll table thead th {
  position: absolute;
    position: sticky;
  z-index: 100;
  top: 0;
  background-color:#d3d3d3;
 
}

 td{
        padding: 20px; 
        margin-left: 10px;
    }
    .button1{
      border:none;
      background-color: white;
    }
    .btn-outline:hover{
      border:1px solid green;
      border-radius: 5px;
    }

 </style>

	</style>
<title></title>
	</head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script type="text/javascript">
    $(function(){
         var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

   $('#cmd').click(function () {

        var table = tableToJson($('#StudentInfoListTable').get(0))
        var doc = new jsPDF('p','pt', 'a4', true);
        doc.cellInitialize();
        $.each(table, function (i, row){
            console.debug(row);
            $.each(row, function (j, cell){
                doc.cell(10, 50,120, 50, cell, i);  // 2nd parameter=top margin,1st=left margin 3rd=row cell width 4th=Row height
            })
        })


        doc.save('sample-file.pdf');
    });
    function tableToJson(table) {
    var data = [];

    // first row needs to be headers
    var headers = [];
    for (var i=0; i<table.rows[0].cells.length; i++) {
        headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
    }


    // go through cells
    for (var i=0; i<table.rows.length; i++) {

        var tableRow = table.rows[i];
        var rowData = {};

        for (var j=0; j<tableRow.cells.length; j++) {

            rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

        }

        data.push(rowData);
    }       

    return data;
}
});
  </script>
 
  </script>

<body class="bg-light">
<?php include 'AdminDash.php';?><!-- Include the header file -->
<div class="container-fluid" align="left" >
<div class="col-xl-10 col-lg-9 col-md-8 mt-5">
	       				 		<div class="row d-flex justify-content-center">
	       				 			<div class="main">
	       				 			
	       				 				<div class="row mt-5" style="margin-left: 340px;">
                          <!-- Take a form and take input from the user -->
	       				 					                      <form  method="post" align="left" style="position: static;">

	       				 			<input type="text" name="text" id="ip1" placeholder="Enter Robot_No" class="mt-2" style="border:none;position: static; ">   
   

                    <input type="date" name="date" style="border:none; position: static;">
                   <input type="date" name="date1" style="border:none">
                   <input type="submit" value="search" id="submit" id="ip3" name="submit" class="btn-info" style="border:none;position: static;" onclick="getData()"/>
   
							
                       <input type="button" class="btn-primary"  id="cmd" value="Export to pdf"  style="margin-left: 550px; border:none; " />

            								</form> 
              
                          <!-- End of form section-->

            								</div>
	       				 				
            								</div>
											</div>
					<div class="row pt-2 d-flex justify-content-center">
			
     	

     	
    <?php
      						      						



 							
							$db = @mysqli_connect("192.168.1.108","pi","admin","nocca");
              if (isset($_POST['submit'])){ 
  
   
    $date=$_POST['date'];
    $text=$_POST['text'];
    $date1=$_POST['date1'];
							//$d=(($_POST['date']));
      
                  echo "<div id='table-wrapper' align='left' class='mt-5'>";
                  if ($_POST['date']){
                    $qw="SELECT * FROM Statistics WHERE Date='$date' order by Robot_No asc ";                          //fetch data acoording to date


                  $qq=mysqli_query($db,$qw);
                  echo "<div id='table'>";
                    echo "<h5 class='pt-3'>Date-$date</h5>";
                      echo "<div id='table-scroll'>";

                  echo "  <table class='table-hover' id='StudentInfoListTable'  style='border-collapse: collapse; border-color: red; border-bottom: 30px; border-top: 30px; margin-left=-100px'>";
                  echo "<thead>";
                  echo "<tr align='center'>";
                  echo "<th>Robot No</th>";
                  echo "<th>Table Clean</th>";
                  echo "<th>Operational Hour</th>";
                  echo "<th>Water Saved</th>";



                  echo "<tr>";


                  


                 while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC))
                 {
                  ?>
                 
                  
                       <tr  align="center">
                          <td><?php echo $r['Robot_No']; ?></td>
                           <td><?php echo $r['Table_Clean']; ?></td>
                           <td><?php echo $r['Operational_Hour']?></td>
                           <td><?php echo $r['Water_Saved']?></td>

                           </tr>

                           <?php  
                            }

                  
                  }
                  echo "</table>";
                  if ($_POST['text']) {
                    $text=$_POST['text'];
                         $qw="SELECT * FROM Statistics WHERE  Robot_No='$text' order by Date asc ";
                         //fetch data according to he Robot No
                       $qq=mysqli_query($db,$qw);
                                         echo "<div id='table'>";



                      echo "<h5 class='pt-3'>Robot-$text</h5>";
                        echo "<div id='table-scroll'>";
                  echo "  <table class='table-hover' id='tblCustomers'  style='border-collapse: collapse; border-color: red; border-bottom: 30px; border-top: 30px; margin-left=-100px'>";
                  echo "<thead>";
                  echo "<tr align='center'>";
                  echo "<th>Date</th>";
                  echo "<th>Table Clean</th>";
                  echo "<th>Operational Hour</th>";
                  echo "<th>Water Saved</th>";



                  echo "<tr>";


                  


                 while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC))
                 {
                  ?>
                 
                  
                       <tr  align="center">
                          <td><?php echo $r['Date']; ?></td>

                           <td><?php echo $r['Table_Clean']; ?></td>
                           <td><?php echo $r['Operational_Hour']?></td>
                           <td><?php echo $r['Water_Saved']?></td>

                           </tr>

                           <?php  
                            }

                  }
                    echo "</table>";
                  if($_POST['date1']){
                    $date1=$_POST['date1'];
                    $date=$_POST['date']; 
                         $qw="SELECT * FROM Statistics WHERE Date between '$date' and '$date1'";
                         //Fetch data upto date
                       $qq=mysqli_query($db,$qw);


                 echo "Date-$date1";
                     echo "<div id='table-scroll'>";
                  echo "<table class='table-hover' id='tblCustomers'  style='border-collapse: collapse; border-color: red; border-bottom: 30px; border-top: 30px; margin-left=-100px'>";
                  echo "<thead>";
                  echo "<tr align='center'>";
                  echo "<th>Date</th>";
                   echo "<th>Robot_No</th>";

                  echo "<th>Table Clean</th>";
                  echo "<th>Operational Hour</th>";
                  echo "<th>Water Saved</th>";
                  echo "<tr>";


                  


                 while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC))
                 {
                  ?>
                 
                  
                       <tr  align="center">
                          <td><?php echo $r['Date']; ?></td>
                           <td><?php echo $r['Robot_No']?></td>

                           <td><?php echo $r['Table_Clean']; ?></td>
                           <td><?php echo $r['Operational_Hour']?></td>
                           <td><?php echo $r['Water_Saved']?></td>


                           </tr>

                           <?php  
                            }

                  }

      					  echo "</table>";
                  echo "</div>";
						} 
        
 
          
						
					


?>

  
          </table> 
			</div>		
			</div>
			</div> 
			

</body>
</html>