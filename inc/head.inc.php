<?php require_once "./sql/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?= $description; ?>">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./css/style.css">

</head>


<body>

  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./assets/img/starisland.png" alt="" height="80"></a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon my-auto"><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.php"><img src="./assets/img/accueil.png" alt="" height="30"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="./gallerie.php">Gallerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="./vip.php">Devenir VIP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="./serveur.php">Serveur</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Back Office
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-light" href="./categories.php">Categories</a></li>
              <li><a class="dropdown-item text-light" href="./products.php">Product</a></li>
              <li><a class="dropdown-item text-light" href="./categories_management.php">Categories Management</a>
              <li>
              <li><a class="dropdown-item text-light" href="./products_management.php">Produts Management</a></li>
            </ul>
          </li>

        </ul>
        <a href="./signup.php" class="btn btn-cart position-relative text-light m-3">Inscription<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span></a>
        <a href="./cart.php" class="btn btn-cart position-relative"><img src="./assets/img/cart-shopping-solid.svg" alt=""></a>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>

  <div class="container">