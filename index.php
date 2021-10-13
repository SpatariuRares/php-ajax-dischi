<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Frontend</title>
</head>

<body class="debug">
    <?php 
        require __DIR__ . '/header.php';
    ?>
    <main id="root" >
        <div class="discs">
            <div class="disco" v-for="disc in discs">
                <div>
                    <img :src="disc.poster" alt="disco">
                </div>
                <div>
                    <h3>{{disc.title}}</h3>
                    <p>{{disc.author}}</p>
                </div>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>
</main>

<style>
   *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    main{
        height:calc(100vh - 70px);
        background-color: #1e2d3b;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .discs{
        display:flex;
        flex-wrap: wrap;
        width:70%;
    }
    .disco{
        width: calc(100% / 5);
        padding: 10px;
    }
    .disco img{
        width:100%;
        height: 80%;
        object-fit: cover;
    }
</style>