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
<!-- personnage dragon créé -version2-->
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

<!-- création des portes  -->
<!-- <div id="porte1" onclick="location.href='niveau2.php'"></div> -->
<div id="porte1" data-toggle="modal" data-target="#niveau2"></div>
<div id="porte2" data-toggle="modal" data-target="#niveau2"></div>
<div id="porte3" data-toggle="modal" data-target="#niveau2"></div>
<!-- <div id="porte3" onclick="location.href='niveau2.php'"></div> -->





<div id="canvas" class="">
  
    <div id="ligne1" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
    </div>

    <div id="ligne2" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege"></div>
      <div id="construire2" class="col-2  col-lg-1" data-matiere="">250b + 60d</div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="">2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2</div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois">2</div>
    </div>

    <div id="ligne3" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div id="construire" class="col-2  col-lg-1 " data-matiere="">8b + d3</div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div id="gem" class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
    </div>

    <div id="ligne4" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
    </div>

    <div id="ligne5" class="row justify-content-between align-items-center mx-0 p-0">
      <div class="col-2  col-lg-1 ressource" data-matiere="piege"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="diamant"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="eau"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="bois"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere="piege"></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
      <div id="construire2" class="col-1 " data-matiere=""></div>
      <div class="col-2  col-lg-1 ressource" data-matiere=""></div>
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