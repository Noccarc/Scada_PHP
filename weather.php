<?php
$cache_file = 'data.json';
if(file_exists($cache_file)){
  $data = json_decode(file_get_contents($cache_file));
}else{
  $api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';
  $data = file_get_contents($api_url);
  file_put_contents($cache_file, $data);
  $data = json_decode($data);
}
$current = $data->results->current[0];
$forecast = $data->results->seven_day_forecast;
?>
<?php
  function convert2cen($value,$unit){
    if($unit=='C'){
      return $value;
    }else if($unit=='F'){
      $cen = ($value - 32) / 1.8;
        return round($cen,2);
      }
  }
?>
<style type="text/css">

  .header {
    border-left: none;

  width: 100px; height: 100px;       border: none;

  /* DEFAULTS TO SUNNY */
  background: url(img1/nocca.png) no-repeat center center black ;

  }
  .header-rain {
    background: url(img1/rainy.png) no-repeat center center black;
  }
  .header-snow {
    background: url(images/header-snow.png) no-repeat center center black;
  }
  .header-sunny, .header-fair {

    background: url(img1/sunny.png) no-repeat center center ;
            background-size:180% ;


  }

  .header-partly-cloudy, .header-cloudy, .header-mostly-cloudy {
    background: url(img1/Very-Cloudy.png)  no-repeat center center ;
        background-size:100% ;


}

</style>

  
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
<div class="container wrapper">
  <div class="row">
    <div class="col-xl-6" style="border-right:1px solid black"> 
      <div class="justify-content-between mt-4">
        <div class="row" >
          <div class="mt-1">
            <img src="img1/Weather.png" class="img-responsive" width="60px" style="margin-left: -150px; margin-top: -45px">
        <div class="header header-sunny" style="margin-left: -30px; margin-top: 15px"></div>         

          </div>
             
          
        <div align="left" class="ml-3" >
            <h4 align="left" style="font-size: 30px; margin-left: -95px;">28°C</h4> 


        </div>
          <div align="right" class="ml-5" style="margin-right: 170px; margin-top: 45px">
           
            <p style="font-size: 13px; margin-top: -10px">Wind Speed: <?php echo $current->windspeed*1.609;?> Kmph</p>
              <p style="font-size: 13px; margin-top: -10px">Pressue: <?php echo $current->pressure;?> <?php echo $current->pressure_unit;?></p>
              <p style="font-size: 13px;margin-top: -10px">Visibility: <?php echo $current->visibility;?> <?php echo $current->visibility_unit;?></p>
          </div>
          <div style="margin-left:320px; margin-top: -90px ">
               <p style="font-size: 13px; margin-top: -10px">sunrise:5:49:32am</p>
              <p style="font-size: 13px; margin-top: -10px">sunset:5:49:32pm</p>

          </div>
        </div>
         
      </div>
            
    </div>
    <div class="col-xl-6">

          <div class="row mt-4 " style="margin-left: 20px ">
             
              
        
                  <?php $loop=0; foreach($forecast as $f){ $loop++;?>
          <div class="justify-content-between mx-2" align="center" style="width: 17%">
            
       <h3  style="font-size: 15px; font-family: calibri"><?php echo $f->day;?></h3>
       <div class="header header-cloudy" style="width: 40%">
         
       </div>
        <p style="font-size:1em;" class="aqi-value"><?php echo round(convert2cen($f->low,$f->low_unit)) ?> °C - <?php echo round(convert2cen($f->high,$f->high_unit))?> °C</p>
                    </div>


    <?php } ?>
          </div>

          </div>

    </div>
    
  </div>
  
  
</div>
