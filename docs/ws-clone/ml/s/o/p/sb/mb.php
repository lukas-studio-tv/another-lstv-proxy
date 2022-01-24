<html>
<head>
    <?php include 'src/header-mb.php';?>
    <?php include 'src/style-mb.html';?>
    <title>MBrick panel V3</title>
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.0/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.0/highlight.min.js"></script>
<link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.0/build/styles/atom-one-dark.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.0/build/highlight.min.js"></script>
<link rel="stylesheet" href="/path/to/styles/atom-one-dark.css">
<script src="/path/to/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</head>
<br><br><br>
<body>
<div class="left">
    <strong><p id="title_p">MBrick panel V3</p></strong><br><br>

Your fake UID is;<p id="demo">None (Please make one to continue)</p>
<script>
function myFunction() {
  var x = document.getElementById("demo")
  x.innerHTML = Math.floor((Math.random() * 99999999999999) + 1000000000000);
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
    <a href=""><button id="b2">Log-out</button></a>  <button onclick="myFunction()">Generate fake ID (Account)</button><br><br>
<h3>Antidetect (Recomended)</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label><br>
<h3>AnonyIP (Recomended)</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div><br><br>
<h2>Basic connect</h2>
<div class="form__group field">
  <input type="input" class="form__field" placeholder="name" name="name" id='name' required />
  <label for="name" class="form__label">UserName</label>
</div>
<h2>Direct message</h2>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="dname" id='dname' required />
  <label for="dname" class="form__label">UserName FROM</label>
</div>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="sname" id='sname' required />
  <label for="sname" class="form__label">UserName TO</label>
</div>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="aname" id='aname' required />
  <label for="aname" class="form__label">Message</label>
</div><br><br>
<div class="popup" onclick="myPopup()"><button>Send</button>
  <span class="popuptext" id="myPopup">Sucessfuly send!</span>
</div>
    <br>
    <h2>Pre-Installed scripts</h2>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="dsname" id='dsname' required />
  <label for="dsname" class="form__label">Target UserName</label>
</div>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="dfsname" id='dfsname' required />
  <label for="dfsname" class="form__label">Target UserName 2 (Only for few scripts)</label>
</div>
<div class="form__group field">
  <input contentEditable="true" type="input" class="form__field" placeholder="name" name="ddsname" id='ddsname' required />
  <label for="ddsname" class="form__label">Target message (Only for few scripts)</label>
</div>
<br><br>
<div style="float: left; text-algin: center; margin: 0;" id="scrm">
<fssdfd id="text1">Block togle</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<fssdfd id="text1">Hide messages (Blank space)</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<fssdfd id="text1">Spam messages</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label><br><br>
<fssdfd id="text1">Profilename togle</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<fssdfd id="text1">SendToAllContacts</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<fssdfd id="text1">Get messages from contact</fssdfd>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<style>
fssdfd {
    top: 20px;
    position: relative;
}
</style>
</div><br><br><br><br>
<h3>OR enter custom script;</h3>
<pre><code contentEditable="true" class="js">// == MBrick 3.0 Script == //

@getName=&quot;namebox&quot;
@getSecondName&quot;namebox2&quot;
@getMessage&quot;msBox&quot;

.messengerAPI(load)
{ send=&quot;&quot;+getMessage; to=&quot;&quot;+getName; from=&quot;&quot;+getSecondName
}
.delay(100)
{ send=&quot;You have been pranked by the MBrick messenger hack!&quot;; to=&quot;&quot;+getName; from=&quot;&quot;+getSecondName
}</code></pre>
<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round">
</span>
</body><br><br><br><br>
<script>
// When the user clicks on div, open the popup
function myPopup() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<h1></h1>