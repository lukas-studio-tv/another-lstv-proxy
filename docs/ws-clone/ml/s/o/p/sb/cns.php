<?php
$cookie_name = "sc";
?>
<?php
if (!isset($_COOKIE[$cookie_name])) {
    include 'noserver.php';
} else {
    $cookie_name = "spopen";
    $cookie_value = "ok";
    setcookie($cookie_name, $cookie_value);
    include 'blankmsg.php';
    echo '<h2>Redirecting to server panel...</h2><br>Please wait 2 seconds...';
    echo '<script>setTimeout(function(){window.location.href = 
    "https://www.lstv.ml/s/o/p/sb/serverpanel-191321.php"}, 2 * 1000);</script>';
}
?>