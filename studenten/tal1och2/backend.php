<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultat från formuläret</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Ta emot det som skickas
    $tal1 = filter_input(INPUT_POST, 'talet1');
    $tal2 = filter_input(INPUT_POST, 'talet2');

    if ($tal1 && $tal2) {
        // Räkna ut summan
        $summa = $tal1 + $tal2;

        // Skriv ut resultatet
        echo "<p>Summan av $tal1 + $tal2 är $summa</p>";
    }
    ?>
</body>
</html>