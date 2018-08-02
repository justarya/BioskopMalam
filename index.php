<?php
require_once('core/init.php');
require_once('view/header.php');

$result = show_film();

?>

    <div class="content">
      <!-- slider -->
      <!-- <div id="slider">
        <div class="slider-item"><img src="assets/dunkrik.jpg" alt=""></div>
        <div class="slider-item"><img src="assets/dunkrik.jpg" alt=""></div>
        <div class="slider-item"><img src="assets/dunkrik.jpg" alt=""></div>
      </div> -->
      </div>
      <div class="content cat" style="background: #eee;">
        <div class="container">
          <div class="title">
            <h2>Browse Film</h2>
          </div>
          <?php while($row = mysqli_fetch_assoc($result)){ ?>
          <a href="<?= "content.php?id=".$row['id']  ?>" class="card card-conf" style="">
            <div class="card-body" style="background-image: url('<?= $row['poster']; ?>')">
              <h4 class=""><?= $row['judul'];  ?></h4>
            </div>
          </a>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php require_once('view/footer.php')?>
