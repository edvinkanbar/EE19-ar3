<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
        $bostad = filter_input(INPUT_POST, "bostad", FILTER_SANITIZE_STRING);
        $längd = filter_input(INPUT_POST, "längd", FILTER_SANITIZE_STRING);
        $storlek = filter_input(INPUT_POST, "stolek", FILTER_SANITIZE_STRING);
        $mat = filter_input(INPUT_POST, "mat", FILTER_SANITIZE_STRING);
     
        // Skriv ut madlibs-texten
        echo "Den gamle manne , vars namn var $namn. Han bor just nu i $bostad med sina barn. Han är $längd lång har stora fötter. Hans skostolek är $storlek. han favorit mat är $mat"
        ?>
    </div>
</body>
</html>