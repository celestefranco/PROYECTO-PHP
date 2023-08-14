<?php 

require_once 'LongitudConvertidorInterface.php';

class LongitudConvertidor implements LongitudConvertidorInterface {
    private $tablaConversion = [
        'km'=>1000,
        'hm'=>100,
        'dam'=>10,
        'm'=>1,
        'dm'=>0.1, 
        'cm'=>0.01,
        'mm'=>0.001, 
        'plg'=>0.0254,
    ];

public function convertir($valor,$unidadOrigen,$unidadDestino){
        if (!isset($this->tablaConversion[$unidadOrigen]) || !isset($this->tablaConversion[$unidadDestino])) {
            throw new InvalidArgumentException("Unidades proporcionadas no válidas.");
        }

        $valorEnMetros=$valor*$this->tablaConversion[$unidadOrigen];
        $valorDestino=$valorEnMetros/$this->tablaConversion[$unidadDestino];

return $valorDestino;
    }
}

$convertidor = new LongitudConvertidor();

$metrosAKilometros=$convertidor->convertir(10000,'m','km');
echo "10,000 metro son equivalentes a {$metrosAKilometros} Kilometros.". PHP_EOL;

?>