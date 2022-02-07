<?php

require 'index.php';

//Herencia
class nuevo extends index{

    public function __construct(
         $materia,
         $profesor,
         $aula
        
    )

    {
    parent::__construct($materia, $profesor, $aula);
    }

    //Polimorfismo
    public function getInfo()
    {
       $ul = "Es un Ejemplo" ;

        echo parent::getInfo();
        return $ul;

    }



}
    $nuevo1 = new nuevo(
        'calculo',  
        'Eden',
        'Acomp3'
        
    );

    echo $nuevo1->getInfo();
