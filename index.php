
<!--?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=macitationvisuelle;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$param="";
$requete = $bdd->prepare("SELECT auteur FROM image WHERE auteur LIKE '%ssi';");


$requete->bindParam(':param', $param);
$requete->execute();
$resultat = $requete->fetchAll();

echo '<pre>';
print_r($resultat);
echo '</pre>';

?-->



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bonjour la piscine !</title>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


 <link rel="stylesheet" href="css/style.css">
 <script src="js/main.js"></script>
</head>

<body id=bg1>

    <div id="dragon"></div>

<header class="container-fluid">
    <nav class="row align-items-center bg-dark pt-3">
      <div class="col-12 row justify-content-between align-items-center navbar-collapse">
      <div class="col-3">
        <a id="instruction" class="navbar-brand" href="#">Hello world ! </a>
        <span></span>
        
      </div>
      <ul class="col-3 d-flex text-light align-items-center">
        <li data-toggle="modal" data-target="#exampleModal"><a href="#!" class="text-light">Bienvenue</a></li>
        <li><a href="#!" class="text-light">Écrire mon code</a></li>
        <li></li>
        <li></li>
      </ul>

      <ul class="col-3 offset-3 d-flex text-light">
        <li id="eau" class="mx-1 ">100 pts</li>
        <li></li>
        <li id="bois" class="mx-1"></li>
        <li id="diamant" class="mx-1"></li>
      </ul>
      <div>
    </nav>

    <!-- <button id="foret" class="border-0">
      <a href="#!"></a>
    </button> -->
<div id="porte1" onclick="location.href='niveau2.php'"></div>
<div id="porte2" data-toggle="modal" data-target="#niveau2"></div>
<div id="porte3" onclick="location.href='niveau2.php'"></div>
<div id="test" class="ressource hache rebond" data-matiere="bois"></div>




<div id="canvas" class="">
  
    <div id="ligne1" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="">1-1</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">1-2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">1_3</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau">1_4</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">1_5</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">1_6</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">1_7</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">1_8</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">1_9</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">1_10</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">1_11</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">1_12</div>
    </div>

    <div id="ligne2" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2-1</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">2-2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">2_3</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege">2_4</div>
      <div id="construire2" class="col-2  col-lg-1 ressource" data-matiere="">250b + 60d</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">2_6</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2_7</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">2_8</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">2_9</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">2_10</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2_11</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2_12</div>
    </div>

    <div id="ligne3" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">3-1</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3-2</div>
      <div id="construire" class="col-2  col-lg-1 " data-matiere="">8b + 3d</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_4</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_5</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_6</div>
      <div id="gem" class="col-2  col-lg-1 ressource" data-matiere="diamant">3_7</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_8</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_9</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege">3_10</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">3_11</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">3_12</div>
    </div>

    <div id="ligne4" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">4-1</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">4-2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">4_3</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">4_4</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau">4_5</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">4_6</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">4_7</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege">4_8</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">4_9</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">4_10</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">4_11</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">4_12</div>
    </div>

    <div id="ligne5" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="piege">5-1</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant">5-2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">5_3</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">5_4</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau">5_5</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">5_6</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">5_7</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">5_8</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege">5_9</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">5_10</div>
      <div id="construire2" class="col-1 " data-matiere="">5_11</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">5_12</div>
    </div>
  </div>

  </header>

<section>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="parchemin">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bonjour à toi mon ami ! </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body parchemin">
        <h4>Bienvenue dans HelloLapisicine By MicaL. </h4>
        Dans ce jeu tout est possible ! 
        <br/>
        Le but de ce jeu est de pouvoir s'entrainer dans le langage que tu connais et d'y ajouter tes connaissances... (php, jquery, sass, bootstrap, sql, ...)
        <br/>

        <h5>Code, code, code, et amuse toi ! </h5>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>




<!-- Modal niveau 2-->
<div class="modal fade" id="niveau2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="grotte1">
     
      <div class="modal-body bg2">

      </div>
      
    </div>
  </div>
</div>

</section>

</body>

</html>