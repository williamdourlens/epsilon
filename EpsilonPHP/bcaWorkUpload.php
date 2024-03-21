<?php

$work[0][2] = 'Exemple de travaux 1';
$work[2][4] = 'Exemple de travaux 2';

include('header.php');

$isConnected = (isset($_COOKIE['mail']) || isset($_SESSION['mail'])) ? true : false;

if($isConnected) {
	include('bcaAccessCodeSystem.php');
}

$course = 'course'.$_GET['course'];
$challenge = 'rank'.$_GET['challenge'];

echo '<h2>Description du travail</h2><strong>
			Parcours actuel</strong> : '.$$course.'<br>';
echo '<strong>Challenge visé</strong> : '.$$challenge.'<br>';
echo '<strong>Défi demandé</strong> : <u>'.$work[$_GET['course']][$_GET['challenge']].'</u><br><br>';

?>
<head>
  <title>Upload du travail</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/background.css">
</head>
<h2>Upload du travail</h2>

<form action="bcaWorkUpload-validation.php?course=<?=$_GET['course']?>&challenge=<?=$_GET['challenge']?>" method="post" enctype="multipart/form-data">
  Selectionnez un fichier à uploader:
  <input type="file"  class="bouton-upload-page" name="filesToUpload[]" id="filesToUpload" multiple>
  <input type="hidden" name="course" value="<?=$_GET['course'] ?>">
  <input type="hidden" name="challenge" value="<?=$_GET['challenge'] ?>">
  <input type="submit" class="bouton-upload-page" value="Upload" name="submit">
</form>
<br>
<a href="bcaWorkUpload-list.php?course=<?=$_GET['course']?>&challenge=<?=$_GET['challenge']?>">Voir la liste des fichiers uploadés</a>
<br>
<a href="index.php">Retour</a>
<?php include('./html/footer.html'); ?>
</body>

</html>