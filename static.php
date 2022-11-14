<?php

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "halo " . self::$angka++ . " kali";
    }
    
}


// echo ContohStatic::halo() . "<br>";
// echo ContohStatic::halo() . "<br>";
// echo ContohStatic::$angka . "<br>";


// CONTOH LAIN
class Contoh{
    public static $angka = 1;

    public function halo(){
        return "halo untuk ke-" . self::$angka++ . " kali <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo() . "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>