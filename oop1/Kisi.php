<?php 

class Kisi{
 
    private  $ad;
    private  $soyad;

    public function __construct($ad,$soyad) {
        $this->ad   =$ad;
        $this->soyad=$soyad;
    }

    function AdSoyadGoster()
    {
       echo "Adınız:".$this->ad." Soyadınız:".$this->soyad;
    }

}

?>