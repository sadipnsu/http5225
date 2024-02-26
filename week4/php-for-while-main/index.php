<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and For Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            function getUsers()
            {
                $url = "https://jsonplaceholder.typicode.com/users";
                $data = file_get_contents($url);
                return json_decode($data, true);
            }
            // Get the list of users
            $users = getUsers();

            //    
            
            for ($i = 0; $i < count($users); $i++) {

                echo '<div clas="col-md-4">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $users[$i]['name'] . '</h5>';
                echo '<h5 class="card-title">' . $users[$i]['username'] . '</h5>';
                echo '<h5 class="card-title">' . $users[$i]['email'] . '</h5>';
                echo '<a href="#" class="card-link"></a>';
                echo '<a href="#" class="card-link">Card link</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

            }
            ?>
        </div>
    </div>
</body>

</html>