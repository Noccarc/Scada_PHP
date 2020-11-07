<?php 
$conn = new mysqli("192.168.0.108:3306","pi","admin","nocca");
if (!$conn) {

         echo "Internet is nt available";
      }
       

    
if (isset($_GET['mode'])&&isset($_GET['action'])&&isset($_GET['id']) ){
$mode=$_GET['mode'];
  $action=$_GET['action'];
  $id=$_GET['id'];
 if ($mode=='T') {
 $SQL = "UPDATE Robot_data SET Theft_mode= $action where Robot_No=$id";
}
elseif ($mode=='A') {
  $SQL = "UPDATE  Robot_data SET  Auto_mode= $action where Robot_No=$id";
}
elseif ($mode=='D') {
  $SQL = "UPDATE  Robot_data SET Manual_mode= $action where Robot_No=$id";
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
 
 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
  setInterval("my_function();",1000); 
    function my_function(){
      $('#refresh').load(location.href + ' #time');
    }
 
 </script>
		        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>

	<style type="text/css">
	#table-wrapper {
  position:relative;
}


#table-scroll {
  height:730px;
  width: 94%;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
  
}
#table-wrapper table thead th {
  position: absolute;
    position: sticky;
  z-index: 100;
  top: 0;
  background-color:#d3d3d3;
 
}

 td{
        padding: 20px; /* Apply cell padding */
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
  <script type="text/javascript" src="jquery.js" ></script>
<script type="text/javascript">


var TableIDvalue = "indextable";


var TableLastSortedColumn = -1;
function SortTable() {
var sortColumn = parseInt(arguments[0]);
var type = arguments.length > 1 ? arguments[1] : 'T';
var dateformat = arguments.length > 2 ? arguments[2] : '';
var table = document.getElementById(TableIDvalue);
var tbody = table.getElementsByTagName("tbody")[0];
var rows = tbody.getElementsByTagName("tr");
var arrayOfRows = new Array();
type = type.toUpperCase();
dateformat = dateformat.toLowerCase();
for(var i=0, len=rows.length; i<len; i++) {
  arrayOfRows[i] = new Object;
  arrayOfRows[i].oldIndex = i;
  var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
  if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
  else {
    var re = type=="N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
    arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
    }
  }
if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
else {
  TableLastSortedColumn = sortColumn;
  switch(type) {
    case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
    case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
    default  : arrayOfRows.sort(CompareRowOfText);
    }
  }
var newTableBody = document.createElement("tbody");
for(var i=0, len=arrayOfRows.length; i<len; i++) {
  newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
  }
table.replaceChild(newTableBody,tbody);
} // function SortTable()

function CompareRowOfText(a,b) {
var aval = a.value;
var bval = b.value;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfText()

function CompareRowOfNumbers(a,b) {
var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfNumbers()

function GetDateSortingKey(format,text) {
if( format.length < 1 ) { return ""; }
format = format.toLowerCase();
text = text.toLowerCase();
text = text.replace(/^[^a-z0-9]*/,"");
text = text.replace(/[^a-z0-9]*$/,"");
if( text.length < 1 ) { return ""; }
text = text.replace(/[^a-z0-9]+/g,",");
var date = text.split(",");
if( date.length < 3 ) { return ""; }
var d=0, m=0, y=0;
for( var i=0; i<3; i++ ) {
  var ts = format.substr(i,1);
  if( ts == "d" ) { d = date[i]; }
  else if( ts == "m" ) { m = date[i]; }
  else if( ts == "y" ) { y = date[i]; }
  }
d = d.replace(/^0/,"");
if( d < 10 ) { d = "0" + d; }
if( /[a-z]/.test(m) ) {
  m = m.substr(0,3);
  switch(m) {
    case "jan" : m = String(1); break;
    case "feb" : m = String(2); break;
    case "mar" : m = String(3); break;
    case "apr" : m = String(4); break;
    case "may" : m = String(5); break;
    case "jun" : m = String(6); break;
    case "jul" : m = String(7); break;
    case "aug" : m = String(8); break;
    case "sep" : m = String(9); break;
    case "oct" : m = String(10); break;
    case "nov" : m = String(11); break;
    case "dec" : m = String(12); break;
    default    : m = String(0);
    }
  }
m = m.replace(/^0/,"");
if( m < 10 ) { m = "0" + m; }
y = parseInt(y);
if( y < 100 ) { y = parseInt(y) + 2000; }
return "" + String(y) + "" + String(m) + "" + String(d) + "";
} // function GetDateSortingKey()
</script>


</script>
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
  <?php include 'AdminDash.php'?><!----------------------------------include header file------------------------------------->

	<?php include 'Robo1.php'?>
        <div class="col-xl-10 col-lg-9 col-md-8  ml-auto">
		        <div class="justify-content-between">
		        	<div class="row  mb-1 ">
                 <div class="col-xl-12 pt-3  ">

                 <div class="d-flex justify-content-between">
                 	<form class="mt-5" action="RobotData.php" method="post" >
        <h5 align="center" class="ml-3" style="font-size: 16px"><input type="text" id="search" name="search" style="width: 100px;   border-radius:4px; border:none;" placeholder="Search">
          
        				</form>
        			
                         
                         
									</div>
       
          </div>
        	
					</div>
           <div ></div>
	<div id="table-wrapper" >
		<div id="table-scroll"  >
			
		<div id="employee_table">

      

	<table class="table-hover ml-3" id="indextable">
    
  
		
	<thead>
	<tr align="center">
		<th class="header-fixed">
                  <a href="javascript:SortTable(0,'N');">

             <h5  style="font-size: 18px; font-weight: 100px"> Robot No<i class="fa fa-fw fa-sort"></i></h5>
  </a>
		</th>
		<th >
            <a href="javascript:SortTable(1,'T');">

			              <h5 style="font-size: 18px; font-weight: 100px">Status</h5>

		</th>
		<th>
			<h5 style="font-size: 18px; font-weight: 100px">Auto Mode </h5>
		</th>
    <th>
      <h5 style="font-size: 18px; font-weight: 100px">Status </h5>
    </th>
		<th>
						<h5 style="font-size: 18px; font-weight: 100px">Theft Mode
</h5>
		</th>
		<th>
<h5 style="font-size: 18px; font-weight: 100px">Manual Mode
</h5>		</th>
		<th>
                  <a href="javascript:SortTable(6,'T');">

			<h5 style="font-size: 18px; font-weight: 100px">Battery
</h5>
		</th>
		<th>

			<h5 style="font-size: 18px; font-weight: 100px">Operational Time
</h5>
		</th>
		
		<th>

			<h5 style="font-size: 18px; font-weight: 100px; font-family: calibri">Tables Cleaned
</h5>
		</th>
	</tr>

</thead>

<?php


							$db = @mysqli_connect("192.168.0.108","pi","admin","nocca");
              if (!$db) {
         echo "<marquee class='hello'  style='bg-red'>Communication Error</marquee>";
      }
      else{
							
							if($qw="select * from Robot_data"){
										$qq = mysqli_query($db,$qw);
     						 			while($r=mysqli_fetch_array($qq,MYSQLI_ASSOC)) 
						    			{

						    			$robot_status=$r['Robot_No'];
						    			$id=$r['Auto_mode']  ;
						    			$Op=$r['Theft_mode'] . PHP_EOL;
                      $mn=$r['Manual_mode'];
                      $Operational=$r['Operational_Hour'];
                      $Table_Clean=$r['Table_Clean'];




						    				if($id=='3'){
                        
						    				$color="#008000";
						    				$text="Running";

						    				$s="green";

						    				}
						    				else if($id=='2'){
                          $text="<img src='img1/darker 2.gif' width='22px'>";
                          $color='black';
 # code...
                        }
                        elseif ($id=='4') {
                            $text="stopped";
                          $color='red';
 # code...
                          # code...
                        }
                        elseif ($id=='1') {
                          $text="<img src='img1/darker 2.gif' width='22px'>";
                          $color="black";
                          # code...
                        }


                        
                      

						    					?>
                          <tbody  id="refresh" >
		<tr class="spacer bg-white" align="center" id="time">
	<td>
		<h5 style="font-size: 18px">Robot   <?php echo $r['Robot_No']; ?></h5>
	</td>



	<td>

  <div >
            <h5 id='loading'  style="font-size: 18px; color: <?php echo $color;?>"><?php echo $text?></h5></div>

  </div>  

	</td>
 
	<td>

<!--<label class="switch">
  <input type="checkbox" id="<?php echo $robot_status; ?>">

  <span class="slider round"></span>
</label>     
<script type="text/javascript">
  $(#'<?php echo $robot_status; ?>').click(function(){
    if (this.checked) {
      console.log(<?php echo $robot_status; ?>);
getData('A','1',(<?php echo $robot_status; ?>);
    }
    else{
        console.log(<?php echo $robot_status; ?>);
getData('A','2',(<?php echo $robot_status; ?>);
    }


  })
</script>-->


     <button style="height: 25px; font-size: 15px;"  class="button1 btn-outline"  onclick="getData('A','1',<?php echo $robot_status; ?>)">ON</button>
                              
        <button style="height: 25px;font-size: 15px; padding-right: 1px; padding-left: 1px;" class="button1 btn-outline" onclick="getData('A','2',<?php echo $robot_status; ?>)" >OFF</button>
	</td>
   <td>

  <div >
            <h5 id='loading'  style="font-size: 18px; color: "><?php echo $text?></h5></div>

  </div>  

  </td>
	<td>

	<!--<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>-->
<button style="height: 30px; " class="button1 btn-outline" onclick="getData('T','3',<?php echo $robot_status; ?>)" >ON</button>
                                
                               	<button style="height: 30px;  background:" class="button1 btn-outline" onclick="getData('T','4',<?php echo $robot_status; ?>)" >OFF</button>


	</td>
	<td>
	
	<button style="height: 30px; "  class="button1 btn-outline" onclick="getData('D','5',<?php echo $robot_status; ?>)">LEFT</button>
      <button style="height: 30px; "  class="button1 btn-outline" onclick="getData('D','6',<?php echo $robot_status; ?>)" >RIGHT</button>
	</td>

	<td>

		
		<div class="progress">
  <div class="progress-bar" name="progress" role="progressbar "  aria-valuenow=""
  aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Operational ?>%" >
  <?php echo $Operational ?>%

  </div>
</div>
	</td>
	<td>
		<h5 style="font-size: 18px"><?php echo $Operational?></h5>
</td>
	
	<td>
		<h5 style="font-size: 18px"><?php echo $Table_Clean?></h5>
	</td>
	<td>
		
	</td>
	</tr>
	</tbody>

<?php 	

						    				}
						    			}


}
?>
</table>
    </div>

    </div>

</div>
		
	</div>
</div>
</body>
</html>
