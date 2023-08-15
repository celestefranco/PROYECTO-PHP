<?php
    require_once './Clases/conversion.php';

     /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  VolumenConvertir de unidad de medida: Volumen.
   */

   class volumenConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
              
            $unidades = [
                'Galon (gal)' => 3.78541, 
                'Litro (l)' => 1,
                'Mililitro (ml)' => 0.001,
                'Metro Cubico (m3)' => 1000 
            ];

            if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
                throw new Exception('Unidades inválidas');
            }

            if ($uni ===  'Galon (gal)') {
                if ($unf === 'Litro (l)') {
                    $result = $value * 3.78541; // Conversión de galones a litros
                } elseif ($unf === 'Mililitro (ml)') {
                    $result = $value * 3785.41; // Conversión de galones a mililitros
                } elseif ($unf === 'Metro Cubico (m3)') {
                    $result = $value * 0.00378541; // Conversión de galones a metros cúbicos
                } 
            else {
                throw new Exception("No se puede convertir a la unidad indicada");
                }
            }
            
            if ($uni ===  'Litro (l)') {
                if ($unf === 'Galon (gal)') {
                    return $value * 0.264172; // Conversión de litros a galones
                } elseif ($unf === 'Mililitro (ml)') {
                    return $value * 1000; // Conversión de litros a mililitros
                } elseif ($unf === 'Metro Cubico (m3)') {
                    return $value * 0.001; // Conversión de litros a metros cúbicos
                } else {
                    throw new Exception("No se puede convertir a la unidad indicada");
                }
            }

            if ($uni ===  'Mililitro (ml)') {
                if ($unf === 'Litro (l)') {
                    return $value / 1000; // Conversión de mililitros a litros
                } elseif ($unf === 'Galon (gal)') {
                    return $value / 3785.41; // Conversión de mililitros a galones
                } elseif ($unf === 'Metro Cubico (m3)') {
                    return $value * 0.000001; // Conversión de mililitros a metros cúbicos
                } 
            else {
                    throw new Exception("No se puede convertir a la unidad indicada");
                }
            }

            if ($uni ===  'Metro Cubico (m3)') {
                if ($unf === 'Litro (l)') {
                    return $value * 1000; // Conversión de metros cúbicos a litros
                } elseif ($unf === 'Galon (gal') {
                    return $value * 264.172; // Conversión de metros cúbicos a galones
                } elseif ($unf === 'Mililitro (ml)') {
                    return $value * 1000000; // Conversión de metros cúbicos a mililitros
                } 
            else {
                    throw new Exception("No se puede convertir a la unidad indicada");
                }
            }

            return $result;          

             
       }
   }
   

?>