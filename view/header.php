<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- GMD Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick/slick-theme.css"/>

    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/content.css">

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-conf">
      <a class="navbar-brand" href="index.php">Bioskop Malam</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'action' ?>">Action</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'drama' ?>">Drama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'scifi' ?>">Sci-fi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'comedy' ?>">Comedy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'horror' ?>">Horror</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'romance' ?>">Romance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'anime' ?>">Anime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?c=<?= 'cartoon' ?>">Cartoon</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Negara
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="category2.php?c=<?= 'indonesia' ?>">Indonesia</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'india' ?>">India</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'rusia' ?>">Rusia</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'jerman' ?>">Jerman</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'china' ?>">China</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'jepang' ?>">Jepang</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'usa' ?>">USA</a>
              <a class="dropdown-item" href="category2.php?c=<?= 'korea' ?>">Korea</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <?php if(!isset($_SESSION['user'])){?>
                Login
              <?php }else{ ?>
                <i class="material-icons">account_circle</i>
              <?php } ?>
            </a>
          </li>
        </ul>
      </div>
    </nav>
