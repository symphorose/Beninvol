
<?php
define('USER',"root");
define('PASSWD',"P@ssw0rd");
define('SERVER',"localhost");
define('BASE',"boarding");
?> 
 <?php
 
 
        
        
    try
        {
            
           $connexion = new PDO('mysql:host=localhost; dbname=boarding', 'root','');
        }
            
    catch(Exception $e)
    {
            
       die('Erreur :'.$e->getMessage());
    }
            
    $pdoconnect = $connexion->prepare('INSERT INTO voyage(nom,prenom,mel,age,sexe,rpays,dpays,depart,arrivee,passeport) VALUES ( :nom, :prenom, :mel, :age, :sexe, :rpays, :dpays, :depart, :arrivee, :passeport)');
            
    $pdoconnect->execute(array('nom'=>$_POST['Name'], 'prenom'=>$_POST['seudo'], 'mel'=>$_POST['mail'], 'age'=>$_POST['agee'], 'sexe'=>$_POST['sexee'], 'rpays'=>$_POST['rpaysr'],'dpays'=>$_POST['dpaysd'],'depart'=>$_POST['departs'],'arrivee'=>$_POST['arrivees'],'passeport'=>$_POST['passeports']));

    $insertIsOk = $pdoconnect;
    if ($insertIsOk)
        {
            $message = 'Votre formulaire a été bien enregistrer. Un retour vous sera fait par mail';
        }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title></title>
</head>
<body>
    <h1>INSCRIPTION</h1>
    <p>
        <?php
            echo $message;
        ?>
    </p>

</body>
</html>