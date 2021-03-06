<?php

session_save_path(dirname(__FILE__));
session_start();

require 'index.html';

//https://www.w3schools.com/php/php_file_upload.asp

// $target_dir = 'uploads/' - specifies the directory where the file is going to be placed
// $target_file specifies the path of the file to be uploaded
// $uploadOk=1 is not used yet (will be used later)
// $imageFileType holds the file extension of the file (in lower case)

if (isset($_FILES['fileToUpload'])) {
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (empty($_POST['description'])) {
    echo '<span style="color:red"> Sorry, please add description.';
    return false;
  }

  if (empty($_FILES['fileToUpload']['name'])) {
    echo '<span style="color:red"> Sorry, please choose file and uploaded it.</span>';
    return false;
  }

  elseif (file_exists($target_file)) {
    echo '<span style="color:red">Sorry, file already exists.';
    return false;
  }
  elseif ($_FILES['fileToUpload']['size'] > 5000000) {
    echo '<span style="color:red"> Sorry, your file is too large (<5MB).</span>';
    return false;
  }
  elseif($imageFileType != 'jpg' 
  && $imageFileType != 'png' 
  && $imageFileType != 'jpeg'
  && $imageFileType != 'gif' ) {
  echo '<span style="color:red"> Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
  return false;
  }
  else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
      echo '<span style="color:green">The file has been uploaded.</span>';
      $_SESSION['images'][] = $target_file;
    } else {
      echo '<span style="color:red"> Sorry, there was an error uploading your file.</span>';
    }
  }
}