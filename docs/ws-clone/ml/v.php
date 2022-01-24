<style>
::-webkit-scrollbar {
  width: 7px;
}

::-webkit-scrollbar-track {
  background: none;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 15px;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}

div.header {
  background: none;
  color: #fff;
  user-select: none;
  z-index: 5;
}

.header.item {
  cursor: pointer;
  text-align: right;
  float: right;
  margin-left: 10px;
  margin-right: 10px;
}

.header.item:hover {
  opacity: 60%;
}


@keyframes header_an_1 {
  0% {
    background: none;
    color: #fff;
  }

  100% {
    background: #333333;
    color: #fff;
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
  }
}

@keyframes header_an_2 {
  0% {
    background: #333333;
    color: #fff;
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
  }

  100% {
    background: none;
    color: #fff;
  }
}

@keyframes headerDOWN_an_1 {
  0% {
    opacity: 100%;
  }

  100% {
    opacity: 0%;
  }
}

@keyframes headerDOWN_an_2 {
  0% {
    opacity: 0%;
  }

  100% {
    opacity: 100%;
  }
}

.header.placeholder::before {
  /* Adds an right margin for the header. */
  float: right;
  content: "ㅤㅤㅤ";
}

.headerimage {
  background-image: url("https://www.minecraftbot.com/img/landing-background.png");
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.3), 0 0.0625rem 0.125rem rgba(0, 0, 0, 0.2);
  width: 100%;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
  background-size: cover;
}

.headertext {
  text-align: center;
}

h1 {
  margin: 0px;
}

.headerdown {
  bottom: 0px;
  position: absolute;
  cursor: pointer;
  transform: translateX(-20px);
}

/* DEMO */


body {
  font-family: 'Nunito', sans-serif;
  margin: 0px;
  max-width: 100%;
  overflow-x: hidden;
  padding-left: none;
  background: #262626;
  color: white;
}

.eB {
  margin: 0px;
  padding-left: 10px;
}

html {
  scroll-behavior: smooth;
  background: #262626;
}

footer {
  background: #1f1f1f;
  color: #fff;
  left: 0px;
  bottom: 0px;
  width: 100%;
  padding: 10px;
  padding-left: 30px;
  padding-bottom: 29px;
}

.cardcontainer {
  display: grid;
  grid-template-columns: 33.2% 33.2% 33.2%;
}

.card {
  height: 315px;
  background: #f0f0f0;
  margin: 8px;
  border-radius: 15px;
  animation: cardHOVEROut 0.5s forwards;
  padding: 10px;
  text-align: center;
  display: flex;
  flex-direction: column;
  min-width: 30px;
}

.card:hover {
  background: #dedede;
  cursor: pointer;
  animation: cardHOVER 0.5s forwards;
}

@keyframes cardHOVER {
  0% {
    opacity: 90%;
    background: #292929;
    transform: translateY(0%);
  }

  100% {
    opacity: 100%;
    background: #333333;
    transform: translateY(-2%);
    border-radius: 20px;
  }
}

@keyframes cardHOVEROut {
  0% {
    opacity: 100%;
    background: #333333;
    transform: translateY(-2%);
  }

  100% {
    opacity: 90%;
    background: #292929;
    transform: translateY(0%);
  }
}

button {
  margin: 10px;
  clear: both;
  margin-top: auto;
  border-radius: 15px;
  border: none;
  outline: none;
  background: #0095ff;
  color: #fff;
  padding: 10px;
  padding-left: 25px;
  padding-right: 25px;
  cursor: pointer;
  animation: buttonHWOut 0.2s forwards;
  -webkit-box-shadow: 0px 0px 8px -1px rgba(0, 149, 255, 1);
  -moz-box-shadow: 0px 0px 8px -1px rgba(0, 149, 255, 1);
  box-shadow: 0px 0px 8px -1px rgba(0, 149, 255, 1);
}

button:hover {
  animation: buttonHW 0.2s forwards;
}

@keyframes buttonHWOut {
  0% {
    border-radius: 1px;
    opacity: 100%;
  }

  100% {
    border-radius: 15px;
    opacity: 90%;
  }
}

@keyframes buttonHW {
  0% {
    border-radius: 15px;
    opacity: 90%;
  }

  100% {
    border-radius: 5px;
    opacity: 100%;
  }
}

.listVAL {
  width: 93%;
  height: 50px;
  margin: 10px;
  float: left;
  display: flex;
  align-items: center;
  background: #f7f7f7;
  border-radius: 15px;
  padding: 15px;
  white-space: pre-line;
  cursor: pointer;
  animation: cardHOVEROut 0.5s forwards;
  margin-bottom: 10px;
}
.listVAL:hover {
  animation: cardHOVER 0.5s forwards;
}
.listIMG {
  margin-right: 20px;
}
.tx {
  text-align: center;
  width: 100%;
}
.red {
  background: #ed5c5c;
  color: white;
}
.listWAR {
  width: 93%;
  height: 50px;
  margin: 10px;
  float: left;
  display: flex;
  align-items: center;
  border-radius: 15px;
  padding: 15px;
  margin-bottom: 10px;
}
</style>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <body id="bod" style="padding-left: none; margin: none;">
    <div class="eB">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
      <div class="headerimage" id="headerimage">
        <div class="headertext">
          <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
          <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
          <h1 data-aos="fade-right">LSTV</h1>(Beta page!)
          <div><a href="#wp"><img class="headerdown" id="headerdown" height="40" width="40" src="https://content.invisioncic.com/p289038/monthly_2020_04/arrow-down.gif.c819a92ab7162c828e944727a545dcd7.gif"></a>
          </div>
        </div>
      </div>
      <div class="header" id="header">
        <b data-aos="fade-right">LSTV</b><span data-aos="fade-right">Projects</span>
        <span class="header placeholder"> </span>
        <span class="header item">Projects library</span>
        <span class="header item">Contact</span>
      </div>
      
      <h1 id="wp">
        <br><br><br>
        <div class="tx">Most popular by our users:</div>
      </h1>
      <br><br><br>
      <div class="cardcontainer">
        <!-- CARD 1 -->
        <div class="card">
          <h2><img width="50" height="50" src="https://www.lstv.ml/s/o/ih/uploads/LSTV Gaming.png"><br><br>LSTV Gaming</h2>Games, gaming comunity, and game tools by LSTV!<br>All games and gaming stuff by LSTV in one place!<br><button class="cardbtn" onclick="window.location.href = 'https://lstv.ml/gaming/';">Visit ></button>
        </div>
        <!-- CARD 2 -->
        <div class="card">
          <h2><img width="50" height="50" src="https://www.lstv.ml/s/o/ih/uploads/iconSH2%20(1).png"><br><br>ExtraGon</h2>Hosting!<br>Host you´r web page/Minecraft server etc. on hi-end servers for free! Web panel with lots of features, free upgrades, and more.<br><button class="cardbtn" onclick="window.location.href = 'https://ExtraGon.ga';">Visit ></button>
        </div>
        <!-- CARD 3 -->
        <div class="card">
          <h2><img width="50" height="50" src="https://www.lstv.ml/s/o/ih/uploads/Telnet.png"><br><br>For developers/programs</h2>LSTV For developers!<br>Get our software, Game-Making studio, music studio, LScript, compilers, tools, mini projects, and all other stuff.<br><button class="cardbtn">Visit ></button>
        </div>
      </div>
      <div class="tx"><br><br>
        <h1>
          More categories;
        </h1>
      </div>
      <!-- ;LISTS; -->
      <br>
      <div class="listVAL">
        <img class="listIMG" width="40" height="40" src="https://iconape.com/wp-content/files/nd/33729/svg/android-logomark.svg"><span style="font-weight: bold;">Android Apps</span>ㅤAll kinds of android apps and games.
      </div>
      <div class="listVAL">
        <img class="listIMG" width="40" height="40" src="https://www.lstv.ml/s/o/ih/uploads/LSTV Gaming.png"><span style="font-weight: bold;">Games store</span>ㅤLSTV Gaming store with games
      </div>
      <div class="listVAL">
        <img class="listIMG" width="40" height="40" src="https://lh3.googleusercontent.com/UukVae4NLIlEO-M22eT6o4RStdeBlpBDiOcVelZU-Z-MXCb4LOhMscU8NBOaKgjHUzhl_A=w16383"><span style="font-weight: bold;">LScript</span>ㅤALL about lscript (Plugins, compilers, verzions...)
      </div>
      <div class="listVAL">
        <img class="listIMG" width="45" height="40" src="https://i.ibb.co/26CKVYh/AMSTiny.png"><span style="font-weight: bold;">AMS</span>ㅤALL about AndroidMakerStudio - Android apps/games development
      </div>
      <div class="listVAL">
        <img class="listIMG" width="45" height="40" src="https://cdn0.iconfinder.com/data/icons/heroicons-ui/24/icon-chat-512.png"><span style="font-weight: bold;">Chat</span>ㅤChat applications by LSTV
      </div>
      <div class="listVAL">
        <img class="listIMG" width="45" height="40" src="https://d1di2lzuh97fh2.cloudfront.net/files/20/20v/20vlmv.svg?ph=9899d496f7&border=9f9f9f&outline=cccccc&color=dddddd"><span style="font-weight: bold;">Hosting</span>ㅤExtraGon!
      </div>
      <div class="listVAL">
        <img class="listIMG" width="45" height="40" src="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/more-512.png"><span style="font-weight: bold;">EVEN MORE</span>ㅤLSTV Projects library!
      </div>

      <!-- You can remove this code -->
      <div id="demoscroll"></div>
    </div>
  </body>

  <div class="f">
    <footer id="footer" data-aos="flip-up">
      <img style="transform: translateY(10px);" width="30" src="https://www.lstv.ml/icon.ico">ㅤ<span style="font-size: 20px;"><b>LSTV</b>Projects</span><br><br><b>Page fully developed and designed by LSTV. Copyright (c) LSTV 2017-2021</b>.<br>About<br>Client area<br>Library of projects
    </footer>
  </div>

</html>
<script>
var demo = document.getElementById("demoscroll");
demo.style = "height: 760px;";
topDOC();

function topDOC() {
  var topHeaderCALC = document.getElementById("bod");
  topHeaderCALC.style.paddingTop = window.innerHeight - 30 + "px";
  setTimeout(function(){ topDOC(); }, 100);
}
AOS.init({
  duration: 600,
})
var header = document.getElementById("header");
var footer = document.getElementById("footer");
var headerdown = document.getElementById("headerdown");
header.style = "width: 100%; height: 50px; position: fixed; left: 0px; top: 0px; line-height: 50px; padding-left: 30px; padding-right: 20px;"
window.addEventListener("scroll", function() {
  if (window.scrollY == 0) {
    header.style.animation = "header_an_2 0.5s forwards";
  } else {
    header.style.animation = "header_an_1 0.5s forwards";
  }
});
window.addEventListener("scroll", function() {
  if (window.scrollY < 300) {
    headerdown.style.animation = "headerDOWN_an_2 0.5s forwards";
    footer.style.animation = "headerDOWN_an_1 0.5s forwards";
  } else {
    headerdown.style.animation = "headerDOWN_an_1 0.5s forwards";
    footer.style.animation = "headerDOWN_an_2 0.5s forwards";
  }
});
function gotoweb(web) {
  window.location.replace = web;
}
</script>