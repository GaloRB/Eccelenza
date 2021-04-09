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

    <title>Nonconformity Material Notification</title>
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
    <h1 class="text-center">Nonconformity Material Notification Form</h1>
    <div class="container">
        <form method="POST">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputFactory">Factory</label>
                <input type="text" class="form-control" id="inputFactory" placeholder="Factory">
              </div>
              <div class="form-group col-md-4">
                <label for="inputCustomer">Customer</label>
                <input type="text" class="form-control" id="inputCustomer" placeholder="Customer">
              </div>
              <div class="form-group col-md-4">
                <label for="Representant Name">Representant Name</label>
                <select id="Representant Name" class="form-control">
                  <option selected>Choose</option>
                  <option>Representant 1</option>
                  <option>Representant 2</option>
                  <option>Representant 3</option>
                </select>
              </div>
            </div>
            <fieldset disabled>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="inputDate">Date</label>
                        <input class="form-control" type="text"  id="inputDate">
                    </div>
                </div>     
            </fieldset>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="InputParts_Number">Parts Number(s)</label>
                  <input type="text" class="form-control" id="InputParts_Number" placeholder="Parts Number(s)">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSpare_Part_Name">Spare Part Name</label>
                  <input type="text" class="form-control" id="inputSpare_Part_Name" placeholder="Spare Part Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputProblem_Description">Problem Description</label>
                    <textarea class="form-control" id="inputProblem_Description" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhotography">Photography</label>
                    <input type="file" accept=".png,.jpg,.jpeg" class="form-control-file" id="inputPhotography" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Photography with ".png , .jpg and .jpeg" extention.</small>
                </div>    
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputWho_Reported_It">Who Reported It</label>
                    <textarea class="form-control" id="inputWho_Reported_It" rows="2"></textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputIn_Which_Area_Was_Reported_It">In Which Area Was Reported It</label>
                    <textarea class="form-control" id="inputProblem_Description" rows="2"></textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputWhen_It_Was_Reported">When It Was Reported</label>
                    <input class="form-control" type="date"  id="inputWhen_It_Was_Reported">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputWhy_Did_It_Report">Why Did It Report?</label>
                    <textarea class="form-control" id="inputWhy_Did_It_Report" rows="2"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputImmediate_Actions">Immediate Actions</label>
                    <textarea class="form-control" id="inputImmediate_Actions" rows="2"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputRequired_Actions_By_Factory">Required Actions By Factory</label>
                    <textarea class="form-control" id="inputRequired_Actions_By_Factory" rows="2"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputInspection_Proyect_Number">Inspection Proyect Number (if apply)</label>
                  <input type="text" class="form-control" id="inputInspection_Proyect_Number" placeholder="Inspection Proyect Number">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNonconformity_Number">Nonconformity Number (if apply)</label>
                  <input type="text" class="form-control" id="inputNonconformity_Number" placeholder="Nonconformity Number">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputFinal_Status_of_the_Part">Final Status of the Part</label>
                <textarea class="form-control" id="inputFinal_Status_of_the_Part" rows="3"></textarea>
              </div>
            </div>
              
            
            <button type="submit" name="submit" id="submit" class="btn btn-primary col-12">Submit</button>
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