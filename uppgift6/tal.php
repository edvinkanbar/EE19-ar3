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
        <h1 class="display-4">Ange tal 1 och tal 2</h1>
        
        <form class="kol2" action="resultat.php" method="POST">
            <label>Tal 1</label>
            <input type="text" name="tal1" required>
            <label>Tal 2</label>
            <input type="text" name="tal2" required>
            <button class="primary">Spara</button>
        </form>
    </div>
</body>
</html>