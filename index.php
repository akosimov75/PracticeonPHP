<?php
//require "css/style.css";
//require "footer.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика на PHP</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<?php require "./blocks/header.php"; ?>
  <div class="container mt-5">
    <h3 class="mb-5">Статьи </h3>
 <div class="d-flex flex-wrap"> 
    <?php
    for($i = 0; $i < 5; $i++):
    ?>
    <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Просто текcт</h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i+1)?>.jpg" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
    <?php endfor; ?>
    </div>
  </div>
  <?php require "./blocks/footer.php"; ?>
</body>
</html>