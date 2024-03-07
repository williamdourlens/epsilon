<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epsilon - Upload</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-red-700 overflow-hidden h-screen bg-gradient-to-b from-fuchsia-400 to-fuchsia-700">
        <div class="pt-28">
            <div class="flex flex-col items-center justify-center text-center bg-gradient-to-b from-white to-transparent w-fit h-fit mx-auto px-20 rounded-xl">
                <?php
                    include 'header.php'; // Inclure le header
                ?>
                <form action="upload.php" method="post" enctype="multipart/form-data" class="flex flex-col items-center justify-center mt-4 mb-8">
                    <input type="file" name="fichier" class="mb-4">
                    <button type="submit" name="envoyer" class="underline text-fuchsia-900 mb-4">Envoyer</button>
                    <?php
                    if(isset($_POST['envoyer'])){ // Vérifier si le formulaire est envoyé
                        if(empty($_FILES['fichier']['name'])){ // Verifier si aucun fichier n'est envoyé
                            echo 'Aucun fichier sélectionné !'; // Afficher un message d'erreur
                        } else {
                            $dossier = '../uploads/'; // Répertoire de destination des fichiers
                            if (!file_exists($dossier)) { // Créer le dossier s'il n'existe pas
                                mkdir($dossier, 0777, true);
                            }
                            $fichier = basename($_FILES['fichier']['name']); // Récupérer le nom du fichier
                            $extension = pathinfo($fichier, PATHINFO_EXTENSION); // Réupérer l'extension du fichier
                            $extensionsAutorisees = array('jpg', 'jpeg', 'png', 'gif', 'pdf'); // Extensions autorisées
                            $imageInfo = getimagesize($_FILES['fichier']['tmp_name']); // Récupérer les informations de l'image
                            if(in_array($extension, $extensionsAutorisees) && ($imageInfo !== false || $extension === 'pdf')) { // Vérifier si le fichier est une image ou un PDF
                                $fichierSansExtension = pathinfo($fichier, PATHINFO_FILENAME); // Récupérer le nom du fichier sans l'extension
                                $i = 1;
                                while(file_exists($dossier . $fichier)){ // Vérifier si le fichier existe déjà
                                    $fichier = $fichierSansExtension . '_' . $i . '.' . $extension; // Renommer le fichier uploadé
                                    $i++;
                                }
                                if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)){ // Déplacer le fichier uploadé
                                    echo 'Upload effectué avec succès !'; // Afficher un message de succès
                                }else{
                                    echo 'Echec de l\'upload !'; // Afficher un message d'erreur
                                }
                            } else {
                                echo 'Le fichier sélectionné n\'est pas une image ou un PDF !'; // Afficher un message d'erreur
                            }
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
