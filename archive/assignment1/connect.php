<?php
$connect = mysqli_connect
            (
                'localhost',
                'root',
                'root',
                'redlightcamera'
            );

            //This is telling application to die if it can't even connect to server
            if(!$connect)
            {
                die('Connection Failed:' . mysqli_connect_error());
            }
