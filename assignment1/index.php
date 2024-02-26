<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment-1</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'http5225');
    $query = 'SELECT EEID, FullName, JobTitle, Department, BusinessUnit,
                Gender, Ethnicity, Age, HireDate, AnnualSalary, Bonus, Country, City, ExitDate FROM employee';
    $employees = mysqli_query($connect, $query);
  ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 py-5">Employee Information</h1>
            </div>
        </div>
            <div class="row">
                <?php

                foreach ($employees as $emp) {

                    if ($emp['Age'] > 50) {
                        $bgClass = 'bg-info';

                    } else if($emp['Age'] <50 && $emp['Age']>30){
                        $bgClass = 'bg-success';
                    }
                    else{
                        $bgClass = 'bg-primary';
                    }

                    echo '<div class="col-md-4">
                                <div class="card mb-4 ' . $bgClass . '">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $emp['EEID'] . ' ' . $emp['FullName'] . '  </h5>
                                        
                                        <br>
                                        Job Title: ' . $emp['JobTitle'] . '
                                        <br>
                                        Department: ' . $emp['Department'] . '
                                        <br>
                                        BusinessUnit: ' . $emp['BusinessUnit'] . '
                                        <br>
                                        Gender: ' . $emp['Gender'] . '
                                        <br>
                                        Ethnicity: ' . $emp['Ethnicity'] . '
                                        <br>
                                        Age: ' . $emp['Age'] . '
                                        <br>
                                        HireDate: ' . $emp['HireDate'] . '
                                        <br>
                                        AnnualSalary: ' . $emp['AnnualSalary'] . '
                                        <br>
                                        Bonus%: ' . $emp['Bonus'] . '
                                        <br>
                                        Country: ' . $emp['Country'] . '
                                        <br>
                                        City: ' . $emp['City'] . '
                                        <br>
                                        ExitDate: ' . $emp['ExitDate'] . '
                                    </div>    
                                </div>
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect); ?>
</body>
</html>
