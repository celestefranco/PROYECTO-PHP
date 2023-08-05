<?php
// Procesando los datos del formulario y realizar las conversiones

// Cargando las clases necesarias
require_once "./Clases/conversion.php";
require_once "./Clases/datosConvertir.php";
require_once "./index.php";

// Verificando la respuesta del Metodo usado en el form, obteniendo los valores del form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'] ;
    $value = $_POST['value'] ;
    $uni = $_POST['uni'] ;
    $unf = $_POST['unf'] ;

    if (!empty($categoria) && !empty($value) && !empty($uni) && !empty($unf)) {
        // Creando el conversor adecuado en función de la categoría seleccionada
        switch ($categoria) {
            case 'longitud':
                $convertir = new longitudConvertir();
                break;
            case 'masa':
                $convertir = new masaConvertir();
                break;
            case 'datos':
                $convertir = new datosConvertir();
                break;
            case 'tiempo':
                $convertir = new tiempoConvertir();
                break;
            case 'moneda':
                $convertir = new monedaConvertir();
                break;
            case 'volumen':
                $convertir = new volumenConvertir();
                break;
            default:
                echo "Categoría de unidad no válida";
                exit;
        }

        // Convertiendo el valor
        $result = $convertir->conversion($value, $uni, $unf);

        // Mostrando el resultado
        echo "<h2 class='fw-bold resul'>RESULTADO:</h2>";
        echo "<h3 class='fw-bold text-center resut'>{$value} {$uni}  es igual a  {$result} {$unf}</h3>";
    }
}


?>

