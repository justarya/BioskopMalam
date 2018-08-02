<?php
// login
function checkUsernameLogin($username){
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);

  $query = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) != 0){
    return true;
  }else{
    return false;
  }
}
function loginUser($username,$password){
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  $query = "SELECT password FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $query);
  $fetch = mysqli_fetch_assoc($result);

  if($fetch['password'] == $password){
    return true;
  }else{
    return false;
  }
}

// register
function checkUsernameRegister($username){
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);
  $query = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 0){
    return true;
  }else{
    return false;
  }
}

function userRegister($username,$password){
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  $query = "INSERT INTO user (username, password) VALUES ('$username','$password')";
  if($result = mysqli_query($conn, $query)){
    return true;
  }else{
    return false;
  }
}

// user.php
function showUser($username){
  global $conn;

  $query = "SELECT * FROM user WHERE username = '$username'";
  $result = $conn->query($query);
  return $result;
}

function updateUser($username, $nama, $email, $notelp, $gender, $province, $city, $country){
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);
  $nama = mysqli_real_escape_string($conn, $nama);
  $email = mysqli_real_escape_string($conn, $email);
  $notelp = mysqli_real_escape_string($conn, $notelp);
  $gender = mysqli_real_escape_string($conn, $gender);
  $province = mysqli_real_escape_string($conn, $province);
  $city = mysqli_real_escape_string($conn, $city);
  $country = mysqli_real_escape_string($conn, $country);

  $query = "UPDATE user SET nama = '$nama', email = '$email', no_telp = '$notelp', jenis_kelamin = '$gender', province = '$province', city = '$city', country = '$country' WHERE username = '$username'";
  if($conn->query($query)){
    return true;
  }else{
    return false;
  }
}
 ?>
