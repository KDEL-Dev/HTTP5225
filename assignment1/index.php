<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylesheet/style.css">
    <title>Toronto - Red Light Cameras Data</title>
</head>
<body>
    <header>
        <h1> Red light Cameras Data - Ontario</h1>
    </header>
    <div>
        <?php
            // THIS IS A STRICT CODING LANGUAGE. COULDN'T CONNECT BECAUSE I DIDN'T HAVE
            // SEMI COLON ON THE BELOW
            require('connect.php');


            $query = 'SELECT 
                        LINEAR_NAME_FULL_1, 
                        LINEAR_NAME_FULL_2, 
                        NAME, 
                        WARD_1, 
                        WARD_2, 
                        DATE(ACTIVATION_DATE) AS "ACTIVATION_DATE"
                        FROM 
                        red_light_cameras_data___4326
                        WHERE 
                        district = "Toronto and East York"
                        ORDER BY WARD_1 ASC';
            $redLightCameras = mysqli_query($connect, $query);

            //TABLE BUILD BELOW

            echo '<div id= torontoTable>';
                echo '<div id = torontoTitleDiv>';  
                    echo '<h1> Toronto Red Light Cameras </h1>';
                    echo '<p> Here is a list of all the red light cameras with the city of Toronto</p>';
                echo '</div>';
                echo '<div id= horizontalColumns>';
                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> NAMES</h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            // if column headers are capitalized than it has to match here as well
                            echo '<div class=columnContent>';
                                echo $redLightCamera['NAME'] . '<br>';
                            echo '</div>';
                            }
                    echo '</div>';
            
                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> ONE STREET</h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            echo '<div class=columnContent>';
                                echo $redLightCamera['LINEAR_NAME_FULL_1'] . '<br>';
                            echo '</div>';
                        }
                    echo '</div>';

                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> TWO STREET</h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            echo '<div class=columnContent>';
                                echo $redLightCamera['LINEAR_NAME_FULL_2'] . '<br>';
                            echo '</div>';
                        }
                    echo '</div>';

                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> WARD1 </h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            echo '<div class=columnContentCenter>';
                                echo $redLightCamera['WARD_1'] . '<br>';
                            echo '</div>';
                        }
                    echo '</div>';

                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> WARD2 </h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            echo '<div class=columnContentCenter>';
                                echo $redLightCamera['WARD_2'] . '<br>';
                            echo '</div>';
                        }
                    echo '</div>';

                    echo '<div class = columnDiv>';
                        echo '<h2 class=columnName> ACTIVATION DATE </h2>';
                        foreach($redLightCameras as $redLightCamera)
                        {
                            echo '<div class=columnContentCenter>';
                                echo $redLightCamera['ACTIVATION_DATE'] . '<br>';
                            echo '</div>';
                        }
                    echo '</div>';
                    
                echo '</div>';
            echo '</div>';
            
        ?>
<footer>
    <p> &copy 2025 Kadelle Liburd. All rights reserved </p>
</footer>
</body>


</html>