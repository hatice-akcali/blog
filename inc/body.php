  <div class="row">
  <section class="col-sm-8">


    



<h1>Découvrez les 5 derniers billets : </h1><hr>  
<?php
 $requete=$bdd->query('SELECT id_bil, nom, prenom, titre, contenu, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_creation_fr 
 FROM billet AS a, auteur AS b WHERE a.id_aut = b.id_aut ORDER BY date DESC LIMIT 0,5');

 


 //SELECT * FROM news AS n, auteur AS a WHERE n.id_auteur = a.id_auteur AND nom="DUPONT" AND prenom="Marchel"


 //var_dump($bdd);

    while ($donnees = $requete->fetch()):
 /*$i=0;
      while ($i < 5):
    $i++;*/
    ?>
      <div class="blog-post">
        <h2 class="blog-post-title">
          <?php echo htmlspecialchars($donnees->titre); ?>
        </h2>
        <p class="blog-post-meta">
          <?php echo ($donnees->date_creation_fr);?> par <a href="#"><?php echo htmlspecialchars($donnees->prenom." ".$donnees->nom);?></a>
        </p>

        <p>
          <?php echo htmlspecialchars($donnees->contenu); ?>
        </p>

        
      </div><!-- /.blog-post -->
  <?php
  endwhile;
   $requete->closeCursor();
   ?>





   </section>
   </div>