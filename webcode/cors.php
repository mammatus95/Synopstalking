<!DOCTYPE html>
<html>
  <head>
    <title>Cor Statistik</title>
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

  </head>	
  <body>
  
    <?php
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      #echo "<div class=\"h1\">Cor's of last 10 days</div>\n  </br></br>\n";
      
      $value_f="y: [";
      $value_s="y: [";
      $value_n="y: [";
      $x_value="x: [";
      $n=31;
      $sum=0;
      $max=0;
      $sum7=0;
      for ($i = 0; $i <= $n; $i++) {
        $cor=0;
        $sum_d=0;
        $day= date("d", $timestamp - $i * 60 * 60 * 24);
        for ($x = 13; $x >= 6; $x--) {
          $cor += cor_func(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        $value_f .=$cor . ",";
        $sum_d += $cor;
        $cor=0;
        for ($x = 21; $x >= 14; $x--) {
          $cor += cor_func(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        $value_s .=$cor . ",";
        $sum_d += $cor;
        $cor=0;
        for ($x = 5; $x >= 0; $x--) {
          $cor += cor_func(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        for ($x = 23; $x >= 22; $x--) {
          $cor += cor_func(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        $value_n .= $cor . ",";
        $sum_d += $cor;
        $cor=0;
        
        $x_value .= $i*(-1) . ",";
        $sum+=$sum_d;
        if ($sum_d > $max){
          $max = $sum_d;
        }
        if ($i < 7){
          $sum7 += $sum_d;
        }
      }
      $value_f = substr($value_f, 0, -1) . "],";
      $value_s = substr($value_s, 0, -1) . "],";
      $value_n = substr($value_n, 0, -1) . "],";
      $x_value= substr($x_value, 0, -1) . "],";
    ?>
    <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV -->
    
    <script>
      var trace1 = {
        type: 'bar',
        <?php
          echo $value_f . "\n" . $x_value . "\n";
        ?>
        name: 'early',
        marker: {
            color: '#99CC00',
            line: {
                width: 2.5
            }
        }
      };
      
      var trace2 = {
        type: 'bar',
        <?php
          echo $value_s . "\n" . $x_value . "\n";
        ?>
        name: 'Late',
        marker: {
            color: '#003366',
            line: {
                width: 2.5
            }
        }
      };
      
      var trace3 = {
        type: 'bar',
        <?php
          echo $value_n . "\n" . $x_value . "\n";
        ?>
        name: 'Night',
        marker: {
            color: '#FF9900',
            line: {
                width: 2.5
            }
        }
      };

      var data = [ trace1, trace2,trace3 ];

      var layout = { 
        <?php echo "title: \"Cor\\'s of the last ".$n." days!\",\n";?>
        font: {size: 18},
        color: '#003366',
        barmode: 'stack'
      };

      var config = {responsive: true}

      Plotly.newPlot('myDiv', data, layout, config );
    </script>
    <?php 
      echo "Average per day : " .$sum/$n. "</br>Average last 7 Days : " . $sum7/7.0 ."</br>\nMax : ". $max;
    ?>
    </div>
  </body>
</html>
