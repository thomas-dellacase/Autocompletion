<?php
require "country.php";
$article = new Country();
$oko=$article->shearchCountry($_GET['recherche']);
// echo '<pre>';
// var_dump($oko);
// echo '</pre>';

$article2 = new Country();
$ok2=$article2->shearchCountry2($_GET['recherche']);
// echo '<pre>';
// var_dump($ok2);
// echo '</pre>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Recherche</title>
</head>
    <body id='bodyRecherche'>
    <header id='headerShow' class="responsiveSearch">
        <nav>
            <div id="divLink">
                <a href="index.php" id="linkHeader">Home</a>
            </div>
            <div> 
                <h1>On a tout les pays en stock</h1>
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
            <article>
                <?php
                    if($oko == [] && $ok2 == []){
                        echo "<section class ='secRick'>";
                        echo "<img src='asset/rick-roll.gif' alt='rick'>";
                        echo "</section>";
                    }
                ?>
            <div>
                <?php
                foreach($oko as $key => $value){
                    //var_dump($value);
                    echo "<a href='element.php?id=".$value['id']."'>";
                    echo "<section class ='secRecherche'>";
                    echo "<h2>".$value['name']." , ". $value['iso']."</h2>";
                    echo"</section>";
                    echo'</a>';
                }
                ?>
            </div>
            <article>
                <div>
                    <?php
                    foreach($ok2 as $key => $value){
                        echo "<a href='element.php?id=".$value['id']."'>";
                        echo "<section class ='secRecherche'>";
                        echo "<h2>".$value['name']." , ". $value['iso']."</h2>";
                        echo"</section>";
                        echo'</a>';
                    }
                    ?>
                </div>
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