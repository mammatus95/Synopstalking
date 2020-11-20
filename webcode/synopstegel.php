<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10382</title>
    <meta http-equiv="PRAGMA" content="NO-CACHE"/>
    <meta http-equiv="refresh" content="90">
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
  </head>	
  <body>
    <!--http://www.met.fu-berlin.de/de/wetter/service/obs_10381/-->
    
    <?php
      date_default_timezone_set('UTC');
      include 'control_ogimet.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Tegel in FM12 format</div>\n  </br></br>\n  <div>\n    <font>\n";
    ?>
      <table width="95%" align="center" cellspacing="9">
        <tr>
          <td></td>
          <td>measurements</td>
          <td>error message</td>
        </tr>
        <tr class="sm" >
      <td>
        <b class="sm">
          Syntax:
        </b></br></br>

        <code>
          <a href="fm12.html#MMMM">MMMM</a> 
          <a href="fm12.html#DD">D....D</a>
          <a href="fm12.html#YYGGggi"> YYGGggi</a>  
          <a href="fm12.html#99LLL"> 99LLL QLLLL</a>  
          </br>
          <a href="fm12.html#IIiii"> IIiii</a>  
          <a href="fm12.html#iihVV"> iihVV</a>  
          <a href="fm12.html#Nddff"> Nddff</a>  
          <a href="fm12.html#11"> 1sTTT</a>  
          <a href="fm12.html#12"> 2sTTT</a>  
          <a href="fm12.html#13"> 3PPPP</a>  
          <a href="fm12.html#14"> 4PPPP</a>  
          <a href="fm12.html#15"> 5appp</a>  
          <a href="fm12.html#16"> 6RRRt</a>  
          <a href="fm12.html#17"> 7wwW<sub><code>1</code></sub>W<sub><code>2</code></sub></a>  
          <a href="fm12.html#18"> 8N<sub><code>h</code></sub>C<sub><code>l</code></sub>C<sub><code>m</code></sub>C<sub><code>h</code></sub></a>  
          <a href="fm12.html#19"> 9GGgg</a>  
          </br>&nbsp;<font> 333 </font>
          <a href="fm12.html#30"> 0....</a>  
          <a href="fm12.html#31"> 1sTTT</a>  
          <a href="fm12.html#32"> 2sTTT</a>  
          <a href="fm12.html#33"> 3EsTT</a>  
          <a href="fm12.html#34"> 4E'sss</a>  
          <a href="fm12.html#355"> 55SSS</a>  
          <a href="fm12.html#3552"> 2FFFF</a>  
          <a href="fm12.html#3553"> 3FFFF</a>  
          <a href="fm12.html#3554"> 4FFFF</a>  
          <a href="fm12.html#353"> 553SS</a>  
          <a href="fm12.html#3532"> 2FFFF</a>  
          <a href="fm12.html#3533"> 3FFFF</a>  
          <a href="fm12.html#3534"> 4FFFF</a>  
          <a href="fm12.html#36"> 6RRRt</a>  
          <a href="fm12.html#37"> 7RRRR</a>  
          <a href="fm12.html#38"> 8NChh</a>  
          <a href="fm12.html#39"> 9SSss</a>  
        </code>
      </td>
      <td>
        Wetter: <a href="fm12.html#17"> ww</a></br>
        Sicht: <a href="fm12.html#iihVV"> VV</a></br>
        Bedeckung: <a href="fm12.html#18"> N</a>/8</br>
        Tiefste Wolke: <a href="fm12.html#iihVV"> h</a></br>
        Wolkenschichten: <a href="fm12.html#38"> 8NChh</a></br>
        Niederschlag (1h): <a href="fm12.html#51"> RRR</a></br>
      </td>
      <td></td>
    </tr>
    <tr><td>
    <?php
      echo "      <h2>Date: " . $datum ."</h1>\n\n";
    ?>
    </tr></td>
    <?php
      $day = date("d", $timestamp);
      $hour = date("H", $timestamp);
      $cor=0;
      #for ($x = 0; $x <= $hour; $x++) {
      for ($x = $hour; $x >= 0; $x--) {
        $error_message=$value=$cor_count="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }
        try {
          list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
          $cor += $cor_count;
        } catch (Exception $e) {
          if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 was submited to late!</b>";
          } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happend, send a message to quali@met.fu-berln.de.</b></br></br>\n";
          }
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    ". $error_message ."\n    </td>\n  </tr>\n");
      }
      echo("</table>\n");
      echo "Anzahl COR's: ".$cor." </br>\n";
      $cor=0;
      echo "</br><h2>Yesterday Synops</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n<tr><td></td><td>measurements</td><td>error message</td></tr>\n" ;
      $day= date("d", $timestamp - 60 * 60 * 24);
      #for ($x = 0; $x <= 23; $x++) {
      for ($x = 23; $x >= 0; $x--) {
        $error_message=$value="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
        }
	try {
          list ($error_message, $value) = synop(sprintf("tegel_".$day."%02s.txt", $x),$x,$day);
          $cor += $cor_count;
        } catch (Exception $e) {
          if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 was submited to late!</b>";
          } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happend, send a message to quali@met.fu-berln.de.</b></br></br>\n";
          }
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    ". $error_message ."\n    </td>\n  </tr>\n");
      }
      echo("</table>\n");
      echo "</br>\nLast update: " . date ("d.m.y H:i", filemtime(sprintf("tegel_".$day."%02s.txt", 12))) . "UTC";
    ?>
    </table>
    </font>
    </div>
  </body>
</html>
