<!DOCTYPE htlm>
<html lang="fr">
    
    <head>
        
        <meta charset="utf-8" />
        
        <title>Formulaire</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    </head>
    
    <body>
        <form method="post" action="cible.php" enctype="multipart/form-data">
           
            <p>
                <label for="pseudo">Votre Pseudo :</label>  
                    <input type="text" name="pseudo" id="pseudo" placeholder="votre pseudo ici"/>
                    
                <label for="password">Mot de passe</label>
                   <input type="password" name="password" id="password"/>
                   
                <select name="choix">
                    <option value="choix1">Créer adhérent</option>
                    <option value="choix2">Renouveller adhésion</option>
                    <option value="choix3">Editer une facture</option>
                    <option value="choix4">Consulter adhésions</option>
                </select>
                
                <label for="doc">Ajouter doc</label>
                <input type="file" name="doc" id="doc"/>
                
               
                <input type="submit" value="Valider"/>
            </p>
            
            
        </form>
    
    
    </body>
    
</html>