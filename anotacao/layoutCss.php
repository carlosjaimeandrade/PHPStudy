<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class='imagem'>
            <img class="imagemedit" src="filme2.jpg" alt="">
            <div class="front-color"></div>
            <div class="action"><button>ASSISTA AGORA</button></div>
        </div>

        <div class='imagem'>
            <img class="imagemedit" src="transferir.jpg" alt="">
            <div class="front-color"></div>
            <div class="action"><button>ASSISTA AGORA</button></div>
        </div>

    </div>

</body>

</html>

<style>
    .container{
        display: flex;
        flex-wrap: wrap;
    }
    .imagem img{
        flex-shrink: 0;
        position: absolute;
        width: 100%;
        height: 250px;
  
    }
    .imagem {
        width: 200px;
        height: 250px;
/*         background-image: url(transferir.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%; */
        position: relative;
        margin: 10px;
        border-radius: 4px;
        box-shadow: 0px 1px 8px 0px black;
        overflow: hidden;
       
    }

    .front-color {
        position: absolute;
        top: 0;
        background-color: blue;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: 1s;
    }

    .action{
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: 1s;
    }

    .imagem:hover .front-color {
        opacity: 0.3;
       

    }
    .imagem:hover  .action{
        opacity: 1;
    }

    .imagemedit{
        transition: 1s;
    }
    .imagem:hover .imagemedit{
        transform: scale(1.1);
    }

    .action button{
        padding: 10px;
        border: none;
        color: black;
        font-weight: bold;
        border-radius: 8px;
        background-color: #fff;
    }
</style>