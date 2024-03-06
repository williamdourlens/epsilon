<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epsilon - Upload</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-blue-950 overflow-hidden h-screen bg-gradient-to-b from-fuchsia-400 to-fuchsia-700">
        <div class="pt-32">
            <div class="flex flex-col items-center justify-center text-center bg-white bg-gradient-to-t from-fuchsia-400 to-transparent w-fit h-fit mx-auto px-24 rounded-xl">
                <h1 class="font-bold text-3xl mt-4 mb-2">EPSILON</h1>
                <h2 class="mb-3">Plateforme de peer-learning<br>EPSI Lille</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data" class="flex flex-col items-center justify-center mt-4 mb-8">
                    <input type="file" name="fichier" class="mb-4">
                    <button type="submit" name="envoyer" class="underline text-fuchsia-900 mb-2">Envoyer</button>
                    <?php
                    if(isset($_POST['envoyer'])){
                        $dossier = '../uploads/';
                        $fichier = basename($_FILES['fichier']['name']);
                        $imageInfo = getimagesize($_FILES['fichier']['tmp_name']);
                        if($imageInfo !== false) {
                            $extension = pathinfo($fichier, PATHINFO_EXTENSION);
                            $fichierSansExtension = pathinfo($fichier, PATHINFO_FILENAME);
                            $i = 1;
                            while(file_exists($dossier . $fichier)){
                                $fichier = $fichierSansExtension . '_' . $i . '.' . $extension;
                                $i++;
                            }
                            if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)){
                                echo 'Upload effectué avec succès !';
                            }else{
                                echo 'Echec de l\'upload !';
                            }
                        } else {
                            echo 'Le fichier sélectionné n\'est pas une image !';
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
