<?php

$result = category($row['categori']);
?>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<a href="<?= "content.php?id=".$row['id']  ?>" class="card card-conf" style="">
  <div class="card-body" style="background-image: url('<?= $row['poster']; ?>')">
    <h4 class=""><?= $row['judul'];  ?></h4>
  </div>
</a>
<?php } ?>
