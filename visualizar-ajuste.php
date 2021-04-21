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
    <link rel="stylesheet" href="styles/visualizar-ajuste.css">
    <link rel="stylesheet" href="styles/global.css">
    <title>SAH | Visualizar ajuste</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3><i class="bi bi-clock-history"></i> SAH - Visualizar ajuste</h3></a>
      </div>
    </nav>
    
    
    <div class="container">
        <div class="row">   

            <div class="col-sm-2">
                <div class="list-group">
                    <a href="insere-ajuste.php" class="list-group-item list-group-item-action" aria-current="true">
                      Inserir
                    </a>
                    <a href="editar-ajuste.php" class="list-group-item list-group-item-action" aria-current="true">
                        Editar
                    </a> 
                    <a href="visualizar-ajuste.php" class="list-group-item list-group-item-action active" aria-current="true">
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
                    <h5 class="card-title">Consulta</h5>
                    
                    <div class="form">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="data-inicio-input" class="form-label">Data entrada*</label>
                                    <input type="date" class="form-control" id="data-entrada-input">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="data-final-input" class="form-label">Data saída*</label>
                                    <input type="date" class="form-control" id="data-saida-input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="justificativa-select" class="form-label">Justificativa*</label>
                                <select id="justificativa-select" class="form-select" aria-label="Default select example">
                                    <option selected value="prod-conteudo">Prod. Conteúdo</option>
                                    <option value="versionamento">Versionamento</option>
                                    <option value="capacitacao">Capacitação</option>
                                    <option value="emprestimo">Empréstimo</option>
                                </select>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="d-grid">
                                    <button id="consultar-button" class="btn btn-primary" type="button">Consultar</button>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    
                    
                    
                          
                    
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Lista de horas</h5>

                    <?php
                    include "db_connection.php";
                        $sql = "SELECT * FROM ajustes";
                        $dados = mysqli_query($conn, $sql);
                    ?>

                    <form class="form" action="visualizar-ajuste.php" method="POST">

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

                                $data = formatDate($data);
                                

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
                            <div class="col-sm-9"></div>
                            <div class="col-sm-1">
                                <a href="#"><h2><i class="bi bi-printer"></i></h2></a>
                            </div>
                            <div class="col-sm-1">
                                <a href="#"><h2><i class="bi bi-file-earmark-excel"></i></h2></a>
                            </div>
                            <div class="col-sm-1">
                                <a href="#"><h2><i class="bi bi-file-earmark-arrow-down"></i></h2></a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Status</h5>
                            <p>Enviado para o coordernador</p>
                        </div>
                    </div>
                    
                    
                    
                          
                    
                    </div>
                </div>



            </div>

            <div class="col-sm-2">
            </div>

        </div>
    </div>
    
    <script src="scripts/visualiza.js"></script>
  </body>
</html>
