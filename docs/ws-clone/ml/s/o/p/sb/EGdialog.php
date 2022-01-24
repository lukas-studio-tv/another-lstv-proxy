<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
</head>
<body>
 
<div id="dialog" title="Wellcome to Extragon!">
  <p>Thank you for using ExtraGon Free services!<br>Your Minecraft bedrock server was sucessfully created!<br><br>Benefits of the free plan:<br>- 24/7<br>- Intel i7 vPro 3GHz<br>- 30GB SSD<br>- 8GB RAM<br>- Unlimited bandwitch<br>- PMMP Plugin manager<br>- Full file acess</p>
</div>
<?php
$cookie_name = "pop";
$cookie_value = "accepted";
setcookie($cookie_name, $cookie_value);
?>