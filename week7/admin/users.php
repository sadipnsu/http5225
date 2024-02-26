<?php
include('../includes/functions.php');
include('../includes/connect.php');

                if(isset($_POST['addUser'])){ //isset checks if something exists
                    $name = $_POST['name']; 
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                
                    include('../includes/connect.php');
                
                    $query = "INSERT INTO users (`name`, `email`, `password`) VALUES (
                        '".mysqli_real_escape_string($connect, $name)."',
                        '".mysqli_real_escape_string($connect, $email)."',
                        '".md5($password)."'
                    );";
                
                    $user = mysqli_query($connect, $query);
                    set_message('user hase been created');
                
                    if($user){
                        echo "Success";
                    } else {
                        echo "Fail" . mysqli_error($connect);
                    }

                } 

            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab 5</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Your custom styles if needed -->
    <link rel="stylesheet" href="./#" type="text/css">
</head>

<body>
<?php include('../includes/nav.php');
?>

    <!-- Your content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="Name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter Password">
                </div>

                <button type="submit" class="btn btn-primary" name="addUser">Add New User</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXs5RSfQ8qU6HT97V72Q3E+28bO2LsM2JL1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="./#"></script>
    <!-- Your custom scripts if needed -->

</body>

</html>