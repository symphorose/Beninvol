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
<body style="background-color: #34baf4">
     
  <div class="menu">
               <header class="header">
                  <a href="#" class="header-logo"><h1 style="color: black">Réserver en ligne</h1></a>
                  <nav class="header-menu">
                      <p style="color: black"><?php include "index.php" ?></p>
                  </nav>
                  
               </header>
            </div>
     <!--banner-->
            <div class="block">
               <div class="banner"> 
                  <img src="nuage.jpg"  class="banner-img" >
                  <div class="banner-content">
   <!--formualire-->
    <h1 style="font-size:20px">RESERVATION </h1>
        
        <form action="formulaire.php" method="post">
            <div class="c100">
              <p style="color:black">Vous voulez tester notre agence? Alors inscrivez-vous ci-dessous. </p>  
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="S'inscrire">
            </div>
        </form>
</div>
               </div>
            </div>
   
    <!--retour en haut de page-->    
                    <a href="#" class="btn" style="position: fixed;bottom: 38px;right: 10px;display: block;" id="toTop"> <i class="icon-arrow-up"></i> Remonter</a>
    <!--------------------------------------footer-------------------------------------->
    
    <section class="footerSection" style="height: auto; background-color: black;">

<div class="container" style="height: auto;">
	
			Email: <a href="mailto:info@africasoftservices.com" title="contact"><i class="icon-envelope-alt"></i> akylacruz@gmail.com</a><br>
				</div>
</section>
    
    
    
</body>
</html>