<?php

class Uyeler extends CI_Controller
{
    public function uyegetir()
    {
        $uyeler = array(
            "id"    => "1",
            "adi"   => "Ayşe",
            "soyadi" => "Candan",
            "email" => "asd@ads.com"
        );

        echo "<pre>";
        print_r($uyeler);
        echo "</pre>";
    }
}
