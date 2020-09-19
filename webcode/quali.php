<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10381</title>
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
  </head>	
  <body>
    <?php
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Dahlem of the last 10 days</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n" ;
      for ($i = 1; $i <= 10; $i++) {
        $day= date("d", $timestamp - $i * 60 * 60 * 24);
        echo "</br><h2>Synops ".$day. "</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n";
        for ($x = 23; $x >= 0; $x--) {
          if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
            echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
            echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          }else{
            echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          }
          try {
            synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
          } catch (Exception $e) {
            if ( $e->getMessage() == "NIL"){
              echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 was submited to late!</b>";
            } else {
              echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
              echo "<b>If you don't know why this happend, send a message to quali@met.fu-berln.de.</b></br></br>\n";
            }
          }
          echo("\n    </td>\n  </tr>\n");
        }
        echo("</table>\n");
      }
    ?>
    </table>
    </font>
    </div>
  </body>
</html>
