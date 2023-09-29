<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

    <style>
        @media only screen and (max-width: 600px) {
            body {

            }
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-4" style="padding-top: 5rem">
            <h1 class="d-flex justify-content-center">Event Manager</h1>
            <br>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-4">
            <form enctype="multipart/form-data" method="post" action="/auth/login">
                <div class="form-floating ">
                    <input type="text" name="login" class="form-control" id="floatingInput"
                           placeholder="Digite seu CPF">
                    <label for="floatingInput">Login (CPF)</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword"
                           placeholder="Digite sua senha">
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="form-floating">
                    <br>
                    <div class="d-flex text-center justify-content-center">
                        <button class="btn btn-primary d-flex" type="submit">Realizar Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-4">
            <h6 class="d-flex text-center text-danger"><?php if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'login') {
                        echo "Falha de login! verifique seus dados ou contate o desenvolvedor.";
                    }
                    if ($_GET['error'] == 'permission') {
                        echo "Falha! você precisa estar logado para acessar esse endereço.";
                    }
                }; ?>
            </h6>
        </div>
    </div>


    <!---->
    <!---->
    <!--    </div>-->
    <!--    <form class="row " enctype="multipart/form-data" method="post" action="/auth/login"-->
    <!--    ">-->
    <!--   -->
    <!---->
    <!--   -->
    <!--    </form>-->


</div>
</div>

</body>
</html>

