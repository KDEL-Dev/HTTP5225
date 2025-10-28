<?php
  require('reusable/connect.php');
  include('functions.php');

  if(isset($_GET['deleteUser'])){
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE `id` = '$id'";
    $users = mysqli_query($connect, $query);

    if($users){
      set_message('User was deleted successfully!', 'danger');
      header('Location: users.php');
    }else{
      echo "Failed: " . mysqli_error($connect);
    }

  }else{
    echo "Not Authorized";
  }
