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
  if(trim(!empty($username)) && trim(!empty($password))){
    if(checkUsernameLogin($username)){
      if(loginUser($username,$password)){
        $_SESSION['user'] = $username;
        header("Location: index.php");
      }else{
        $msg = "Password Salah!";
      }
    }else{
      $msg = "Username tidak ada!";
    }
  }else{
    $msg = "Form tidak boleh kosong!";
  }
}
?>
<div id="form" class="content">
  <form class="form-conf" method="post">
    <h1>Login!</h1>
    <?php if(isset($msg)){ ?>
      <div class="alert alert-danger" role="alert">
        <?= $msg ?>
      </div>
    <?php } ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <div class="form-group">
      <span class="daftar">Belum punya akun? <a href="register.php">Daftar Yuk!</a></span>
    </div>
  </form>
</div>
<?php
require_once('view/footer.php');
?>
