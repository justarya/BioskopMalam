<?php

require_once('core/init.php');
require_once('view/header.php');

$result = category("action");

?>

  <div class="main-title">
    <div class="container">
      <h1>Action</h1>
    </div>
  </div>
    <div class="content">
      <div class="content cat">
        <div class="container">
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
    <?php require_once('view/footer.php');?>
