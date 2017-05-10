<!DOCTYPE htlm>
<html lang="fr">
    
    <head>
        
        <meta charset="utf-8" />
        
        <title>Formulaire</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    </head>
    
    <body>
<?php 

   

    if(isset($_POST['password']) AND $_POST['password'] == "test") {
        echo "bienvenue ". $_POST['pseudo']. ". Vous êtes sur votre espace de gestion, que souhaitez vous faire ?";
        
        ?>
        <form method="post" action="cible.php">
           
            <p>   
                <select name="choix">
                    <option value="choix1">Créer adhérent</option>
                    <option value="choix2">Renouveller adhésion</option>
                    <option value="choix3">Editer une facture</option>
                    <option value="choix4">Consulter adhésions</option>
                </select>
                
            
                <input type="submit" value="Valider"/>
            </p>
            
            
        </form>
        <?php
     } else {
        echo 'Bonjour '. $_POST['pseudo'].',Vous n\'avez pas rentré le bon mot de passe, réessayer <a href="login.php">ici</a';
    }

?>
    </body>
</html>

