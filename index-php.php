<!-- Stampare a schermo una decina di dischi musicali. Ecco un esempio di valori da poter inserire:
[
'title' => 'New Jersey',
'author' => 'Bon Jovi',
'year' => 1988,
'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
] -->

<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php








include __DIR__ . '../database/db.php';

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <?php foreach($songs as $song) { ?>

                <div class="col">
                    <h3>    
                        <?php echo $song['title'] ?>
                    </h3>
                    <p>
                        <?php echo $song['author'] ?>
                    </p>
                    <p>
                        <?php echo $song['year'] ?>
                    </p>
                    <img src="<?php echo $song['poster'] ?>" alt="img" class="w-25" >
                </div>
                
                    
                


            <?php } ?>
        </div>

    </div>
    




    
</body>
</html>