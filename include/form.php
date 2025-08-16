<?php

  $error = [
    "fnameError"=> "",
    "lnameError"=> "",
    "emailError"=> "",
  ];
if(isset($_POST["send"])){
  $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
  $last_name =  mysqli_real_escape_string($conn, $_POST["last_name"]);
  $email =      mysqli_real_escape_string($conn, $_POST["email"]);


  $sql = "INSERT INTO users(first_name, last_name, email)
          VALUES('$first_name', '$last_name', '$email' ) ";

  if (empty($first_name)) {
    $error['fnameError'] = "يرجى ادخال الاسم الاول";
  }if (empty($last_name)) {
    $error['lnameError'] = "يرجى ادخال الاسم الاخير";
  }if (empty($email)) {
    $error['emailError'] = "يرجى ادخال البريد الالكتروني";
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error['emailError'] = "يرجى ادخال بريد الكتروني صحيح";
  }else{
    if(mysqli_query($conn, $sql)){
    echo "success";
  }else{
    echo "Error : ". mysqli_error($conn);
  }
  header("Location: index.php");
  exit;
  }
}