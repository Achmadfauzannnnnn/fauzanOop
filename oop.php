<?php
    class Alaskaki{
        public $jenis;
        private $harga;
        protected $ukuran;
        
        function __construct($harga,$ukuran){
            $this->harga = $harga;
            $this->ukuran = $ukuran;
        }

        function __destruct(){
            echo "{$this->jenis} dengan ukuran {$this->ukuran} sangat nyaman dipakai.";
        }

        function setAlaskaki($jenis){
            $this->jenis = $jenis;
        }

        function getAlaskaki(){
            return "Alas kaki telah didapatkan.";
        }

        function describe(){
            echo ("<br>Jenis: {$this->jenis}<br>Harga: {$this->harga}<br>ukuran: {$this-> ukuran}<br>");
        }
   
    }

    class Sepatu extends Alaskaki{
        private $merk;

        function __construct($harga,$ukuran){
            parent:: __construct($harga,$ukuran);
        }

        function __destruct(){
            echo "Sepatu {$this->merk} dengan ukuran {$this->ukuran} sangat nyaman ketika dipakai.<br>";
        }

        function setSepatu($jenis, $merk){
            $this->jenis = $jenis;
            $this->merk = $merk;
        }

        function getSepatu(){
            return "Sepatu telah didapatkan.";
        }
    }
    
    
    $alaskaki = new Alaskaki(350000,"42");    
    $alaskaki->setAlaskaki("Sepatu Olahraga");
    echo "{$alaskaki->getAlaskaki()}";
    $alaskaki->describe();

    echo"<br>";

    $sepatu = new Sepatu (350000,"42");
    $sepatu->setSepatu("Sepatu Futsal","Ortuseight.");
    echo "{$sepatu->getSepatu()}";
    $sepatu->describe();

    echo ("<br>");

?>