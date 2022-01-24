<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<div class="fix">
<button onclick="LShighlight();">Highlight syntax</button>
<button onclick="LShighlight(); runIT();" class="gt" id="gt">▼</button>
</div>
<br><br><br><br><br>
<div id="edit" contenteditable="true">start@create "test"@loop@if var hello = a@set x mx@set y my@else@set x 0@set y 0@end@loopend@var hello = a@key 1@var hello = b@end
</div>
<div id="oBar">
Export: (Copy to LScript)<br><br>
<textarea id="output">
</textarea>
</div>
<script>
var editor = document.getElementById("edit");
var text = document.getElementById("edit").innerHTML;
LShighlight();


function LShighlight() {
  editor = document.getElementById("edit");
  text = document.getElementById("edit").innerHTML;
  text = text.replaceAll("@", "//tempLineBreak//");
  text = text.replaceAll("<br>", "//tempLineBreak//");
  text = stripHtml(text);
  text = text.replaceAll("//tempLineBreak//", "<br>");
  text = text.replaceAll("create", "<span style='color: #f5eb36;'>create</span>");
  text = text.replaceAll("make", "<span style='color: #42f575;'>make</span>");
  text = text.replaceAll("set", "<span style='color: #42f575;'>set</span>");
  text = text.replaceAll("math", "<span style='color: #42f575;'>math</span>");
  text = text.replaceAll("change", "<span style='color: #9d03fc;'>change</span>");
  text = text.replaceAll("1", "<span style='color: #f5eb36;'>1</span>");
  text = text.replaceAll("8", "<span style='color: #f5eb36;'>8</span>");
  text = text.replaceAll("-", "<span style='color: #42f575;'>-</span>");
  text = text.replaceAll("(", "<span style='color: #42f575;'>(</span>");
  text = text.replaceAll("x", "<span style='color: #42f575;'>x</span>");
  text = text.replaceAll("onclicked", "<span style='color: #42f575;'>onclicked</span>");
  text = text.replaceAll("up", "<span style='color: #fcad03;'>up</span>");
  text = text.replaceAll("down", "<span style='color: #fcad03;'>down</span>");
  var q = '"';
  text = text.replaceAll('"', "<span style='color: #42f575;'>" + q + "</span>");
  text = text.replaceAll("right", "<span style='color: #fcad03;'>right</span>");
  text = text.replaceAll("left", "<span style='color: #fcad03;'>left</span>");
  text = text.replaceAll("end", "<span style='color: #fc0303;'>end</span>");
  text = text.replaceAll("start", "<span style='color: #42f575;'>start</span>");
  text = text.replaceAll("url", "<span style='color: #9d03fc;'>url</span>");
  text = text.replaceAll("get", "<span style='color: #fcad03;'>get</span>");
  text = text.replaceAll("+", "<span style='color: #42f575;'>+</span>");
  text = text.replaceAll("print", "<span style='color: #9d03fc;'>print</span>");
  text = text.replaceAll("remove", "<span style='color: #fc0303;'>remove</span>");
  text = text.replaceAll("delete", "<span style='color: #fc0303;'>delete</span>");
  text = text.replaceAll("save", "<span style='color: #fcad03;'>save</span>");
  text = text.replaceAll("send", "<span style='color: #fcad03;'>send</span>");
  text = text.replaceAll("random", "<span style='color: #42f575;'>random</span>");
  text = text.replaceAll("rotate", "<span style='color: #42f575;'>rotate</span>");
  text = text.replaceAll("play", "<span style='color: #42f575;'>play</span>");
  text = text.replaceAll("music", "<span style='color: #9d03fc;'>music</span>");
  text = text.replaceAll("jump", "<span style='color: #9d03fc;'>jump</span>");
  text = text.replaceAll("onstart()", "<span style='color: #f5eb36;'>onstart()</span>");
  text = text.replaceAll("wait", "<span style='color: #f5eb36;'>wait</span>");
  text = text.replaceAll("delay", "<span style='color: #f5eb36;'>delay</span>");
  text = text.replaceAll("if", "<span style='color: #fcad03;'>if</span>");
  text = text.replaceAll("else", "<span style='color: #fcad03;'>else</span>");
  text = text.replaceAll("(time)", "<span style='color: #fcad03;'>(time)</span>");
  text = text.replaceAll("(date)", "<span style='color: #fcad03;'>(date)</span>");
  text = text.replaceAll("(day)", "<span style='color: #fcad03;'>(day)</span>");
  text = text.replaceAll("(year)", "<span style='color: #fcad03;'>(year)</span>");
  text = text.replaceAll("(month)", "<span style='color: #fcad03;'>(month)</span>");
  text = text.replaceAll("(usn)", "<span style='color: #fcad03;'>(usn)</span>");
  text = text.replaceAll("(mouse)", "<span style='color: #fcad03;'>(mouse)</span>");
  text = text.replaceAll("con", "<span style='color: #42f575;'>con</span>");
  text = text.replaceAll("eq", "<span style='color: #42f575;'>eq</span>");
  text = text.replaceAll("var", "<span style='color: #f5eb36;'>var</span>");
  text = text.replaceAll("list", "<span style='color: #f5eb36;'>list</span>");
  text = text.replaceAll("on", "<span style='color: #03fc90;'>on</span>");
  text = text.replaceAll("loop", "<span style='color: #03e3fc;'>loop</span>");
  text = text.replaceAll("setcon", "<span style='color: #03e3fc;'>setcon</span>");
  text = text.replaceAll("show", "<span style='color: #03e3fc;'>show</span>");
  text = text.replaceAll("hide", "<span style='color: #03e3fc;'>hide</span>");
  text = text.replaceAll("//", "<span style='color: #42f575;'>//</span>");
  text = text.replaceAll("slide", "<span style='color: #03e3fc;'>slide</span>");
  text = text.replaceAll("sh", "<span style='color: #f5eb36;'>sh</span>");
  text = text.replaceAll("size", "<span style='color: #f5eb36;'>size</span>");
  text = text.replaceAll("key", "<span style='color: #03e3fc;'>key</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("color", "<span style='color: #9d03fc;'>color</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("=", "<span style='color: #42f575;'>=</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("y", "<span style='color: #42f575;'>y</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll(":", "<span style='color: #42f575;'>:</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("/", "<span style='color: #42f575;'>/</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("key", "<span style='color: #03e3fc;'>key</span>");
  text = text.replaceAll("<span style='color:", "TempPH1");
  text = text.replaceAll(";'>", "TempPH2");
  text = text.replaceAll("</span>", "TempPH3");
  text = text.replaceAll("TempPH1", "<span style='color:");
  text = text.replaceAll("TempPH2", ";'>");
  text = text.replaceAll("TempPH3", "</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("42f575", "TempHEXb");
  text = text.replaceAll("9d03fc", "TempHEXc");
  text = text.replaceAll("5a03fc", "TempHEXd");
  text = text.replaceAll("03e3fc", "TempHEXe");
  text = text.replaceAll("03fc90", "TempHEXf");
  text = text.replaceAll("fcad03", "TempHEXg");
  text = text.replaceAll("fc0303", "TempHEXh");
  text = text.replaceAll("2", "<span style='color: #f5eb36;'>2</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("3", "<span style='color: #f5eb36;'>3</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("4", "<span style='color: #f5eb36;'>4</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("5", "<span style='color: #f5eb36;'>5</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("6", "<span style='color: #f5eb36;'>6</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("7", "<span style='color: #f5eb36;'>7</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("9", "<span style='color: #f5eb36;'>9</span>");
  text = text.replaceAll("f5eb36", "TempHEXa");
  text = text.replaceAll("0", "<span style='color: #f5eb36;'>0</span>");
  text = text.replaceAll("TempHEXa", "f5eb36");
  text = text.replaceAll("TempHEXb", "42f575");
  text = text.replaceAll("TempHEXc", "9d03fc");
  text = text.replaceAll("TempHEXd", "5a03fc");
  text = text.replaceAll("TempHEXe", "03e3fc");
  text = text.replaceAll("TempHEXf", "03fc90");
  text = text.replaceAll("TempHEXg", "fcad03");
  text = text.replaceAll("TempHEXh", "fc0303");
  text = text.replaceAll("m<span style='color: #42f575;'>x</span>", "<span style='color: #5a03fc;'>mx</span>");
  text = text.replaceAll("m<span style='color: #42f575;'>y</span>", "<span style='color: #5a03fc;'>my</span>");
  text = text.replaceAll("<span style='color: #03e3fc;'>loop</span><span style='color: #fc0303;'>end</span>", "<span style='color: #03e3fc;'>loopend</span>");

  document.getElementById("edit").innerHTML = text;
}

const source = document.getElementById('edit');

const inputHandler = function(e) {

}

source.addEventListener('input', inputHandler);
source.addEventListener('propertychange', inputHandler);

function stripHtml(html) {
  let tmp = document.createElement("DIV");
  tmp.innerHTML = html;
  return tmp.textContent || tmp.innerText || "";
}

function getPos(el) {
  var val = el.innerHTML;
  return val.slice(0, el.selectionStart).length;
}
var running = false;
function runIT() {
if (running) {
  document.getElementById("gt").innerHTML = "▼";
  document.getElementById("oBar").style.display = "none";
  running = false;
} else {
  editor = document.getElementById("edit");
  var outp = document.getElementById("edit").innerHTML;
  outp = outp.replaceAll("@", "//tempLineBreak//");
  outp = outp.replaceAll("<br>", "//tempLineBreak//");
  outp = stripHtml(outp);
  outp = outp.replaceAll("//tempLineBreak//", "@");
  document.getElementById("output").innerHTML = outp;
  document.getElementById("gt").innerHTML = "🟥";
  document.getElementById("oBar").style.display = "block";
  running = true;
}
}
</script>
<style>
body {
  background: #22262e;
  color: white;
  font-family: 'Roboto Mono', monospace;
}
div#edit {
  outline: none;
  width: 100%;
  height: 100%;
}
button {
  border: none;
  border-radius: 10px;
  color: white;
  background: #1d2024;
  outline: none;
  font-family: 'Roboto Mono', monospace;
  padding: 10px;
  height: 50px;
  cursor: pointer;
}
.gt {
  color: #0cf571;
  transform: rotate(270deg);
  width: 49px;
}
.fix {
  position: fixed;
  background: #15171c;
  width: 100%;
  top: 0px;
  left: 0px;
  padding: 13px;
}
#oBar {
    position: fixed;
  background: #15171c;
  padding: 13px;
  top: 50%;
  left: 30%;
  border-radius: 10px;
  display: none;
}
#output {
  resize: none;
    border: none;
  border-radius: 10px;
  color: white;
  background: #1d2024;
  outline: none;
  font-family: 'Roboto Mono', monospace;
  font-size: 1px;
  width: 95%;
  overflow: hidden;
  height: 80px;
}
</style>