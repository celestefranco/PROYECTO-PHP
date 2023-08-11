<?php
   require_once './Clases/convertidor.php';

     /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Volumen.
   */

   class volumenConvertir extends conversion
   {
       public function conversion($value, $uni, $unf)
       {
        abstract class UnidadDeVolumen {
          abstract public function convertir($value, $unidadHacia);
      }
      
      class Litros extends UnidadDeVolumen {
          public function convertir($value, $unidadHacia) {
              if ($unidadHacia === 'Galones') {
                  return $value * 0.264172; // Conversión de litros a galones
              } elseif ($unidadHacia === 'Mililitros') {
                  return $value * 1000; // Conversión de litros a mililitros
              } elseif ($unidadHacia === 'MetrosCubicos') {
                  return $value * 0.001; // Conversión de litros a metros cúbicos
              } else {
                  throw new Exception("No se puede convertir a la unidad indicada");
              }
          }
      }
      
      class Galones extends UnidadDeVolumen {
          public function convertir($value, $unidadHacia) {
              if ($unidadHacia === 'Litros') {
                  return $value * 3.78541; // Conversión de galones a litros
              } elseif ($unidadHacia === 'Mililitros') {
                  return $value * 3785.41; // Conversión de galones a mililitros
              } elseif ($unidadHacia === 'MetrosCubicos') {
                  return $value * 0.00378541; // Conversión de galones a metros cúbicos
              } else {
                  throw new Exception("No se puede convertir a la unidad indicada");
              }
          }
      }
      
      class Mililitros extends UnidadDeVolumen {
          public function convertir($value, $unidadHacia) {
              if ($unidadHacia === 'Litros') {
                  return $value / 1000; // Conversión de mililitros a litros
              } elseif ($unidadHacia === 'Galones') {
                  return $value / 3785.41; // Conversión de mililitros a galones
              } elseif ($unidadHacia === 'MetrosCubicos') {
                  return $value * 0.000001; // Conversión de mililitros a metros cúbicos
              } else {
                  throw new Exception("No se puede convertir a la unidad indicada");
              }
          }
      }
      
      class MetrosCubicos extends UnidadDeVolumen {
          public function convertir($value, $unidadHacia) {
              if ($unidadHacia === 'Litros') {
                  return $value * 1000; // Conversión de metros cúbicos a litros
              } elseif ($unidadHacia === 'Galones') {
                  return $value * 264.172; // Conversión de metros cúbicos a galones
              } elseif ($unidadHacia === 'Mililitros') {
                  return $value * 1000000; // Conversión de metros cúbicos a mililitros
              } else {
                  throw new Exception("No se puede convertir a la unidad indicada");
              }
          }
      }
      
      class ConvertidorDeVolumen {
          private $unidades = [];
      
          public function agregarUnidad(UnidadDeVolumen $unidad, $nombreUnidad) {
              $this->unidades[$nombreUnidad] = $unidad;
          }
      
          public function convertir($value, $unidadDesde, $unidadHacia) {
              if (!isset($this->unidades[$unidadDesde]) || !isset($this->unidades[$unidadHacia])) {
                  throw new Exception("Unidades inválidas");
              }
      
              if ($unidadDesde === $unidadHacia) {
                  return $value;
              }
      
              return $this->unidades[$unidadDesde]->convertir($value, $unidadHacia);
          }
      }
       }
   }
   

?>