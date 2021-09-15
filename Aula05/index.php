<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Este é um site feito na aula do Escobar, para eu aprender programar 
                        em html, pq é legal, pq eu quro, pq é obrigatorio" />
    <title>Meu primeiro site</title>

    <style type="text/css">

        div { /* Todas as divs do HTML */
            background: green; /* Cor de fundo da div */
            border: 3px dashed black; /* Borda com 3 pixels, pontilhada (dashed) na cor preta */
            text-align: left; /* Texto alinhado a esquerda */
            margin-top: 5px; /* Distancia superior de 5 pixels */
            margin-left: 20px /* Distancia da margem esquerda de 20 pixels */
        }

        .divCentralizada { /* Classe */
            text-align: center; /* Alinhamento do texto*/
            color: white; /* Cor do texto na tela */
            font-family: Verdana; /* Fonte */
            font-size: 24 /* Tamanho da fonte */
        }

        form { /* Todos os formularios existentes no HTML */
            border: 1px solid #151515;
            border-radius: 5px; /* Borda arredondada */
            width: 300px; /* Largura do objeto */
            margin-top: 20px; /* Margem do topo */
            background: rgba(0,0,0, 0.3); /* Cor de fundo com transparencia */
            padding: 10px /* Espaçamento interno */
        }

        .form { /* Todos os itens com a classe form */
            border: none;
            background: transparent; /* Cor de fundo transparente */
            border-bottom: 1px solid aqua; /* Borda inferior */
            border-top: 2px dashed green; /* Borda do topo */
        }

        label { /* Todos os labels do HTML */
            font-weight: bold; /* Fonte em negrito */
            background: orange 
        }

        .btnEnviar { /* Item com a classe btnEnviar */
            background: rgba(81, 157, 234, 1); 
            color: white;
            border-radius: 5px;
            border: none;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-top: 1px solid #000;
            border-left: 1px solid #000;
        }

        

    </style>


</head>
<body>
    <div>
        Div 01
    </div>
    <div class="divCentralizada">
        Div 02
    </div>
    <div>
        Div 03
    </div>  
    <div class="divCentralizada">
        Div 04
    </div>

    <form>
        <div class="form">
            <label>Nome:</label>
            <input type="text" name="nome" />
        </div>

        <div class="form">
            <label>Sobrenome:</label>
            <input type="text" name="sobrenome" />
        </div>

        <input type="submit" value="Enviar" class="btnEnviar" />
    </form>
</body>
</html>