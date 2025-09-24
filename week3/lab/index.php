<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet/style.css">
    <title>week3</title>
</head>
<body>
    <h1>task2</h1>
    <?php

        // Function to fetch user data from the JSONPlaceholder API

        function getUsers() {

        $url = "https://jsonplaceholder.typicode.com/users";

        $data = file_get_contents($url);


        return json_decode($data, true);

        }


        // Get the list of users

        $users = getUsers();
    ?>

    <div id='info'>
        <h2>User information</h2>
        <?php

            $userAmount = count($users);

            for($i = 0; $i < $userAmount; $i++)
            {
                echo "<div class ='userDiv'>";
                echo "<div class = 'contactDiv'>";
                echo "<p class='titles'>" . "name: " . "</p>" . $users[$i]['name'] . "<br>" ;
                echo "<p class='titles'>" . "email: " . "</p>" . $users[$i]['email'] . "<br><br>" ;
                echo "<div class = 'addressDiv'>";
                echo "<p class='addressTitle'> Address: " . "</p>" ."<br>". "<p class='titles'>" . "street:" . "</p>" . " " . $users[$i]['address']['street'] . "," . " " .
                     "<p class='titles'>" . "suite:" . "</p>" .  " " . $users[$i]['address']['suite'] . "," . " " .
                     "<p class='titles'>" . "city:" . "</p>" . " " . $users[$i]['address']['city'] . "," . " " .
                     "<p class='titles'>" . "zipcode:" . "</p>" . " " . $users[$i]['address']['zipcode'] . "," . " " .
                    //  "geo:" . " " . $users[$i]['address']['geo'] . "," . " " .
                     "<br><br>";
                echo "</div>";
                echo "</div>";
                echo "</div>";


            }
        ?>
    </div>

    <h1>task1</h1>
    <?php

        $number = rand(1,100);

        echo "The input number is: ".$number."<br>";
        if(($number % 3 == 0) && ($number% 5 == 0))
        {
            echo "The magic number is FizzBuzz";
        }
        else if($number % 3 == 0)
        {
            echo "The magic number is Fizz";
        }
        else if($number % 5 == 0)
        {
            echo "The magic nnumbeber is Buzz";
        }
        else
        {
            echo "The magic number is". " " . $number;
        }
            
    ?>
    
</body>
</html>