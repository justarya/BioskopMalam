<?php require_once "core/init.php" ?>
<?php if(!isset($_SESSION['user'])){
  header("Location: login.php");
} ?>
<?php require_once "view/header.php" ?>
<?php

if(isset($_POST['save'])){
  // $username = $_POST['username'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $notelp = $_POST['notelp'];
  $gender = $_POST['gender'];
  $province = $_POST['province'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  if(!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($notelp)) && !empty(trim($gender)) && !empty(trim($province)) && !empty(trim($city)) && !empty(trim($country))){
    if(updateUser($_SESSION['user'],$nama, $email, $notelp, $gender, $province, $city, $country)){
      $msg = "Berhasil!";
      header("Location: user.php");
    }else{
      $msg = "GAGAL!";
    }
  }else{
    $msg = "Form Tidak boleh Kosong!";
  }
}

$rows = showUser($_SESSION['user']);
$result = mysqli_fetch_assoc($rows);
?>
<div class="main-title">
  <div class="container">
    <h1>Profile</h1>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="user">
      <!-- <div class="col-4">
        <div class="user-pro-pic" style="background-image: url('assets/logan-banner.jpg')"></div>
      </div> -->
      <div class="user-desc col-md-4">
        <form method="post" action="">
          <?php if(isset($msg)){ ?>
            <div class="alert alert-danger" role="alert">
              <?= $msg ?>
            </div>
          <?php } ?>
          <input type="text" name="username" class="h1"value="<?= $result['username']; ?>" placeholder="username" disabled><br>
          <input type="text" name="nama" class="p"value="<?= $result['nama']; ?>" placeholder="Nama"> <br>
          <input type="text" name="email" class="p"value="<?= $result['email']; ?>" placeholder="Email"> <br>
          <input type="text" name="notelp" class="p"value="<?= $result['no_telp']; ?>" placeholder="No Telp"> <br>
          <select class="" name="gender">
            <option value="Male" <?php if($result['jenis_kelamin'] == "Male"){echo "selected";} ?>>Male</option>
            <option value="Female" <?php if($result['jenis_kelamin'] == "Female"){echo "selected";} ?>>Female</option>
          </select> <br>
          <select class="" name="country" value="<?php $country = $result['country']; ?>">
            <option value="Indonesia" <?php if($country == "Indonesia"){echo "selected";} ?>>Indonesia</option>
            <option value="Thailand" <?php if($country == "Thailand"){echo "selected";} ?>>Thailand</option>
            <option value="USA" <?php if($country == "USA"){echo "selected";} ?>>USA</option>
            <option value="UK" <?php if($country == "UK"){echo "selected";} ?>>UK</option>
            <option value="Rusia" <?php if($country == "Rusia"){echo "selected";} ?>>Rusia</option>
            <option value="Japan" <?php if($country == "Japan"){echo "selected";} ?>>Japan</option>
          </select> <br>
          <input type="text" name="province" class="p"value="<?= $result['province']; ?>" placeholder="Province/State"> <br>
          <input type="text" name="city" class="p"value="<?= $result['city']; ?>" placeholder="City"> <br>
          <button type="submit" name="save">Save</button>
          <button type="button" style="background-color: red" onclick="location.href = 'logout.php';">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once "view/footer.php" ?>
