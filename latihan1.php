<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tes JSON</title>
</head>

<?php 
@include ('config.php')
?>

<body>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container">
              <a class="navbar-brand" href="#"><b>PIZZA HUT</b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sport</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Classic</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Offroad</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container text-center">
            <h1 class="mt-4 mb-4">ALL CARS</h1>
              <div class="row">
                <?php foreach ($catalog as $yes): ?>
                  <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                    <img src="<?= $yes ['gambar']?>" class="card-img-top">
                  <div class="card-body">
                <p class="card-text"><b><?= $yes ['nama'] ?></b></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>