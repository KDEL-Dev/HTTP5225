<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Schools</title>
</head>
<body>
    <!-- <h1> Schools</h1> -->

    <?php include('reusable/nav.php'); ?>


    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">All Schools</h1>
        </div>
      </div>
    </div>
  </div>

    <hr>
    <div>
        
        <?php
            // require('connect.php');

            // $query = 'SELECT * FROM schools';
            // $schools = mysqli_query($connect, $query);

            // // echo '<pre>' . print_r($schools) . '</pre>';

            // foreach($schools as $school)
            // {
            //     echo $school['School Name'] . '<br>' .
            //     '<form>
            //         <input type = "hidden" name="id" value="123">
            //         <input type="submit" value="EDIT">

            //     </form>' .
            //     '<br>';
            // }
        ?>

          <?php 
            require('reusable/conn.php');
            // require('connect.php');

            $query = 'SELECT * FROM schools';
            $schools = mysqli_query($connect, $query);
          ?>

          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                    <!--Removed GetMessage Function -->
                </div>
              </div>
              <div class="row">


        <?php
          foreach($schools as $school){
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">' . $school['School Name'] . '</h5>
                        <p class="card-text">' . $school['School Level'] . '</p>
                        <span class="badge bg-secondary">' . $school['Phone'] . '</span>
                        <span class="badge bg-info">' . $school['Email'] . '</span>
                        <span>' . $school['Board Name'] . '</span>
                        <span>' . $school['School Number'] . '</span>
                        <span>' . $school['School Language'] . '</span>
                        <span>' . $school['School Special Conditions'] . '</span>
                        <span>' . $school['Street'] . '</span>
                        <span>' . $school['City'] . '</span>
                        <span>' . $school['Province'] . '</span>
                        <span>' . $school['Postal Code'] . '</span>
                        <span>' . $school['Phone'] . '</span>
                        <span>' . $school['Fax'] . '</span>
                        <span>' . $school['Grade Range'] . '</span>
                        <span>' . $school['Date Open'] . '</span>
                      
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <form action="updateSchool.php">
                              <input type="hidden" name="id" value="' . $school['id'] . '">
                              <button type="submit" name="updateSchool" class="btn btn-sm btn-primary">Update</button>
                            </form>
                          </div>
                          <form action="deleteSchool.php" method="GET">
                                <input type="hidden" name="id" value="' . $school['id'] . '">
                                <button type="submit" name="deleteSchool" class="btn btn-sm btn-danger">Delete</button>
                            </form>
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