<?php
    session_start();
    if(!isset($_SESSION["client"])){
        header("Location:index.php");
    }else{
       
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Check List de Inspección</title>
</head>
<style>
    body {
        height: 100vh;
        background-image: linear-gradient(to bottom, #3b80e7, #2f69c5, #2354a4, #153f84, #042c66);
    }
    .navbar {
    background-color: #e3f2fddc;
    border-bottom: 3px solid rgb(236, 236, 236);
}
</style>

<body>

    <?php include_once ('../includes/navClient.php'); ?>
    <h1 class="text-center">Check List de Inspección</h1>
    <div class="container">
        <form method="POST">
            <div id="formContainer">
                <fieldset disabled>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPuesto">Puesto</label>
                            <input type="text" class="form-control" id="inputPuesto" placeholder="Puesto">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDate">Fecha</label>
                            <input class="form-control" type="text" id="inputDate">
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3 class="">Responsabilidades internas</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="0" id="checkboxPolitica_Calidad">
                            <label class="form-check-label" for="checkboxPolitica_Calidad">
                          Política de calidad ECCELENZA
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="checkboxObjetivos_Calidad">
                            <label class="form-check-label" for="checkboxObjetivos_Calidad">
                          Objetivos de calidad ECCELENZA
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="checkboxCapacitación">
                            <label class="form-check-label" for="checkboxCapacitación">
                          Capacitación (Instrumentos de trabajo)
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="checkboxComprensión_Seguridad">
                            <label class="form-check-label" for="checkboxComprensión_Seguridad">
                          Total comprensión de los requerimientos de seguridad dentro de planta
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="checkboxSeguroIMSS">
                            <label class="form-check-label" for="checkboxSeguroIMSS">
                          Seguro IMMS
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="checkboxOtro_Interno">
                            <label class="form-check-label" for="checkboxOtro_Interno">
                          Otros 
                        </label>
                            <textarea hidden class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Anota Cúales"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="">Equipos de Protección Personal (EPP)</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="0" id="checkboxLentes_Seguridad">
                            <label class="form-check-label" for="checkboxLentes_Seguridad">
                          Lentes de seguridad
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="checkboxLentes_Chaleco_Reflejante">
                            <label class="form-check-label" for="checkboxLentes_Chaleco_Reflejante">
                          Chalecos reflejantes
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="checkboxZapato_Seguridad">
                            <label class="form-check-label" for="checkboxZapato_Seguridad">
                          Zapato de seguridad
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="checkboxGuantes">
                            <label class="form-check-label" for="checkboxGuantes">
                          Guantes
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="checkboxManga_Larga">
                            <label class="form-check-label" for="checkboxManga_Larga">
                          Manga larga
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="checkboxOtro_EPP">
                            <label class="form-check-label" for="checkboxOtro_EPP">
                          Otros 
                        </label>
                            <textarea hidden class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Anota Cúales"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mb-4">
                <button type="submit" name="submit" id="submit" class="btn btn-primary col-8">Enviar</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- current date -->
    <script src="./js/currentDate.js"></script>

</body>

</html>

<?php
    }
?>    