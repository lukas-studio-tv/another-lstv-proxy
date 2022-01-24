<?php
session_start();
    if(isset($_SESSION['name'])){
      $text = $_POST['text'];
      $title = $_POST['title'];

      $fp = fopen("log.html", 'a');
if ($_SESSION['name'] == 'LSTV') {
fwrite($fp, "<div id='msgline' class='msgln'><p><b>By: ".$_SESSION['name']."  <img src='https://www.pngmart.com/files/12/TikTok-Verified-Badge-PNG-Photos.png' width='10' height='10'></b> Posted on: ".date("g:i A")."<h3>".stripslashes(htmlspecialchars($title))."</h3>".stripslashes(htmlspecialchars($text))."</p></div><br>\n");
} else {
fwrite($fp, "<div id='".$_SESSION['name']."' class='msg'><p><h3 class='ccc'>".$_SESSION['name']."</h3>".stripslashes(htmlspecialchars($title))."</p></div><br><br><br><br><br><br>\n");
}

      fclose($fp);
}
?>