<?php
function generate_random_color($length = 6) {
return '#' . substr(str_shuffle("0123456789abcdef"), 0, $length) . ';';
}
//$colors = generate_random_color();

  /*$colors = array('red', 'green', 'blue', 'black', 'white');
  $color_count = count($colors);*/

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Colors</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      cursor: pointer;
      background: <?php echo generate_random_color(); ?>;
    }
    main{
      width: 90%;margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(10, 1fr);
      box-shadow: 0 0 15px -5px #000;
    }
    div#area2:nth-child(odd) {
    box-shadow: inset 0px 3px 15px -5px red;
}
div#area2:nth-child(even) {
    box-shadow: inset 0px 3px 15px -5px red;
}
    .area {
      /* float: left; */

      margin: 0; padding: 0;
      padding: 30px;
      height: 25px;
      animation-name: boot;
      animation-duration: 0.5s;
      animation-iteration-count: 1;
      /* width: 100px; */ /* height: 100px; */
    }
    @keyframes boot{
      from{
        transform: translateY(-135px);
      }
      to{
        transform: translateY(0px);
      }
    }
    #area1 {
      background: <?php echo generate_random_color(); ?>;
    }
  	</style>
  </head>
  <body>
    <main>
        <?php
    $squares = 100;
    for($i=0; $i < $squares; $i++) {
      /*echo "<div>aasa</div>";*/
      echo "<div class='area'". " id='area2'". " style='background:";
      echo generate_random_color().'\'';
      echo "></div>";
      //echo '<br>' . $i;
    }
    ?>
    </main>
  </body>


  <script>
    let body = document.querySelector('body');
    body.onclick=function(){
      location.reload(true);
    };

  </script>
</html>
