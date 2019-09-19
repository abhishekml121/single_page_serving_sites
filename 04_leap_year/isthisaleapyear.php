<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is This a Leap Year?</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: #DFCC89;
      font-size: 100%;
    }
    #main-content {

      margin: 30px;
      text-align: center;
      color: #3D2399;
    }
    #main-content h1 {
      font: 45px Arial, Helvetica, sans-serif;

    }
    #main-content h1 span{
      font-size: 80px;
      color: #555;
       vertical-align: sub
    }
    #main-content p {
      font: 35px "Times New Roman", Times, Georgia, serif;
      display: inline-block;
      border:1px solid;
      padding: 5px;
      color: #555;
    }
    form .hint{
      font-size: 25px;
    }
    input{
      padding: 5px;
      font-size: 30px;
    }
    input[type='submit']{
      cursor: pointer
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is This a Leap Year<span>?</span></h1>
      
      <p>
        <?php date_default_timezone_set("America/New_York"); ?>

        <?php
        function is_leap_year($year) {
          if($year % 4 > 0) {
            return false;    // 2015
          } elseif($year % 100 > 0) {
            return true;     // 1984
          } elseif($year % 400 > 0) {
            return false;    // 2100
          } else {
            return true;     // 2000
          }
        }
          
        if(isset($_GET["year"])) {
          $year = intval($_GET["year"]);
        } else {
          $year = date('Y');          
        }
        
        if(is_leap_year($year)) {
          echo "Yes, {$year} is a leap year.";
        } else {
          echo "No, {$year} is not a leap year.";
        }
        ?>
      </p>
      
      <form action="" method="get">
        <div class="hint">Enter a year to find out if it is a leap year:</div><br />
        <input type="text" name="year" value="<?php echo $year; ?>" /><br />
        <input type="submit" value="Submit" />
      </form>
      
    </div>
    
  </body>
</html>
