<?php

require_once('core/init.php');
require_once('view/header.php');
$cat = $_GET['c'];
$result = category($cat);
$msg = "";

?>

<div class="main-title">
  <div class="container">
    <h1><?php echo $_GET['c']; ?></h1>
  </div>
</div>

<?php
if($result == "ERROR"){
  $msg = "error";
}else{
?>

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
      <?= $msg  ?>
    </div>
  </div>
</div>
<?php
}

?>

    <?php require_once('view/footer.php');?>
