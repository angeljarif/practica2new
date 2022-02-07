<?php

class index{

    public function __construct(
        //Encapsulamiento
        //Abstraccion
        private string $materia,
        private string $profesor,
        private string $aula
    )
    {}

    public function getInfo(){

    $info = "<b>$this->materia </b> es impartida por el docente <i>{$this->profesor}</i> <br></br>
                en el aula: $this->aula <br></br>" ;

    

    return $info;

    }
}
$index1 = new index(
    'Sistemas Operativos',
    'Jesus Carlos',
    'Acomp2'

);

echo $index1->getInfo();

echo "<b>Alumno: Angel Jarif Lopez Calvo</b><br></br>";

$index2 = new index(
    'Redes',
    'Wiliam',
    'Acomp1'
);





?>