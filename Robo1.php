<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  

function getData(Mode,Status,Id){
	     //console.log(Mode,Status,Id);

		console.log(Status,Id,Mode);
    var s=Status;
    var I=Id;
    var M=Mode;
	//document.write(S);
	$.ajax({
       type:"GET",
       url:'RobotData.php',
       data:{mode:M, action:s, id:I},

       success:function(){
     
       }

       //console.write(Mode);
});

}



  
</script>

