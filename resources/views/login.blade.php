<html>
<body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<div class="container" style="width: 30rem; padding-top:5rem">
    <h1>Event Manager</h1>
    </br>
    <form class="row g-3" enctype="multipart/form-data" method="post" action="/auth/login"
    ">
    <div class="form-floating mb-3">
        <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Digite seu CPF">
        <label for="floatingInput">Login (CPF)</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" id="floatingPassword"
               placeholder="Digite sua senha">
        <label for="floatingPassword">Senha</label>
    </div>

    <div class="col-12">
        </br>
        <button class="btn btn-primary" type="submit">Realizar Login</button>
    </div>
    </form>

    <h6 class="text-center text-danger"><?php if( isset($_GET['error'])) {
        if($_GET['error'] == 'login') {
            echo "Falha de login! verifique seus dados ou contate o desenvolvedor.";
        }
        if($_GET['error'] == 'permission') {
            echo "Falha! você precisa estar logado para acessar esse endereço.";
        }
        }; ?></h6>
</div>

</body>
</html>

