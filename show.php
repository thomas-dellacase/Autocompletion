<?php
require "country.php";
$article = new Country();
$ok=$article->showCountry($_GET['id']);

//var_dump($ok);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
</head>
<body>
    <main>
        <article>
            <?php
            echo "<h2>".$ok['0']['name']."</h2>";
            echo "<h2>".$ok['0']['nicename']."</h2>";
            echo "<p>ISO:".$ok['0']['iso']."</p>";
            echo "<p>ISO 3:".$ok['0']['iso3']."</p>";
            echo "<p>Numeros de pays:".$ok['0']['numcode']."</p>";
            echo "<p>Code de telephone:".$ok['0']['phonecode']."</p>";
            ?>
        </div>
    </main>
</body>
</html>