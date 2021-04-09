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

    <title>Reporte semanal</title>
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

    <h1 class="text-center">Reporte semanal</h1>
    <div class="container">
        <form method="POST">
            <div id="formContainer">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCliente">Cliente</label>
                  <input type="text" class="form-control" id="inputCliente" placeholder="Cliente">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputMes">Mes</label>
                    <select id="inputMes" class="form-control">
                      <option selected>Eleguir Mes</option>
                      <option>Enero</option>
                      <option>Febrero</option>
                      <option>Marzo</option>
                      <option>Abril</option>
                      <option>Mayo</option>
                      <option>Junio</option>
                      <option>Julio</option>
                      <option>Agosto</option>
                      <option>Septiembre</option>
                      <option>Octubre</option>
                      <option>Noviembre</option>
                      <option>Diciembre</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputNombre">Nombre</label>
                  <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPlanta">Planta</label>
                  <input type="text" class="form-control" id="inputPlanta" placeholder="Planta">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputSemana">Semana</label>
                  <input type="number" class="form-control" id="inputSemana" placeholder="Semana">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <fieldset disabled>
                    <label for="inputDate">Fecha</label>
                    <input class="form-control" type="text"  id="inputDate">
                  </fieldset>
                </div>  
                <div class="form-group col-md-6">
                  <label for="inputActividad_Diaria">Actividad Diaria</label>
                  <textarea class="form-control" id="inputActividad_Diaria" rows="3"></textarea>
                </div>
                  <div class="form-group col-md-6">
                  <label for="inputReporte_Problema">¿Sé Reportó Algún Problema?</label>
                  <select id="inputReporte_Problema" class="form-control">
                    <option selected>No</option>
                    <option>Sí</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputTipo_Problema">Tipo de Problema</label>
                  <select id="inputTipo_Problema" class="form-control">
                    <option selected>Problema...</option>
                    <option>Tipo 1</option>
                    <option>Tipo 2</option>
                    <option>Tipo 3</option>
                    <option>Tipo 4</option>
                    <option>Tipo 5</option>
                    <option>Tipo 6</option>
                    <option>Tipo 7</option>
                    <option>Tipo 8</option>
                    <option>Tipo 9</option>
                    <option>Tipo 10</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNo_Parte">Número de Parte</label>
                  <input type="text" class="form-control" id="inputNo_Parte" placeholder="Número de Parte">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNo_Rastreo">Número de Ratreo</label>
                  <input type="text" class="form-control" id="inputNo_Rastreo" placeholder="Número de Ratreo">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputAcciones_Correctivas">Acciones Correctivas</label>
                  <textarea class="form-control" id="inputAcciones_Correctivas" rows="2"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputReporte_Planta">Reportado Por (Planta)</label>
                  <select id="inputReporte_Planta" class="form-control">
                    <option selected>Seleccionar</option>
                    <option>Operador</option>
                    <option>Residente</option>
                    <option>Eccelenza</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputReporte_Cliente">Reportado a (Cliente)</label>
                  <select id="inputReporte_Cliente" class="form-control">
                    <option selected>Seleccionar</option>
                    <option>Operador</option>
                    <option>Residente</option>
                    <option>Eccelenza</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputReporte_Estatus_Final">Estatus Final</label>
                  <select id="inputReporte_Estatus_Final" class="form-control">
                    <option selected>Seleccionar</option>
                    <option>Verde</option>
                    <option>Amarillo</option>
                    <option>Rojo</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputAyuda_Visual">Fotos</label>
                  <input type="file" accept=".png,.jpg,.jpeg" class="form-control-file" id="inputAyuda_Visual" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted">Solo ".png , .jpg y .jpeg" extención.</small>
              </div> 
              </div>   
            </div>
            <div class="row d-flex justify-content-around mb-2">
              <button type="button"  id="create" class="btn  col-4">Agregar</button>
              <button type="button"  id="remove" class="btn  col-4">Remover</button>
            </div>
            <div class="row d-flex justify-content-center mb-4">
              <button type="submit" name="submit" id="submit" class="btn btn-primary col-8">Terminar</button>
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
    <!-- current time -->
    <script src="./js/currentTime.js"></script>
    <!-- add and remove forms -->
    <script src="./js/reporte_semanalButton.js"></script>
  </body>
</html>

<?php
    }
?>    