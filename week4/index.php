<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>
    <?php
        //This is how to our database of choice
        $connect = mysqli_connect(
        'localhost',
        'root',
        'root',
        'csv_db 5'
        );
        if(!$connect){
            die("Connection Failed" . mysqli_connect_error());
        }

        //create query. we store it in order to test it and so we can place it in the next part
        $query = "SELECT * FROM colors";

        //this will run the query
        $colors = mysqli_query($connect, $query);

        echo "<pre>";
        print_r($colors);
        echo "</pre>";

        echo "<pre" . print_r($colors) . "</pre>";

        foreach($colors as $color)
        {
            // echo $color['Name'] . "<br>";
            echo "<div style= 'width:100%; height:50px; background-color: {$color['Hex']}; display:flex; justify-content:center; align-items:center;'>";
            echo $color['Name'];
            echo "</div>";

        }

    ?>
</body>
</html>