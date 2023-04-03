// esempio di ereditarietà in PHP con classi Auto,Berlina,Suv e Cabrio
// creaimo una classe Auto che ha tre sottoclassi, ognuna delle quali ha un metodo in comune.

<?php

abstract class Auto{
    public $marca;
    public $modello;
    public $anno;

    public function __construct($marca, $modello, $anno){
        $this->marca = $marca;
        $this->modello = $modello;
        $this->anno = $anno;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModello(){
        return $this->modello;
    }

    public function getAnno(){
        return $this->anno;
    }

    abstract public function descrizione();
}

 class Berlina extends Auto {
    public function descrizione(){
        echo " Questa è una " . $this->getMarca() . " " .$this->getModello() . " del " . $this->getAnno() . ", una berlina."; 
    }

    public function accelerazione(){
        echo "La berlina sta accelerando!";
    }
 }

 class Suv extends Auto{
    public function descrizione(){
        echo " Questa è una " . $this->getMarca() . " " .$this->getModello() . " del " . $this->getAnno() . ", un SUV."; 
    }

    public function accelerazione(){
        echo "Il SUV sta accelerando!";

    }

   }

   class Cabrio extends Auto {
    public function descrizione(){
        echo " Questa è una " . $this->getMarca() . " " .$this->getModello() . " del " . $this->getAnno() . ", un SUV."; 
    }

    public function accelerazione(){
        echo "La cabrio sta accelerando!";
   }
   }

   // utilizziamo le classi
   $berlina = new Berlina('Toyota', 'Corolla', 2022);
   $suv = new Suv('Jeep', 'Wrangler', 2021);
   $cabrio = new Cabrio('BMW', 'Z4', 2023);

   $berlina->descrizione();
   $suv->descrizione();
   $cabrio->descrizione();

   $berlina->accelerazione();
   $suv->accelerazione();
   $cabrio->accelerazione();

   /* La classe Auto è una classe astratta, il che significa che non può essere istanziata direttamente ma deve essere
      ereditata da una classe figlia. Le classi figlie, invece, implementano il metodo descrizione(), che viene ereditato
      dalla classe Auto e poi sovrascritto per fornire una descrizione specifica per ciascuna classe figlia. Viene poi
      creato un oggetto per ciascuna classe figlia e vengono chiamati i metodi descrizione() e accelerazione(), che sono
      definiti nelle rispettive classi figlie. L'output dei metodi varia in base alla classe specifica dell'oggetto che viene
      chiamato. L'ereditarietà è un concetto fondamentale della programmazione orientata agli oggetti e consente di creare codice più
      modulare e riutilizzabile.
   */




?>