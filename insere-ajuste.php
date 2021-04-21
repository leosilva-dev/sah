<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/insere-ajuste.css">
    <link rel="stylesheet" href="styles/global.css">
    <title>SAH | Insere ajuste</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3><i class="bi bi-clock-history"></i> SAH - Inserir ajuste</h3></a>
      </div>
    </nav>
    
    
    <div class="container">
        <div class="row">   

            <div class="col-sm-2">
                <div class="list-group">
                    <a href="insere-ajuste.php" class="list-group-item list-group-item-action active" aria-current="true">
                      Inserir
                    </a>
                    <a href="editar-ajuste.php" class="list-group-item list-group-item-action" aria-current="true">
                        Editar
                    </a> 
                    <a href="visualizar-ajuste.php" class="list-group-item list-group-item-action" aria-current="true">
                        Visualizar
                    </a>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                    <div>
                        <h4>Usuário: Fulano de tal</h4>
                    </div>
                    <div>
                        <h4>Perfil: Trabalhador</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                    <?php
                    include "db_connection.php";
                    
                    $data = $_POST['data'] ?? '';
                    $hora_entrada = $_POST['hora_entrada'] ?? '';
                    $hora_saida = $_POST['hora_saida'] ?? '';
                    $justificativa = $_POST['justificativa'] ?? '';
                    
                    if($data != '' && $hora_entrada != '' && $hora_saida != '' && $justificativa != ''){
                        
                        $sql = "INSERT INTO `ajustes`
                        (`data`, `hora_entrada`, `hora_saida`, `justificativa`) 
                        VALUES ('$data','$hora_entrada','$hora_saida','$justificativa')";
                        
                        if(mysqli_query($conn, $sql)){
                            message("O ajuste foi cadastrado com sucesso!","success");
                        }else{
                            message("Ocorreu um erro! O ajuste não pode ser cadastrado!","danger");
                        }
                        
                    }
                    ?>

                    <h5 class="card-title">Insere hora</h5>
                    
                    <form class="form" action="insere-ajuste.php" method="POST">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="data-input" class="form-label">Data*</label>
                                    <input type="date" class="form-control" id="data-input" name="data">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="hora-entrada-input" class="form-label">Hora entrada*</label>
                                    <input type="text" class="form-control" id="hora-entrada-input" value="" name="hora_entrada">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="hora-saida-input" class="form-label">Hora saída*</label>
                                    <input type="text" class="form-control" id="hora-saida-input" value="" name="hora_saida">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="justificativa-select" class="form-label">Justificativa*</label>
                                <select id="justificativa-select" class="form-select" name="justificativa">
                                    <option selected value="prod-conteudo">Prod. Conteúdo</option>
                                    <option value="versionamento">Versionamento</option>
                                    <option value="capacitacao">Capacitação</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <div class="d-grid">
                                    <button id="insere-button" class="btn btn-primary" type="submit">Insere hora</button>
                                </div>
                            </div>
                        </div>

                        
                    </form>
                    
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                    <?php
                        

                        $sql = "SELECT * FROM ajustes";

                        $dados = mysqli_query($conn, $sql);

                    ?>

                    <form class="form" action="insere-ajuste.php" method="POST">
                        <h5 class="card-title">Lista de horas</h5>
                    

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Hora entrada</th>
                            <th scope="col">Hora saída</th>
                            <th scope="col">Total horas</th>
                            <th scope="col">Justificativa</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                        <?php
                            while( $row = mysqli_fetch_assoc($dados)){
                                $data = $row['data'];
                                $hora_entrada = $row['hora_entrada'];
                                $hora_saida = $row['hora_saida'];
                                $justificativa = $row['justificativa'];

                                echo "  <tr>
                                            <td>$data</td>
                                            <td>$hora_entrada</td>
                                            <td>$hora_saida</td>
                                            <td>$hora_entrada</td>
                                            <td>$justificativa</td>
                                            <td><a href='#' class='btn-icons'><i class='bi bi-trash'></i></a>
                                                <a href='#' class='btn-icons'><i class='bi bi-pencil-square'></i></a>
                                            </td>
                                        </tr>";
                            }
                          
                        ?>
                          
                        </tbody>
                      </table>
                      </form>

                      <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <div class="d-grid">
                                <button class="btn btn-outline-primary" type="button">Voltar</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-grid">
                                <button class="btn btn-primary" type="button">Enviar para análise</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    
    <script src="scripts/insere.js"></script>
  </body>
</html>
