<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8"/>
        <link href="formulaire.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compstible" content="ie-edge">
    </head>
   
    <body>
        
        <!--DEBUT FORMULAIRE De Voyage-->
        <div class="form">
            <h3 class="titre">Formulaire d'inscription de voyage</h3>
        <div class="milieu">
            <form action="connexion.php" method="post"> 
                <div class="c100">
			
			<h1 style="color:#bc173b""font-size:20px" >Personnalité</h1>
                <p>
          <label for="nom">Nom : </label> 
                <input type="text" name="Name" id="nom" placeholder=" Votre nom" >
                </p>
                <p>
           <label for="prenom">Prénom : </label>
                <input type="text" name="seudo" id="prenom" placeholder="Votre prenom" required>
                    </p>
                </div>
             <div class="c100">
         <p>
                <label for="mel">Email : </label>
                <input type="email" name="mail" id="mel" placeholder="Votre email" required >
             </p>
                 </div>
                <div class="c100">
      <p>
                <label for="age">Age :</label>
                <input type="number" id="age" name="agee" placeholder=" Votre âge" required>
      </p>
            </div>
            <div class="c100">
			<h1 style="color:#a43a73" "font-size:20px">Sexe :</h1>
            <p>
                
                <label for="sexe"> F/M </label>
                <input type="text" name="sexee" id="sexe" placeholder="Votre sexe" required >
             </p>
            
            </div>
            <div class="c100">
                 <p> 
                <label for="rpays">Pays de résidence :</label>
              
               
                <input type="text" name="rpaysr" id="rpays" placeholder="Votre pays actuel" required >
             </p>
			<div class="c100">
                <p>
                <label for="dpays">Destination :</label>
               
                
                <input type="text" name="dpaysd" id="dpays" placeholder="Votre pays de destination" required >
             </p>
            <h1 style="color:#a43a73" "font-size:20px">Infos Départ/Arrivée</h1>
			<p>
                <label for="depart">Départ : </label> 
                <input type="date" name="departs" id="depart" value=> 
           </p>
           
            </p>
          
                <label for="arrivee">Arrivée : </label> 
                <input type="date" name="arrivees" id="arrivee" value=>
              
			 </p>
              <h1 style="color:#a43a73" "font-size:20px">Infos passeport</h1>
			<p>
                <label for="passeport">Num.passeport :</label>
                <input type="varchar" name="passeports" id="passeport" placeholder=" N° passeport" required>
            
			</p>
	        <!-- <h1 style="color:#a43a73" "font-size:20px">Option d'achat d'un billet</h1>
             <p>
			    <input type="radio" id="alle" name="sexe" value="allee">
                <label for="Aller">Allé</label>
                
                <input type="radio" id="alle_retour" name="sexe" value="allee_et_retour">
                <label for="Allé et retour">Allé et retour</label>
          
			</p>-->
			<div class="c100" id="submit">
                
                 <br> </br>
                
                <input href="remerciement.html" type="submit" name="submit" value="Envoyer">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="reset" value="Effacer">
                
                
            </form>
            
        </div>
        </div>
                <!--FIN FORMULAIRE De Voyade-->

       
        
        
        
        
    </body>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
</html>