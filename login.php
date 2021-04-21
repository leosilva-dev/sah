<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/global.css">
    <title>SAH - Login</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3><i class="bi bi-clock-history"></i> SAH</h3></a>
      </div>
    </nav>
    <div class="container">
      <div class="row">

        <div class="col-sm-7 bg-image">
        </div>

        <div class="col-sm-5 login">         
          <div>

            <div class="card sign-in">
              <div class="card-body">
                <h5 class="card-title">Acesse sua conta</h5>
                <form>
                  <div class="mb-3">
                    <label for="emailinput" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email-input">
                    <div id="emailinput" class="form-text"></div>
                  </div>
                  <div class="mb-3">
                    <label for="senhainput" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha-input">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="keepconnected">
                    <label class="form-check-label" for="keepconnected">Mantenha-me conectado</label>
                  </div>
                  <div class="d-grid gap-2">
                    <a id="login-button" class="btn btn-primary" type="button" href="selecionar-perfil.php">Entrar</a>
                    <!--  -->
                    <button type="button" class="btn btn-link">Esqueceu sua senha?</button>
                  </div>
                </form>
              </div>
          </div>

          <div class="card sign-up">
            <div class="card-body">
              <h5 class="card-title">Ainda não possui uma conta?</h5>
              <div class="d-grid gap-2">
                <a href="#" class="btn btn-primary">Cadastre-se agora</a>
              </div>
            </div>
          </div>



        </div>
        
      </div>
    </div>
  
    <script src="scripts/login.js"></script>
  </body>
</html>
