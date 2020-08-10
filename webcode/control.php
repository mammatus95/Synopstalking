<?php
function test_8333($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$h,$hh1,$hh2,$hh3,$hh4,$N,$Nh,$Cl,$Cm,$Ch){
  $fN1=$N1;
  $fN2=$N2;
  $fN3=$N3;
  $fN4=$N4;
  $fC1=$C1;
  $fC2=$C2;
  $fC3=$C3;
  $fC4=$C4;
  $fhh1=$hh1;
  $fhh2=$hh2;
  $fhh3=$hh3;
  $fhh4=$hh4;

  if (($C1 == 8) and ($N1 >= 7)){
    $fC1 = "<b class=\"warn\">" . $C1 . "</b>";
    $fN1 = "<b class=\"warn\">" . $N1 . "</b>";
  }
  if (($C2 == 8) and ($N2 >= 7)){
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
    $fN2 = "<b class=\"warn\">" . $N2 . "</b>";
  }

  #Cl,Cm,Ch
  if ( ($Cl == 5 and (True != ($C1 == 6 or $C2 == 6 or $C3 == 6 or $C4 == 6))) or  ($Cl == 6 and (True != ($C1 != 7 or $C2 != 7 or $C3 != 7 or $C4 != 7))) ){
    $fC1="<b class=\"warn\">" . $C1 . "</b>";
    $fC2="<b class=\"warn\">" . $C2 . "</b>";
    $fC3="<b class=\"warn\">" . $C3 . "</b>";
  }

  if ( ($Cl == 9 or $Cl == 3) and (True != ($C1 == 9 or $C2 == 9 or $C3 == 9 or $C4 == 9)) ){
    $fC1="<b class=\"warn\">" . $C1 . "</b>";
    $fC2="<b class=\"warn\">" . $C2 . "</b>";
    $fC3="<b class=\"warn\">" . $C3 . "</b>";
  }

  if ( ($Ch == 6 or $Ch == 7) and (True != ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2)) ){
    $fC1="<b class=\"warn\">" . $C1 . "</b>";
    $fC2="<b class=\"warn\">" . $C2 . "</b>";
    $fC3="<b class=\"warn\">" . $C3 . "</b>";
  }

  #cirrus
  if (($C1 == 0 or  $C1 == 1  or $C1 == 2) and ($hh1 < 60)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }
  if (($C2 == 0 or  $C2 == 1  or $C2 == 2) and ($hh2 < 60)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
  }
  if (($C3 == 0 or  $C3 == 1  or $C3 == 2) and ($hh3 < 60)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
  }
  if (($C4 == 0 or  $C4 == 1  or $C4 == 2) and ($hh4 < 60)){
    $fhh4 = "<b class=\"alert\">" . $hh4 . "</b>";
  }

  #mid level clouds
  if (($C1 == 3 or  $C1 == 4) and ($hh1 < 40 or $hh1 > 72)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }
  if (($C2 == 3 or  $C2 == 4) and ($hh2 < 40 or $hh2 > 72)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
  }
  if (($C3 == 3 or  $C3 == 4) and ($hh3 < 40 or $hh3 > 72)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
  }

  #nimbus
  if (($C1 == 5) and ($hh1 > 50)){
    $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
    $fC1 = "<b class=\"warn\">" . $C1 . "</b>";
  }
  if (($C1 == 5) and ($hh1 < 10 or $hh1 > 57)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $fC1 = "<b class=\"warn\">" . $C1 . "</b>";
  }
  if (($C2 == 5) and ($hh2 > 50)){
    $fhh2 = "<b class=\"warn\">" . $hh2 . "</b>";
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
  }
  if (($C2 == 5) and ($hh2 < 10 or $hh2 > 57)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
  }
  if (($C3 == 5) and ($hh3 > 50)){
    $fhh3 = "<b class=\"warn\">" . $hh3 . "</b>";
    $fC3 = "<b class=\"warn\">" . $C3 . "</b>";
  }
  if (($C3 == 5) and ($hh3 < 10 or $hh3 > 57)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
    $fC3 = "<b class=\"warn\">" . $C3 . "</b>";
  }

  #low level
  if (($C1 == 7) and ($hh1 > 16)){
    $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
  }
  if (($C1 == 7) and ($hh1 > 20)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }
  if (($C2 == 7) and ($C1 != 7)){
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
  }

  if (($C1 == 8 or  $C1 == 9  or $C1 == 6) and ($hh1 > 60)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }
  if (($C2 == 8 or  $C2 == 9  or $C2 == 6) and ($hh2 > 60)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
  }
  if (($C3 == 8 or  $C3 == 9  or $C3 == 6) and ($hh3 > 60)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
  }

  #heights
  if ($hh1 > $hh2 and $hh2 != -99){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
  }
  if ($hh2 > $hh3 and $hh3 != -99){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
  }

  #$N,$Nh
  if (($Nh > 0) and ($C1 < 3 and ($C2 < 3 or $N2 != -99))){
    $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
  }

  if (($Nh < $N1) and ($Cl != 0 or $Cm != 0)){
    $fN1 = "<b class=\"alert\">" . $N1 . "</b>";
  }

  #height
  if (($h == 9) and (58 > $hh1 and $hh1 != -99)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 8) and (56 > $hh1 or 58 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 7) and (50 > $hh1 or 57 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 6) and (33 > $hh1 or 50 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 5) and (20 > $hh1 or 34 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 4) and (10 > $hh1 or 20 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 3) and (6 > $hh1 or 10 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 2) and (3 > $hh1 or 7 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 1) and (1 > $hh1 or 3 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }elseif (($h == 0) and (2 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
  }

  #1-3-5 rule
  $R=1;
  if ($N1 < $R and $C1 != 9){
    $fN1 = "<b class=\"alert\">" . $N1 . "</b>";
  }
  if ($C1 != 9){
    $R += 2;
  }
  if ($N2 < $R and $C2 != 9){
    $fN2 = "<b class=\"alert\">" . $N2 . "</b>";
  }
  if ($C2 != 9){
    $R += 2;
  }
  if ($N3 < $R and $C3 != 9){
    $fN3 = "<b class=\"alert\">" . $N3 . "</b>";
  }
  if ($C3 != 9){
    $R += 2;
  }
  if ($N4 < $R and $C4 != 9){
    $fN4 = "<b class=\"alert\">" . $N4 . "</b>";
  }

  if (($Cm == "/") and ($C2 == 3 or $C2 == 4 or $C2 == 5)){
    $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
  }
  if (($Cm == "/") and ($C3 == 3 or $C3 == 4 or $C3 == 5)){
    $fC3 = "<b class=\"alert\">" . $C3 . "</b>";
  }

  if (($Ch == "/") and ($C2 == 0 or $C2 == 1 or $C2 == 2)){
    $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
  }
  if (($Ch == "/") and ($C3 == 0 or $C3 == 1 or $C3 == 2)){
    $fC3 = "<b class=\"alert\">" . $C3 . "</b>";
  }

  #back
  if ($N1 != -99) {
    $back8 = "8". $fN1 . $fC1 . $fhh1 . " ";
  }
  if ($N2 != -99) {
    $back8 = $back8 . "8". $fN2 . $fC2 . $fhh2 . " ";
  }
  if ($N3 != -99) {
    $back8 = $back8 . "8". $fN3 . $fC3 . $fhh3 . " ";
  }
  if  (($N4 != -99) and ($C1 == 9 or $C2 == 9 or $C3 == 9 or $C4 == 9)){
    $back8 = $back8 . "8". $fN4 . $fC4 . $fhh4 . " ";
  }
  return $back8;
}

function test_8group($N,$Nh,$Cl,$Cm,$Ch,$N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4) {
  $fCl=$Cl;
  $fCm=$Cm;
  $fCh=$Ch;
  $fNh=$Nh;

  if ( ($Ch > 0 and $Ch != "/") and (($Cl == "/") or ($Cm == "/")) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
  }

  if ( ($Nh > 0) and (($Cl == 0) and ($Cm == 0)) ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
    $fCl="<b class=\"warn\">" . $Cl . "</b>";
    $fCm="<b class=\"warn\">" . $Cm . "</b>";
  }
  if ( ($Nh < 6 and ($Cl == 0 or $Cm == 0)) and ($Ch == "/") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
  }
  if ( (($Nh > 6) and ($Cl>0)) and ($Cm != "/") ){
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
  }
  if ( (($Nh > 6) and ($Cl>0)) and ($Ch != "/") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
  }
  if ( (($Nh > 6) and ($Cm>0)) and ($Ch != "/") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
  }
  if ( ($Nh == 0) and (($Cm>0) or ($Cl>0)) ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
  }

  if ($Cm == 9){
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
  }

  if ( ($Cl == 5 and (True != ($C1 == 6 or $C2 == 6 or $C3 == 6 or $C4 == 6))) or  ($Cl == 6 and (True != ($C1 != 7 or $C2 != 7 or $C3 != 7 or $C4 != 7))) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
  }

  if ( ($Cl == 9 or $Cl == 3) and (True != ($C1 == 9 or $C2 == 9 or $C3 == 9 or $C4 == 9)) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
  }

  if ( ($Ch == 6) and (True != ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2)) ){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
  }

  if ( ($Ch == 7) and (True != ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2)) ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
  }

  #Nh
  if (($Nh < $N1) and ($Cl != 0 or $Cm != 0)){
    $fNh = "<b class=\"warn\">" . $Nh . "</b>";
  }
  if ( $N < $Nh ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
  }

  return "8" . $fNh.$fCl.$fCm.$fCh;
}

function test_N($ww,$h,$N,$Nh,$in) {
  $fh=$h;
  $fN=$N;
  #current weather
  if ( ($ww >= 14) and ($N == 0)){
    $fN="<b class=\"warn\">" . $N . "</b>";
  }
  if ( ($ww >= 49 or $ww == 16) and ($N == 0)){
    $fN="<b class=\"alert\">" . $N . "</b>";
  }
  #fog
  if ( (($ww == 43) or ($ww == 45) or ($ww == 47) or ($ww == 49)) xor ($N == 9) ){
    $fN="<b class=\"alert\">" . $N . "</b>";
  }

  #drizzel
  if ( ($h >= 5) and (($ww >= 50) and ($ww <= 57)) ){
    $fh="<b class=\"alert\">" . $h . "</b>";
  }

  #Nh
  if ( ($N < $Nh) ){
    $fN="<b class=\"alert\">" . $N . "</b>";
  }
  #cloud group
  if ( (($N == 0) or ($N == 9)) and ($in == 1) ) {
    $fN="<b class=\"alert\">" . $N . "</b>";
  }

  if ( ($N != 0) and ($N != 9) and ($in == 1) ) {
    $fN="<b class=\"alert\">" . $N . "</b>";
  }

  if ( ($N == 9) and ($h != "/") ) {
    $fN="<b class=\"warn\">" . $N . "</b>";
    $fh="<b class=\"alert\">" . $h . "</b>";
  }

  #
  if ( ($N == 0) and ($h < 9) ){
    $fN="<b class=\"warn\">" . $N . "</b>";
    $fh="<b class=\"alert\">" . $h . "</b>";
  }
  return array($fN,$fh);
}

function getww($fname){
  $zitate = file_get_contents($fname);
  $parts = explode("\n", $zitate);
  $global = explode(" ", $parts[3]);

  $W1=$W2=$ww=0; # current weather
  $x=6;
  while($x <= count($global)) {
    if ($global[$x][0] == "7") {
      $ww=substr($global[$x], 1,2);
      $W1=$global[$x][3];
      $W2=$global[$x][4];
    }
    $x++;
  }
  return array($ww,$W1,$W2);
}


function test_ww($ww,$W1,$W2,$h,$vv,$N,$T,$C1,$C2,$C3,$C4,$hour,$day) {
  $fW1=$W1;
  $fW2=$W2;
  $fww=$ww;

  #79522
  if (($ww >= 91) and ($W1 == 0 or $W1 == 1 or $W1 == 2 or $W1 == 4 or $W1 == 5 or $W2 == 9) ){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
  }
  if ( (($ww == 18) or ($ww == 19)) and ($W1 == 0 or $W1 == 1 or $W1 == 2 or $W1 == 4) ){
    $fW1="<b class=\"warn\">" . $W1 . "</b>";
    $fW2="<b class=\"warn\">" . $W2 . "</b>";
  }
  if ( (($ww >= 36) and ($ww <= 57)) and ($W2 == 8 or $W2 == 9 ) ){
    $fW1="<b class=\"warn\">" . $W1 . "</b>";
    $fW2="<b class=\"warn\">" . $W2 . "</b>";
  }
  #visibility lower then 8 km
  if ( (($vv <= 57) or ($vv==90)) and ($ww <= 4) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }
  #drizzel
  if ( ($h >= 5) and (($ww >= 50) and ($ww <= 57)) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }

  #cloud cover
  if ( ($ww >= 14) and ($N == 0)){
    $fww="<b class=\"warn\">" . $ww . "</b>";
  }
  if ( ($ww >= 49 or $ww == 16) and ($N == 0)){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }
  if ( (($ww == 43) or ($ww == 45) or ($ww == 47) or ($ww == 49)) xor ($N == 9) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }
  #fog
  if ( (($ww == 40) and ($vv < 10)) or ($ww==41) or (($ww == 40) and (($W1 == 4) and ($W2 == 4))) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }
  if ( (($ww == 48) or ($ww == 49)) and ($T == 0) ){
    $fww="<b class=\"warn\">" . $ww . "</b>";
  }
  #ww=76
  if ( ($ww == 76) and ($W1 == 7)){
    $fW1="<b class=\"warn\">" . $W1 . "</b>";
  }
  #ww=79
  #if ( ($ww == 23) and (($W1 != 7) and ($W2 != 7))){
  #  $fW1="<b class=\"alert\">" . $W1 . "</b>";
  #  $fW2="<b class=\"alert\">" . $W2 . "</b>";
  #}
  #nimbustratus always with ww
  #if ( ($ww != 14 or $ww != 15 or $ww != 16 or ($ww <= 60 and $ww >= 80) ) and ($C1 == 5 or $C2 == 5 or $C3 == 5 or $C4 == 5) ){
  #  $fww="<b class=\"alert\">" . $ww . "</b>";
  #}

  if ( ($hour ==  "03") or ($hour  ==  "09") or ($hour  ==  "15") or ($hour  == "21")){
    list ($ww_1, $W1_1, $W2_1) = getww(sprintf("obs_".$day."%02s.txt", $hour-1));
    list ($ww_2, $W1_2, $W2_2) = getww(sprintf("obs_".$day."%02s.txt", $hour-2));
    list ($ww_3, $W1_3, $W2_3) = getww(sprintf("obs_".$day."%02s.txt", $hour-3));
    if ( (($W1 == $W2) and ($W1 > 2)) and (($ww_1 < 30) or ($ww_2 < 30) or ($ww_3 < 30) or ($W1_1 < 2) or ($W1_2 < 2)) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if ( (($ww_1 > 90) or ($ww_2 > 90) or ($ww_3 > 94)) and ($W1 != 9) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
    }
    if ( (($ww_1[0] == 8) or ($ww_2[0] == 8) or ($ww_3[0] == 8)) and (($W1 != 8) and ($W2 != 8)) ){
      $fW1="<b class=\"warn\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if ( (($ww_1 >= 20) or ($ww_2 >= 20) or ($ww_3 > 30) ) and ($W1 <= 2) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
  }elseif ( ($hour ==  "00") or ($hour ==  "06") or ($hour ==  "12") or ($hour == "18")){
    list ($ww_1, $W1_1, $W2_1) = getww(sprintf("obs_".$day."%02s.txt", $hour-1));
    list ($ww_2, $W1_2, $W2_2) = getww(sprintf("obs_".$day."%02s.txt", $hour-2));
    list ($ww_3, $W1_3, $W2_3) = getww(sprintf("obs_".$day."%02s.txt", $hour-3));
    list ($ww_4, $W1_4, $W2_4) = getww(sprintf("obs_".$day."%02s.txt", $hour-4));
    list ($ww_5, $W1_5, $W2_5) = getww(sprintf("obs_".$day."%02s.txt", $hour-5));
    list ($ww_6, $W1_6, $W2_6) = getww(sprintf("obs_".$day."%02s.txt", $hour-6));
    if ( (($W1 == $W2) and ($W1 > 2)) and (($ww_1 < 30) or ($ww_2 < 30) or ($ww_3 < 30) or ($ww_4 < 30) or ($ww_5 < 30) or ($ww_6 < 30) or ($W1_1 < 2) or ($W1_2 < 2) or ($W1_3 < 2) or ($W1_4 < 2) or ($W1_5 < 2)) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if ($W1 < $W1_3){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
    }
    if ($W2 < $W2_3){
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if ( (($ww_1 > 90) or ($ww_2 > 90) or ($ww_3 > 90) or ($ww_4 > 90) or ($ww_5 > 90) or ($ww_6 > 94)) and ($W1 != 9) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
    }
    if ( (($ww_1[0] == 8) or ($ww_2[0] == 8) or ($ww_3[0] == 8) or ($ww_4[0] == 8) or ($ww_5[0] == 8) or ($ww_6[0] == 8)) and (($W1 != 8) and ($W2 != 8)) ){
      $fW1="<b class=\"warn\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if ( (($ww_1 >= 20) or ($ww_2 >= 20) or ($ww_3 >= 20) or ($ww_4 >= 20) or ($ww_5 >= 20) or ($ww_6 > 30)) and ($W1 <= 2) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
  }else{
    list ($ww_1, $W1_1, $W2_1) = getww(sprintf("obs_".$day."%02s.txt", $hour-1));
    if ( (($W1 == $W2) and ($W1 > 2)) and ($ww_1 < 30) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if (($ww_1 > 30) and ($ww < 17)){
      $fww="<b class=\"alert\">" . $ww . "</b>";
    }
  }

  if ($W1 < $W2){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
  }

  if (($W1 != $W2) and ($W1 <= 2)){ #(($W1 == 0) and ($W2 != 0) or ($W1 == 1) and ($W2 != 1) or ($W1 == 2) and ($W2 != 2)){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
  }
  return "7".$fww.$fW1.$fW2;
}


#main function
function synop ($fname,$hour,$day){
  #echo(date ("F d Y H:i:s.", filemtime($fname))); #last time file were modified
  $zitate = file_get_contents($fname);
  $parts = explode("\n", $zitate);
  $global = explode(" ", $parts[3]);
  $sec333 = explode(" ", $parts[4]);

  #get observation values
  $ix=$ir=$in=$ww=0; # current weather
  $h=$global[1][2]; #height of lowest cloud layer
  $vv=substr($global[1], -2);  #visibility
  $N=$global[2][0]; #total cloud cover
  $T=$global[3][0];
  #cloud groups in section 3
  $x=3;
  $nflag=1;
  $N1=$N2=$N3=$N4=-99;
  $C1=$C2=$C3=$C4=-99;
  $hh1=$hh2=$hh3=$hh4=-99;
  while($x <= count($sec333)) {
    if ($sec333[$x][0] == "8") {
      if ($nflag == "1"){
        $N1=$sec333[$x][1];
        $C1=$sec333[$x][2];
        $hh1=substr($sec333[$x], -2);
        $nflag++;
      }elseif ($nflag == "2"){
        $N2=$sec333[$x][1];
        $C2=$sec333[$x][2];
        $hh2=substr($sec333[$x], -2);
        $nflag++;
      }elseif($nflag == "3"){
        $N3=$sec333[$x][1];
        $C3=$sec333[$x][2];
        $hh3=substr($sec333[$x], -2);
        $nflag++;
      }else{
        $N4=$sec333[$x][1];
        $C4=$sec333[$x][2];
        $hh4=substr($sec333[$x], -2);
      }
    }
    $x++;
  }
  #echo($N1 . $C1);
  #echo($N2 . $C2);
  #echo($N3 . $C3); works

  if (count($global) == "11"){
    $ix=1;
    $ir=1;
    $in=1;
    $ww=substr($global[9], 1,2);
    $W1=$global[9][3];
    $W2=$global[9][4];
    $Nh=$global[10][1];
    $Cl=$global[10][2];
    $Cm=$global[10][3];
    $Ch=$global[10][4];
  } elseif (count($global) == "10" and ($global[1][0] >= "2")) {
    $ix=1;
    $ir=0;
    $in=1;
    $ww=substr($global[8], 1,2);
    $W1=$global[8][3];
    $W2=$global[8][4];
    $Nh=$global[9][1];
    $Cl=$global[9][2];
    $Cm=$global[9][3];
    $Ch=$global[9][4];
  } elseif (count($global) == "10" and ($global[1][0] < "2")) {
    if ($global[8][0] == "7") {
      $ix=1;
      $ir=1;
      $in=0;
      $ww=substr($global[9], 1,2);
      $W1=$global[9][3];
      $W2=$global[9][4];
    } else {
      $ix=2;
      $ir=1;
      $in=1;
      $Nh=$global[9][1];
      $Cl=$global[9][2];
      $Cm=$global[9][3];
      $Ch=$global[9][4];
    }
  } elseif (count($global) == "9" and ($global[1][0] >= "2")) {
    if ($global[8][0] == "7") {
      $ix=1;
      $ir=0;
      $in=0;
      $ww=substr($global[8], 1,2);
      $W1=$global[8][3];
      $W2=$global[8][4];
    } else {
      $ix=2;
      $ir=0;
      $in=1;
      $Nh=$global[8][1];
      $Cl=$global[8][2];
      $Cm=$global[8][3];
      $Ch=$global[8][4];
    }
  } elseif (count($global) == "8") {
      $ix=2;
      $ir=0;
      $in=0;
  }
  #echo( $ix .$ir .$in);
  echo("<br>" . $parts[1] . "<br>" . $parts[2]);
  #global section
  echo("<br>" . $global[0] . " ");
  list ($fN, $fh) = test_N($ww,$h,$N,$Nh,$in);
  if ($global[1][1] != $ix) {
    echo($global[1][0]);
    echo("<b style=\"color:red;\">" . $global[1][1] . "</b>");
    echo($fh . $global[1][3] . $global[1][4] . " ");
  } else {
    echo ($global[1] . " ");
  }

  echo($fN . substr($global[2], -4) . " ");
  echo ($global[3] . " " . $global[4] . " " . $global[5] . " " . $global[6] . " " );

  if ($global[7][1] == "/") {
    echo($global[7][0] . "<b style=\"color:red;\">" . $global[7][1] . "</b>" . substr($global[7], -3) . " ");
  } else {
    echo ($global[7] . " ");
  }

  if ($global[1][0] < "2"){
    echo ($global[8] . " ");
  }

  if ($ix == "1"){
    $wwgroup=test_ww($ww,$W1,$W2,$h,$vv,$N,$T,$C1,$C2,$C3,$C4,$hour,$day);
    echo ($wwgroup . " ");
    #if (test_ww($ww,$W1,$W2) == 1) {
    #  echo ("7" . $ww.$W1.$W2 . " ");
    #} else {
    #  echo ("<b style=\"color:red;\">7" . $ww.$W1.$W2 . "</b> ");
    #}
  }

  if ($in == "1"){
    echo (test_8group($N,$Nh,$Cl,$Cm,$Ch,$N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4));
  }

  echo ("</br>");
  #333 section
  echo ("&nbsp&nbsp&nbsp" . $sec333[2] . " ");
  $x=3;
  while($x <= count($sec333)) {
    if ($sec333[$x][0] != "8") {
      echo($sec333[$x] . " ");
    } else {
      break;
    }
    $x++;
  }
  if ($in == 1){
    echo (test_8333($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$h,$hh1,$hh2,$hh3,$hh4,$N,$Nh,$Cl,$Cm,$Ch));
  }
  while($x <= count($sec333)) {
    if ($sec333[$x][0] != "8") {
      echo($sec333[$x] . " ");
    }
    $x++;
  }
  echo("</br>&nbsp&nbsp" . $parts[5]);
  echo("</br>&nbsp" . $parts[6]);
  echo("</br>&nbsp&nbsp" . $parts[7]);
}
?>
