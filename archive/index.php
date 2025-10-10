<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Schools</title>
</head>
<body>
    <h1> Schools</h1>
    <hr>
    <div>
        <?php
            require('connect.php');

            $query = 'SELECT * FROM schools';
            $schools = mysqli_query($connect, $query);

            // echo '<pre>' . print_r($schools) . '</pre>';

            foreach($schools as $school)
            {
                echo $school['School Name'] . '<br>' .
                '<form>
                    <input type = "hidden" name="id" value="123">
                    <input type="submit" value="EDIT">

                </form>' .
                '<br>';
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