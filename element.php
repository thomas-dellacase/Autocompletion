<?php
require "country.php";
$article = new Country();
$ok=$article->showCountry($_GET['id']);

// var_dump($_GET);
// var_dump($ok);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Pays</title>
</head>
<body>
    <header id='headerShow' class="responsiveElement">
        <nav>
            <div id="divLink">
                <a href="index.php" id="linkHeader">Home</a>
            </div>
            <div> 
                <?php
                    echo "<h1>".$ok['0']['name']."</h1>";
                ?>
            </div>
                <div class="container2">
                    <input type="text" name="input" id="countryInput" class="autocompleteInput" placeholder="Chercher un pays">
                    <div>
                        <div class="autocompleteList" id="countryList">
                            </div>
                            <hr>
                        <div class="autocompleteList" id="countryList2">
                        </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <article id="artShow">
            <?php
            echo "<h2>".$ok['0']['name']."</h2>";
            echo "<h3>".$ok['0']['nicename']."</h3>";
            echo "<p>ISO:".$ok['0']['iso']."</p>";
            echo "<p>ISO 3:".$ok['0']['iso3']."</p>";
            echo "<p>Numeros de pays:".$ok['0']['numcode']."</p>";
            echo "<p>Code de telephone:".$ok['0']['phonecode']."</p>";
            ?>
        </article>
    </main>
    <footer>
            <section id='secFooter'>
            <p class="text-justify">Thomas Dellacase <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. 
                                    Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. 
                                    We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </section>
        </footer>
</body>
</html>