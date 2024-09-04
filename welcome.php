<?php
 $parola = $_GET["parola"];
 $paragrafo = $_GET["paragrafo"];

 $Newparola = str_replace("parola", "***", $parola = $_GET );
 echo "nuova parola: " .$Newparola;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <div> <?php echo ($parola)." ". ($paragrafo);?></div>
    <div> <?php echo ($parola)." ". ($paragrafo);?></div>
</body>
</html>