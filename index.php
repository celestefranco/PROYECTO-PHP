<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../PROYECTO PHP/assets/css/style.css">
    <link rel="icon" href="./assets/img/favicon-96x96.png" type="image/png" />
    <title>Conversiones Grupo 1</title>
</head>

<body>
    <?php
        include "./header.php";
    ?>
    <main class="container">
        <?php
        require_once "./Clases/convertidor.php";
        ?>

        <h1 class="text-center fw-bold py-5 mt-5">CALCULADORA DE MEDIDAS</h1>
        <form action="" method="POST">
            <div class="form-row align-items-center">
                <div class="col-auto my-3 d-flex justify-content-center">
                    <label class="mr-sm-2 sr-only" for="categoria">UNIDAD DE MEDIDA:</label>
                    <select class="custom-select mr-sm-2" name="categoria" id="categoria">
                        <option selected>Seleccione Medida...</option>
                        <option value="longitud">Longitud</option>
                        <option value="masa">Masa</option>
                        <option value="volumen">Volumen</option>
                        <option value="datos">Datos</option>
                        <option value="moneda">Moneda</option>
                        <option value="tiempo">Tiempo</option>
                    </select>
                </div>
                <div class="col-auto my-3 d-flex justify-content-center">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <label class="custom-control-label" for="customControlAutosizing">VALOR A CONVERTIR:</label>
                        <input type="number" name="value" class="custom-control-input" id="value" placeholder="Cantidad a convertir" required>                        
                    </div>
                </div>
                <div class="col-auto my-3 d-flex justify-content-center">
                    <label class="mr-sm-2 sr-only" for="uni">UNIDAD INICIAL:</label>
                    <select class="custom-select mr-sm-2" name="uni" id="uni">
                        <option selected>Seleccione Medida...</option>                        
                    </select>
                </div>
                <div class="col-auto my-3 d-flex justify-content-center">
                    <label class="mr-sm-2 sr-only" for="unf">UNIDAD FINAL:</label>
                    <select class="custom-select mr-sm-2" name="unf" id="unf">
                        <option selected>Seleccione Medida...</option>                        
                    </select>
                </div>
                <div class="col-auto my-3 botones">
                    <input type="submit" class="buton btn btn-primary btblue" value="CALCULAR">
                    <input type="button" class="buton btn btn-danger btred" value="LIMPIAR" onclick="clean()">
                </div>
            </div>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="./assets/js/unidades.js"></script>
<script src="./assets/js/limpiar.js"></script>

</html>