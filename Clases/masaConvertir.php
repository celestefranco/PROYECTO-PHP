<?php
    require_once './Clases/conversion.php';

    /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Masa.
   */

class masaConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
       
        // cálculos de conversión 
        if ($uni == 'Gramo (g)') {
            if ($unf == 'Kilogramo (kg)') {
                $result = $value / 1000;
            } elseif ($unf == 'Libra (lb)') {
                $result = $value * 0.00220462;
            }elseif ($unf == 'Tonelada (Ton)'){
                $result = $value *(1/1000)*(1/1000);
            }else {
                $result = $value;
            }
        } elseif ($uni== 'Kilogramo (kg)') {
            if ($unf == 'Gramo (g)') {
                $result = $value * 1000;
            } elseif ($unf == 'Libra (lb)') {
                $result = $value * 2.20462;
            }elseif ($unf == 'Tonelada (Ton)'){
                $result = $value *(1/1000);
            }else {
                $result = $value;
            }
        } elseif ($uni == 'Libra (lb)') {
            if ($unf == 'Gramo (g)') {
                $result = $value * 453.59;
            } elseif ($unf == 'Kilogramo (kg)') {
                $result = $value * 0.453592;
            }elseif ($unf == 'Tonelada (Ton)'){
                $result = $value * 0.000453592;
            }else {
                $result = $value;
            }
        } elseif ($uni == 'Tonelada (Ton)') {
            if ($unf == 'Gramo (g)') {
                $result = $value * 1000000;
            } elseif ($unf == 'Kilogramo (kg)') {
                $result = $value * 1000;
            }elseif ($unf == 'Libra (lb)'){
                $result = $value * 2204.62;
            }else {
                $result = $value;
            }
        }
        return $result;
      }
    } 
?>