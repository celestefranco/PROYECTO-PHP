<?php
   
   require_once './Clases/conversion.php';
   /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Datos.
   */

   class datosConvertir extends conversion
   {
    
       public function conversion($value, $uni, $unf)
       {
          $unidades = [
            'Bit' => 1,
            'Bytes' => 8,
            'Kilobytes (KB)' => 8 * 1024,
            'Megabytes (MB)' => 8 * 1024 * 1024,
            'Gigabytes (GB)' => 8 * 1024 * 1024 * 1024,
            'Terabytes (TB)' => 8 * 1024 * 1024 * 1024 * 1024
        ];

        if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
            throw new Exception('Unidades no válidas para la conversión de datos');
        }

        $conver = $unidades[$unf] / $unidades[$uni];
        $result = $value * $conver;

        return $result;
      }
   }
   
      
      

   
   

?>