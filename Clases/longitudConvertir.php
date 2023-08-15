<?php
   require_once './Clases/conversion.php';

    /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Longitud.
   */
   class longitudConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
            $tablaConversion = [
                'Metro (m)'=>1,
                'Decimetro (dm)'=>0.1, 
                'Centimetro (cm)'=>0.01,
                'Milimetro (mm)'=>0.001, 
                'Decametro (dam)'=>10,
                'Hectometro (hm)'=>100,
                'Kilometro (km)'=>1000, 
                'Pulgada (plg)'=>0.0254,
            ];

            if (!isset($tablaConversion[$uni]) || !isset($tablaConversion[$unf])) {
                throw new InvalidArgumentException("Unidades proporcionadas no válidas.");
            }

            $valueEnMetros=$value * $tablaConversion[$uni];
            $result =$valueEnMetros / $tablaConversion[$unf];

            return $result;
       }
   }
   

?>