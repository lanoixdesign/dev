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

  <script src="js/main.js"></script>
 <link rel="stylesheet" href="css/style.css">

</head>

<body id="bg2">

    <div id="dragon" id="player" class="profil-d"></div>

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

<div id="canvas" class="">
  

</div>

  </header>

<section>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  Bienvenue
</button>

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

</section>

</body>

</html>
