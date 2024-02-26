<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
    $query = 'SELECT  id, fname, lname, marks, grade, imageURL FROM students';

    $students = mysqli_query($connect, $query);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }

    ?>
    <div class="container">
        <div class="row">
            <?php

                foreach ($students as $student) {

                    if ($student['marks'] < 50) {
                        $bgClass = 'bg-danger';
                    } else {
                        $bgClass = 'bg-success';
                    }

                    echo '<div class="col-md-4">
                                <div class="card '. $bgClass .'">
                                    <img src="' . $student['imageURL'] . '" class="card-img-top" alt="card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $student['fname'] . '  ' . $student['lname'] . ' </h5>
                                        Marks: ' . $student['marks'] . '
                                    </div>
                                </div>
                            </div>';

                }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
