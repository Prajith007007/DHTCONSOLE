<?php
    if(isset($_POST['uploadbutton'])) {

      $file_name = $_FILES['file']['name'];
      $file_type = $_FILES['file']['type'];
      $file_size = $_FILES['file']['size'];
      $file_tem_loc = $_FILES['file']['tmp_name'];
      $file_store = "deploy/".$file_name;

      move_uploaded_file($file_tem_loc, $file_store);
    }
    $result = shell_exec("python encryption.py");
    echo $result;
?>
// This is the file upload part.
