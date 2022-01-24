<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<span style='color: #5a03fc;'>[Console] </span>LSTV Filehost - Uplod file<br>
<span style='color: #5a03fc;'>[Console] </span>File will be saved to public location /dock/<br>
<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$target_dir = "uploads/";
$target_file = $target_dir . generateRandomString() . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "[Error] Existing token has been sent. Please reload this page to make a new one and upload the file.<br>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "This file is too large for this docker´s file limit.<br>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<span style='color: #38cf3d;'>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.</span><br>";
    echo "<span style='color: #38cf3d;'>New location: </span><span style='color: #5a03fc; user-select: all; cursor: pointer;'>http://lstv.ml/cdn/dock/". $target_file. "</span><br>";
  } else {
    echo "Sorry, there was an error uploading your file.<br>";
  }
}
?>
<style>
body {
  background: #22262e;
  color: white;
  font-family: 'Roboto Mono', monospace;
  padding-bottom: 84px;
  user-select: none;
}
</style>