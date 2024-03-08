<body>
<div class="card">
<form action="" method="post" enctype="multipart/form-data">
    <p class="buttonSub">
      <label for="monfichier">Sélectionnez un fichier : </label>
      <input type="file" name="monfichier" id="monfichier" />
      <link rel="stylesheet" href="style.css">
    </p>
    <p>
      <input class="buttonSub" type="submit" value="Envoyer le fichier" />
    </p>
  </form>
  </div>
</body>

<?php
  $dest = "uploads/";

  // Vérifie si le fichier est au bon format
  if (isset($_FILES['monfichier'])) {
    $file_type = $_FILES['monfichier']['type'];
    $allowed = array("application/pdf", "image/jpeg", "image/png", "image/gif", "image/jpg", "image/pjpeg", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    if (!in_array($file_type, $allowed)) {
      echo "<p class='sendmessage'>Donne des images, des PDF ou des fichiers .docx !</p>";

  // Vérifie si le fichier est présent
    } else if ($_FILES['monfichier']['error'] > 0) {
      $erreur = "Erreur lors du transfert";

  // Vérifie si le fichier est trop gros
    } else if ($_FILES['monfichier']['size'] > 500000) {
      echo "<p class='sendmessage'>Le fichier est trop gros</p>";

  // Vérifie si le fichier est bien envoyé
    } else {
      $resultat = move_uploaded_file($_FILES['monfichier']['tmp_name'], $dest . $_FILES['monfichier']['name']);
      if ($resultat) {
        echo "<p class='sendmessage'>Fichier envoyé avec succès !</p>";
      } else {
        echo "<p class='sendmessage'>Erreur lors de l'envoi du fichier.</p>";
      }
    }
  }
  ?>
  </body>
  </html>
