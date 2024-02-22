<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10381</title>
    <meta http-equiv="PRAGMA" content="NO-CACHE"/>
    <meta http-equiv="refresh" content="120">
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
  </head>	
  <body>

    <?php
      #date_default_timezone_set('UTC');
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Dahlem in FM12 format Debug/Test</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "      <h2>Date: " . $datum ."</h1>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n" ;

      $day = date("d", $timestamp);
      $day_1 = date("d", $timestamp - 60 * 60 * 24);
      $hour = date("H", $timestamp);
      for ($x = $hour; $x >= 0; $x--) {
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
        }
        try {
          synop(sprintf("../examplereports/obs_07%02s.txt", $x),$x,$day,$day_1);
        } catch (Exception $e) {
          if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 has been submitted too late!</b>";
          } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happend, send a message to quali@met.fu-berln.de.</b></br>\n";
            echo "<b>Report program errors to https://github.com/mammatus95/Synopstalking/issues</b></br></br>\n";
          }
        }
        echo("\n    </td>\n  </tr>\n");
      }
    ?>
    </table>
    </font>
    </div>
  </body>
</html>
