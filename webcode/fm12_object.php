<?php

class raingroup{
    public $RR;
    public $tr;

    function __construct($global,$index) {
        $rr = intval(substr($global[$index], 1,3));
        if ($rr >= 990){
            $this->RR = ($rr-990)/10.0;
        } else {
            $this->RR = $rr;
        }
        $this->tr = $global[$index][4];
    }
}

class AchterGruppe{
    public $N;
    public $C;
    public $hh;
}

class CloudGroup{
    public $N;  //total cloud cover
    public $Nh; //amount of low clouds or midlevel clouds
    public $h;  //height of the lowest cloud layer
    public $Cl; //kind of low clouds
    public $Cm; //kind of midlevel clouds
    public $Ch; //kind of high clouds
    //public $first = new AchterGruppe();
    function __construct($global,$index) {
        $this->N =$global[2][0];
        $this->h =$global[1][2];
        $this->Nh=$global[$index][1];
        $this->Cl=$global[$index][2];
        $this->Cm=$global[$index][3];
        $this->Ch=$global[$index][4];
    }

    public function func_N($ww) {
        $fN=$this->N; #vsprintf("%1d", $this->N);
        $error_message="";

        if ( $this->N == "/"){
            $fN="<b class=\"alert\">" . $this->N . "</b>";
            $error_message .= "Gesamt Bedeckugsgrad fehlt!</br>";
          }

        #fog
        if ( (($ww == 43) or ($ww == 45) or ($ww == 47) or ($ww == 49) or ($ww == 82) or ($ww == 99)) xor ($this->N == 9) ){
            $fN="<b class=\"alert\">" . $this->N . "</b>";
            $error_message .= "Himmel nicht erkennbar wurde</br>nicht konsistenz gemeldet!</br>ww und N prüfen.";
        }

        #Nh
        if ($this->N < $this->Nh) {
            $fN="<b class=\"alert\">" . $this->N . "</b>";
            $error_message .= "N < Nh</br>";
        }

        #h
        if ( ($this->N == 9) and ($this->h != "/") ) {
            $fN="<b class=\"warn\">" . $this->N . "</b>";
          }

        #current weather
        if ( ($ww >= 14) and ($this->N == 0)){
            $fN="<b class=\"warn\">" . $this->N . "</b>";
            $error_message .= "Fallstreifen fallen</br>in der Regel aus Wolken.";
        }

        if ( ($ww >= 50 or $ww == 16) and ($this->N == 0)){
            $fN="<b class=\"alert\">" . $this->N . "</b>";
            $error_message .= "ww gegeben, aber N 0/8.</br>";
        }

        return $fN;
    }

    public function func_h() {

    }

    public function func_Nh() {

    }



    public function func_Cl() {

    }

    public function func_Cm() {

    }

    public function func_Ch() {

    }

}

class weathergroup{
    public $ww; //current weather
    public $W;  //current weather interpretation as big W
    public $W1; //W1
    public $W2; //W2
    public $error;

    function __construct($global,$index=null) {
        if (is_null($index)) {
            $this->ww=0;
            $this->W=0;
            $this->W1=0;
            $this->W2=0;
        } else {
            $this->ww=intval(substr($global[$index], 1,2));
            $this->W=$this->ww2W($this->ww);
            $this->W1=intval($global[$index][3]);
            $this->W2=intval($global[$index][4]);
            #echo("ww:" . $this->ww);
        }
    }

    public function print_weathergroup() {
        echo("</br>ww:" . $this->ww);
        echo("</br>W:" . $this->W);
        echo("</br>W1:" . $this->W1);
        echo("</br>W2:" . $this->W2);
    }

    public function htmloutput() {
        $string7 =  "7";
        $string7 .= vsprintf("%02d", $this->ww);
        $string7 .= $this->W1;
        $string7 .= $this->W2;
        echo($string7);
    }

    public function func_ww($relh,$vv,$N, $h, $hh1) {
        
        if ($this->ww == 0 and $this->W1 == 0){
            return null;
        } else {
            $fww=vsprintf("%02d", $this->ww);
            $fW1=$this->W1;
            $fW2=$this->W2;
            echo(" 7" . $fww . $fW1 . $fW2);
            return null;
        }
        
    }

    private function ww2W($ww){
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
}

class SynopReport {
    
    /*
    MMMM D....D YYGGggi 99LLL QLLLL
    IIiii oder IIIII iihVV Nddff 00fff 1sTTT 2sTTT 3PPPP 4PPPP 5appp 6RRRt 7wwWW 8NCCC 9GGgg
    333 0.... 1sTTT 2sTTT 3EsTT 4E'sss 55SSS 2FFFF 3FFFF 4FFFF 553SS 2FFFF 3FFFF 4FFFF 6RRRt 7RRRR 8NChh 9SSss
    */
    public $fm12_parts=null;
    public $globalcount; //count of groups in global section
    public $ix; //automatic and weather reportet
    public $ir; //rain groups
    public $in; //wind unit
    public $h; //
    public $vv; //visibility
    public $N;  //total cloud cover
    public $dd; //wind direction
    public $ff; //wind velocity
    public $T;  //temperature
    public $Td; //dewpoint
    public $rel;//relative humidity
    public $Nh; //amount of low clouds or midlevel clouds
    public $ppp; //pressure
    public $a; //kind of tendency
    public $p_ten; //tendency
    public $rainglobal=null; //rain (raingroup class)
    public $weather=null; //weather (weathergroup class)
    public $clouds=null; //clouds (cloudgroup class)
    public $count333; //count of groups in third section
    public $E;  //ground state
    public $E_snow; //typ of the snow cover
    public $sss; //snow height
    public $rain333=null; //rain (raingroup class)

    // Meteorological Constants
    private $ROCP = 0.28571426;       // R over Cp
    private $ZEROCNK = 273.15;        // Zero Celsius in Kelvins
    private $G = 9.80665;             // Gravity

    //constructor
    function __construct($fname){
        $zitate = file_get_contents($fname);
        $this->fm12_parts = explode("\n", $zitate);
        if (count($this->fm12_parts) == 1) {
            throw new Exception("NIL");
        } elseif (count($this->fm12_parts) < 6){
            throw new Exception("FM12 isn't in full!");
        }
        $global = explode(" ", $this->fm12_parts[3]);
        $sec333 = explode(" ", $this->fm12_parts[4]);
     
        $this->globalcount = count($global);
        $this->ix = intval($global[1][0]);
        $this->ir = intval($global[1][1]);
        
        $this->h = $global[1][2];
        /*get observation values*/
        $this->vv=substr($global[1], -2);  #visibility
        #echo($this->vv . "\n");
        $this->N =$global[2][0];
        $this->dd =substr($global[2], 1,2);
        $this->ff =substr($global[2], -2);
        #echo($this->dd . "\n");
        #echo($this->ff . "\n");

        if ($global[3][0] == '1'){//temperature
            if ($global[3][1] == '1'){
                $this->T=intval(substr($global[3], 2,3))/-10.0;
            }else{
                $this->T=intval(substr($global[3], 2,3))/10.0; 
            }
            #echo($this->T);
        } else {
            throw new Exception("Temperature group wasn't found!");
        }

        if ($global[4][0] == '2'){//dewpoint
            if ($global[4][1] == '1'){
                $this->Td=intval(substr($global[4], 2,3))/-10.0;
            }else{
                $this->Td=intval(substr($global[4], 2,3))/10.0; 
            }
            #echo($this->Td . "\n");
        } else {
            throw new Exception("Dewpoint group wasn't found!");
        }
        if ($global[5][0] == '3'){//pressure
            $this->ppp=intval(substr($global[5], 2,4))/10.0;
            if ($this->ppp < 100.0 and $this->ppp >= 0.0){
                $this->ppp += 1000.0;
            }
            #echo($this->ppp);
        } else {
            throw new Exception("Pressure group wasn't found!");
        }

        $this->relh = $this->relh($this->ppp, $this->T + $this->ZEROCNK,  $this->Td + $this->ZEROCNK);

        if ($global[7][0] == '5'){
            if ($global[7][1] == "/") {
                echo($global[7][0] . "<b style=\"color:red;\">" . $global[7][1] . "</b>" . substr($global[7], -3) . " ");
                #$error_message .= "Tendenz fehlt.</br>";
            } else {
                #echo ($global[7] . " ");
            }
        } else {
            /*set fatal error flag*/
            $this->fatal_flag=TRUE;
        }

        $i=8;
        #echo($this->globalcount);
        while ($i <= $this->globalcount){
            if ($global[$i][0] == '6'){
                $this->rainglobal = new raingroup($global,$i);
            } elseif ($global[$i][0] == '7'){
                $this->weather = new weathergroup($global,$i);
                #$this->weather->htmloutput();
            } elseif ($global[$i][0] == '8'){
                $this->clouds  = new CloudGroup($global,$i);
                #echo($this->clouds->html_totalcover(40));
            }
            $i+=1;
        }


        
    }

    public function main_func(){
        $error_message=""; //error_message
        $value=""; //values

        try {
            $this->head_func();
        } catch (Exception $e) {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            $this->print_fm12(1);
            echo "<b>If you don't know why this happend, send a message at quali(at)met.fu-berln.de.</b></br></br>\n";
        }
        $this->global_func();
    }

    /*MMMM D....D YYGGggi 99LLL QLLLL*/
    private function head_func(){
        if (ord($this->fm12_parts[0][0]) == 1){
            echo($this->fm12_parts[1] . "<br>" . $this->fm12_parts[2]);
        } elseif (ord($this->fm12_parts[0][0]) == 0) {
            throw new Exception("Missing character in the first row! " . ord($this->fm12_parts[0][0]));
        } elseif (ord($this->fm12_parts[0][0]) == 83) {
            throw new Exception("First row missing completly! " . ord($this->fm12_parts[0][0]));
        } else {
            throw new Exception("Something unexpected happened! " . ord($this->fm12_parts[0][0]) . " " . $this->fm12_parts[0][0]);
        }
    }

    private function print_fm12($k){
        echo($this->fm12_parts[1-$k] . "<br>" . $this->fm12_parts[2-$k] . "<br>");
        echo($this->fm12_parts[3-$k]. "<br>");
        echo($this->fm12_parts[4-$k]. "<br>");
        echo($this->fm12_parts[5-$k]. "<br>");
    }

    private function global_func(){ /* main function for global and 333 sec*/
        /*
        IIiii iihVV Nddff 00fff 1sTTT 2sTTT 3PPPP 4PPPP 5appp 6RRRt 7wwWW 8NCCC 9GGgg
          333 1sTTT 2sTTT 3EsTT 4E'sss 55SSS 2FFFF 3FFFF 4FFFF 553SS 2FFFF 3FFFF 4FFFF 6RRRt 7RRRR 8NChh 9SSss
        */
        echo("</br>");
        if ($this->weather!=null){
            $this->weather->func_ww($this->relh,$this->vv,$this->N, $this->h, 0);
        }
    }


    private function vappres($t){
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

    private function mixratio($p, $t){
        /*
        Parameters
        ----------
        p : Pressure (hPa)
        t : Temperature (K)
        Returns
        -------
        Mixing Ratio (g/kg) of air at given temperature and pressure
        */
        $t -= $this->ZEROCNK;
        $x = 0.02 * ($t - 12.5 + (7500.0 / $p));
        $wfw = 1. + (0.0000045 * $p) + (0.0014 * $x * $x);
        $fwesw = $wfw * $this->vappres($t);
        return 621.97 * ($fwesw / ($p - $fwesw));
    }

    private function relh($p, $t, $td){
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
        return 100.0* $this->mixratio($p, $td) / $this->mixratio($p, $t);
    }

}



function synop ($fname,$hour,$day){
    try {
        $test = new SynopReport($fname);
    } catch (Exception $e) {
        if ( $e->getMessage() == "NIL"){
            echo "<b class=\"sm\">", $e->getMessage(),"  The FM12 was submited to late!</b>";
            return null;
        } else {
            echo "<h3>Fatal Error occurred!</h3>\n </br></br><b class=\"sm\"> Error message: ",  $e->getMessage(), "</b></br>\n";
            echo "<b>If you don't know why this happend, send a message at quali@met.fu-berln.de.</b></br></br>\n";
            return null;
        }
    }

    

    $test->main_func();


#echo($fname);
#echo ($test->ix);
#echo ($test->ir);
}

?>
