<head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<title>MZDOS</title></head>
<body>
<div class="dos" id="dos" style="-webkit-filter: blur(0.6px); filter: blur(0.6px);">...</div>
</body>

<style>
@font-face {
  font-family: "dos";
  src: url("dos.ttf");
}
body {
    background: #000;
    color: #fff;
    font-family: "dos", serif;
}
.dos {
    font-size: 20px;
    user-select: none;
    -ms-user-select: none;
    -webkit-user-select: none;
}
</style>

<script>
var dos = document.getElementById("dos");
var dosTX = dos.innerHTML;
setTimeout(function(){ dos.innerHTML = "Starting MZ-DOS..."; setTimeout(function(){ writeDOS("<br><br><span style='color: #3271f2;'>MZ-DOS</span> is an modified MSDOS made by <span style='color: #3271f2;'>LSTV</span> to work with 64-COM modern web enviroment.", true); }, 200); setTimeout(function(){ writeDOS("Extended memory check...", true); }, 300); }, 1000);
setTimeout(function(){
writeDOS("done.", false); 
setTimeout(function(){ writeDOS("<br>C:&bsol;>", true); setTimeout(function(){ dos.style = "-webkit-filter: blur(0.3px); filter: blur(0.3px);"; }, 2200); }, 200);
}, 1400);
function writeDOS(tx, lb) {
if (lb) {
dosTX = dos.innerHTML;
dos.innerHTML = dosTX+"<br>"+tx;
} else {
dosTX = dos.innerHTML;
dos.innerHTML = dosTX + tx;
}
}
$('#cmd').keypress(function(e) {
  var key = e.key;
  if (key == "Enter") {
    send();
  } else if (key == "ArrowUp") {
    document.getElementById("cmd").value = "bef";
    console.log("h");
  }
});
</script>