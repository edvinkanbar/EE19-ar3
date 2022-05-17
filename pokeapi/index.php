<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="kontainer">
        <h1>Pokeapi</h1>
<form action="" method="post">
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
 <?php 
 $url = "https://pokeapi.co/api/v2/pokemon";

 // steg 1 att hämta data
 $json = file_get_contents($url);

 // steg 2 avkoda json
 $dataJson = json_decode($json);

 // steg 3 plocka ut pokemon
 $results = $dataJson->results;

 // tugga ingeom en array
 foreach ($results as $item) {
     $name =$item->name;
     echo "<option value=\"$name\">$name</option>";
 }
 ?>
</select>
<button type="button" class="btn btn-dark">Hitta</button>
</form>

    </div>
</body>
</html>
