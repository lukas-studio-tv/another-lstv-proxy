<!DOCTYPE HTML>
<html>
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>BlockCode V1.52.8</title>
<style>
body {
    font-family: 'Roboto', sans-serif;
    background: #262626;
    color: #fff;
}
.div_ {
  padding: 10px;
  border: 1px solid #525252;
  border-radius: 10px;
  margin: 5px;
  width: 95%;
  height: 100%;
}

.div_IB {
  padding: 10px;
  border: 1px solid #454545;
  border-radius: 10px;
  margin: 5px;
  width: 96%;
  height: 100%;
}

.drag {
  padding: 10px;
  border: 1px solid #aaaaaa;
  border-radius: 10px;
  margin: 5px;
  height: 100%;
  background: #383838;
  color: #fff;
}

input.v {
    border: none;
    border-radius: 10px;
    margin-left: 10px;
    margin-right: 10px;
    outline: none;
    width: 70%;
}

input.sh {
    width: 20%;
}
.tip {
    border: none;
    border-radius: 10px;
    margin-left: 10px;
    margin-right: 10px;
    outline: none;
    height: 20px;
}
#sel {
  position: fixed;
  float: left;
  background: #3b3b3b;
  padding: 10px;
  color: #fff;
  left: 0px;
  top: 0px;
  display: none;
  width: 300px;
  height: 100%;
  box-shadow: 0 0.525rem 0.5rem rgba(0, 0, 0, .3), 0 0.2625rem 0.525rem rgba(0, 0, 0, .2);
  overflow: auto;
}

.b {
  border: none;
  color: #ffffff;
  outline: none;
  border-radius: 7px;
  padding: 10px;
  width: 200px;
  margin: 15px;
  background-color: #1ed63a;
  margin-right: 10px;
  text-align: center;
}

.b:hover {
  cursor: pointer;
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
  background-color: #127a22;
}
.s:hover {
  opacity: 40%;
  cursor: pointer;
}
.s {
    height: auto;
}
#tra {
  position: fixed;
  bottom: 40px;
  right: 40px;
  background: #f05454;
  border-radius: 20px;
  padding: 30px;
  color: #fff;
  display: none;
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
  cursor: pointer;
  text-align: center;
}
#tra:hover {
  background: #ad2121;
}
@keyframes open {
  0% {opacity: 0%; left: -300px;}
  100% {opacity: 100%; left: 0px;}
}
@keyframes close {
  0% {opacity: 100%; left: 0px;}
  100% {opacity: 0%; left: -300px;}
}
::-webkit-scrollbar {
  width: 8px;
}
::-webkit-scrollbar-track {
  background: #3b3b3b;
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius: 15px;
}
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>
<script>
var q = "'";
var destID = "";
function allowDrop(ev) {
  ev.preventDefault();
}
var dest_type = "b";
function drag(ev) {
document.getElementById('tra').style.display = 'block';
document.getElementById('tra').innerHTML = "<img src='http://www.lstv.ml/s/o/s/tra.png' width='40' height='40'><br>Delete";
  ev.dataTransfer.setData("text", ev.target.id);
  dest_type = "b";
}
function dragT(ev) {
    var data_ex = ev.target;
document.getElementById('tra').style.display = 'block';
document.getElementById('tra').innerHTML = "<img src='http://www.lstv.ml/s/o/s/tra.png' width='50' height='50'>Delete";
destID = ev.target;
  ev.dataTransfer.setData("text", "@variable['"+data_ex.value+"']");
  ev.dataTransfer.setData("ev", data_ex);
  dest_type = "t";
}
function clone(ev, type) {
    var destinationT = getElementByXpath("/html/body/div[3]");
    var blockT = "";
    if (type === "t") {
        blockT = document.createElement('input');
        blockT.setAttribute("id", randomT(0, 9999999999999));
        blockT.setAttribute("class", "drag tip");
        blockT.setAttribute("draggable", "true");
        blockT.setAttribute("ondragstart", "dragT(event)");
        blockT.innerHTML = ev.target.innerHTML;
        destinationT.append(blockT);
    } else {
        blockT = document.createElement('div');
        blockT.setAttribute("id", randomT(0, 9999999999999));
        blockT.setAttribute("class", "drag");
        blockT.setAttribute("draggable", "true");
        blockT.setAttribute("ondragstart", "drag(event)");
        blockT.innerHTML = ev.target.innerHTML;
        destinationT.append(blockT);
    }
}

function drop(ev) {
    if (dest_type === "b") {
        document.getElementById('tra').style.display = 'none';
        document.getElementById('tra').innerHTML = "Delete";
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    } else {
        document.getElementById('tra').style.display = 'none';
        document.getElementById('tra').innerHTML = "Delete";
        ev.preventDefault();
        data = ev.dataTransfer.getData("text");
        ev.target.value = data;
        destID.parentNode.removeChild(destID);
    }
}

function getElementByXpath(path) {
  return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
}
function randomT(min, max) {
  return Math.random() * (max - min) + min;
}

function runProject() {
    block(event);
}

function block(ev) {
    if (event === "drag6") {
    } else {
    }
}

function openBMenu() {
    document.getElementById('sel').style.display = 'block';
    document.getElementById('sel').style.animation = 'open 0.5s';
    document.getElementById('close').style.display = 'block';
    document.getElementById('open').style.display = 'none';
    document.getElementById('b').style.paddingLeft = '320px';
}

function closeBMenu() {
    document.getElementById('sel').style.animation = 'close 0.5s';
    document.getElementById('b').style.paddingLeft = '0px';
    document.getElementById('close').style.display = 'none';
    document.getElementById('open').style.display = 'block';
    setTimeout(
        function () {
            document.getElementById('sel').style.display = 'none';
        }, 500
    );
}
</script>
</head>
<div id="open" class="b" onclick="openBMenu();">OPEN BLOCKS MENU</div>
<div id="close" class="b" onclick="closeBMenu();" style="display: none;">CLOSE BLOCKS MENU</div>
<body id="b" ondrop="drop(event)" ondragover="allowDrop(event)">
<div id="div1" class="div_" ondrop="drop(event)" ondragover="allowDrop(event)">On start</div>
<div id="div2" class="div_" ondrop="drop(event)" ondragover="allowDrop(event)">On being clicked</div>
<br>

<!-- Next code is the block selector. -->

<div id="sel" onclick="closeBMenu();">
<h1>Block selector</h1>
<h3>Movement</h3>
<div id="drag1" class="drag s" onclick="clone(event, 'b');">Set X to  <input class="v"></div>

<div id="drag2" class="drag s" onclick="clone(event, 'b');">Set Y to  <input class="v"></div>
<h3>Variables</h3>
<div id="drag8" class="drag s" onclick="clone(event, 'b');">Variable <input class="v sh"> set to <input class="v sh"></div>

<div id="drag9" class="drag s tip" onclick="clone(event, 't');">Variable <input class="v sh"></div>
<h3>Conditions</h3>
<div id="drag5" class="drag s" onclick="clone(event, 'b');">If  <input class="v"><br>
<div id="then" class="div_IB" ondrop="drop(event)" ondragover="allowDrop(event)">Then;</div>
<div id="else" class="div_IB" ondrop="drop(event)" ondragover="allowDrop(event)">Else;</div></div>

<h3>Etc</h3>
<div id="drag7" class="drag s" onclick="clone(event, 'b');">Execute  <input class="v"></div>
<div id="drag3" class="drag s" onclick="clone(event, 'b');">Say  <input class="v"></div>
<div id="drag6" class="drag s" onclick="clone(event, 'b');">Start</div>
<div id="drag4" class="drag s" onclick="clone(event, 'b');">Stop</div>
<br><br><br>

</div>
<div id="tra">
Delete
</div>
</body>
</html>