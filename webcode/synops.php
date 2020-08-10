<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10381</title>
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
  </head>	
  <body>
    <!--http://www.met.fu-berlin.de/de/wetter/service/obs_10381/-->
    <?php
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Dahlem in FM12 format</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "      <h2>Date: " . $datum ."</h1>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n" ;
      $day = date("d", $timestamp);
      $hour = date("H", $timestamp);
      #for ($x = 0; $x <= $hour; $x++) {
      for ($x = $hour; $x >= 0; $x--) {
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        echo("\n    </td>\n  </tr>\n");
      }
      echo("</table>\n");
      array_map('unlink', glob("obs_s*.".$day."*.*"));
      echo "</br><h2>Yesterday Synops</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n";
      $day= date("d", $timestamp - 60 * 60 * 24);
      #for ($x = 0; $x <= 23; $x++) {
      for ($x = 23; $x >= 0; $x--) {
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        echo("\n    </td>\n  </tr>\n");
      array_map('unlink', glob("obs_s*.".$day."*.*"));
      }
      echo("</table>\n");
      echo "</br><h2>The day before yesterday Synops</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n";
      $day= date("d", $timestamp - 2* 60 * 60 * 24);
      for ($x = 23; $x >= 0; $x--) {
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        echo("\n    </td>\n  </tr>\n");
      #array_map('unlink', glob("obs_s*.".$day."*.*"));
      }
    ?>
    </table>
    </font>
    </div>
  </body>
</html>
