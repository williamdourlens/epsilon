<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="base.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Epsi v2</title>
    </head>
    <body>
        <div class="mise_en_page">
            <div class="fond_pour_affichage">
                <?php
                    include 'assets/header.php';
                ?>
                <div class="flex flex-cols-2 gap-4 items-center justify-center text-center">
                    <div>
                        <img class="photoProfile" src="image/vianney.jpg"/>
                        <p>Vianney DRS</p>
                    </div>
                    <div>
                        <img class="photoProfile" src="image/william.jpg"/>
                        <p>William DOURLENS</p>
                    </div>
                </div>
                <p>15,3 car facilement modifiable et juste pas assez de points pour mettre 20.</p>
                <bouton><a class="bouton_upload" href="upload.php">-> Upload un fichier <-</a></bouton>
                <?php
                    include 'assets/footer.php';
                ?>
            </div>
        </div>
    </body>
</html>