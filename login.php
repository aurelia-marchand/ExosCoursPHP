<!DOCTYPE htlm>
<html lang="fr">
    
    <head>
        
        <meta charset="utf-8" />
        
        <title>Connexion</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    
    <body>
       <h1>Connexion à la base</h1>
       
       <p>Un compte est nécessaire pour l'accès à ce site, merci de renseigner les champs ci-dessous, si vous n'avez pas de compte veuillez contacter votre administrateur </p>
       <!--Formulaire de connexion-->
        <form method="post" action="accueil.php">
           
            <p>
                <label for="pseudo">Votre Pseudo :</label>  
                    <input type="text" name="pseudo" id="pseudo" placeholder="votre pseudo ici"/>
                    
                <label for="password">Mot de passe</label>
                   <input type="password" name="password" id="password"/>
                   
                
                <input type="submit" value="Valider"/>
            </p>
            
            
        </form>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    
</html>

