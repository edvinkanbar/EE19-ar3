<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista klippboken</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css%22%3E
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Pastebin</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link" href="frontend.php">Spara</a></li>
                <li class="nav-item"><a class="nav-link active" href="lista.php">Lista</a></li>
            </ul>
        </nav>
        <main>
            <?php
                $content = file_get_contents("pastebin.txt");

                echo $content
            ?>
        </main>
    </div>
</body>
</html>