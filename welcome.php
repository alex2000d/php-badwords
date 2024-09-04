<?php
 $parola = $_GET["parola"];
 $paragrafo = $_GET["paragrafo"];
 $new_paragrafo = str_replace($parola, "***", $paragrafo );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <div> <?php echo strlen($paragrafo)." ". ($paragrafo);?></div>
    <div> <?php echo strlen($new_paragrafo)." ". ($new_paragrafo);?></div>

</body>
</html>