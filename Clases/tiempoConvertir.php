<?php
    require_once './Clases/conversion.php';

    /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Tiempo.
   */

   class tiempoConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
            $unidades = [
                'Segundo' => 1,
                'Minuto' => 60,
                'Hora' => 3600,
                'Dia' => 86400,
                'Semana' => 604800
            ];

            if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
                throw new Exception('Unidades no válidas para la conversión de datos');
            }

            //codigo para el resultado

            $conver = $value * $unidades[$uni];
            $result = $conver / $unidades[$unf];



            return $result;
       }
   }
   

?>