<?php

function show_film(){
  global $conn;

  $query = "SELECT * FROM film";
  $result = $conn->query($query);

  return $result;

}

function show_individual($id){
  global $conn;

  $query = "SELECT * FROM film WHERE id='$id'";
  $result = $conn->query($query);

  return $result;
}

function category($cat){
  global $conn;

  $query = "SELECT * FROM film WHERE categori='$cat'";
  $result = $conn->query($query);
  if($result){
    return $result;
  }else{
    return "ERROR";
  }
}

function category2($cat){
  global $conn;

  $query = "SELECT * FROM film WHERE categori2='$cat'";
  $result = $conn->query($query);
  if($result){
    return $result;
  }else{
    return "ERROR";
  }

}
 ?>
