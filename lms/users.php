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
    <title >All Users</title>
</head>
<body class="bg-secondary">

    <?php include('reusable/nav.php'); ?>


    <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 fw-bold mt-5 mb-5 text-white">All Users</h1>
        </div>
      </div>
    </div>
  </div>

    <div class="bg-light">
        
        
          <?php 
            require('reusable/connect.php');

            $query = 'SELECT * FROM users';
            $users = mysqli_query($connect, $query);
          ?>

          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                </div>
              </div>
              <div class="row">


        <?php
          foreach($users as $user)
            {
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card">
                        <div class="card border border-dark">
                            <div class="card-body text-center">
                                <img src="' . $user['image'] . '" width="150">
                                <h4 class="card-title">' . $user['username'] . '</h4>
                                <p class="card-text">' . $user['email'] . '</p>
                            </div>
                            <div class="card-footer">
                              <div class="row">
                                <div class="col">
                                  <form action="updateUser.php">
                                    <input type="hidden" name="id" value="' . $user['id'] . '">
                                    <button type="submit" name="updateUser" class="btn btn-sm btn-primary">Update</button>
                                  </form>
                                </div>
                                <div class="col text-end">
                                  <form action="deleteUser.php" method="GET">
                                      <input type="hidden" name="id" value="' . $user['id'] . '">
                                      <button type="submit" name="deleteUser" class="btn btn-sm btn-danger">Delete</button>
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