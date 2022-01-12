<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="descricao-filmes">

    </div>

    <div class="container-pai">
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

            <div class='imagem'>
                <img class="imagemedit" src="transferir.jpg" alt="">
                <div class="front-color"></div>
                <div class="action"><button>ASSISTA AGORA</button></div>
            </div>

            <div class='imagem'>
                <img class="imagemedit" src="transferir.jpg" alt="">
                <div class="front-color"></div>
                <div class="action"><button>ASSISTA AGORA</button></div>
            </div>

            <div class='imagem'>
                <img class="imagemedit" src="transferir.jpg" alt="">
                <div class="front-color"></div>
                <div class="action"><button>ASSISTA AGORA</button></div>
            </div>

            <div class='imagem'>
                <img class="imagemedit" src="transferir.jpg" alt="">
                <div class="front-color"></div>
                <div class="action"><button>ASSISTA AGORA</button></div>
            </div>
        </div>

        
    </div>



        
    </div>
</body>

</html>

<style>
    .container-pai{
        display: flex;
        align-items: center;
        justify-content: center;
        
    }
    body {
        background-color: black;
        margin: 0px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }

    .imagem img {
        flex-shrink: 0;
        position: absolute;
        width: 100%;
        height: 250px;

    }

    .imagem {
        width: 180px;
        height: 250px;

        position: relative;
        margin: 10px;
        border-radius: 4px;
        box-shadow: 0px 1px 8px 0px black;
        overflow: hidden;

    }

    .descricao-filmes {
        width: 100%;
        height: 350px;
        background-image: url(wall.jpg);
        background-repeat: no-repeat;
        background-position: center;

        position: relative;
    }

    .front-color {
        position: absolute;
        top: 0;
        background-color: black;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: 1s;
    }

    .action {
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
        opacity: 0.5;


    }

    .imagem:hover .action {
        opacity: 1;
    }

    .imagemedit {
        transition: 1s;
    }

    .imagem:hover .imagemedit {
        transform: scale(1.1);
    }

    .action button {
        padding: 10px;
        border: none;
        color: black;
        font-weight: bold;
        border-radius: 8px;
        background-color: #fff;
    }
</style>