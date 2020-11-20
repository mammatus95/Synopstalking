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
    <!--http://www.met.fu-berlin.de/de/wetter/service/obs_10381/-->
     
    <?php
      #date_default_timezone_set('UTC');
      #array_map('unlink', glob("obs_.".$day."*.txt"));
      include 'fm12_object.php';
      $timestamp = time();
      $datum = date("d.m.Y", $timestamp);
      #$day= date("d", $timestamp + 60 * 60 * 24);
      #array_map('unlink', glob("obs_".$day."*"));
      echo "<div class=\"h1\">Observation of Berlin-Dahlem in FM12 format</div>\n  </br></br>\n  <div>\n    <font>\n";
      echo "      <h2>Date: " . $datum ."</h1>\n\n" ;
      #echo "<h1>Maintenance</h1></br>\n    <h1>no updates until Friday</h1></br>\n" ;
    
    ?>
    <table width="95%" align="center" cellspacing="9">
      <tr class="sm" >
      <td>
        <b class="sm">
          Syntax:
        </b></br>

        <code>
          <a href="fm12.html#MMMM">MMMM</a> 
          <a href="fm12.html#DD">D....D</a>
          <a href="fm12.html#YYGGggi"> YYGGggi</a>  
          <a href="fm12.html#99LLL"> 99LLL QLLLL</a>  
          </br>
          <a href="fm12.html#IIiii"> IIiii</a>  
          <font>oder </font><a href="fm12.html#IIIII"> IIIII</a>  
          <a href="fm12.html#iihVV"> iihVV</a>  
          <a href="fm12.html#Nddff"> Nddff</a>  
          <a href="fm12.html#00fff"> 00fff</a>  
          <a href="fm12.html#11"> 1sTTT</a>  
          <a href="fm12.html#12"> 2sTTT</a>  
          <a href="fm12.html#13"> 3PPPP</a>  
          <a href="fm12.html#14"> 4PPPP</a>  
          <a href="fm12.html#15"> 5appp</a>  
          <a href="fm12.html#16"> 6RRRt</a>  
          <a href="fm12.html#17"> 7wwWW</a>  
          <a href="fm12.html#18"> 8NCCC</a>  
          <a href="fm12.html#19"> 9GGgg</a>  
          </br>
          <a href="fm12.html#222Dv"> 222Dv</a>  
          <a href="fm12.html#20"> 0sTTT</a>  
          <a href="fm12.html#21"> 1PPHH</a>  
          <a href="fm12.html#22"> 2PPHH</a>  
          <a href="fm12.html#23"> 3dddd</a>  
          <a href="fm12.html#24"> 4PPHH</a>  
          <a href="fm12.html#25"> 5PPHH</a>  
          <a href="fm12.html#26"> 6IEER</a>  
          <a href="fm12.html#27"> 70HHH</a>  
          <a href="fm12.html#28"> 8sTTT</a>
          </br><font> 333 </font>
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
          </br><font> 444 </font>
          <a href="fm12.html#4"> N'C'H'H'C</a>  
          </br><font> 555 </font>
          <a href="fm12.html#50"> 0sTTT</a>  
          <a href="fm12.html#51"> 1RRRr</a>  
          <a href="fm12.html#52"> 2sTTT</a>  
          <a href="fm12.html#522"> 22fff</a>  
          <a href="fm12.html#523"> 23SS</a>  
          <a href="fm12.html#524"> 24Wt</a>  
          <a href="fm12.html#525"> 25ww</a>  
          <a href="fm12.html#526"> 26fff</a>  
          <a href="fm12.html#53"> 3LLLL</a>  
          <a href="fm12.html#55"> 5ssst</a>  
          <a href="fm12.html#57"> 7hhZD</a>  
          <a href="fm12.html#58"> 8N/hh</a>  
          <a href="fm12.html#5910"> 910ff</a>  
          <a href="fm12.html#5911"> 911ff</a>  
          <a href="fm12.html#5912"> 912ff</a>  
          &nbsp;<font> PIC </font><a href="fm12.html#PIC">IN</a> &nbsp;<font>BOT </font><a href="fm12.html#BOT"> hsTTT</a>  
          </br>
          &nbsp;&nbsp;&nbsp;&nbsp;<font>80000 </font>
          <a href="fm12.html#581"> 1RRRRW</a>  
          <a href="fm12.html#582"> 2SSSS</a>  
          <a href="fm12.html#583"> 3fff</a>  
          <a href="fm12.html#584"> 4fff</a>  
          <a href="fm12.html#585"> 5RR</a>
          <a href="fm12.html#586"> 6VVVVVV</a>  
          <a href="fm12.html#587"> 7sTTT</a>  
          <a href="fm12.html#588"> 8sTTT</a>  
          <a href="fm12.html#589"> 9sTTTs</a>  
          </br>
          <font>666 </font><a href="fm12.html#61"> 1sTTT</a>  
          <a href="fm12.html#62"> 2sTTT</a>  
          <a href="fm12.html#63"> 3sTTT</a>  
          <a href="fm12.html#66"> 6VVVV/VVVV</a>  
          <a href="fm12.html#67"> 7VVVV</a>  
          </br>
          &nbsp;&nbsp;&nbsp;&nbsp;<font>80000 </font>
          <a href="fm12.html#680"> 0RRRr 1RRRr 2RRRr 3RRRr 4RRRr 5RRRr</a>
          </br>
          <font>999 </font><a href="fm12.html#90"> 0ddff</a>  
          <a href="fm12.html#92"> 2sTTT</a>  
          <a href="fm12.html#93"> 3E///</a>  
          <a href="fm12.html#94"> 4E'///</a>  
          <a href="fm12.html#97"> 7RRRz</a>
        </code>
      </td>
    </tr>
    <?php
      $day = date("d", $timestamp);
      $day= date("d", $timestamp - 60 * 60 * 24 * 2);
      $hour = 24;#date("H", $timestamp);
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
    ?>
    </table>
    </div>


    














  </body>
</html>
