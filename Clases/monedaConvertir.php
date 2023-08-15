<?php
   require_once './Clases/conversion.php';

    /* clase concreta para cada tipo de conversión que extiendan la clase abstracta, 
   *  Conversion de unidad de medida: Moneda.
   */

   class monedaConvertir extends conversion
   {
       // Tabla de conversiones de moneda
       public $conversionTable = [
        'Dolar (USD)' => [
            'Peso (Col)' => 3957.23,
            'Euro (EUR)' => 0.91,
            'Franco (Suizo)' => 0.88,
            'Yen (JPY)' => 144.91,
            'Libra (GBP)' => 0.79,
            'Colon(C)' => 8.75,
        ],
        'Euro (EUR)' => [
            'Peso (Col)' => 4338.90,
            'Dolar (USD)' => 1.10,
            'Franco (Suizo)' => 0.96,
            'Yen (JPY)' => 158.87,
            'Libra (GBP)' => 0.86,
            'Colon(C)' => 9.59,
        ],
        'Franco (Suizo)' => [
            'Peso (Col)' => 4512.90,
            'Dolar (USD)' => 1.14,
            'Euro (EUR)' => 1.04,
            'Yen (JPY)' => 165.25,
            'Libra (GBP)' => 0.90,
            'Colon(C)' => 9.98,
        ],
        'Peso (Col)' => [
            'Dolar (USD)' => 0.00025,
            'Euro (EUR)' => 0.00023,
            'Franco (Suizo)' => 0.00022,
            'Yen (JPY)' => 0.037,
            'Libra (GBP)' => 0.0022,
            'Colon(C)' => 0.00010,
        ],
        'Yen (JPY)' => [
            'Peso (Col)' => 27.31,
            'Dolar (USD)' => 0.0069,
            'Euro (EUR)' => 0.0063,
            'Franco (Suizo)' => 0.0061,
            'Libra (GBP)' => 0.0054,
            'Colon(C)' => 0.060,
        ],
        'Libra (GBP)' => [
            'Peso (Col)' => 5023.30,
            'Dolar (USD)' => 1.27,
            'Euro (EUR)' => 1.16,
            'Franco (Suizo)' => 1.11,
            'Yen (JPY)' => 183.94,
            'Colon(C)' => 11.11,
        ],
        'Colon(C)' => [
            'Peso (Col)' => 452.55,
            'Dolar (USD)' => 0.11,
            'Euro (EUR)' => 0.10,
            'Franco (Suizo)' => 0.10,
            'Yen (JPY)' => 16.57,
            'Libra (GBP)' => 0.090,
        ],
    ];
    public function conversion($value, $uni, $unf)
       {
        if (isset($this->conversionTable[$uni][$unf])) {
            $conversionRate = $this->conversionTable[$uni][$unf];
            $result = $value * $conversionRate;
            return $result;
        } else {
            return "Unidades de moneda no válidas.";
        }
       }
   }
   

?>