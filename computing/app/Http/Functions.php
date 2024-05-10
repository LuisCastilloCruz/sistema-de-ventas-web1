<?php 
    function getModulesArray(){
        $a = [
            '../categories' => 'Productos',
            '1' => 'Pantallas',
            '2' => 'Laptop',
            '3' => 'Memorias',
            '4' => 'Camaras',
            ];
            return $a;
    }
    function getStatesArray(){
        $a = [
            '0'=>'Descuento',
            '1'=>'Nuevo',
            '2'=>'Oferta',
            '3'=>'Rebaja',
            '4'=>'Destacado',
            '5'=>'Ofertas especiales',
            '6'=>'Ofertas 2',
        ];
        return $a;
    }
?>