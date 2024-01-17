<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php
        echo '<h1>PHP and Creating Output</h1>';
    ?>
    <?php
        echo '<p>The PHP echo command can be used to create output.</p>';
    ?>
    
    <?php
        echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
    ?>
    
    <?php
        echo '<ul>
                <li>Use HTML special characters</li>
                <li>Alternate between single and double quotes</li>
                <li>Use a backslash to escape quotes</li>
              </ul>';
    ?>
    
    <?php
        echo '<h2>More HTML to Convert</h2>';
    ?>
     
    <?php
        echo ' <p>PHP says "Hello World!"</p>';
     ?>
       
    <?php
      echo '<p>Can you display a sentence with \' and "?</p>';
    ?>
    
    <!-- <?php
      // echo '<img src="php-logo.png">';
    ?> -->

    <img src="<?php echo'php-logo.png';?>" alt="">;
    
    <br><br>

    <!-- PHP Variables -->

    <?php
      $linkName = 'Codecademy';
      $linkURL = 'https://www.codecademy.com';
      $linkImage= 'codecademy.png';
      $linkDescriptions = "Learn to code interactively, for free";
    ?>

    <?php echo $linkName;?>
    <?php echo '<h1>'. $linkName . '</h1>'; ?>
    <?php echo '<h2>'. $linkDescriptions . '</h2>'; ?>


    <?php 

      $person['first'] = 'Jane';
      $person['last'] = 'Smith';
      echo '<p>Hello '.$person['first'].' '.$person['last'].'!</p>';

    ?>


  </body>
</html>
