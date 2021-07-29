<!-- Stampare a schermo una decina di dischi musicali. Ecco un esempio di valori da poter inserire:
[
'title' => 'New Jersey',
'author' => 'Bon Jovi',
'year' => 1988,
'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
] -->

<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->












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

    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Music</title>
</head>
<body>


<div id="app">
        <header>
            <img src="https://9b16f79ca967fd0708d1-2713572fef44aa49ec323e813b06d2d9.ssl.cf2.rackcdn.com/1140x_a10-7_cTC/NS-WKMAG0730-1595944356.jpg" alt="logo">
        </header>
       
        <main>
            <h2 class="p-3"> La tua playlist:</h2>
        
            <div class="container">
        
                <div class="row">
                    

                        <div class="col-3 p-3" v-for='song in songs'>
                            <h5>    
                               {{song.title}}
                            </h5>
                            <p class="m-0">
                                {{song.author}}
                            </p>
                            <p>
                                {{song.year}}
                            </p>
                            <img :src="song.poster" :alt="song.title" class="w-75" >
                        </div>
                    
                
                </div>

            </div>
        </main>
       
    
        <footer>
            <div class="container">

                <h5 class="fw-bold text-center pt-2">Follow us!</h5>

                <div class="d-flex justify-content-center">

                    <div v-for='logo in social' :class='logo.color'>
                        <i :class="logo.social"></i>
                    </div>

                </div>

            </div>
            
 
   
        </footer>
</div>







    
    








<script src="js/script.js"></script>

    
</body>
</html>