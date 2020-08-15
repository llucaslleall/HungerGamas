<DOCTYPE html>
    <head>
        <title>Hunger Gamas</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Referencias -->
        <link rel="stylesheet" type="text/css" href="css/principal.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="principal">
                    <div id="titulo">
                        <button type="button" class="btn btn-warning" id="entrar">
                            Entrar
                        </button>
                    </div>
                    <div id="texto-principal">
                        FILMES CULT, CLÁSSICOS, INDEPENDENTES E PREMIADOS DE TODO O MUNDO
                    </div>
                    <form class="px-4 py-3" action="../conn/cadastrar.php" method="POST">
                        <div class="form-check">
                            <div class="input-group mb-3" id="inscrever">
                                <input type="text" class="form-control" name="email" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Assine Agora</button>
                                </div>
                            </div>
                        </div>                    
                    </form>
                    <div id="texto-descricao">
                        Pronto para assistir? Informe seu email para criar ou acessar sua conta.
                    </div>
                </div>    
                </div>
            </div>
        </div>
    </body>
</DOCTYPE>