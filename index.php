<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>API Car</title>
</head>

<?php 
@include ('config.php')
?>

<!-- Navbar -->
<header>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="#"><b>Bongkar Mobil Sejahtera</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>
  
  <body>
    <!-- Products -->
    <div class="container text-center">
      <h1 class="mt-4 mb-4">ALL CARS</h1>
      <div class="row justify-content-center mb-3">
        <div class="col-md-5">
          <button type="button" class="btn btn-outline-danger active">All</button>
          <button type="button" class="btn btn-outline-danger" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Coming Soon!">Sport Car</button>
          <button type="button" class="btn btn-outline-danger" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Coming Soon!">Classic Car</button>
          <button type="button" class="btn btn-outline-danger" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Coming Soon!">Offroad Car</button>
        </div>
      </div>
    

            <div class="container" id="category">
              <div class="row ">
                <?php foreach ($catalog as $yes): ?>
                  <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                    <img src="<?= $yes ['gambar']?>" class="card-img-top">
                  <div class="card-body">
                <p class="card-text"><b><?= $yes ['nama'] ?></b></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      </div>

      <!--Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
      </div>
      <div class="modal-body">
        Coming Soon!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="script.js"></script>
</body>
</html>
