<?php
require('conn.php');
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategory list</title>
</head>

<body>
    
    <?php yazdir(agacOlustur((getQuery("Select * from categories"))));
    ?>
</body>

</html>