<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epsilon</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-red-700 overflow-hidden h-screen bg-gradient-to-b from-fuchsia-400 to-fuchsia-700">
        <div class="pt-28">
            <div class="flex flex-col items-center justify-center text-center bg-gradient-to-b from-white to-transparent w-fit h-fit mx-auto px-20 rounded-xl">
                <?php
                    // Inclure le header
                    include 'pages/header.php';
                ?>
                <img src="content/img/william.jpg" alt="William, prince de Galles" class="w-40 rounded-full">
                <p class="my-4">William DOURLENS<br>Groupe : Vianney DRS, Téo Fiminski</p>
                <a href="pages/upload.php"><p class="mb-4 underline text-fuchsia-900">Upload your file !</p></a>
                <p class="mb-8">Copyright © Epsi Lille 2024</p>
            </div>
        </div>
    </body>
</html>