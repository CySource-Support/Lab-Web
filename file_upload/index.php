<?php
session_start();

$username = "CySource";
$path = "https://as2.ftcdn.net/v2/jpg/02/30/31/15/1000_F_230311582_UvB0ZYoJNKW0NJwxnPKZ2FtvXJWAZJ8t.jpg";

if (isset($_POST['username'])) {
  $username = $_POST['username'];
}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>CySource labs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

  <div class="container-fluid p-5 bg-dark text-white text-center">
    <h1><strong class="text-success">Cy</strong>Source</h1>
    <p>Entendendo a vulnerabilidades de upload de arquivos</p>
  </div>

  <div class="container mt-5 ">
    <div class="row">
      <div class="col-sm-4">
        <div class="container'">
          <div class="card">
            <div class="card-header">
              <h5 class="ms-3">Perfil</h5>
            </div>
            <div class="card-body">
              <img src="<?php echo $path; ?>" alt="foto-de-perfil" class="img-fluid img-thumbnail float-left width:50%" style="max-width: 25%; height: auto;"><span class="ms-3"><?php echo $username; ?></span>
            </div>
            <hr>
            <div class="card-body">
              <h5><u>Auterar informações:</u></h5>
              <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input class="form-control" type="file" name="photo" id="photho" aria-describedby="button-addon1" aria-label="Example text with button addon">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit" name="uplooad" id="upload">Enviar</button>
                    </div>
                  </div>
              </form>

              <form method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control form-control-sm" name="username" id="username" placeholder="Novo nome" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo $username; ?>">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="update" id="update">Atualizar</button>
                  </div>
                </div>
            </div>
            </form>
          </div>
          <div class="card-footer">
            <p><strong>Descrição:</strong> Injeção de arquivos</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-8 mb-5">
      <article style="width: 100%; height: 100%;" class="shadow rounded p-2 ">
        <h1 class="ms-3">Vulnerabilidades de upload de arquivos</h1>
        <img src="image/file-upload-vulnerabilities.jpg" 
             alt="Injeção de arquivos"
             style="width: 100%; height:auto;">
        <p class="lead ms-2">
          Neste desafio, você aprenderá como funções simples de upload de arquivos podem ser usadas como um vetor poderoso para vários ataques de alta gravidade. Mostraremos como fazer upload de um web shell, podendo até dar a você o controle total de um servidor web vulnerável. Dado o quão comuns são as funções de upload de arquivos, saber testá-las corretamente é um conhecimento essencial.
        </p>
      </article>

    </div>
  </div>
  </div>

</body>

</html>