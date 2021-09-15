<html>
    <head>

    </head>
    <body>

        <a href="teste.php?id=5">Clique aqui</a>

        <form method="POST" action="receber.php">
            Usuário 
            <input type="text" name="variavel_usuario" id="variavel_usuario" />

            Senha 
            <input type="password" name="variavel_senha" />

            
            <br />

            <input type="submit" value="Não clique" />

            <input type="button" value="Teste" />

            <!--
                http://127.0.0.1/
                
                index.html?variavel_usuario=joao&variavel_senha=12345

                index.html?variavel_senha=2468

                index.html?variavel_usuario=maria&variavel_senha=mariajoao
            -->

        </form>
    </body>
</html>