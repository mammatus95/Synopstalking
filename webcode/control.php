<?php





function test_8333($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$h,$hh1,$hh2,$hh3,$hh4,$N,$Nh,$Cl,$Cm,$Ch,$error_message){
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

  #sum up
  if (($hh1 == $hh2) and ($C1 != 9 and $C2 != 9)  and ($hh1 == -99 and $hh2 == -99)){
    $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
    $fhh2 = "<b class=\"warn\">" . $hh2 . "</b>";
    $error_message .= "Zusammenfassen vergessen.</br>";
  }

  if (($hh2 == $hh3) and ($C2 != 9 and $C3 != 9)  and ($hh1 == -99 and $hh2 == -99)){
    $fhh3 = "<b class=\"warn\">" . $hh3 . "</b>";
    $fhh2 = "<b class=\"warn\">" . $hh2 . "</b>";
    $error_message .= "Zusammenfassen vergessen.</br>";
  }

  if (($hh1 == $hh3) and ($C1 != 9 and $C3 != 9)  and ($hh1 == -99 and $hh2 == -99)){
    $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
    $fhh3 = "<b class=\"warn\">" . $hh3 . "</b>";
    $error_message .= "Zusammenfassen vergessen.</br>";
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
  if (($C1 == 5) and ($hh1 > 58)){
    $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
    $fC1 = "<b class=\"warn\">" . $C1 . "</b>";
  }
  if (($C1 == 5) and ($hh1 < 10 or $hh1 > 59)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $fC1 = "<b class=\"warn\">" . $C1 . "</b>";
    $error_message .= "Ns Wolkenh&ouml;he</br>";
  }
  if (($C2 == 5) and ($hh1 > 58)){
    $fhh2 = "<b class=\"warn\">" . $hh2 . "</b>";
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
  }
  if (($C2 == 5) and ($hh2 < 10 or $hh2 > 59)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
    $error_message .= "Ns Wolkenh&ouml;he</br>";
  }
  if (($C3 == 5) and ($hh3 > 58)){
    $fhh3 = "<b class=\"warn\">" . $hh3 . "</b>";
    $fC3 = "<b class=\"warn\">" . $C3 . "</b>";
  }
  if (($C3 == 5) and ($hh3 < 10 or $hh3 > 59)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
    $fC3 = "<b class=\"warn\">" . $C3 . "</b>";
    $error_message .= "Ns Wolkenh&ouml;he</br>";
  }

  if ($C1 == 5){
    if ($C2 == 6 or $C3 == 6){
      $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
      $error_message .= "Ns unter Sc!</br>";
    }elseif ($C2 == 7 or $C3 == 7){
      $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
      $error_message .= "Ns unter St!</br>";
    }elseif ($C2 == 8 or $C3 == 8){
      $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
      $error_message .= "Ns unter Cu!</br>";
    }
  }

  if ($C2 == 5){
    if ($C3 == 6 or $C4 == 6){
      $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
      $error_message .= "Ns unter Sc!</br>";
    }elseif ($C3 == 7 or $C4 == 7){
      $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
      $error_message .= "Ns unter St!</br>";
    }elseif ($C3 == 8 or $C4 == 8){
      $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
      $error_message .= "Ns unter Cu!</br>";
    }
  }

  #low level
  if ($C1 == 7){
    if ($hh1 > 19) {
      $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
      $error_message .= "St zu hoch.</br>";
    } else if ($hh1 > 16) {
      $fhh1 = "<b class=\"warn\">" . $hh1 . "</b>";
      $error_message .= "St zu hoch.</br>";
    }
  }

  if (($C2 == 7) and ($C1 != 7)){
    $fC2 = "<b class=\"warn\">" . $C2 . "</b>";
  }

  if (($C1 == 8 or  $C1 == 9  or $C1 == 6) and ($hh1 > 59)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "M&ouml;glicherweise Tippfehler bei der Wolkenh&ouml;he.</br>";
  }
  if (($C2 == 8 or  $C2 == 9  or $C2 == 6) and ($hh2 > 59)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $error_message .= "M&ouml;glicherweise Tippfehler bei der Wolkenh&ouml;he.</br>";
  }
  if (($C3 == 8 or  $C3 == 9  or $C3 == 6) and ($hh3 > 59)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
    $error_message .= "M&ouml;glicherweise Tippfehler bei der Wolkenh&ouml;he.</br>";
  }

  if ( ($Cl == 0) and ($C1 >= 6) ){
    $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
    if ($C1 == 6) {
    	$error_message .= "Cl = 0, aber Sc gegben in Sektion 333.</br>";
    }elseif ($C1 == 7){
    	$error_message .= "Cl = 0, aber St gegben in Sektion 333.</br>";
    }elseif ($C1 == 8){
    	$error_message .= "Cl = 0, aber Cu gegben in Sektion 333.</br>";
    }else{
    	$error_message .= "Cl = 0, aber Cb gegben in Sektion 333.</br>";
    }
  }

  #$N,$Nh
  if (($Nh > 0) and ($C1 < 3 and ($C2 < 3 or $N2 != -99))){
    $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
  }

  if (($Nh < $N1) and ($Cl != 0 or $Cm != 0)){
    $fN1 = "<b class=\"alert\">" . $N1 . "</b>";
    $error_message .= $N1."/8 ".$C1." > Nh(".$Nh.") </br>";
  }

  if (($hh1 >=51) and ($hh1 < 56)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "Schlüsselziffern 51 bis 55 sind keine</br> Höhen zu geordnet. hh muss 50!</br>";
  }

  if (($hh2 >=51) and ($hh2 < 56)){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $error_message .= "Schlüsselziffern 51 bis 55 sind keine</br> Höhen zu geordnet. hh muss 50!</br>";
  }

  if (($hh3 >=51) and ($hh3 < 56)){
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
    $error_message .= "Schlüsselziffern 51 bis 55 sind keine</br> Höhen zu geordnet. hh muss 50!</br>";
  }

  if (($hh4 >=51) and ($hh4 < 56)){
    $fhh4 = "<b class=\"alert\">" . $hh4 . "</b>";
    $error_message .= "Schlüsselziffern 51 bis 55 sind keine</br> Höhen zu geordnet. hh muss 50!</br>";
  }

  #heights
  if ($hh1 > $hh2 and $hh2 != -99){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $error_message .= "Achtergruppen Bitte nach der Höhe sortiert melden.</br>";
  }
  if ($hh2 > $hh3 and $hh3 != -99){
    $fhh2 = "<b class=\"alert\">" . $hh2 . "</b>";
    $fhh3 = "<b class=\"alert\">" . $hh3 . "</b>";
    $error_message .= "Achtergruppen Bitte nach der Höhe sortiert melden.</br>";
  }

  #height
  if (($h == 9) and (58 > $hh1 and $hh1 != -99)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 8) and (56 > $hh1 or 58 < $hh1)){#2000 bis 2499 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 7) and (50 > $hh1 or 57 < $hh1)){#1500 bis 1999 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 6) and (33 > $hh1 or 50 < $hh1)){#1000 bis 1499 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 5) and (20 > $hh1 or 34 < $hh1)){#600 bis 999 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 4) and (10 > $hh1 or 20 < $hh1)){#300 bis 599 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 3) and (6 > $hh1 or 10 < $hh1)){#200 bis 299 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 2) and (3 > $hh1 or 7 < $hh1)){#100 bis 199 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 1) and (1 > $hh1 or 3 < $hh1)){# 50 bis 99 m
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefensten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }elseif (($h == 0) and (2 < $hh1)){
    $fhh1 = "<b class=\"alert\">" . $hh1 . "</b>";
    $error_message .= "H&ouml;he der tiefsten Wolkenschicht und </br>H&ouml;he der 1. 8er Gruppe stimmen nicht &uuml;berein.</br>";
  }

  #1-3-5 rule
  $R=1;
  if ($N1 < $R and $C1 != 9 and $N1 !=-99){
    $fN1 = "<b class=\"alert\">" . $N1 . "</b>";
  }
  if ($C1 != 9){
    $R += 2;
  }
  if ($N2 < $R and $C2 != 9 and $N2 !=-99){
    $fN2 = "<b class=\"alert\">" . $N2 . "</b>";
    $error_message .= "1-3-5 Regel missachtet.</br>";
  }
  if ($C2 != 9){
    $R += 2;
  }
  if ($N3 < $R and $C3 != 9 and $N3 !=-99){
    $fN3 = "<b class=\"alert\">" . $N3 . "</b>";
    $error_message .= "1-3-5 Regel missachtet.</br>";
  }
  if ($C3 != 9){
    $R += 2;
  }
  if ($N4 < $R and $C4 != 9 and $N4 !=-99){
    $fN4 = "<b class=\"alert\">" . $N4 . "</b>";
  }


  if ( (($Cl == 0) and ($Cm != 0)) and ($C1 != 3 xor $C1 != 4 xor $C1 != 5) ){
    $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
  }
  if ( (($Cm == 0) or (($Cl == 0) and ($Cm == "/"))) and ($C2 == 3 or $C2 == 4 or $C2 == 5)){
    $fC2 = "<b class=\"alert\">" . $C2 . "</b>";
  }
  if ( (($Cm == 0) or (($Cl == 0) and ($Cm == "/"))) and ($C3 == 3 or $C3 == 4 or $C3 == 5)){
    $fC3 = "<b class=\"alert\">" . $C3 . "</b>";
  }

  if ( (($Cl == 0) and ($Cm == 0) and ($Ch != 0)) and ($C1 != 0 xor $C1 != 1 xor $C1 != 2) ){
    $fC1 = "<b class=\"alert\">" . $C1 . "</b>";
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
  return array($back8,$error_message);
}

function test_8group($N,$Nh,$Cl,$Cm,$Ch,$N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$ww,$error_message) {
  $fCl=$Cl;
  $fCm=$Cm;
  $fCh=$Ch;
  $fNh=$Nh;
  
  if ( ($N == $Nh) and ( (($N2 <= $Nh and $N2 != -99) and ($C2 < 5)) or (($N3 == $Nh) and ($C3 < 5)) ) and $Cl > 0 and $Cm > 0 ) {
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Nh k&ouml;nnte falsch sein.</br>";
  }

  if ( (($N1 + $N2) <= $Nh) and $Cl > 0 and $C2 < 5 and $N2 != -99 and $N1 != -99 and $C2 != -99) {
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Nh k&ouml;nnte falsch sein.</br>";
  }

  if ( (($C1 == 9) and ($C2 == -99)) and ($Nh > $N1) ){
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Cb wird f&uuml;r die 1-3-5 Regel nicht</br>ber&uuml;cksichtigt. 8er Gruppe fehlt. Nh > Cb Bedeckungsgrad.";
  }

  if ( ($Ch > 0 and $Ch != "/") and (($Cl == "/") or ($Cm == "/")) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
    $error_message .= "Cl oder Cm d&uuml;rfen nicht / gesetzt werden.</br>";
  }

  if (($Cm == 2) and (($ww < 55) and ($ww != 14 and $ww != 15  and $ww != 16 and $ww[0] != 2)) and ($C1 == 5 or $C2 == 5 or $C3 == 5 or $C4 == 5)){
    $fCm="<b class=\"warn\">" . $Cm . "</b>";
    $error_message .= "ww .</br>";
  }

  if ( ($Nh > 0) and (($Cl == 0) and ($Cm == 0)) ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
    $fCl="<b class=\"warn\">" . $Cl . "</b>";
    $fCm="<b class=\"warn\">" . $Cm . "</b>";
    $error_message .= "Nh > 0, aber keine tiefen oder</br>mittelhohen Wolken verschl&uuml;sset.</br>";
  }
  # if Nh <5/8 mitel/hohe Wolken verschlüsselt werden.
  #if ( ($Nh < 6 and ($Cl == 0 or ($Cm == 0 and $Cm != "/"))) and ($Ch == "/") ){
  #  $fCh="<b class=\"alert\">" . $Ch . "</b>";
  #  $error_message .= " Ch muss gemeldet werden.</br>";
  #}

  if ($Nh < 6){
    if ($Cm == "/" and ($Cl != "0") and ($Ch == "/")){
      $fCm="<b class=\"alert\">" . $Cm . "</b>";
      $error_message .= "Cm muss verschl&uuml;sselt werden.</br>";
    }else if( (($Cm == "0") or ($Cl == "0" and $Cm != "/")) and ($Ch == "/")){
      $fCh="<b class=\"alert\">" . $Ch . "</b>";
      $error_message .= "Ch muss gemeldet werden.</br>";
    }
  }

  if ( ($Nh == 7) and ($Cl>"0") and ($Cm >= "0") and ($Ch >= "0") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Hohe Wolken (Ch) m&uuml;ssen /.</br>";
  }

  if ( ($Nh == 6) and ($Cl>0) and ($Cm > 0) and ($Ch > 0) ){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Hohe Wolken (Ch) sollten /.</br>";
  }

  if ( (($Nh > 7) and ($Cl>0)) and ($Cm != "/") ){
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Mittelhohe Wolken m&uuml;ssen /.</br>";
  }
  if ( (($Nh > 7) and ($Cl>0)) and ($Ch != "/") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Hohe Wolken m&uuml;ssen /.</br>";
  }
  if ( (($Nh > 7) and ($Cm>0)) and ($Ch != "/") ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $fNh="<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Hohe Wolken m&uuml;ssen /. ";
  }
  if ( ($Nh == 0) and (($Cm>0) or ($Cl>0)) ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
    $error_message .= "Nh=0 aber tiefe- oder mittelhohe Wolken beobachtet.</br>";
  }

  if ($Cm == 9){
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
    $error_message .= "Chaotischen Himmel geben wir nicht!</br>";
  }
  #nimbustratus
  if ( ($Cm != 2 and $Cm != 7 and $Cm != 1) and (($C1 == 5 or $C2 == 5 or $C3 == 5) or ($C1 == 4 or $C2 == 4 or $C3 == 4))){
    $fCm="<b class=\"warn\">" . $Cm . "</b>";
  }

  if ( ($Cl == 5 and (True != ($C1 == 6 or $C2 == 6 or $C3 == 6 or $C4 == 6))) or  ($Cl == 6 and (True != ($C1 != 7 or $C2 != 7 or $C3 != 7 or $C4 != 7))) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
    $error_message .= "Sc oder St fehlt in den 8er-Gruppen!</br>";
  }

  if ( ($Cl == 9 or $Cl == 3) and (True != ($C1 == 9 or $C2 == 9 or $C3 == 9 or $C4 == 9)) ){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
    $error_message .= "Cb fehlt in den 8er-Gruppen!</br>";
  }

  if ( ($Ch == 6) and (True != ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2)) ){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
  }

  #cirrucumulus
  if ( ($Ch == 9) and ($C1 != 1 xor $C2 != 1 xor $C3 != 1)){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
  }

  if ( ($Ch == 7) and (True != ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2)) ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $error_message .= "8/8 Cs, aber kein 8er-Gruppe mit Cs.</br>";
  }

  if ( ($Cl == 0) and ($C1 >= 6) ){
    $fCl="<b class=\"warn\">" . $Cl . "</b>";
  }

  if ( (($Cm == 0) or ($Cm == "/")) and ($C1 == 3 or $C2 == 3 or $C3 == 3 or $C4 == 3 or $C1 == 4 or $C2 == 4 or $C3 == 4 or $C4 == 4 or $C1 == 5 or $C2 == 5 or $C3 == 5 or $C4 == 5) ){
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
  }

  if ( (($Cl == 0) and ($Cm != 0)) and ($C1 != 3 xor $C1 != 4 xor $C1 != 5) ){
    $fCm="<b class=\"warn\">" . $Cm . "</b>";
  }

  if ( (($Cl == 0) and ($Cm == 0) and ($Ch != 0)) and ($C1 != 0 xor $C1 != 1 xor $C1 != 2) ){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
  }


  if ( (($Ch == 0) or ($Ch == "/")) and ($C1 == 2 or $C2 == 2 or $C3 == 2 or $C4 == 2 or $C1 == 1 or $C2 == 1 or $C3 == 1 or $C4 == 1 or $C1 == 0 or $C2 == 0 or $C3 == 0 or $C4 == 0) ){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $error_message .= "Hohe Wolken in den</br>Achtergruppen gmeldet.</br>";
  }

  if ($Cl == "/"){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
  }

  if (($Cl == "/" and $Cm != "/") or ($Cl == 0 and $Cm == "/")){
    $fCl="<b class=\"alert\">" . $Cl . "</b>";
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
  }

  if (($Cm == "/" and $Cm != "/") or ($Cl == 0 and $Cm == 0 and $Ch == "/")){
    $fCh="<b class=\"alert\">" . $Ch . "</b>";
    $fCm="<b class=\"alert\">" . $Cm . "</b>";
  }

  if ($Ch == "0" and ($N == 8 or $N == 7)){
    $fCh="<b class=\"warn\">" . $Ch . "</b>";
    $error_message .= "M&ouml;glichweise muss Ch / oder gr&ouml;&szlig;er 0.</br>";
  }

  #Nh
  if (($Nh < $N1) and ($Cl != 0 or $Cm != 0)){
    $fNh = "<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Nh ist zu niedrig.</br>";
  }
  if (($Nh < $N) and ($Ch == 0 and ($Cm == 0 or $Cl == 0) and $Ch != "/" and $Cm != "/")){
    $fNh = "<b class=\"warn\">" . $Nh . "</b>";
    $error_message .= "Nh ist zu niedrig und N > Nh.</br>";
  }
  if ( (($C1 == 6) and ($Nh < $N1)) or (($C2 == 6) and ($Nh < $N2))){
    $fNh = "<b class=\"alert\">" . $Nh . "</b>";
    $error_message .= "Nh ist zu niedrig (Sc).</br>";
  }
  if ( $N < $Nh ){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
    $error_message .= "N < Nh.</br>";
  }
  
  if ( ($N != 9) and ($Nh == "/")){
    $fNh="<b class=\"alert\">" . $Nh . "</b>";
    $error_message .= "Menge der tiefen oder mittelhohen Wolken nicht gemeldet!</br>";
  }

  return array("8" . $fNh.$fCl.$fCm.$fCh,$error_message);
}



function test_N($ww,$h,$N,$vv,$Nh,$hh1,$in,$error_message) {
  $fh=$h;
  $fN=$N;
  $fvv=$vv;
  #visibility
  if ( ($ww < 30) and ($ww != "04") and ($ww != "05") and ($ww != "06") and ($vv < 10) ){
    $fvv="<b class=\"alert\">" . $vv . "</b>";
    $error_message .= "Sicht unter 1km aber kein Nebel gemeldet.</br>";
  }
  if ( ($vv > 86) ){
    $fvv="<b class=\"alert\">" . $vv . "</b>";
    $error_message .= "Sicht &uuml;ber 60km.</br>";
  }
  if ( (($ww == 10) or ($ww == "08")) and ($vv >= 58) ){
    $fvv="<b class=\"alert\">" . $vv . "</b>";
    $error_message .= "Sicht nicht <8 km.</br>";
  }

  #current weather
  if ( ($ww >= 14) and ($N == 0)){
    $fN="<b class=\"warn\">" . $N . "</b>";
  }
  if ( ($ww >= 49 or $ww == 16) and ($N == 0)){
    $fN="<b class=\"alert\">" . $N . "</b>";
    $error_message .= "ww gegeben, aber N 0/8.</br>";
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
    $error_message .= "N < Nh</br>";
  }
  #cloud group
  if ( (($N == 0) or ($N == 9)) and ($in == 1) ) {
    $fN="<b class=\"alert\">" . $N . "</b>";
    $error_message .= "Wolken verschl&uuml;sselt,</br> aber kein Bedeckungsgrad gemeldet.</br>";
  }

  if ( ($N != 0) and ($N != 9) and ($in == 0) ) {
    $fN="<b class=\"alert\">" . $N . "</b>";
    $error_message .= "Bedeckungrad gemeldet,</br> aber keine Wolken verschl&uuml;sselt.</br>";
  }

  if ( ($N == 9) and ($h != "/") ) {
    $fN="<b class=\"warn\">" . $N . "</b>";
    $fh="<b class=\"alert\">" . $h . "</b>";
    $error_message .= "9/8 aber tortzdem Wolkenh&ouml;he gegeben.</br>";
  }

  #
  if ( ($N == "0") and ($h < 9 and $h >= 0) ){
    $fN="<b class=\"warn\">" . $N . "</b>";
    $fh="<b class=\"alert\">" . $h . "</b>";
    if ($h == 0){
      $error_message .= "H&ouml;he tiefster Wolken auf <b class=\"alert\">0m</b> verschl&uuml;sselt,</br>aber keine Wolken gemeldet.</br>";
    } else {
      $error_message .= "H&ouml;he tiefster Wolken verschl&uuml;sselt,</br>aber keine Wolken gemeldet.</br>";
    }
  }
  
  if ( $N == "/"){
    $fN="<b class=\"alert\">" . $N . "</b>";
    $error_message .= "Bedeckugsgrad fehlt!</br>";
  }

  if (($h == 9) and (58 > $hh1 and $hh1 != -99)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 8) and (56 > $hh1 or 58 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 7) and (50 > $hh1 or 57 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 6) and (33 > $hh1 or 50 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 5) and (20 > $hh1 or 34 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 4) and (10 > $hh1 or 20 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 3) and (6 > $hh1 or 10 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 2) and (3 > $hh1 or 7 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 1) and (1 > $h or 3 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }elseif (($h == 0) and (2 < $hh1)){
    $fh = "<b class=\"warn\">" . $h . "</b>";
  }
  
  if ( ($N != 9) and ($h == "/") ){
    $fh="<b class=\"alert\">" . $h . "</b>";
    $error_message .= "H&ouml;he tiefster Wolken nicht gemeldet!</br>";
  }

  return array($fN,$fh,$fvv,$error_message);
}

function ww2W($ww){
  switch ($ww) {
      case 17: $W=9; break;
      case 20: $W=5+7; break;
      case 21: $W=6; break;
      case 22: $W=7; break;
      case 23: $W=7; break;
      case 24: $W=6; break;
      case 25: $W=8; break;
      case 26: $W=8; break;
      case 27: $W=8; break;
      case 28: $W=4; break;
      case 29: $W=9; break;
      case 30: $W=3; break;
      case 31: $W=3; break;
      case 32: $W=3; break;
      case 33: $W=3; break;
      case 34: $W=3; break;
      case 35: $W=3; break;
      case 36: $W=3; break;
      case 37: $W=3; break;
      case 38: $W=3; break;
      case 39: $W=3; break;
      case 41: $W=4; break;
      case 42: $W=4; break;
      case 43: $W=4; break;
      case 44: $W=4; break;
      case 45: $W=4; break;
      case 46: $W=4; break;
      case 47: $W=4; break;
      case 48: $W=4; break;
      case 49: $W=4; break;
      case 50: $W=5; break;
      case 51: $W=5; break;
      case 52: $W=5; break;
      case 53: $W=5; break;
      case 54: $W=5; break;
      case 55: $W=5; break;
      case 56: $W=5; break;
      case 57: $W=5; break;
      case 58: $W=6; break;
      case 59: $W=6; break;
      case 60: $W=6; break;
      case 61: $W=6; break;
      case 62: $W=6; break;
      case 63: $W=6; break;
      case 64: $W=6; break;
      case 65: $W=6; break;
      case 66: $W=6; break;
      case 67: $W=6; break;
      case 68: $W=7; break;
      case 69: $W=7; break;
      case 70: $W=7; break;
      case 71: $W=7; break;
      case 72: $W=7; break;
      case 73: $W=7; break;
      case 74: $W=7; break;
      case 75: $W=7; break;
      case 77: $W=7; break;
      case 78: $W=7; break;
      case 79: $W=7; break;
      case 80: $W=8; break;
      case 81: $W=8; break;
      case 82: $W=8; break;
      case 83: $W=8; break;
      case 84: $W=8; break;
      case 85: $W=8; break;
      case 86: $W=8; break;
      case 87: $W=8; break;
      case 88: $W=8; break;
      case 89: $W=8; break;
      case 90: $W=8; break;
      case 91: $W=9; break;
      case 92: $W=9; break;
      case 93: $W=9; break;
      case 94: $W=9; break;
      case 95: $W=9; break;
      case 96: $W=9; break;
      case 97: $W=9; break;
      case 98: $W=9; break;
      case 99: $W=9; break;
      default: $W=0;
  }
  return $W;
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


function test_ww($ww,$W1,$W2,$h,$vv,$relh,$N,$T,$C1,$C2,$C3,$C4,$Cm,$hour,$day,$error_message) {
  $fW1=$W1;
  $fW2=$W2;
  $fww=$ww;

  #nimbustratus
  if (($Cm == 2) and (($ww < 56) and ($ww != 14 and $ww != 15  and $ww != 16 and $ww[0] != 2)) ){
    $fww="<b class=\"warn\">" . $ww . "</b>";
    $error_message .= "Aus Ns f&auml;llt immer Niederschlag (Falls Ns gesehen).</br>";

  }

  #79522
  if (($ww >= 91) and ($W1 == 0 or $W1 == 1 or $W1 == 2 or $W1 == 4 or $W1 == 5 or $W2 == 9) ){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
    $error_message .= "Ob stratiform oder konvektiver Niederschlag fehlt!</br>";
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
  if (($vv <= 57) and ($ww <= 4)){
    $fww="<b class=\"alert\">" . $ww . "</b>";
    if ($relh >= 80){
      $error_message .= "Feuchter Dunst muss gemeldet werden!</br>";
    }else{
      $error_message .= "Trockener Dunst muss gemeldet werden!</br>";
    }
  }
  if ((($relh < 80) or ($vv > 57)) and ($ww == 10)){
    $fww="<b class=\"alert\">" . $ww . "</b>";
    $error_message .= "Relative Feuchte unter 80% oder Sichtweite größer 8km!</br>";
  }

  #drizzel
  if ( ($relh < 80) and (($ww >= 50) and ($ww <= 57)) ){
    $fww="<b class=\"warn\">" . $ww . "</b>";
    $error_message .= "Luftfeuchtigkeit zu gering f&uuml;r Spr&uuml;hregen.</br>";
  }

  if ( ($relh < 80) and (($ww >= 50) and ($ww <= 57)) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
  }

  if ( ($h >= 5) and (($ww >= 50) and ($ww <= 57)) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
    $error_message .= "Wolken zu Hoch f&uuml;r Sprf&uuml;hregen.</br>";
  }

  #fog
  if ( (($ww == 48) or ($ww == 49)) and ($T > 0.1) ){
    $fww="<b class=\"warn\">" . $ww . "</b>";
    $error_message .= "Zu warm f&uuml;r Nebelfrostablagerungen.</br>";
  }

  if (($ww[0] == 4 and $ww > 41) and ($relh < 80)){
    $fww="<b class=\"warn\">" . $ww . "</b>";
    $error_message .= "Relative Feuchte unter 80%.</br>";
  }
  if ( (($ww == 40) and ($vv < 10)) or ($ww==41) or (($ww == 40) and (($W1 == 4) and ($W2 == 4))) ){
    $fww="<b class=\"alert\">" . $ww . "</b>";
    $error_message .= "ww 40/41 falsch verschl&uuml;sselt.</br>";
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
    $error_message .= "Himmel nicht erkennbar -> keine Wolken (N muss 9).</br>";
  }



  #ww=76
  if ( ($ww == 76) and ($W1 == 7)){
    $fW1="<b class=\"warn\">" . $W1 . "</b>";
    $error_message .= "ww 76 zieht kein W 7 nach sich.</br>";
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
    if ( (($ww_1 >= 17) or ($ww_2 >= 17) or ($ww_3 > 30) ) and ($W1 <= 2) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Wetter vor der letzten</br>Stunde -> W1/W2 > 2.</br>";
    }
    if ( (($ww_1 > 90) or ($ww_2 > 90) or ($ww_3 > 94)) and ($W1 != 9) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $error_message .= "Gewitter vor der letzten</br>Stunde -> W1=9.</br>";
    }
    if ( (($ww_1[0] == 8) or ($ww_2[0] == 8) or ($ww_3[0] == 8)) and (($W1 != 8) and ($W2 != 8)) ){
      $fW1="<b class=\"warn\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Schauer vor der letzten</br>Stunde -> W1 oder W2 8.</br>";
    }
    if ( (($W1 == $W2) and ($W1 > 2)) and (($ww_1 < 30) or ($ww_2 < 30) or ($ww_3 < 30) or ($W1_1 < 2) or ($W1_2 < 2) or ($W2_1 < 2) or ($W2_2 < 2) or ($W1_1 != $W1_2) or ($W1_1 != $W2_1) or ($W1_1 != $W2_2) or ($W2_1 != $W2_2) or ($W2_1 != $W1_1) or ($W2_1 != $W2_2)) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Umfangreich vor durchg&auml;ngig</br>";
    }
    if (($ww_1 > 30) and ($ww < 17)){
      $fww="<b class=\"alert\">" . $ww . "</b>";
      $error_message .= "Nachwetter fehlt.</br>";
    }

    if  (($W2 == 2 or $W2 == 1 or $W2 == 0) and ($W1 > 2) and (($W1 != $W1_1 and $W1_1 > 2) or ($W1 != $W1_2 and $W1_2 > 2) or ($W1 != $W2_1 and $W2_1 > 2) or ($W1 != $W2_2 and $W2_2 > 2 ) or ($ww_2[0] != $ww[0] and $ww_2[0] > 4) or ($ww_1[0] != $ww[0] and $ww_1[0] > 4) or ($ww_3[0] != $ww[0] and $ww_3[0] > 4) ) ){
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Es m&uuml;ssen verschiedene W ber&uuml;cksichtig</br>werden f&uuml;r den Wetterverlauf der letzten 3h.</br>";
    }

  }elseif ( ($hour ==  "00") or ($hour ==  "06") or ($hour ==  "12") or ($hour == "18")){
    list ($ww_1, $W1_1, $W2_1) = getww(sprintf("obs_".$day."%02s.txt", $hour-1));
    list ($ww_2, $W1_2, $W2_2) = getww(sprintf("obs_".$day."%02s.txt", $hour-2));
    list ($ww_3, $W1_3, $W2_3) = getww(sprintf("obs_".$day."%02s.txt", $hour-3));
    list ($ww_4, $W1_4, $W2_4) = getww(sprintf("obs_".$day."%02s.txt", $hour-4));
    list ($ww_5, $W1_5, $W2_5) = getww(sprintf("obs_".$day."%02s.txt", $hour-5));
    list ($ww_6, $W1_6, $W2_6) = getww(sprintf("obs_".$day."%02s.txt", $hour-6));
    if ( (($W1 == $W2) and ($W1 > 2)) and (($ww_1 < 30) or ($ww_2 < 30) or ($ww_3 < 30) or ($ww_4 < 30) or ($ww_5 < 30) or ($ww_6 < 30) or ($W1_1 < 2) or ($W1_2 < 2) or ($W1_3 < 2) or ($W1_4 < 2) or ($W1_5 < 2) or ($W1_1 != $W2_1) or ($W1_2 != $W2_2) or ($W1_3 != $W2_3) or ($W1_4 != $W2_4) or ($W1_5 != $W2_5) or ($W1_6 != $W2_6)) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Umfangreich vor durchg&auml;ngig</br>";
    }
    if (($W1 < $W1_3) and ($W1 != 1)){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $error_message .= "W1 < W1 von vor 3h.</br>";
    }
    if (($W2 < $W2_3) and ($W2 != 1) and ($W2_3 != $W1_3)){
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "W2 < W2 von vor 3h.</br>";
    }
    if ( (($ww_1 > 90) or ($ww_2 > 90) or ($ww_3 > 90) or ($ww_4 > 90) or ($ww_5 > 90) or ($ww_6 > 94)) and ($W1 != 9) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $error_message .= "Gewitter im Bezugszeitraum,</br>aber nicht mit W1 ber&uuml;cksichtigt.</br>";
    }
    if ( (($ww_1[0] == 8) or ($ww_2[0] == 8) or ($ww_3[0] == 8) or ($ww_4[0] == 8) or ($ww_5[0] == 8) or ($ww_6[0] == 8)) and (($W1 != 8) and ($W2 != 8)) ){
      $fW1="<b class=\"warn\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Schauer vor der letzten</br>Stunde -> W1 oder W2 8.</br>";
    }
    if ( (($ww_1 >= 17) or ($ww_2 >= 17) or ($ww_3 >= 17) or ($ww_4 >= 27) or ($ww_5 >= 17) or ($ww_6 > 30)) and ($W1 <= 2) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
      $error_message .= "Wetter vor der letzten</br>Stunde -> W1/W2 > 2.</br>";
    }
    if (($ww_1 > 30) and ($ww < 17)){
      $fww="<b class=\"alert\">" . $ww . "</b>";
      $error_message .= "Nachwetter fehlt.</br>";
    }

#    if  (($W2 == 2 or $W2 == 1 or $W2 == 0) and ($W1 > 2) and (($W1 != $W1_1 and $W1_1 > 2) or ($W1 != $W1_2 and $W1_2 > 2) or ($W1 != $W2_1 and $W2_1 > 2) or ($W1 != $W2_2 and $W2_2 > 2 ) or ($ww_2[0] != $ww[0] and $ww_2[0] > 4) or ($ww_1[0] != $ww[0] and $ww_1[0] > 4) or ($ww_3[0] != $ww[0] and $ww_3[0] > 4) or ($ww_4[0] != $ww[0] and $ww_4[0] > 4) or ($ww_5[0] != $ww[0] and $ww_5[0] > 4) or ($ww_6[0] != $ww[0] and $ww_6[0] > 4) ) ){
#      $fW2="<b class=\"alert\">" . $W2 . "</b>";
#      $error_message .= "Es m&uuml;ssen verschiedene W ber&uuml;cksichtig</br>werden f&uuml;r den Wetterverlauf der letzten 6h.</br>";
#    }

  }else{
    list ($ww_1, $W1_1, $W2_1) = getww(sprintf("obs_".$day."%02s.txt", $hour-1));
    if ( (($W1 == $W2) and ($W1 > 2)) and ($ww_1 < 30) ){
      $fW1="<b class=\"alert\">" . $W1 . "</b>";
      $fW2="<b class=\"alert\">" . $W2 . "</b>";
    }
    if (($ww_1 > 30) and ($ww < 17)){
      $fww="<b class=\"alert\">" . $ww . "</b>";
      $error_message .= "Nachwetter fehlt.</br>";
    }
    if (($W1 > 2) and ($ww < 17 and ($ww != 4 and $ww != 6)) ){
      $fww="<b class=\"alert\">" . $ww . "</b>";
      $fW1="<b class=\"warn\">" . $W1 . "</b>";
      $fW2="<b class=\"warn\">" . $W2 . "</b>";
      $error_message .= "W1 gemeldet, aber kein ww.</br>";
    }
  }

  if ($W1 < $W2){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
    $error_message .= "W2>W1</br>";
  }

  if (($W1 != $W2) and ($W1 <= 2)){ #(($W1 == 0) and ($W2 != 0) or ($W1 == 1) and ($W2 != 1) or ($W1 == 2) and ($W2 != 2)){
    $fW1="<b class=\"alert\">" . $W1 . "</b>";
    $fW2="<b class=\"alert\">" . $W2 . "</b>";
    $error_message .= "Es geht nur 00, 11, oder 22.</br>";
  }
  return array("7".$fww.$fW1.$fW2,$error_message);
}

function rr1h($rr,$h,$d) {
  $RR=-99;
  $day = date("j");#j #N
  #if ("21" <= $h){
  #  $day+=1;
  #}
  
  if ($rr == "999"){
    #$RR="< 0.05 mm";
    if ("14" == $h){
      $RR="Ne Biene durch geflogen.";
    }else {
      $RR="<a class=\"n\" href=\"https://media1.tenor.com/images/ae53ebaa64e1dfcb220163a09ce0a12d/tenor.gif?itemid=11479864\">99.9 mm</a>";
    }
  } elseif ($rr == "000"){
    if (($day % 6)==0){
      $RR="<a class=\"n\" href=\"https://www.ab-in-den-urlaub.de/magazin/wp-content/uploads/2019/04/1554381902_Sahara-W%C3%BCste.jpg\">Steppe</a>";
    } elseif (($day % 9)==0){
      $RR="au&szlig;er langeweile, nix gewesen";
    } elseif (($day % 2)==0){
      $RR="Nullkommanix";
    } elseif (($day % 3)==0){
      $RR="schon wieder trocken:(";
    } elseif (($day % 5)==0){
      $RR="<a class=\"n\" href=\"https://www.rotkaeppchen.de/fileadmin/_processed_/b/5/csm_csm_rks-trocken-kiwi_1260x540_aa8f6af7ba_cf37c21f56.jpg\">Trocken!</a>";
    } elseif (($day % 7)==0){
      $RR="<a class=\"n\" href=\"https://files.ufz.de/~drought/SM_Lall_aktuell.png\">Dürre</a>";
    } else {
      $RR="0.0mm";
    }
  } elseif ($rr >= "100"){
    $RR="<a class=\"n\" href=\"https://media1.tenor.com/images/ae53ebaa64e1dfcb220163a09ce0a12d/tenor.gif?itemid=11479864\">" . substr($rr, 0,2) . "." . substr($rr, 2,1) . " mm</a>";
  } else {
    $RR=substr($rr, 0,2) . "." . substr($rr, 2,1) . "mm";
  }
  return $RR;
  
}

function visibility ($vv){
  $VV=-99;
  if ($vv == 90){
    $VV="<50m";
  }elseif ($vv == 00){
    $VV="<100m";
  }elseif ($vv >= 01 and $vv <= 50){
    $VV=$vv*100 . "m";
  }elseif ($vv >= 56 and $vv <= 80){
    $VV=($vv-50)*1000 . "m";#5000+
  }elseif ($vv >= 81 and $vv <= 88){
    $VV=30000+($vv-80)*5000 . "m";
  }else{
    $VV="error";
  }
  return $VV;
}

function height ($h){
  switch ($h) {
    case 0:
        $H="0m";
        break;
    case 1:
        $H="50m";
        break;
    case 2:
        $H="100m";
        break;
    case 3:
        $H="200m";
        break;
    case 4:
        $H="300m";
        break;
    case 5:
        $H="600m";
        break;
    case 6:
        $H="1000m";
        break;
    case 7:
        $H="1500m";
        break;
    case 8:
        $H="2000m";
        break;
    case 9:
        $H=">=2500m oder wolkenlos";
        break;
  }
  return $H;
}
function ww2words ($ww){
  switch ($ww) {
    case 0: $WW="langweilig"; break;
    case 1: $WW="abnehmend"; break;
    case 2: $WW="unver&auml;ndert"; break;
    case 3: $WW="zunehmend"; break;
    case 4: $WW="Sicht durch Rauch/Asche vermindert"; break;
    case 5: $WW="trockener Dunst"; break;
    case 6: $WW="verbreiteter Schwebstaub"; break;
    case 7: $WW="Staub oder Sand"; break;
    case 8: $WW="Kleintrombe"; break;
    case 9: $WW="Staub- oder Sandsturm im Gesichtskreis,</br>aber nicht an der Station"; break;
    case 10: $WW="feuchter Dunst"; break;
    case 11: $WW="Schwaden von Bodennebel"; break;
    case 12: $WW="durchgehender Bodennebel"; break;
    case 13: $WW="Wetterleuchten"; break;
    case 14: $WW="Niederschlag im Gesichtskreis</br>nicht den Boden erreichend"; break;
    case 15: $WW="Niederschlag in der Ferne"; break;
    case 16: $WW="Niederschlag in der N&auml;he"; break;
    case 17: $WW="Gewitter"; break;
    case 18: $WW="Markante B&ouml;en"; break;
    case 19: $WW="Tornado"; break;
    case 20: $WW="nach Spr&uuml;hregen oder Schneegriesel"; break;
    case 21: $WW="nach Regen"; break;
    case 22: $WW="nach Schneefall"; break;
    case 23: $WW="nach Schneeregen oder Eisk&ouml;rnern"; break;
    case 24: $WW="nach gefrierendem Regen"; break;
    case 25: $WW="nach Regenschauer"; break;
    case 26: $WW="nach Schneeschauer"; break;
    case 27: $WW="nach Graupel- oder Hagelschauer"; break;
    case 28: $WW="nach Nebel"; break;
    case 29: $WW="nach Gewitter"; break;
    case 30: $WW="Sandsturm"; break;
    case 31: $WW="Sandsturm"; break;
    case 32: $WW="Sandsturm"; break;
    case 33: $WW="Sandsturm"; break;
    case 34: $WW="Sandsturm"; break;
    case 35: $WW="Sandsturm"; break;
    case 36: $WW="Schneefegen"; break;
    case 37: $WW="Schneefegen"; break;
    case 38: $WW="Schneetreiben"; break;
    case 39: $WW="Schneetreiben"; break;
    case 40: $WW="Nebel in einiger Entfernung"; break;
    case 41: $WW="Nebeltreiben"; break;
    case 42: $WW="Nebel, d&uuml;nner werdend"; break;
    case 43: $WW="Nebel, d&uuml;nner werdend"; break;
    case 44: $WW="Nebel, unver&auml;ndert"; break;
    case 45: $WW="Nebel, unver&auml;ndert"; break;
    case 46: $WW="Nebel, dichter werdend"; break;
    case 47: $WW="Nebel, dichter werdend"; break;
    case 48: $WW="Nebel mit Reifansatz"; break;
    case 49: $WW="Nebel mit Reifansatz"; break;
    case 50: $WW="u. leichter Spr&uuml;hregen"; break;
    case 51: $WW="leichter Spr&uuml;hregen"; break;
    case 52: $WW="m&auml;&szlig;iger Spr&uuml;hregen"; break;
    case 53: $WW="m&auml;&szlig;iger Spr&uuml;hregen"; break;
    case 54: $WW="starker Spr&uuml;hregen"; break;
    case 55: $WW="starker Spr&uuml;hregen"; break;
    case 56: $WW="leichter gefrierender Spr&uuml;hregen"; break;
    case 57: $WW="m&auml;&szlig;iger oder starker gefrierender Spr&uuml;hregen"; break;
    case 58: $WW="leichter Regen</br> mit Spr&uuml;hregen"; break;
    case 59: $WW="m&auml;&szlig;iger/starker Regen</br> mit Spr&uuml;hregen"; break;
    case 60: $WW="unterbrochener l. Regen/</br>einzelne Regentropfen"; break;
    case 61: $WW="leichter Regen"; break;
    case 62: $WW="m&auml;&szlig;iger Regen"; break;
    case 63: $WW="m&auml;&szlig;iger Regen"; break;
    case 64: $WW="starker Regen"; break;
    case 65: $WW="starker Regen"; break;
    case 66: $WW="leichter gefrierender Regen"; break;
    case 67: $WW="m&auml;&szlig;iger oder starker gefrierender Regen"; break;
    case 68: $WW="leichter Schneeregen"; break;
    case 69: $WW="m&auml;&szlig;iger oder starker Schneeregen"; break;
    case 70: $WW="unterbrochener leichter Schneefall/</br>einzelne Schneeflocken"; break;
    case 71: $WW="durchgehend leichter Schneefall"; break;
    case 72: $WW="unterbrochener m&auml;&szlig;iger Schneefall"; break;
    case 73: $WW="durchgehend m&auml;&szlig;iger Schneefall"; break;
    case 74: $WW="unterbrochener starker Schneefall"; break;
    case 75: $WW="durchgehend starker Schneefall"; break;
    case 76: $WW="Eisnadeln (Polarschnee)"; break;
    case 77: $WW="Schneegriesel"; break;
    case 78: $WW="Schneeflocken (kleine)"; break;
    case 79: $WW="Eisk&ouml;rner"; break;
    case 80: $WW="leichter Regenschauer"; break;
    case 81: $WW="m&auml;&szlig;iger/starker Regenschauer"; break;
    case 82: $WW="sehr starker Regenschauer"; break;
    case 83: $WW="leichter Schneeregenschauer"; break;
    case 84: $WW="m&auml;&szlig;iger/starker Schneeregenschauer"; break;
    case 85: $WW="leichter Schneeschauer"; break;
    case 86: $WW="m&auml;&szlig;iger/starker Schneeschauer"; break;
    case 87: $WW="leichter Graupelschauer"; break;
    case 88: $WW="m&auml;&szlig;iger/starker Graupelschauer"; break;
    case 89: $WW="leichter Hagelschauer"; break;
    case 90: $WW="m&auml;&szlig;iger/starker Hagelschauer"; break;
    case 91: $WW="nach Gewitter,</br>zurzeit leichter Regen oder -schauer"; break;
    case 92: $WW="nach Gewitter,</br>zurzeit m&auml;&szlig;iger/starker Regen oder -schauer"; break;
    case 93: $WW="nach Gewitter,</br>zurzeit leichter Schneefall/Schneeregen/Graupel/Hagel"; break;
    case 94: $WW="nach Gewitter,</br>zurzeit m&auml;&szlig;iger/starker Schneefall/Schneeregen/Graupel/Hagel"; break;
    case 95: $WW="leichtes/m&auml;&szlig;iges Gewitter</br>mit Regen/Schnee"; break;
    case 96: $WW="leichtes/m&auml;&szlig;iges Gewitter</br>mit Graupel/Hagel"; break;
    case 97: $WW="starkes Gewitter</br>mit Regen/Schnee"; break;
    case 98: $WW="starkes Gewitter</br>mit Sandsturm"; break;
    case 99: $WW="starkes Gewitter</br>mit Graupel/Hagel"; break;
  }
  return $WW;
}


function gattung ($c,$Cl,$Cm,$Ch,$ww){
  switch ($c) {
    case 0:
        if ($Ch == 1 or $Ch == 4) {
          $C="Ci fib ";
        } elseif ($Ch == 2) {
          $C="Ci spi ";
        } elseif ($Ch == 3) {
          $C="Ci spi cbgen ";
        }else{
          $C="Ci ";
        }
        break;
    case 1:
        $C="Cc str ";
        break;
    case 2:
        $C="Cs ";
        break;
    case 3:
        if ($Cm == 3) {
          if ($ww == 14) {
            $C="Ac str tr vir ";
          } else {
            $C="Ac str tr ";
          }
        } elseif ($Cm == 6) {
          if ($ww == 14) {
            $C="Ac str vir cugen ";
          } else {
            $C="Ac str cugen ";
          }
        } elseif ($Cm == 8) {
          if ($ww == 14) {
            $C="Ac cas vir ";
          } else {
             $C="Ac cas ";
          }
        } else {
          $C="Ac ";
        }
        break;
    case 4:
        if ($Cm == 1) {
          if (($ww[0] == 6) or ($ww[0] == 7)){
            $C="As tr pra ";
          }elseif ($ww == 14) {
            $C="As tr vir ";
          }else{
            $C="As tr ";
          }
        }elseif  ($Cm == 2){
          if (($ww[0] == 6) or ($ww[0] == 7)){
            $C="As op pra ";
          }elseif ($ww == 14 or $ww == 15 or $ww == 16) {
            $C="As op vir ";
          }else{
            $C="As op ";
          }
        } else {
          $C="As ";
        }
        break;
    case 5:
        if (($ww[0] == 6) or ($ww[0] == 7) or ($ww[0] == 2)) {
          $C="Ns pra ";
        }elseif ($ww == 14 or $ww == 15 or $ww == 16) {
          $C="Ns vir ";
        }else{
          $C="<b class=\"warn\">Ns </b>";
        }
        break;
    case 6:
        if ($Cl == 4) {
          $C="Sc str cugen ";
        }else{
          $C="Sc str ";
        }
        break;
    case 7:
        if ($ww[0] == 5){
          $C="St pra ";
        }else{
          $C="St ";
        }
        break;
    case 8:
        if ($Cl == 1) {
          $C="Cu hum ";
        }elseif ($Cl == 2) {
          $C="Cu med ";
        }else{
          $C="Cu ";
        }
        break;
    case 9:
        if ($Cl == 3) {
          $C="Cb cal ";
          if ($ww >= 80 or $ww == 15 or $ww == 16){
            $C="Cb cal pra ";
          }elseif ($ww == 14) {
            $C="Cb cal vir ";
          }elseif ($ww == 19) {
            $C="Cb cal tub ";
          }else{
            $C="Cb cal ";
          }
        }elseif ($Cl == 9) {
          if ($ww >= 80 or $ww == 15 or $ww == 16){
            $C="Cb cap inc pra ";
          }elseif ($ww == 14) {
            $C="Cb cap inc vir ";
          }elseif ($ww == 19) {
            $C="Cb cap inc tub ";
          }elseif ($ww == 19) {
            $C="Cb cap inc arc ";
          }else{
            $C="Cb cap inc ";
          }
        }else{
          $C="Cb ";
        }
        break;
  }
  return $C;
}

function cloudslayerheight ($hh){
  $HH=-99;
  if ($hh == 00){
    $HH="<30m";
  }elseif ($hh >= 01 and $hh <= 50){
    $HH=$hh*30 . "m";
  }elseif ($hh >= 56 and $hh <= 80){
    $HH=($hh-50)*300 . "m";
  }elseif ($hh >= 81 and $hh <= 88){
    $HH=9000+($hh-80)*1500 . "m";
  }elseif ($hh >= 90){
    $HH="error";
  }else{
    $HH="error";
  }
  return $HH;
}


function group8er ($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$hh1,$hh2,$hh3,$hh4,$Cl,$Cm,$Ch,$ww){
  $back="Wolkenschichten:</br>";
  if ($N1 != -99) {
    $back.= $N1 . "/8 " . gattung($C1,$Cl,$Cm,$Ch,$ww) . "auf " . cloudslayerheight($hh1) . "</br>";
  }
  if ($N2 != -99) {
    $back.= $N2 . "/8 " . gattung($C2,$Cl,$Cm,$Ch,$ww) . "auf " . cloudslayerheight($hh2) . "</br>";
  }
  if ($N3 != -99) {
    $back.= $N3 . "/8 " . gattung($C3,$Cl,$Cm,$Ch,$ww) . "auf " . cloudslayerheight($hh3) . "</br>";
  }
  if ($N4 != -99) {
    $back.= $N4 . "/8 " . gattung($C4,$Cl,$Cm,$Ch,$ww) . "auf " . cloudslayerheight($hh4) . "</br>";
  }
  return $back;
}

function cor_func2 ($cor){
  if ($cor == "CCA"){
    $cor_count=1;
  } else if ($cor == "CCB"){
    $cor_count=2;
  } else if ($cor == "CCC"){
    $cor_count=3;
  } else if ($cor == "CCD"){
    $cor_count=4;
  } else if ($cor == "CCE"){
    $cor_count=5;
  } else if ($cor == "CCF"){
    $cor_count=6;
  } else if ($cor == "CCG"){
    $cor_count=7;
  } else if ($cor == "CCH"){
    $cor_count=8;
  } else if ($cor == "CCI"){
    $cor_count=9;
  } else if ($cor == "CCJ"){
    $cor_count=10;
  }
}

function vappres($t){
  /*
  Calculate the vapress for given temperature.
  */
  $c1=0.000000000000000011112018;
  $c2=-0.000000000000000000030994571;
  $c3=0.00000000000021874425;
  $c4=-0.000000000000001789232;
  $c5=0.000000004388418;
  $c6=-0.00000000002988388;
  $c7=0.000078736169;
  $c8=-0.0000006111796;
  $c9=0.99999683;
  $c10=-0.009082695;
  $pol = $t * ($c1 + ($t * $c2));
  $pol = $t * ($c3 + ($t * ($c4 + $pol)));
  $pol = $t * ($c5 + ($t * ($c6+ $pol)));
  $pol = $t * ($c7 + ($t * ($c8 + $pol)));
  $pol = $c9 + ($t * ($c10 + $pol));
  return (6.1078 / $pol**8);
}

function mixratio($p, $t){
  /*
  Parameters
  ----------
  p : Pressure (hPa)
  t : Temperature (K)
  Returns
  -------
  Mixing Ratio (g/kg) of air at given temperature and pressure
  */
  $ZEROCNK = 273.15;
  $t -= $ZEROCNK;
  $x = 0.02 * ($t - 12.5 + (7500.0 / $p));
  $wfw = 1. + (0.0000045 * $p) + (0.0014 * $x * $x);
  $fwesw = $wfw * vappres($t);
  return 621.97 * ($fwesw / ($p - $fwesw));
}

function relh($p, $t, $td){
  /*
  Parameters
  ----------
  p : Pressure (hPa)
  t : Temperature (K)
  td : Dewpoint (K)
  Returns
  -------
  Relative humidity in %
  */
  return 100.0* mixratio($p, $td) / mixratio($p, $t);
}

function tr_func($tr){
  /*
    0 -- nicht aufgeführter oder vor dem Termin endender Zeitraum
    1 -- 6 Stunden
    2 -- 12 Stunden
    3 -- 18 Stunden
    4 -- 24 Stunden
    5 -- 1 Stunde bzw. 30 Minuten (bei Halbstundenterminen)
    6 -- 2 Stunden
    7 -- 3 Stunden
    8 -- 9 Stunden
    9 -- 15 Stunden
    / -- Sondermessung
  */
  $TR=" ";
  switch ($tr) {
    case 0:
        $TR=" ";
        break;
    case 1:
        $TR="6 Stunden";
        break;
    case 2:
        $TR="12 Stunden";
        break;
    case 3:
        $TR="18 Stunden";
        break;
    case 4:
        $TR="24 Stunden";
        break;
    case 5:
        $TR="1 Stunde";# bzw. 30 Minuten";
        break;
    case 6:
        $TR="2 Stunden";
        break;
    case 7:
        $TR="3 Stunden";
        break;
    case 8:
        $TR="9 Stunden";
        break;
    case 9:
        $TR="15 Stunden";
        break;
  }
  return $TR;
}

###################################################################
#main function
function synop ($fname,$hour,$day){
  $error_message=$value="";
  // Meteorological Constants
  $ROCP = 0.28571426;       // R over Cp
  $ZEROCNK = 273.15;        // Zero Celsius in Kelvins
  $G = 9.80665;             // Gravity


  #echo(date ("F d Y H:i:s.", filemtime($fname))); #last time file were modified
  $zitate = file_get_contents($fname);
  $parts = explode("\n", $zitate); //divide into parts
  if (count($parts) == 1) {
    throw new Exception("NIL");
  } elseif (ord($parts[0][0]) == 0) {
    throw new Exception("Missing character in the first row! " . ord($parts[0][0]));
  } elseif (ord($parts[0][0]) == 83) {
    throw new Exception("First row is missing completly! " . ord($parts[0][0]));
  } elseif (count($parts) < 6){
    throw new Exception("FM12 isn't complete!");
  }
  #head
  echo("<br>" . $parts[1] . "<br>" . $parts[2]);
  $cor_count= cor_func2(strstr($parts[1], 'CC'));
  
  /*global*/
  $global = explode(" ", $parts[3]);
  $globalcount = count($global);
  
  /*get observation values*/
  $ix=$ir=$in=-9;
  $ix2=$ir2=-9;
  $h=$N=0;
  $ww=0; # current weather

  $ir2 = intval($global[1][0]); #rain groups
  $ix2 = intval($global[1][1]); #typ of station
  $h=$global[1][2];            #height of lowest cloud layer
  $vv=substr($global[1], -2);  #visibility

  $N=$global[2][0];            #total cloud cover
  #$dd =substr($global[2], 1,2);
  #$ff =substr($global[2], -2);
  //temperature
  if ($global[3][0] == '1'){
    if ($global[3][1] == '1'){
        $T=intval(substr($global[3], 2,3))/-10.0;
    }else{
        $T=intval(substr($global[3], 2,3))/10.0; 
    }
  } else {
    throw new Exception("Temperature group wasn't found!");
  }
  //dewpoint
  if ($global[4][0] == '2'){
    if ($global[4][1] == '1'){
        $Td=intval(substr($global[4], 2,3))/-10.0;
    }else{
        $Td=intval(substr($global[4], 2,3))/10.0; 
    }
  } else { 
      throw new Exception("Dewpoint group wasn't found!");
  }
  //pressure
  if ($global[5][0] == '3'){
      $ppp=intval(substr($global[5], 2,4))/10.0;
      if ($ppp < 100.0 and $ppp >= 0.0){
          $ppp += 1000.0;
      }
  } else {
      throw new Exception("Pressure group wasn't found!");
  }

  $relh = relh($ppp, $T + $ZEROCNK,  $Td + $ZEROCNK);

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
  } elseif (count($global) == "10"){
    #if ($ir2 <= 2){ #no rr groupe, then we have the 7er and 8er groupe
    if ($global[8][0] != "6"){
      $ix=1;
      $ir=3;
      $in=1;
      $ww=substr($global[8], 1,2);
      $W1=$global[8][3];
      $W2=$global[8][4];
      $Nh=$global[9][1];
      $Cl=$global[9][2];
      $Cm=$global[9][3];
      $Ch=$global[9][4];
    #} elseif ($ir2 < 2){ #rr is reported in the first section as the 8th group
    } elseif ($global[8][0] == "6"){
      if ($global[9][0] == "7") {
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
    }
  } elseif ($globalcount == 9) {
    if ($global[8][0] == "7") {#only ww group
      $ix=1;
      $ir=3;
      $in=0;
      $ww=substr($global[8], 1,2);
      $W1=$global[8][3];
      $W2=$global[8][4];
    }elseif ($global[8][0] == "8"){#only cloud group
      $ix=2;
      $ir=3;
      $in=1;
      $Nh=$global[8][1];
      $Cl=$global[8][2];
      $Cm=$global[8][3];
      $Ch=$global[8][4];
    }elseif (($global[8][0] == "6")){#} or ($ir2 < 2)){ #rr is reported in the first section as the 8th group
      $ix=2;
      $ir=1;
      $in=0;
    }else{
      throw new Exception("Troubles with the groups in the global section!");
    }
  } elseif (count($global) == "8") {
    $ix=2;
    $ir=3;
    $in=0;
  }

  ## 333
  $sec333 = explode(" ", $parts[4]);

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
        $hh1=substr($sec333[$x], -2,2);
        $nflag++;
      }elseif ($nflag == "2"){
        $N2=$sec333[$x][1];
        $C2=$sec333[$x][2];
        $hh2=substr($sec333[$x], -2,2);
        $nflag++;
      }elseif($nflag == "3"){
        $N3=$sec333[$x][1];
        $C3=$sec333[$x][2];
        $hh3=substr($sec333[$x], -2,2);
        $nflag++;
      }else{
        $N4=$sec333[$x][1];
        $C4=$sec333[$x][2];
        $hh4=substr($sec333[$x], -2,2);
      }
    }
    $x++;
  }
 
  $value="Wetter: ".ww2words ($ww)."</br>Sicht: ". visibility ($vv) ."</br>Bedeckung: ".$N."/8</br>Tiefste Wolke: ".height ($h)."</br>".group8er ($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$hh1,$hh2,$hh3,$hh4,$Cl,$Cm,$Ch,$ww)."</br>Niederschlag (1h): ";
  #echo(count($global). " " . $global[8][0]);
  #echo( $ix .$ir .$in);

  #######################################################################################
  /*print out the fm12 again*/
  #global section
  echo("<br>" . $global[0] . " ");
  

  if (($ix == 1) and ($ix2 == 2)) {
    echo("<b style=\"color:red;\">" . $ix2 . "</b>");
    $error_message .= "ww-Gruppe wurde nachtr&auml;glich hinzugef&uuml;gt,</br>aber ix nicht auf 1 gesetzt.</br>";
  } elseif (($ix == 2) and ($ix2 == 1)){
    echo("<b style=\"color:red;\">" . $ix2 . "</b>");
    $error_message .= "ww-Gruppe wurde nachtr&auml;glich entfernt,</br>aber ix nicht auf 1 gesetzt.</br>";
  } else {
    echo($ix2);
  }
  if (($ir2 < 2) and ($ir == 3)){
    echo("<b style=\"color:red;\">" . $ir2 . "</b>");
    $error_message .= "RR-Gruppe fehlt. Wahrscheinlich m&uuml;sste</br><b>60002 (18z),</br>60001 (12z) oder</br>60007(15z,..)</b> vor die 7er-Grupper.</br>";
  } elseif (($ir2 >= 2) and ($ir == 1)){
    echo("<b style=\"color:red;\">" . $ir2 . "</b>");
    $error_message .= "Keine RR-Gruppe erwartet. Trotzdem eine da hinzugef&uuml;gt! Bitte wieder entfernen.</br>";
  } else {
    echo($ir2);
  }
  list ($fN, $fh,$fvv,$error_message) = test_N($ww,$h,$N,$vv,$Nh,$hh1,$in,$error_message);
  echo ($fh . $fvv . " ");
  echo($fN . substr($global[2], -4) . " ");
  echo ($global[3] . " " . $global[4] . " " . $global[5] . " " . $global[6] . " " );

  //pressure tendency
  if ($global[7][0] == '5') {
    if ($global[7][1] == "/") {
      echo($global[7][0] . "<b style=\"color:red;\">" . $global[7][1] . "</b>" . substr($global[7], -3) . " ");
      $error_message .= "Tendenz fehlt.</br>";
    } else {
      echo ($global[7] . " ");
    }
  } else {
    throw new Exception("Pressure tendency group wasn't found!");
  }

  if ($ir==1){
    echo ($global[8] . " ");
  }

  if ($ix == "1"){
    list ($wwgroup,$error_message)=test_ww($ww,$W1,$W2,$h,$vv,$relh,$N,$T,$C1,$C2,$C3,$C4,$Cm,$hour,$day,$error_message);
    echo ($wwgroup . " ");
    #if (test_ww($ww,$W1,$W2) == 1) {
    #  echo ("7" . $ww.$W1.$W2 . " ");
    #} else {
    #  echo ("<b style=\"color:red;\">7" . $ww.$W1.$W2 . "</b> ");
    #}
  }

  if ($in == "1"){
    list ($group8,$error_message)=test_8group($N,$Nh,$Cl,$Cm,$Ch,$N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$ww,$error_message);
    echo ($group8);
  }

  echo ("</br>");
  #333 section
  echo ("&nbsp&nbsp&nbsp" . $sec333[2] . " ");
  $x=3;
  while($x <= count($sec333)) {
    if ($sec333[$x][0] != "8") {
      if( ($sec333[$x][0] == "3") and (($hour % 6) == 0) ){
        if ($sec333[$x][1] == "/") {
          echo($sec333[$x][0] . "<b style=\"color:red;\">" . $sec333[$x][1] . "</b>" . substr($sec333[$x], -3) . " ");
          $error_message .= "Erdbodenzustand fehlt.</br>";
        } else {
          echo($sec333[$x] . " ");
        }    
      } elseif ( ($sec333[$x][0] == "6") and (( ($hour-3) % 6) == 0) ){
        if ( (($sec333[$x] != "60007") and (($ww < 20) and ($W1 < 5) and ($W2 < 5))) or 
             (($sec333[$x] == "60007") and (($ww >= 50) or ($W1 >= 5 and $W1 < 9) or ($W2 >= 5))) ) {
            echo(" <b style=\"color:red;\">" . $sec333[$x] . "</b> ");
            $error_message .= "3h RR registriert.</br>";
          } else {
            echo($sec333[$x] . " ");
          }
      } else {
        echo($sec333[$x] . " ");
      }
      $x++;
    } else {
      break;
    }
  }

  if ($in == 1){
    list($back8,$error_message) = test_8333($N1,$N2,$N3,$N4,$C1,$C2,$C3,$C4,$h,$hh1,$hh2,$hh3,$hh4,$N,$Nh,$Cl,$Cm,$Ch,$error_message);
    echo ($back8);
  }
  while($x <= count($sec333)) {
    if ($sec333[$x][0] != "8") {
      echo($sec333[$x] . " ");
    }
    $x++;
  }
  $sec555 = explode(" ", $parts[5]);
  echo("</br>&nbsp&nbsp&nbsp" . $sec555[2] . " " );
  $x=3;
  while($x <= count($sec555)) {
    if (substr($sec555[$x], 0,1) == "1") {
      $value.=rr1h(substr($sec555[$x], 1,3),substr($parts[1],12,2),substr($parts[1],10,2));
      if ( (($ww >= 50 and $ww != 76 ) or ($ww[0] >= 2 and $ww != 29)) and ($sec555[$x] == "10000")){
        echo("<b style=\"color:red;\">" . $sec555[$x] . "</b> ");
        $error_message .= "Unstimmigkeit zw. ww & rr 1h</br>RR wurde nicht registriert?</br>";
      }elseif ( ($ww < 20 or $ww == 76 ) and ($sec555[$x] != "10000")){
        echo("<b style=\"color:orange;\">" . $sec555[$x] . "</b> ");
      } else {
        echo($sec555[$x] . " ");
      }
    } elseif (substr($sec555[$x], 0,2) != "24") {
      echo($sec555[$x] . " ");
    } else {
      if ( ( (($ww[0] == 2 or $ww >= 50) and ($ww != 29)) or ($W1 > 2 and ($W1 != 9)) or ($W2>2) ) and ($sec555[$x][2] == 0) ){
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlagsart falsch.</br>";
      } elseif ($sec555[$x][2] == "/") {
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlagsart fehlt.</br>";
      } elseif (($sec555[$x][2] == "0") and  ($ir == 1 and (substr($global[8], 1,3) != "000"))){
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlag gemeldet, aber die Niederschlagsart fehlt!</br>Bezugszeitraum(tr): " . tr_func($global[8][4]) . "</br>";
      } elseif ( ( ($ww[0] == 7) or ($ww == 90) or ($ww == 99) or ($ww == 93) or ($ww == 92) or ($ww == 96) or ($ww == 22) or ($ww == 26) or ($ww == 27) or ($W1 == 7) or ($W2 == 7) ) and ($sec555[$x][2] == 6) ){
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlagsart ist falsch.</br>Fester Niederschlag kam im Bezugszeitraum vor.</br>";
      } elseif ( ( ($ww == 23) or ($ww == 68) or ($ww == 69) or ($ww == 83) or ($ww == 84) or (($W1 == 6) and ($W2 == 7)) ) and ($sec555[$x][2] != 8) ){
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlagsart ist falsch.</br>In der 7er Gruppe wurde</br>fest und fl&uuml;ssig gemeldet!</br>";
      } elseif ( ( ($ww == 48) or ($ww == 49)) and ($sec555[$x][2] == 0) ){
        echo($sec555[$x][0] . $sec555[$x][1] . "<b style=\"color:red;\">" . $sec555[$x][2] . "</b>" . $sec555[$x][3] . " ");
        $error_message .= "Niederschlagsart ist fehlt.</br><a href=\"fm12.html#524\">Wr</a>   muss 3 -- nur feste abgesetzte Niederschl&auml;ge</br>";
      } else {
        echo($sec555[$x] . " ");
      }
    }
    $x++;
  }
  echo("</br>&nbsp" . $parts[6]);
  if ( ($hour ==  "00") or ($hour ==  "06") or ($hour ==  "12") or ($hour == "18")){
    $sec666 = explode(" ", $parts[7]);
    if ( (($ww >= 20) or ($W1 > 2 and ($W1 != 9)) or ($W2>2)) and (substr($sec666[7], -1,1) == "/" or substr($sec666[7], -1,1) == 0) ) {
      echo ("</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp80000&nbsp1" . substr($sec666[7], 1,4) . "<b style=\"color:red;\">" . substr($sec666[7], -1,1) . "</b> ");
      $error_message .= "Niederschlagsart fehlt (6h). ";
      $x=8;
      while($x <= count($sec666)) {
        echo($sec666[$x] . " ");
        $x++;
      }
      echo("</br>&nbsp&nbsp" . $parts[8]);
    } else {
      echo("</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $parts[7]);
      echo("</br>&nbsp&nbsp" . $parts[8]);
    }
  } else {
    echo("</br>&nbsp&nbsp" . $parts[7]);
  }
  return array($error_message,$value,$cor_count);
}

function cor_func ($fname,$hour,$day){

  $zitate = file_get_contents($fname);
  $parts = explode("\n", $zitate);
  $cor_count=0;
  $cor = strstr($parts[1], 'CC');

  if ($cor == "CCA"){
    $cor_count=1;
  } else if ($cor == "CCB"){
    $cor_count=2;
  } else if ($cor == "CCC"){
    $cor_count=3;
  } else if ($cor == "CCD"){
    $cor_count=4;
  } else if ($cor == "CCE"){
    $cor_count=5;
  } else if ($cor == "CCF"){
    $cor_count=6;
  } else if ($cor == "CCG"){
    $cor_count=7;
  } else if ($cor == "CCH"){
    $cor_count=8;
  } else if ($cor == "CCI"){
    $cor_count=9;
  } else if ($cor == "CCJ"){
    $cor_count=10;
  }
  return $cor_count;
}
?>
