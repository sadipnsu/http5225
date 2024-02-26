<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php
        echo '<hr />';

        $grade = ceil(rand(0,100));
        echo '<p>' .$grade. '</p>';

        if($grade < 60)
        {
            echo '<p> F </p>';    
        }
        elseif($grade >= 60 && $grade <= 70)
        {
            echo'<p> E </p>';
        }
        elseif($grade >= 70 && $grade <= 75)
        {
            echo'<p> D </p>';
        }
        elseif($grade >= 75 && $grade <=80)
        {
            echo '<p> C </p>';
        }
        elseif($grade >= 80 && $grade <=85)
        {
            echo'<p> B </p>';
        }
        elseif($grade >= 86 && $grade <= 90)
        {
            echo '<p> A </p>';
        }
        else
        {
            echo '<p> A+ </p>';
        }

        ?>

    </body>
</html>
