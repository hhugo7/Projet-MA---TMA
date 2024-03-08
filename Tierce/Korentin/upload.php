<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/"; //variable du repertoire 
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        
        if (!file_exists($targetFile)) { //permetre d'eviter que le meme fichier d'etre importer deux fois
            
            move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile); //envoie le fichier dans le repertoire defini par $TargetFile
            echo "Le fichier est correctement uploadé.";
        } else {
            echo "Désolé, le fichier existe déjà.";
        }
    } else {
        echo "Une erreur est survenue.";
    }
}
?>
