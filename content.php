<?php
require_once 'core/init.php';
require_once "view/header.php";

$result = show_individual($_GET['id']);
$row = mysqli_fetch_assoc($result);
?>

<div class="content film">
  <div class="video">
    <div class="container">
      <video width="100%" controls controlsList="nodownload" autoplay>
        <source src="<?= $row['video']  ?>" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
      <div class="video-description">
        <span class="video-title"><?= $row['judul']  ?></span>
        <div class="video-rating">
          <i class="fa fa-star"></i>
          <span><?= $row['rating']  ?>/10</span>
        </div>
      </div>
    </div>
  </div>
  <div class="video-description-2">
    <div class="container">
          <div class="col-sm-3 col-12" style="float: left">
            <div class="card-video-description" style="background-image: url('<?=  $row['poster']  ?>')"></div>
          </div>
          <div class="col-sm-9 col-12 video-preview" style="float: left">
            <p><?= $row['desk']  ?></p>
            <div class="video-tag">
              <a href="<?= "category.php?c=".$row['categori'] ?>"><?= $row['categori']  ?></a>
              <a href="<?= "category.php?c=".$row['categori2'] ?>"><?= $row['categori2']  ?></a>
            </div>
          </div>
    </div>
  </div>
  <hr>
  <div class="related">
    <div class="container">
      <h1 class="title">Related</h1>
      <?php require_once "view/related.php";?>
    </div>
  </div>
</div>

<?php require_once('view/footer.php')?>
