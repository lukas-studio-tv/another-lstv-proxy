<html>
<head>
    <?php include 'src/header-sh.php';?>
    <?php include 'src/style-sh.html';?>
    <title>Console</title>
</head>
<br><br>
<body>
<div class="ch">
<p id="console" class="cons">
[2020-12-07 14:41:04 INFO] Starting Server<br>
[2020-12-07 14:41:04 INFO] Version 1.16.100.4<br>
[2020-12-07 14:41:04 INFO] Session ID f034f6c2-d074-4565-a3fe-56d9ba38bc9a<br>
[2020-12-07 14:41:04 INFO] Level Name: _l_aXaryStudioTV<br>
[2020-12-07 14:41:04 INFO] Game mode: 0 Survival<br>
[2020-12-07 14:41:04 INFO] Difficulty: 1 EASY<br>
[INFO] opening worlds/_l_aXaryStudioTV/db<br>
[INFO] IPv4 supported, port: 59177<br>
[INFO] IPv6 not supported<br>
[INFO] IPv4 supported, port: 19132<br>
[INFO] IPv6 not supported<br>
[INFO] Server started.<br>
<?php echo $_POST["command"]; ?>
</p>
</div>
<div id="con" class="con">
<form action="/s/o/p/sb/console.php">
  <label for="command">&gt;ㅤ</label>
  <input style="width: 95%;" type="text" id="command" name="command">
</form>
</div>
<style>
body {
    text-align: left;
    align: left;
    padding: 10px 10;
}
div {
    text-align: left;
}
p {
    text-align: left;
}
.ch {
    text-align: left;
    width: 100%;
    height: 100%;
}
label {
    width: 100%;
    height: 100%;
}
form {
    margin: auto;
    width: 100%;
    padding: 10px 10;
    zoom: 60%;
}
input  {
    background-color: #000000;
    border: 0px solid #000000;
    color: #FFFFFF;¨
    width: 100%;
    height: 100%;
    padding: 10px 10;
}
.right {
  position: absolute;
  right: 0px;
  width: 300px;
}
.cons {
    font-size: 15px;
}
    .con {
        text-align: left;
        background-image: linear-gradient(to right, #1f1f1f, #383838);
        box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        color: #FFFFFF;
        font-size: 25px;
        position: fixed;
        bottom: 0;
        left: 0;
        margin: auto;
        width: 100%;
    }

    #header_b {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    #header_i {
        float: left;
        display: block;
        color: #f2f2f2;
        align: center;
        padding: 7px 8px;
        ext-decoration: none;
        font-size: 17px;
    }

    #header_b:hover {
        background: #ddd;
        color: black;
    }

</style>
<div class="top">
</div>
</body>