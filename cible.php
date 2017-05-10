<p>
    Bonjour !
</p>


<p>Ton pseudo est : <?php echo htmlspecialchars($_POST['pseudo']); ?> !</p>


<p>Pour retourner sur le formulaire cliquez <a href="exo1.php">ICI</a></p>


<p>Vous avez choisis : <?php echo $_POST['choix']; ?></p>


<?php 
/*Test si le fichier est bien envoyé et qu'il n'a pas d'erreur*/
    if (isset($_FILES['doc']) AND $_FILES['doc']['error'] == 0) {
        /*Test la taille du fichier*/
        if ($_FILES['doc']['size'] <= 1000000) {
            $infosfichier = pathinfo($_FILES['doc']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if(in_array($extension_upload, $extensions_autorisees))
            {
                move_uploaded_file($_FILES['doc']['tmp_name'], 'uploads/'. basename($_FILES['doc']['name']));
                echo "l'envoi du fichier a bien été effectué";
            }
            else {
                echo "probleme extension";
            }
        }
        else {
            echo "probleme de taille";
        }
    }
    else {
        echo "pas d'envoi ou erreur pendant l'envoi";
    }

    
?>

