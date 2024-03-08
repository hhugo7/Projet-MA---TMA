<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <header>
                <?php include 'header.php'; ?>
            </header>

            <div class="image">

                <div class="nom">
                    <img src="image/michelle.png" alt="Photo de Michelle Télo" class="profile-photo">
                      <p>Télo Thomas</p>
                </div>

                <div class="nom">
                    <img src="./img/hugo.jpg">
                    <p>Hugo Hochart</p>
                </div>

            </div>

            <p> 16/20 : Facilement modifiable </p>
            
            <a href="upload_form.php" class="upload-button">Uploader vos fichiers ici</a>

            <footer>
                <?php include 'footer.php'; ?>
            </footer>
        </div>
    </div>
</body>
</html>
