<?php
require_once('core/init.php');
require_once('view/header.php');

// jika sudah login
if(isset($_SESSION['user'])){
  header("Location: index.php");
}

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  if(trim(!empty($username)) && trim(!empty($repassword)) && trim(!empty($password))){
    if(checkUsernameRegister($username)){
      if($password == $repassword){
        if(userRegister($username,$password)){
          $_SESSION['user'] = $username;
          header("Location: index.php");
        }else{
          $msg = "Register Gagal!";
        }
      }else{
        $msg = "Password tidak sama";
      }
    }else{
      $msg = "Username sudah ada!";
    }
  }else{
    $msg = "Form tidak boleh kosong!";
  }
}

?>
<div id="form" class="content">
  <form class="form-conf" method="post">
    <h1>Register!</h1>
    <?php if(isset($msg)){ ?>
      <div class="alert alert-danger" role="alert">
        <?= $msg ?>
      </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputUsername">Username</label>
      <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword2">Re-type Password</label>
      <input type="password" name="repassword" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <div class="form-group">
      <span class="daftar">Sudah Punya Akun? <a href="login.php">Login</a></span>
    </div>
  </form>
</div>
<?php
require_once('view/footer.php');
?>
