<?php 
  include('functions.php');
  secure();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title >All Schools</title>
</head>
<body class="bg-secondary">
    <!-- <h1> Schools</h1> -->

    <?php include('reusable/nav.php'); ?>


    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 fw-bold mt-5 mb-5 text-white">All Schools</h1>
        </div>
      </div>
    </div>
  </div>

    <div class="bg-light">
        
        
          <?php 
            require('reusable/connect.php');
            //require('connect.php'); 

            $query = 'SELECT * FROM schools';
            $schools = mysqli_query($connect, $query);
          ?>

          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                </div>
              </div>
              <div class="row">


        <?php
          foreach($schools as $school){
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                    <div class="card border border-dark">
                      <div class="card-body text-center">
                        <h4 class="card-title">' . $school['School Name'] . '</h4>
                        <p class="card-text">' . $school['School Level'] . '</p>
                        <div>
                          <h5 class="text-center">Phone number and Email</h5>
                          <span class="badge bg-primary">' . $school['Phone'] . '</span>
                          <span class="badge bg-info">' . $school['Email'] . '</span>
                        </div>
                        <div>
                          <h5 class="text-center"> Misc Info </h5>
                          <span class="badge bg-secondary">' . $school['Board Name'] . '</span>
                          <span class="badge bg-info">' . $school['School Number'] . '</span>
                          <span class="badge bg-secondary">' . $school['School Language'] . '</span>
                          <span class="badge bg-info">' . $school['School Special Conditions'] . '</span>
                          <span class="badge bg-secondary">' . $school['Street'] . '</span>
                          <span class="badge bg-info">' . $school['City'] . '</span>
                          <span class="badge bg-secondary">' . $school['Province'] . '</span>
                          <span class="badge bg-info">' . $school['Postal Code'] . '</span>
                          <span class="badge bg-secondary">' . $school['Phone'] . '</span>
                          <span class="badge bg-info">' . $school['Fax'] . '</span>
                          <span class="badge bg-secondary">' . $school['Grade Range'] . '</span>
                          <span class="badge bg-info">' . $school['Date Open'] . '</span>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <form action="updateSchool.php">
                              <input type="hidden" name="id" value="' . $school['id'] . '">
                              <button type="submit" name="updateSchool" class="btn btn-sm btn-secondary">Update</button>
                            </form>
                          </div>
                          <div class="col text-end">
                            <form action="deleteSchool.php" method="GET">
                                  <input type="hidden" name="id" value="' . $school['id'] . '">
                                  <button type="submit" name="deleteSchool" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>';  
          }
        ?>

        <style>
            .Box{
                border:1px solid red;
                padding: 20px;
                display: inline-block;
                box-sizing: border-box;
            }
        </style>
</body>
</html>