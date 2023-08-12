<?php
   require_once './Clases/convertir.php';

    /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Masa.
   */

   class masaConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["value"];
            $uni = $_POST["uni"];
            $unf = $_POST["unf"];
            
            // cálculos de conversión 
            if ($uni == "gramos") {
                if ($unf == "kilogramos") {
                    $result = $value / 1000;
                } elseif ($unf == "libras") {
                    $result = $value * 0.00220462;
                }elseif ($unf == "toneladas"){
                    $result = $value *(1/1000)*(1/1000);
                }else {
                    $result = $value;
                }
            } elseif ($uni== "kilogramos") {
                if ($unf == "gramos") {
                    $result = $value * 1000;
                } elseif ($unf == "libras") {
                    $result = $value * 2.20462;
                }elseif ($unf == "toneladas"){
                    $result = $value *(1/1000);
                }else {
                    $result = $value;
                }
            } elseif ($uni == "libras") {
                if ($unf == "gramos") {
                    $result = $value * 453.59;
                } elseif ($unf == "kilogramos") {
                    $result = $value * 0.453592;
                }elseif ($unf == "toneladas"){
                    $result = $value * 0.000453592;
                }else {
                    $result = $value;
                }
            } elseif ($uni == "toneladas") {
                if ($unf == "gramos") {
                    $result = $value * 1000000;
                } elseif ($unf == "kilogramos") {
                    $result = $value * 1000;
                }elseif ($unf == "libras"){
                    $result = $value * 2204.62;
                }else {
                    $result = $value;
                }
            }
            
           
        }
       }
   }
   

?>