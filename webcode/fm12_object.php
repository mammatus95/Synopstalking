<?php

class raingroup{
    public $RR;
    public $tr;
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
}

class weathergroup{
    private $vv; //visability
    private $relh //relative humidity
    public $ww; //current weather
    private $W;  //current weather interpretation as big W
    private $W1; //W1
    private $W2; //W2
    private $error;
    function __construct($vv, $relh, $global,$index=null) {
        if (is_null($index)) {
            $this->vv=$vv;
            $this->relh=$relh;
            $this->ww=-99;
            $this->W=-99;
            $this->W1=-99;
            $this->W2=-99;
        } else {
            $this->vv=$vv;
            $this->relh=$relh;
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
    public $globalcount; //count of grups in global section
    public $ix; //automatic and weather reportet
    public $ir; //rain groups
    public $in; //wind unit
    public $T;  //temperature
    public $Td; //dewpoint
    public $rel;//relative humidity
    public $dd; //wind direction
    public $ff; //wind velocity
    public $vv; //visibility
    public $ppp; //pressure
    public $weather; //weather (weathergroup class)
    public $error_message=""; //error_message
    public $value=""; //values
    public $fatal_flag=FALSE; //fatal error flag

    // Meteorological Constants
    private $ROCP = 0.28571426;       // R over Cp
    private $ZEROCNK = 273.15;        // Zero Celsius in Kelvins
    private $G = 9.80665;             // Gravity

    //....
    function __construct($fname) {
        $zitate = file_get_contents($fname);
        $parts = explode("\n", $zitate);
        $global = explode(" ", $parts[3]);
        $sec333 = explode(" ", $parts[4]);
     
        $this->globalcount = count($global);
        $this->ix = intval($global[1][0]);
        $this->ir = intval($global[1][1]);
        
        /*get observation values*/
        $this->vv=substr($global[1], -2);  #visibility
        #echo($this->vv . "\n");
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
            /*set fatal error flag*/
            $this->fatal_flag=TRUE;
        }

        if ($global[4][0] == '2'){//dewpoint
            if ($global[4][1] == '1'){
                $this->Td=intval(substr($global[4], 2,3))/-10.0;
            }else{
                $this->Td=intval(substr($global[4], 2,3))/10.0; 
            }
            echo($this->Td . "\n");
        } else {
            /*set fatal error flag*/
            $this->fatal_flag=TRUE;
        }
        if ($global[5][0] == '3'){//pressure
            $this->ppp=intval(substr($global[5], 2,4))/10.0;
            if ($this->ppp < 100.0 and $this->ppp >= 0.0){
                $this->ppp += 1000.0;
            }
            #echo($this->ppp);
        } else {
            /*set fatal error flag*/
            $this->fatal_flag=TRUE;
        }

        $this->relh = $this->relh($this->ppp, $this->T + $this->ZEROCNK,  $this->Td + $this->ZEROCNK);
/*
        while ($this->globalcount)

     if (count($global) == "11"){//all groups are delevert
        $this->weather = new weathergroup($global,$this->globalcount-2);
        $this->clouds  = new CloudGroup($global,$this->globalcount-1);
        #$this->weather->print_weathergroup();#output
        $this->weather->htmloutput();
     } else {
     
     $this->weather = new weathergroup();
     $this->weather->print_weathergroup();
     }

*/
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
$test = new SynopReport($fname);
//echo("test");
#echo ($test->ix);
#echo ($test->ir);
}

?>
