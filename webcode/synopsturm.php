<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10381</title>
    <meta http-equiv="PRAGMA" content="NO-CACHE"/>
    <meta http-equiv="refresh" content="90">
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
  </head>	
  <body>
    <!--http://www.met.fu-berlin.de/de/wetter/service/obs_10381/-->
    
    <?php
      date_default_timezone_set('UTC');
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Dahlem in FM12 format</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "<h2><a href=\"test.png\">Grober &Uuml;berblick &uuml;ber die F&auml;higkeiten</a></h2>\n";
      echo "<h2><a href=\"cors.php\">COR Statistik</a></h2>\n";
      echo "      <h2>Date: " . $datum ."</h1>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n<tr><td></td><td>measurements</td><td>error message</td></tr>\n" ;
      #echo "<h1>Maintenance</h1></br>\n    <h1>no updates until Friday</h1></br>\n" ;
      $day = date("d", $timestamp);
      $hour = date("H", $timestamp);
      $cor=0;
      #for ($x = 0; $x <= $hour; $x++) {
      for ($x = $hour; $x >= 0; $x--) {
        $error_message=$value=$cor_count="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    ". $error_message ."\n    </td>\n  </tr>\n");
        $cor += $cor_count;
      }
      echo("</table>\n");
      echo "Anzahl COR's: ".$cor." </br>\n";
      $cor=0;
      echo "</br><h2>Yesterday Synops</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n<tr><td></td><td>measurements</td><td>error message</td></tr>\n" ;
      $day= date("d", $timestamp - 60 * 60 * 24);
      #for ($x = 0; $x <= 23; $x++) {
      for ($x = 23; $x >= 0; $x--) {
        $error_message=$value=$cor_count="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    ". $error_message ."\n    </td>\n  </tr>\n");
        $cor += $cor_count;
      }
      echo("</table>\n");
      echo "Anzahl COR's: ".$cor." </br>\n";
     
    ?>
    </table>
    </font>
    </div>
    <h2><a href="beispielobs.png">Grober &Uuml;berblick &uuml;ber die F&auml;higkeiten</a></h2>
  </body>
</html>
