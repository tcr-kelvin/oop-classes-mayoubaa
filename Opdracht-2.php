<?php

    Class Auto{
        public  $merk;
        public  $kleur;
        public  $model;
        public  $bouwjaar;

        public function __construct($merk, $kleur, $model, $bouwjaar)
        {
            $this->merk = $merk;
            $this->kleur = $kleur;
            $this->model = $model;
            $this->bouwjaar = $bouwjaar;
        }

        public function  __toString()
        {
            return "merk = " . $this->merk . "<br/> kleur = " . $this->kleur . "<br/> model = " . $this->model . "<br/> bouwjaar = " . $this->bouwjaar ;
        }


    }

    Class Klant{
        public  $naam;
        public  $apkKeuring;
        public  $aankoopVerleden;
        public  $nieuwsbrief;


        public function __construct($naam, $apkKeuring, $aankoopVerleden, $nieuwsbrief)
        {
            $this->naam = $naam;
            $this->apkKeuring = $apkKeuring;
            $this->aankoopVerleden = $aankoopVerleden;
            $this->nieuwsbrief = $nieuwsbrief;
        }

        public function  __toString()
        {
            return "Naam = " . $this->naam . "<br/> ApkKeuring = " . $this->apkKeuring . "<br/> Aankoopverleden = " . $this->aankoopVerleden . "<br/> Nieuwsbrief = " . $this->nieuwsbrief ;
        }


    }



    $auto = new Auto("Ford","Grijs","Mustang","2016");
    $klant = new Klant("Ayoub","2020","nee","12-05-2010" );

    echo "Klant informatie: <br />  <br />" . $klant . "<br/> <br/>";
    echo "Auto informatie: <br /> <br />" . $auto . "<br/> <br/>";