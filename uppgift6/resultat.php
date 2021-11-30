<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Resultat</h1>

        <?php
        // Ta emot data som skickas
        $tal1 = filter_input(INPUT_POST, 'tal1', FILTER_SANITIZE_STRING);
        $tal2 = filter_input(INPUT_POST, 'tal2', FILTER_SANITIZE_STRING);

        // Konvertera till fahrenheit
        $resultat = $tal1 * $tal2;

        echo "<h3>produkten av $tal1 och $tal2 är = $resultat</h3>";
        
        ?>
        <a href="./tal.php">Tillbaka</a>
    </div>
</body>
</html>