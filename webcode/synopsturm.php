<!DOCTYPE html>
<html>
  <head>
    <title>FM12 10381</title>
    <meta http-equiv="PRAGMA" content="NO-CACHE"/>
    <meta http-equiv="refresh" content="90">
    <base target="_blank">
    <link href="fontstyle.css" type="text/css" rel="stylesheet">
    <script>
      function PlaySound() {
        var sound = document.getElementById("sound1");
        sound.Play();
      }
      function beep() {
        var snd = new Audio("audio/test_audio.wav");  
        snd.play();
      }
    </script>
    <embed src="audio/test_audio.wav" autostart="false" width="0" height="0" id="sound1" enablejavascript="true">
  </head>	
  <body>
    <!--http://www.met.fu-berlin.de/de/wetter/service/obs_10381/-->
    
    <?php
      date_default_timezone_set('UTC');
      include 'control.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      echo "<div class=\"h1\">Observation of Berlin-Dahlem in FM12 format</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "<h2><a class=\"n\" href=\"test.png\">Grober &Uuml;berblick &uuml;ber die F&auml;higkeiten</a></h2>\n";
      echo "<h2><a class=\"n\" href=\"cors.php\">COR Statistik</a></h2>\n";
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
          </br>&nbsp;<font> 555 </font>
          <a href="fm12.html#50"> 0sTTT</a>  
          <a href="fm12.html#51"> 1RRRr</a>  
          <a href="fm12.html#52"> 2sTTT</a>  
          <a href="fm12.html#522"> 22fff</a>  
          <a href="fm12.html#523"> 23SS</a>  
          <a href="fm12.html#524"> 24W<sub><code>R</code></sub>t</a>  
          <a href="fm12.html#525"> 25w<sub><code>z</code></sub>w<sub><code>z</code></sub></a>  
          <a href="fm12.html#526"> 26fff</a>  
          <a href="fm12.html#53"> 3LLLL</a>  
          <a href="fm12.html#55"> 5ssst</a>  
          <a href="fm12.html#57"> 7hhZD</a>  
          <a href="fm12.html#58"> 8N/hh</a>  
          <a href="fm12.html#5910"> 910ff</a>  
          <a href="fm12.html#5911"> 911ff</a>  
          <a href="fm12.html#5912"> 912ff</a>  
          </br>&nbsp;<font>BOT </font><a href="fm12.html#BOT"> hsTTT</a>  
          </br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font>80000 </font>
          <a href="fm12.html#581"> 1RRRRW<sub><code>R</code></sub></a>  
          <a href="fm12.html#582"> 2SSSS</a>  
          <a href="fm12.html#583"> 3fff</a>  
          <a href="fm12.html#584"> 4fff</a>  
          <a href="fm12.html#585"> 5RR</a>
          <a href="fm12.html#586"> 6VVVVVV</a>  
          <a href="fm12.html#587"> 7sTTT</a>  
          <a href="fm12.html#588"> 8sTTT</a>  
          <a href="fm12.html#589"> 9sTTTs</a>  
          </br>
          &nbsp;<font>666 </font><a href="fm12.html#61"> 1sTTT</a>  
          <a href="fm12.html#62"> 2sTTT</a>  
          <a href="fm12.html#63"> 3sTTT</a>  
          <a href="fm12.html#66"> 6VVVV/VVVV</a>  
          <a href="fm12.html#67"> 7VVVV</a>  
          </br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font>80000 </font>
          <a href="fm12.html#680"> 0RRRr 1RRRr 2RRRr 3RRRr 4RRRr 5RRRr</a>
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
      $day_1 = date("d", $timestamp - 60 * 60 * 24);
      $hour = date("H", $timestamp);
      $cor=0;
      #for ($x = 0; $x <= $hour; $x++) {
      for ($x = $hour; $x >= 0; $x--) {
        $error_message=$value=$cor_count="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        try {
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day,$day_1);
          $cor += $cor_count;
        } catch (Exception $e) {
          if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 has been submitted too late!</b>";
            echo "<script>  beep();  </script>\n";
          } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happened, send a message to quali@met.fu-berlin.de.</b></br></br>\n";
          }
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    " . $error_message ."\n    </td>\n  </tr>\n");
      }
      echo("</table>\n");
      echo "Anzahl COR's: ".$cor." </br>\n";
      $cor=0;
      echo "</br><h2>Yesterday Synops</h2></br>\n  <table width=\"95%\" align=\"center\" cellspacing=\"9\">\n<tr><td></td><td>measurements</td><td>error message</td></tr>\n" ;
      $day= date("d", $timestamp - 60 * 60 * 24);
      $day_1= date("d", $timestamp - 60 * 60 * 24 * 2);
      #for ($x = 0; $x <= 23; $x++) {
      for ($x = 23; $x >= 0; $x--) {
        $error_message=$value=$cor_count="";
        if ( ($x ==  "03") or ($x ==  "09") or ($x ==  "15") or ($x == "21")){
          echo("\n  <tr class=\"si\" >\n    <td>\n     <b class=\"si\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }elseif ( ($x ==  "00") or ($x ==  "06") or ($x ==  "12") or ($x == "18")){
          echo("\n  <tr class=\"sm\" >\n    <td>\n     <b class=\"sm\">Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }else{
          echo("\n  <tr class=\"sn\" >\n    <td>\n     <b>Hour:  ". $x . " UTC</b></br>");
          #list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day);
        }
        try {
          list ($error_message, $value, $cor_count) = synop(sprintf("obs_".$day."%02s.txt", $x),$x,$day,$day_1);
          $cor += $cor_count;
        } catch (Exception $e) {
          if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 report has been submitted too late!</b>";
          } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happened, send a message to quali@met.fu-berln.de.</b></br></br>\n";
          }
        }
        echo("\n    </td>\n    <td>\n    ". $value ."\n    </td>\n    <td>\n    ". $error_message ."\n    </td>\n  </tr>\n");

      }
      echo("</table>\n");
      echo "Anzahl COR's: ".$cor." </br>\n";
      echo "</br>\nLast update: " . date ("d.m.y H:i", filemtime(sprintf("obs_".$day."%02s.txt", 12))) . "UTC";
    ?>
    </table>
    </font>
    </div>
  </body>
</html>
