<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> AGENCE DE VOYAGE DU JAPON </title>
        <link rel="stylesheet" href="index.css">
        <!-- css-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
            <link href="src/css/main.css" rel="stylesheet">
        <!-- css-->
        
        <!-- font-->
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:700" rel="stylesheet">
            <script defer src="http://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <!-- font-->
    </head>
    <!--head-->

   
<body style="background-color:black">
    <div class="menu">
               <header class="header">
                  <a href="#" class="header-logo" style="color: black"><h1> Page d'accueil</h1></a>
                  <nav class="header-menu">
                     <?php include "index.php"?>
                  </nav>
                  
               </header>
            </div>
     <!--banner-->
            <div class="block">
               <div class="banner"> 
                  <img src="nuages.jpg"  class="banner-img" >
                  <div class="banner-content">
                     <h1 class="title is-1" style="color: black">Bienvenue chez BENINVOL</h1>
                      
                     <h1 class="subtitle"style="color: black"><?php echo "<br>" ?> 
                      <?php echo "<br>" ?>
                         <?php echo "<br>" ?><?php echo "<br>" ?>  <?php echo '<a class="btn btn-sm btn-outline mr-2 is-link" data-ga-click="Dashboard, click, text: Create an organization;" href="rechercher_client.php">NOTRE UNIVERS </a>' ?> 
                       <?php echo "<br>" ?><?php echo "<br>" ?>  <?php echo '<a class="btn btn-sm btn-outline mr-2 is-link" data-ga-click="Dashboard, click, text: Create an organization;" href="Ajouter_client.php">Réserver en ligne</a>' ?>
                       
                      <?php echo "<br>" ?><?php echo "<br>" ?>  <?php echo '<a class="btn btn-sm btn-outline mr-2 is-link" data-ga-click="Dashboard, click, text: Create an organization;" href="a_propos.php">A PROPOS </a>' ?>
                     <!--retour en haut de page-->    
                     <a href="#" class="btn" style="position: fixed;bottom: 38px;right: 10px;display: block;" id="toTop"> <i class="icon-arrow-up"></i> Remonter</a>
                      </h1>
                      
                     
                  </div>
               </div>
            </div>
            <!--banner-->
            <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script>
   <script src="src/js/main.js"></script>
    
     <!--------------------------------------footer-------------------------------------->
    
    <section class="footerSection" style="height: auto; background-color: black;">

<div class="container" style="height: auto;">
	
			Email: <a href="mailto:info@africasoftservices.com" title="contact"><i class="icon-envelope-alt"></i> akylacruz@gmail.com</a><br>
				</div>
</section>
    
    
    
    
</body>
</html>