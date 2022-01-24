<head>
<link rel="shortcut icon" href="https://www.lstv.ml/s/o/p/src/garbage/Microsoft_Teams-Logo.wine.svg" type="image/x-icon">
<title>Ůkoly</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<span id="in">
 <div id="checklist">
  <input id="01" type="checkbox" name="r" value="1" checked>
  <label for="01">KoAJ</label>
  <input id="02" type="checkbox" name="r" value="2">
  <label for="02">AJ</label>
  <input id="03" type="checkbox" name="r" value="3">
  <label for="03">ZEM</label>
</div>
<h3><br><br><br>
(Stránka se stále připravuje!)
</h3>
</span>
<div id="sidebar"><br><br>
<div id="side2">
<div id="side2_i">DŮ</div>
<a href="z_t_tabout.php"><div id="side2_n">&#x02605;</div></a>
</div>
<b>
Ůkoly
</b>
</div>
<div id="header">
<h2>
Ůkoly - Lukáš Zloch
</h2>
</div>
<div id="footer">
Vytvořil (C) LSTV org. 2017-2021, host: <a href="https://extragon.ga">extragon.ga.</a> <span style="color: #6e6e6e; font-size: 7px;">Styl: MS Teams. Teams je vlastněn společností Microsoft. Více o autorských právech společnosti</span>
</div>
<style>
#header {
  background: #454774;
  width: 100%;
  height: 30px;
  position: fixed;
  color: #fff;
  left: 0px;
  top: 0px;
  padding: 10px;
  padding-top: 0px;
  padding-bottom: 25px;
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}
#sidebar {
  background: #2e2b2c;
  padding: 20px;
  padding-left: 80px;
  left: 0px;
  top: 0px;
  width: 200px;
  height: 100%;
  position: fixed;
  color: #fff;
  font-size: 20px;
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
}
#side2 {
  background: #393738;
  box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
  padding: 0px;
  left: 0px;
  top: 0px;
  width: 50px;
  height: 100%;
  position: fixed;
  color: #fff;
  padding-top: 57px;
  font-size: 20px;
}
body {
  background: #211e1f;
  font-family: "Segoe UI";
  padding-left: 310px;
  padding-top: 58px;
  color: #fff;
}
#side2_i {
  background: #3b3c5a;
  height: 50px;
  border-left: 5px solid white;
  left: 0px;
  top: 0px;
  text-align: center;
    display: flex;
  justify-content: center;
  align-items: center;
    color: #fff;
  text-decoration: none;
}
#side2_n {
  height: 50px;
  left: 0px;
  top: 0px;
  text-align: center;
    display: flex;
  justify-content: center;
  align-items: center;
    color: #fff;
  text-decoration: none;
}
#side2_n:hover {
  background: #4a4748;
  cursor: pointer;
}
#side2_i:hover {
  background: #4e4f78;
  cursor: pointer;
}
#footer {
    zoom: 70%;
  position: fixed;
  bottom: 0px;
  left: 0px;
  background: #383838;
  width: 100%;
  padding: 5px;
}
a {
  color: #13ceeb;
  text-decoration: none;
}
#checklist {

  --check: #4F29F0;
  --disabled: #C3C8DE;
  --width: 100px;
  --height: 140px;
  --border-radius: 10px;
  background: var(--background);
  width: var(--width);
  height: var(--height);
  border-radius: var(--border-radius);
  position: relative;
  box-shadow: 0 10px 30px rgba(65, 72, 86, 0.05);
  display: grid;
  grid-template-columns: 30px auto;
  align-items: center;
}
#checklist label {
  color: var(--text);
  position: relative;
  cursor: pointer;
  display: grid;
  align-items: center;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  transition: color 0.3s ease;
}
#checklist label::before, #checklist label::after {
  content: "";
  position: absolute;
}
#checklist label::before {
  height: 2px;
  width: 8px;
  left: -27px;
  background: var(--check);
  border-radius: 2px;
  transition: background 0.3s ease;
}
#checklist label:after {
  height: 4px;
  width: 4px;
  top: 8px;
  left: -25px;
  border-radius: 50%;
}
#checklist input[type=checkbox] {
  -webkit-appearance: none;
  -moz-appearance: none;
  position: relative;
  height: 15px;
  width: 15px;
  outline: none;
  border: 0;
  margin: 0 15px 0 0;
  cursor: pointer;
  background: var(--background);
  display: grid;
  align-items: center;
}
#checklist input[type=checkbox]::before, #checklist input[type=checkbox]::after {
  content: "";
  position: absolute;
  height: 2px;
  top: auto;
  background: var(--check);
  border-radius: 2px;
}
#checklist input[type=checkbox]::before {
  width: 0px;
  right: 60%;
  transform-origin: right bottom;
}
#checklist input[type=checkbox]::after {
  width: 0px;
  left: 40%;
  transform-origin: left bottom;
}
#checklist input[type=checkbox]:checked::before {
  -webkit-animation: check-01 0.4s ease forwards;
          animation: check-01 0.4s ease forwards;
}
#checklist input[type=checkbox]:checked::after {
  -webkit-animation: check-02 0.4s ease forwards;
          animation: check-02 0.4s ease forwards;
}
#checklist input[type=checkbox]:checked + label {
  color: var(--disabled);
  -webkit-animation: move 0.3s ease 0.1s forwards;
          animation: move 0.3s ease 0.1s forwards;
}
#checklist input[type=checkbox]:checked + label::before {
  background: var(--disabled);
  -webkit-animation: slice 0.4s ease forwards;
          animation: slice 0.4s ease forwards;
}
#checklist input[type=checkbox]:checked + label::after {
  -webkit-animation: firework 0.5s ease forwards 0.1s;
          animation: firework 0.5s ease forwards 0.1s;
}

@-webkit-keyframes move {
  50% {
    padding-left: 8px;
    padding-right: 0px;
  }
  100% {
    padding-right: 4px;
  }
}

@keyframes move {
  50% {
    padding-left: 8px;
    padding-right: 0px;
  }
  100% {
    padding-right: 4px;
  }
}
@-webkit-keyframes slice {
  60% {
    width: 100%;
    left: 4px;
  }
  100% {
    width: 100%;
    left: -2px;
    padding-left: 0;
  }
}
@keyframes slice {
  60% {
    width: 100%;
    left: 4px;
  }
  100% {
    width: 100%;
    left: -2px;
    padding-left: 0;
  }
}
@-webkit-keyframes check-01 {
  0% {
    width: 4px;
    top: auto;
    transform: rotate(0);
  }
  50% {
    width: 0px;
    top: auto;
    transform: rotate(0);
  }
  51% {
    width: 0px;
    top: 8px;
    transform: rotate(45deg);
  }
  100% {
    width: 5px;
    top: 8px;
    transform: rotate(45deg);
  }
}
@keyframes check-01 {
  0% {
    width: 4px;
    top: auto;
    transform: rotate(0);
  }
  50% {
    width: 0px;
    top: auto;
    transform: rotate(0);
  }
  51% {
    width: 0px;
    top: 8px;
    transform: rotate(45deg);
  }
  100% {
    width: 5px;
    top: 8px;
    transform: rotate(45deg);
  }
}
@-webkit-keyframes check-02 {
  0% {
    width: 4px;
    top: auto;
    transform: rotate(0);
  }
  50% {
    width: 0px;
    top: auto;
    transform: rotate(0);
  }
  51% {
    width: 0px;
    top: 8px;
    transform: rotate(-45deg);
  }
  100% {
    width: 10px;
    top: 8px;
    transform: rotate(-45deg);
  }
}
@keyframes check-02 {
  0% {
    width: 4px;
    top: auto;
    transform: rotate(0);
  }
  50% {
    width: 0px;
    top: auto;
    transform: rotate(0);
  }
  51% {
    width: 0px;
    top: 8px;
    transform: rotate(-45deg);
  }
  100% {
    width: 10px;
    top: 8px;
    transform: rotate(-45deg);
  }
}
@-webkit-keyframes firework {
  0% {
    opacity: 1;
    box-shadow: 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0;
  }
  30% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    box-shadow: 0 -15px 0 0px #4F29F0, 14px -8px 0 0px #4F29F0, 14px 8px 0 0px #4F29F0, 0 15px 0 0px #4F29F0, -14px 8px 0 0px #4F29F0, -14px -8px 0 0px #4F29F0;
  }
}
@keyframes firework {
  0% {
    opacity: 1;
    box-shadow: 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0, 0 0 0 -2px #4F29F0;
  }
  30% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    box-shadow: 0 -15px 0 0px #4F29F0, 14px -8px 0 0px #4F29F0, 14px 8px 0 0px #4F29F0, 0 15px 0 0px #4F29F0, -14px 8px 0 0px #4F29F0, -14px -8px 0 0px #4F29F0;
  }
}
</style>
