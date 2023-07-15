<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .noticias {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        flex-wrap: wrap; /* Quebra de linha automática */
    }

    .card {
        display: flex;
        padding: 10px;
        flex-direction: column;
        margin-right: 10px;
        word-wrap: break-word; /* Quebra de linha automática */
    }

    .nav2{
        display: flex;
        padding: 15px;
        min-width: 100%;
        min-height: 100%;
        background-color: black;
        align-items: center;
        padding-left: 15%;
    }

    .nav2 li{
        display: inline-block;
        padding-left: 25px;
    }

    .nav2 a{
        text-decoration:none;
        color: #FFF;
    }

    .nav1{
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .nav1 li{
        display: inline-block;
        padding-left: 10px;
        font-size: 25px
    }

    .nav1 a{
        text-decoration: none;
        color: red;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .nav1 .active{
        color: #62627f;
    }

    .nav1 img{
        padding-left: 10%;
    }

    .nav1 ul{
        padding-right: 20%;
    }

    .nav1 .areapesquisa{
       padding-right: 20px;
    }

    .nav1 .areapesquisa{
        display: flex;
        align-items: center;
    }

    .nav1 input{
        width: 130px;
        height: 28px;
    }

    .anuncio{
        display: flex;
        justify-content: center;
        padding: 40px 40px;
    }

    .anuncio img{
        max-width: 600px
    }

</style>
<body>
<nav class="nav1">
<img width="50px" src="https://cdn-icons-png.flaticon.com/512/21/21681.png" alt="">
<ul>
    <li><a href="#" class="active">newsletter</a></li>
    <li><a href="#">mude a cidade</a></li>
    <li><a href="#">ouça ao vivo</a></li>
</ul>
<div class="areapesquisa">
<input type="text">
<img width="40px" height="20px" src="https://cdn-icons-png.flaticon.com/512/149/149852.png" alt="">
</div>
</nav>

<nav class="nav2">
    <img width="100px" src="https://jovempan.com.br/wp-content/themes/jovempan/assets/build/images/jp-news-logo.png" alt="">
    <ul>
        <li><a href="#">Política</a></li>
        <li><a href="#">Brasil</a></li>
        <li><a href="#">Economia</a></li>
        <li><a href="#">Mundo</a></li>
        <li><a href="#">Esportes</a></li>
        <li><a href="#">Entretenimento</a></li>
        <li><a href="#">Colunista</a></li>
    </ul>
</nav>

<div class="anuncio">
    <a href="#">
        <img src="https://www.unitur.com.br/wp-content/uploads/2021/03/termas-brasil.jpg" alt="">
    </a>
</div>

<h1 style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">São Paulo: últimas notícias</h1>
    <div class="noticias">
      <?php $counter = 0; ?>
        <?php foreach ($resultData as $value): ?>
            <div class="card">
            <img width="215px" stlye="" src="<?= $value['icone'] ?>" alt="">
                <h2 style="color: #626262; font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?= wordwrap($value['nome'], 27, "<br>") ?></h2>
            </div>
            <?php $counter++; ?>
            <?php if ($counter % 3 == 0): ?>
                <div style="flex-basis: 100%; height: 0;"></div> <!-- Cria uma linha vazia -->
            <?php endif; ?>
        <?php endforeach; ?>

    </div>


    <br>
    <footer style="text-align: center;">
        Site totalmente inspirado na <a href="https://jovempan.com.br">JovemPan</a>
        <h1>Imagens e textos e estilo da <a href="https://jovempan.com.br">JovemPan</a></h1>
    </footer>

</body>
</html>
