<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-bg-dark">
  <div class="container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto mx-auto">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">CRUD</span>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
          
          switch (@$_REQUEST["page"]) {
            case "novo":
              include("crud/novo-usuario.php");
              break;
            case "listar":
              include("crud/listar-usuario.php");
              break;
            case "salvar":
              include("crud/salvar-usuario.php");
              break;
            case "editar":
              include("crud/editar-usuario.php");
              break;
            default:
              print "<h1>Bem-Vindos!</h1>";
          }
          ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
            <div class="container">
              <?php
              include("crud/novo-usuario.php");
              ?>
            </div>
        </div>
        <div class="col mt-5">
          <div class="card text-bg-dark">
            <div class="card-body">
              <h1 class="card-title">Lista de Usuarios</h1>
            </div>
            <div class="container">
              <?php
              include("crud/listar-usuario.php");
              ?>
            </div>
          
        </div>

      </div>
    </div>
        </div>     
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>