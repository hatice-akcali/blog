<? include 'config/mysql_connect.php' ; ?>



<?php include 'inc/header.php'; ?>


 	  <div class="blog-header">
 		<img src="./image/banner.png" alt="banner"/>
       	<h1>Découvrez mes derniers billets : </h1><hr>      
      </div>

      <div class="row">

      	<!-- Pagination -->
        <div class="col-sm-8 blog-main">     
          <nav>
            <ul class="pager">
              <li><a href="#">Précédent</a></li>
              <li><a href="#">Suivant</a></li>
            </ul>
          </nav>
        </div><!-- /.blog-main -->


        <!-- Sidebar droite-->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
           	<h4 align="center"><strong>QUI SUIS-JE ?</strong></h4>
          	<img src="./image/jean.png" alt="banner" class="img-responsive center-block"/>
            <p class="text-center">L'AUTEUR - Jean Forteroche</p>
            <p><em>Acteur</em> et <em>écrivain</em>, né en 1944 en Bretagne (même si mon chapeau n'est plus trop rond, 
  			j'ai bel et bien une tête de breton !..)
  			Cinéma, puis mes premières armes : "le Choeur des femmes; et "Marche vers l'inconnu".</p>
          </div><br />

          <div class="sidebar-module">
            <h4><strong>Archives : </strong></h4>
            <ol class="list-unstyled">
              <li><a href="#">Juin 2017</a></li>
              <li><a href="#">Juillet 2017</a></li>
            </ol>
          </div><br />

          <div class="sidebar-module">
            <h4><strong>Liens utiles :</strong></h4>
            <ol class="list-unstyled">
              <li><a href="http://www.eyrolles.com/">Eyrolles</a></li>
              <li><a href="https://twitter.com/openclassrooms">Twitter</a></li>
              <li><a href="https://fr-fr.facebook.com/openclassrooms/">Facebook</a></li>
            </ol>
          </div>

        </div><!-- /.blog-sidebar -->


      </div><!-- /.row -->

<?php include 'inc/footer.php'; ?>

       