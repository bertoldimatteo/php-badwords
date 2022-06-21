<?php

 $string = 'Passata la tempesta odo augelli far festa e la gallina tornata in su la via che ripete il suo verso.';
 $subWord = $_GET['subWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php badwords</title>
</head>
<body>
   <p> <?php echo $string; ?></p> 
   <p> <?php echo strlen($string); ?></p>
   <p> <?php echo $subWord; ?></p>
</body>
</html>