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
    <link rel="stylesheet" href="style.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<header>

    <img src="https://9b16f79ca967fd0708d1-2713572fef44aa49ec323e813b06d2d9.ssl.cf2.rackcdn.com/1140x_a10-7_cTC/NS-WKMAG0730-1595944356.jpg" alt="logo">
</header>




<main>
    <div class="container">

        <div class="row">
            <?php foreach($songs as $song) { ?>

                <div class="col-3 p-3">
                    <h5>    
                        <?php echo $song['title'] ?>
                    </h5>
                    <p class="m-0">
                        <?php echo $song['author'] ?>
                    </p>
                    <p>
                        <?php echo $song['year'] ?>
                    </p>
                    <img src="<?php echo $song['poster'] ?>" alt="img" class="w-75" >
                </div>
            
            <?php } ?>
        </div>

    </div>
</main>
    
    



<footer>
    <div class="d-flex justify-content-center" >
        <h5 class="fw-bold">Seguici sui social!</h5>
    
        <?php foreach($socials as $social) { ?>
        
        <img src="<?php echo $social ?>" alt="social">
        
        <?php } ?>  

    </div> 

</footer>




    
</body>
</html>