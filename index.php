<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../PROYECTO PHP/assets/css/style.css">
    <title>Conversiones Grupo 1</title>
</head>
<body>
    <header>
        <nav class="navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex flex-column text-center fs-3 fw-bold" href="./index.php">GRUPO #1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="navbar-nav m-auto py-0 gap-3 fs-3 fw-bold">
                        <a href="./index.php" class="nav-item nav-link active">Calculadora</a>
                        <a href="#about" class="nav-item nav-link">Team</a> 
                    </div>           
                </div>
            </div>
        </nav>
    </header>
    <main>
       <?php
            require_once "./Clases/convertidor.php";
       ?>
        <h2 class="text-center fw-bold py-4">CALCULADORA DE MEDIDAS</h2>
        <form  action="" method="POST">
            <div class="row ">
                <div class="col-12 col-lg-8 col-sm-6">
                    <div class="llenar"> 
                        <label for="categoria">Unidad de Medida:</label>
                        <select name="categoria" id="categoria" >
                            <option value="">--Seleccione Medida--</option>
                            <option value="longitud">Longitud</option>
                            <option value="masa">Masa</option>
                            <option value="volumen">Volumen</option>
                            <option value="datos">Datos</option>
                            <option value="moneda">Moneda</option>
                            <option value="tiempo">Tiempo</option>
                        </select>   
                    </div>              
                    <div class="llenar">            
                        <label for="">Valor a Convertir:</label>
                        <input type="number" name="value" id="value" placeholder="cantidad a convertir" required>
                    </div>
                    <div class="llenar">
                        <label for="uni">Unidad Inicial: </label>
                        <select name="uni" id="uni" >
                        <option value="">--Seleccione--</option>
                        </select>  
                    </div>
                    <div class="llenar">        
                        <label for="unf">Unidad Final: </label>
                        <select name="unf" id="unf" >
                        <option value="">--Seleccione--</option>
                        </select>  
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6 botones">  
                    <input type="submit" class="buton btn btn-primary" value="CALCULAR">
                    <input type="button" class="buton btn btn-danger mt-5" value="LIMPIAR" onclick="clean()">
                </div>
            </div>
        </form>      
             
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<script src="./assets/js/unidades.js"></script>
<script src="./assets/js/limpiar.js"></script>
</html>