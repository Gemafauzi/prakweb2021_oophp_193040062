<?php

class Contoh
{
  public  static $angka = 1;
  public function halo()
  {
    return "Hallo " . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();