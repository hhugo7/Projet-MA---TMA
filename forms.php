<form action="" method="post" enctype="multipart/form-data">
    <p>
      <label for="monfichier">Sélectionnez un fichier : </label>
      <input type="file" name="monfichier" id="monfichier" />
    </p>    
    <p>
      <input type="submit" value="Envoyer le fichier" />
    </p>
  </form>

<?php
  $dest = "upload/";
  if ($_FILES['monfichier']['error'] > 0) {
    $erreur = "Erreur lors du transfert";
  } else {
    $resultat = move_uploaded_file($_FILES['monfichier']['tmp_name'], $dest . $_FILES['monfichier']['name']);
    if ($resultat) {
      echo "<p>Fichier téléchargé avec succès !</p>";
    } else {
      echo "<p>Erreur lors du téléchargement du fichier.</p>";
    }
  }
  ?>
</body>
</html>