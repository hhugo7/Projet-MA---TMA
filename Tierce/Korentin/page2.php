

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Formulaire d'Upload de Fichier</title>
</head>
<style>
body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        div {
            background-image: linear-gradient(to top, #fff0 0%, #fff 100%);
            padding: 100px;
            display: inline-block;
            text-align: center;
        }
    </style>
<body  style="background-color:rgb(47,79,79);">
<div  >
<form action="upload.php" method="post" enctype="multipart/form-data"><!--utilise upload.php afin d'envoyer le doc choisis dans le repertoire uploads-->
    <label for="file"><p class=red>Sélectionnez un fichier :</label>
    <br>
    <input type="file" name="file" id="file" accept=".pdf, .jpg, .jpeg, .png, .gif"><!--formulaire type file pour permettre de choisir un doc-->
    <br>
    <input type="submit" name="submit" value="Envoyer"><!--envoie du document-->
</form>
</div>
<script>
        function validateForm() {
            var fileInput = document.getElementById('file');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.pdf|\.jpg|\.jpeg|\.png|\.gif|\.docx)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Veuillez télécharger un fichier de type PDF, JPG, JPEG, PNG, GIF ou .docx .');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
