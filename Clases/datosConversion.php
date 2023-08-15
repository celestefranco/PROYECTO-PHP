<?php
   
   class datosConversion 
   {
    public function convertir($value, $uni, $unf)
     {
      $unidades = [
        'bit' => 1,
        'byte' => 8,
        'kilobyte' => 8 * 1024,
        'megabyte' => 8 * 1024 * 1024,
        'gigabyte' => 8 * 1024 * 1024 * 1024,
        'terabyte' => 8 * 1024 * 1024 * 1024 * 1024
      ];

      if (!isset($unidades[$uni]) || !isset($unidades[$unf])) {
          throw new Exception('Invalid unidades for data conversion.');
      }

      $conversionRatio = $unidades[$unf] / $unidades[$uni];
      $result = $value * $conversionRatio;

      return $result;
      }
}
   
   

?>