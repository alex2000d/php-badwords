<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./welcome.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-5">
                                <div class="control-laber">parola</div>
                                <input type="text" class="form-control" name="parola" placeholder="inserisci parola">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-5">
                                <div class="control-laber">paragrafo</div>
                                <textarea type="text" class="form-control" name="paragrafo" placeholder="inserisci paragrafo"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-5">invia</button>
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</body>
</html>