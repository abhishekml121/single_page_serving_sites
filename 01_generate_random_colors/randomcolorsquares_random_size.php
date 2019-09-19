  <?php
  /* Generate random color in the form of #
     eg -> #ffffff    (white color)
           #ff5555    (tomato color)
           #aabbccdd  (skyblue color)
           #5265dd     (dodgerblue color)
  */
  function generate_random_color($length = 6) {
    return '#' . substr(str_shuffle("0123456789abcdef"), 0, $length) . ';';
  }

  /* Returns only one number between 0.1 (include) and 1 (include)*/
  function generate_random_grid_size() {
    $grid = array('0.1', '0.2', '0.3', '0.4', '0.5','0.6','0.7','0.8','0.9','1');
    return $grid[rand(0, 9)];
  }
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
        width: 90%;
        margin: 0 auto;
        box-shadow: 0 0 15px -5px #000;
       }

      div#area2:nth-child(odd) {
      box-shadow: inset 0px 3px 15px -5px red;
      }

      div#area2:nth-child(even) {
          box-shadow: inset 0px 3px 15px -5px red;
      }

      .common_row{
        display: grid;
        transition-property: all;
        transition-duration: 1s;
        transition-delay: 1s;
      }

      .area {
        margin: 0; padding: 0;
        padding: 30px;
        height: 25px;
        animation-name: boot;
        animation-duration: 0.5s;
        animation-iteration-count: 1;
      }
      @keyframes boot{
        from{
          transform: translateY(-135px);
        }
        to{
          transform: translateY(0px);
        }
      }

      </style>
    </head>
    <body>
      <main>
      <?php
      /* Total 10*7 = 70 containers */
      $squares = 10;
      $rows = 7;

      for ($j=0; $j < $rows; $j++) {
        echo "<div class='common_row'" . " style='grid-template-columns:";
        for ($k=0; $k < 10; $k++) {
         echo generate_random_grid_size().'fr ';
      };
        echo ";'".">";
      
      for($i=0; $i < $squares; $i++) {
        echo "<div class='area'". " id='area2'". " style='background:";
        echo generate_random_color().'\'';
        echo "></div>";
        //echo '<br>' . $i;
      }
      echo "</div>";
    }
      ?>
      </main>
    </body>


    <script>
     // When you click anywhere on the page then it reloads 
      let body = document.querySelector('body');
      body.onclick=function(){
        location.reload(true);
      };

    </script>
  </html>