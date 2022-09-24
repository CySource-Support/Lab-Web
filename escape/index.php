<?php
  $cy = $HTML = "apple";
  $JS = '["apple", "orange", "banana"]';
  if (isset($_GET["cy"])) {
    $cy = $_GET["cy"];
  }
  if (isset($_GET["HTML"])) {
    $HTML = $_GET["HTML"];
  }
  if (isset($_GET["JS"])) {
    $JS = $_GET["JS"];
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
    <p>Entendendo a tecnica de escape</p>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <div class="card shadow-lg " style="height: 300px;">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">Input </h5>
          </div>
          <div class="card-body">
            <form style="height: 97%;" class="d-flex flex-column align-item-start bd-highlight justify-content-center" method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <input style="width: 97%;" class="rounded mb-auto bd-highlight ps-2" type="text" name="cy" id="cy" placeholder="apple" value="<?php echo $cy ?>">
              
              <input type="submit" class="btn btn-sm btn-outline-success" style="width: 97%;" id="send" value="&larr; Enviar &rarr;">
            </form>
          </div>
          <div class="card-footer">
            <p><strong>Descrição:</strong> Escapando do "input"</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card shadow-lg" style="height: 300px;">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">Textarea </h5>
          </div>
          <div class="card-body">
            <form style="height: 100%;" class="d-flex flex-column align-item-start bd-highlight justify-content-center">
              <textarea class="rounded mb-auto bd-highlight ps-2" name="txt" id="txt" rows="3" style="width: 97%;"><?php echo $HTML ?></textarea>
              <button class="btn btn-sm btn-outline-success mt-4" style="width: 97%;" type="submit">&larr; Enviar &rarr;</button>
            </form>
          </div>
          <div class="card-footer">
            <p><strong>Descrição: </strong>Escapando do "textarea"</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card shadow-lg" style="height: 300px;">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title">JavaScript </h5>
          </div>
          <div class="card-body d-flex align-item-start flex-column bd-highlight justify-content-center">
            <h6 class="mb-auto bd-highlight">Escreva sua fruta favorita abaixo:</h6>
            <script>
              console.table(<?php echo $JS ?>);
            </script>
            <button class="btn btn-sm btn-outline-success bd-highlight" style="width: 97%;" type="submit">&larr; Enviar &rarr;</button>
          </div>
          <div class="card-footer">
            <p><strong>Descrição: </strong>Escapando do "console"</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>