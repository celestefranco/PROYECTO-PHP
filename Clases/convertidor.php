<?php
// Procesando los datos del formulario y realizar las conversiones

// Cargando las clases necesarias
require_once "./Clases/conversion.php";
require_once "./Clases/datosConvertir.php";
require_once "./Clases/tiempoConvertir.php";
require_once "./index.php";

// Verificando la respuesta del Metodo usado en el form, obteniendo los valores del form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'];
    $value = $_POST['value'];
    $uni = $_POST['uni'];
    $unf = $_POST['unf'];

    if (!empty($categoria) && !empty($value) && !empty($uni) && !empty($unf)) {
        // Creando el conversor adecuado en función de la categoría seleccionada
        switch ($categoria) {
            case 'datos':
                $convertir = new datosConvertir();
                break;
            case 'tiempo':
                $convertir = new tiempoConvertir();
                break;
            default:
                echo "Categoría de unidad no válida";
                exit;
        }

        // Convertiendo el valor
        $result = $convertir->conversion($value, $uni, $unf);
        // Mostrando el resultado
?>

        <html>
        <div id="result">
            <h2 class="fw-bold fs-3 text-center resut">RESULTADO:</h2>
            <h3 class="text-center fw-bold fs-3 resul"> <?php echo "{$value} {$uni}  es igual a {$result} {$unf}" ?></h3>
        </div>

        </html>
<?php
    }
}


?>
