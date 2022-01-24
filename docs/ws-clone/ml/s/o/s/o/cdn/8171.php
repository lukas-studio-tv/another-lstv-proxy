<style id="ccss">/* This is an custom CSS placeholder, set by setCSS(); */</style><div id="bo" onclick='hideDialog();' style="display: none;"></div><div id="dialog" style="display: none;"><h2 id="dialog_t"></h2><div id="dialog_txt">
<! Ignore this code, its just placeholder for the dialog !>
</div><button id="dialog_btn" onclick='hideDialog();'>Ok</button></div>
<script>
var q_ = '"';
var q_2_ = "'";
function showDialog(text, title, button_t) {
    var d = document.getElementById('bo');
    var t = document.getElementById('dialog_t');
    var te = document.getElementById('dialog_txt');
    var btn_t = document.getElementById('dialog_btn');
    d.style.display = "block";
    d.style.animationName = "openBO";
    d.style.animationDuration = "0.2s";
    t.innerHTML = title;
    te.innerHTML = text;
    btn_t.innerHTML = button_t;
    d = document.getElementById('dialog');
    d.style.display = "block";
    d.style.animationName = "openDI";
    d.style.animationDuration = "0.2s";
}
function hideDialog() {
    var d = document.getElementById('bo');
    var d2 = document.getElementById('dialog');
    d.style.animationName = "";
    d.style.display = "none";
    d.style.animationName = "closeBO";
    d.style.animationDuration = "0.2s";
    d2.style.animationDuration = "0.21s";
    setTimeout(
        function () {
            d.style.display = "none";
            d2.style.display = "none";
        }, 200
    );
    d2.style.animationName = "";
    d2.style.animationName = "closeDI";
}
function dialogColors(button, body) {
    var d = document.getElementById('dialog');
    var btn_t = document.getElementById('dialog_btn');
    d.style.background = body;
    btn_t.style.background = button;
}
function dialogColorsText(button, text, title) {
    var t = document.getElementById('dialog_t');
    var te = document.getElementById('dialog_txt');
    var btn_t = document.getElementById('dialog_btn');
    btn_t.style.color = button;
    te.style.color = text;
    t.style.color = title;
}
function setCSS(css) {
    var s = document.getElementById('ccss');
    s.innerHTML = css;
}
function noDefaultCSS(bool) {
    if (bool === "true") {
        document.getElementById('dialog_y_css').innerHTML = "";
    } else {
    }
}
</script>
<style id="dialog_y_css">
#dialog {
    border-radius: 20px;
    background-color: #2e2e2e;
    color: #fff;
    padding: 20px;
    position: fixed;
    opacity: 100%;
}
#dialog_t {
    padding: 0px;
    margin: 0px;
}
#dialog_btn {
    position: absolute;
   right: 20px;
   bottom: 20px;
    border: none;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #3bdbe3;
    border-radius: 5px;
    color: #fff;
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}
#dialog_btn:hover {
    background: #35afb5;
    box-shadow: 0 0.225rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.225rem rgba(0, 0, 0, .2);
}
@keyframes openBO {
    0% {opacity: 0%;}
    100% {opacity: 50%;}
}
@keyframes openDI {
    0% {opacity: 0%;}
    100% {opacity: 100%;}
}
@keyframes closeBO {
    0% {opacity: 50%;}
    100% {opacity: 0%;}
}
@keyframes closeDI {
    0% {opacity: 100%;}
    100% {opacity: 0%;}
}
</style>
<style id="d_engine">
#bo {
    opacity: 50%;
    background: #000000;
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    display: none;
}
button:focus {
    outline: none;
}
#dialog {
    width: 500px;
    height: 200px;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -250px;
    position: absolute;
}
</style>