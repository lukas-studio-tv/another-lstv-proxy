/*
Experimental extension for Scratch.
It can load audio files and play them, but its too far from being perfect.
Made by LSTV
V0.01
*/

/* ICONS: https://fontawesome.com/license */

const icon="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSIxMTYuMTU4NjgiIGhlaWdodD0iMTE2LjE1ODY4IiB2aWV3Qm94PSIwLDAsMTE2LjE1ODY4LDExNi4xNTg2OCI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI2MS45MjA2NiwtMTIxLjkyMDY2KSI+PGcgZGF0YS1wYXBlci1kYXRhPSJ7JnF1b3Q7aXNQYWludGluZ0xheWVyJnF1b3Q7OnRydWV9IiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMjYzLjkyMDY2LDE4MGMwLC0zMC45NzE3NiAyNS4xMDc1NywtNTYuMDc5MzQgNTYuMDc5MzQsLTU2LjA3OTM0YzMwLjk3MTc2LDAgNTYuMDc5MzQsMjUuMTA3NTcgNTYuMDc5MzQsNTYuMDc5MzRjMCwzMC45NzE3NiAtMjUuMTA3NTcsNTYuMDc5MzQgLTU2LjA3OTM0LDU2LjA3OTM0Yy0zMC45NzE3NiwwIC01Ni4wNzkzNCwtMjUuMTA3NTcgLTU2LjA3OTM0LC01Ni4wNzkzNHoiIGZpbGw9IiNiYTQ1YWMiIHN0cm9rZT0iI2E4Mzk5YiIgc3Ryb2tlLXdpZHRoPSI0Ii8+PHBhdGggZD0iTTMyMi41NjY2NywxNTMuMDUyNzV2NTMuODkzNzVjMCwzLjQzOTM0IC00LjE2MTIyLDUuMTMzMzUgLTYuNTcyMjksMi43MjIyOGwtMTQuMjcyMzIsLTE0LjI2OTExaC0xNi4zNzIxOGMtMi4xMjcxMywwIC0zLjg1MDAxLC0xLjcyNDQ4IC0zLjg1MDAxLC0zLjg1MDAxdi0yMy4xMDAwN2MwLC0yLjEyNzEzIDEuNzIyODgsLTMuODUwMDEgMy44NTAwMSwtMy44NTAwMWgxNi4zNzIxOGwxNC4yNzIzMiwtMTQuMjY5MTFjMi40MDc4NiwtMi40MDc4NiA2LjU3MjI5LC0wLjcyMDI3IDYuNTcyMjksMi43MjIyOHpNMzQ0Ljc0MTE0LDIwNS4wNjMyMWMtMS45MjUwMSwxLjIzMiAtNC4yNjg3LDAuNDY1MjEgLTUuMzEzMDIsLTEuMTk2NzFjLTEuMTM3MzYsLTEuODExMTEgLTAuNjA2MzgsLTQuMjA2MTQgMS4xODg2OSwtNS4zNTE1MmM2LjM3NjU4LC00LjA3Mjk5IDEwLjE4MzI4LC0xMC45OTMzOSAxMC4xODMyOCwtMTguNTE1MzVjMCwtNy41MjE5NiAtMy44MDY3LC0xNC40NDIzNiAtMTAuMTgzMjgsLTE4LjUxNTM1Yy0xLjc5NTA3LC0xLjE0Njk4IC0yLjMyNjA1LC0zLjU0MjAxIC0xLjE4ODY5LC01LjM1MTUyYzEuMTM3MzYsLTEuODA5NTEgMy41MTc5NSwtMi4zNDIwOSA1LjMxMzAyLC0xLjE5NjcxYzguNjE2MDEsNS41MDIzMSAxMy43NTg5OCwxNC44NzIyOCAxMy43NTg5OCwyNS4wNjM1OGMwLDEwLjE5MjkxIC01LjE0Mjk3LDE5LjU2MTI3IC0xMy43NTg5OCwyNS4wNjM1OHpNMzQzLjEwMTY4LDE3OS45OTgwMmMwLDUuMTE0MSAtMi44MTM3Miw5LjgzODM4IC03LjM0MjI5LDEyLjMzMjg3Yy0xLjg1NDQyLDEuMDE4NjUgLTQuMTk5NzIsMC4zNTQ1MiAtNS4yMzEyLC0xLjUxNTk0Yy0xLjAyNTA3LC0xLjg2MjQ0IC0wLjM0NjUsLTQuMjAyOTMgMS41MTU5NCwtNS4yMzEyYzIuMDY5MzgsLTEuMTM3MzYgMy4zNTU5MywtMy4yNzczMiAzLjM1NTkzLC01LjU4NDEyYzAsLTIuMzA1MTkgLTEuMjg2NTUsLTQuNDQ2NzYgLTMuMzU3NTMsLTUuNTg0MTJjLTEuODYyNDQsLTEuMDI4MjcgLTIuNTQxMDEsLTMuMzY4NzYgLTEuNTE1OTQsLTUuMjMxMmMxLjAyOTg4LC0xLjg2MjQ0IDMuMzczNTcsLTIuNTMxMzggNS4yMzEyLC0xLjUxNTk0YzQuNTMwMTgsMi40OTI4OCA3LjM0MzksNy4yMTU1NiA3LjM0MzksMTIuMzI5NjZ6IiBmaWxsPSIjZmZmZmZmIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIvPjwvZz48L2c+PC9zdmc+";
function am_el(id){return document.getElementById(id);}

/*Library*/
var soundFile = document.createElement("audio");
soundFile.preload = "auto";
soundFile.preservesPitch=false;
soundFile.autoplay=true;
document.body.appendChild(soundFile);
function play() {
   soundFile.currentTime = 0.01;
   soundFile.volume = volume;
   setTimeout(function(){soundFile.play();},2);
}
var am_global_loop, am_global_volume=1,pv_f="0";


/*icons*/
const icon_play="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI0NDcuOTg3NTEiIGhlaWdodD0iNTEyLjAyMDc5IiB2aWV3Qm94PSIwLDAsNDQ3Ljk4NzUxLDUxMi4wMjA3OSI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk2LjAwNjI0LDc2LjAxMDM5KSI+PGcgZGF0YS1wYXBlci1kYXRhPSJ7JnF1b3Q7aXNQYWludGluZ0xheWVyJnF1b3Q7OnRydWV9IiBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBzdHlsZT0ibWl4LWJsZW5kLW1vZGU6IG5vcm1hbCI+PHBhdGggZD0iTTUyMC40MDYyNCwyMjEuMjU3NTVsLTM1MiwyMDhjLTMxLjcsMTguOCAtNzIuNCwtMy44IC03Mi40LC00MS4zdi00MTYuMWMwLC00MS44IDQzLjgsLTU4LjIgNzIuNCwtNDEuM2wzNTIsMjA4LjFjMzEuNSwxOC41IDMxLjQsNjQuMSAwLDgyLjZ6Ii8+PC9nPjwvZz48L3N2Zz4=";
const icon_pause="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI0NDgiIGhlaWdodD0iNDQ4IiB2aWV3Qm94PSIwLDAsNDQ4LDQ0OCI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTk2LDQ1KSI+PGcgZGF0YS1wYXBlci1kYXRhPSJ7JnF1b3Q7aXNQYWludGluZ0xheWVyJnF1b3Q7OnRydWV9IiBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBzdHlsZT0ibWl4LWJsZW5kLW1vZGU6IG5vcm1hbCI+PHBhdGggZD0iTTI0MCw0MDNoLTk2Yy0yNi41LDAgLTQ4LC0yMS41IC00OCwtNDh2LTM1MmMwLC0yNi41IDIxLjUsLTQ4IDQ4LC00OGg5NmMyNi41LDAgNDgsMjEuNSA0OCw0OHYzNTJjMCwyNi41IC0yMS41LDQ4IC00OCw0OHpNNTQ0LDM1NXYtMzUyYzAsLTI2LjUgLTIxLjUsLTQ4IC00OCwtNDhoLTk2Yy0yNi41LDAgLTQ4LDIxLjUgLTQ4LDQ4djM1MmMwLDI2LjUgMjEuNSw0OCA0OCw0OGg5NmMyNi41LDAgNDgsLTIxLjUgNDgsLTQ4eiIvPjwvZz48L2c+PC9zdmc+";
const icon_music ="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTExLjk3MDUiIHZpZXdCb3g9IjAsMCw1MTIsNTExLjk3MDUiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02NCw3NS45NzA1KSI+PGcgZGF0YS1wYXBlci1kYXRhPSJ7JnF1b3Q7aXNQYWludGluZ0xheWVyJnF1b3Q7OnRydWV9IiBmaWxsPSIjZmZmZmZmIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBzdHlsZT0ibWl4LWJsZW5kLW1vZGU6IG5vcm1hbCI+PHBhdGggZD0iTTU2Mi45MTEwMSwtNjkuNzg0NDdjOC4yMTg5NSw2LjAyMTA0IDEzLjA3OTUyLDE1LjU5NjA0IDEzLjA4ODk5LDI1Ljc4NDQ3djM1MmMwLDM1LjM1IC00Myw2NCAtOTYsNjRjLTUzLDAgLTk2LC0yOC42NiAtOTYsLTY0YzAsLTM1LjM0IDQzLC02NCA5NiwtNjRjMTAuNzgzMzUsMC4wNTg4OCAyMS41MjI4NiwxLjM3NzgzIDMyLDMuOTN2LTE4NC42MWwtMjU2LDc1djIzMy42OGMwLDM1LjM0IC00Myw2NCAtOTYsNjRjLTUzLDAgLTk2LC0yOC42NiAtOTYsLTY0YzAsLTM1LjM0IDQzLC02NCA5NiwtNjRjMTAuNzgyNjEsMC4wNjEwNiAyMS41MjE0OCwxLjM3NjU3IDMyLDMuOTJ2LTI2MS40MWMwLjAwODM4LC0xMy45NzE3NSA5LjA4MDQzLC0yNi4zMjI4NCAyMi40MSwtMzAuNTFsMzE5Ljk3LC05NC40OWM5LjcxNzE0LC0zLjA2MjkgMjAuMzEyMDYsLTEuMzE1NTIgMjguNTMxMDEsNC43MDU1M3oiLz48L2c+PC9nPjwvc3ZnPg==";

class AudioManager {
  constructor(runtime) {
    this.runtime = runtime
  }
  getInfo() {
    return {
      "id": "audiomgr",
      "name": "AudioManager 🎼",
      "color1": '#ba45ac',
      "color2": '#a8399b',
      "color3": '#942c88',
	  "menuIconURI": icon,
      "blocks": [
	    {
          "opcode": 'am_playfromurl',
          "blockType": "command",
          "text": 'play sound url [URL]',
		  "blockIconURI": icon_music,
          "arguments": {
            "URL": {
              "type": "string",
              "defaultValue": 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3'
            }
          }
        },
	    {
          "opcode": 'am_playfromfile',
          "blockType": "command",
          "text": 'open and play music file',
          "arguments": {}
        },
		{
          "opcode": 'am_songDuration',
          "blockType": "reporter",
          "text": 'sound duration',
          "arguments": {}
        },
		{
          "opcode": 'am_setvolume',
          "blockType": "command",
          "text": 'set volume to [VAL]',
          "arguments": {
            "VAL": {
              "type": "number",
              "defaultValue": '1.0'
            }
          }
        },
		{
          "opcode": 'am_setpitch',
          "blockType": "command",
          "text": 'set pitch effect to [VAL]',
          "arguments": {
            "VAL": {
              "type": "number",
              "defaultValue": '0'
            }
          }
        },
		{
          "opcode": 'am_skipToTime',
          "blockType": "command",
          "text": 'skip to time [VAL]',
          "arguments": {
            "VAL": {
              "type": "number",
              "defaultValue": '0.01'
            }
          }
        },
		{
          "opcode": 'am_songCurrent',
          "blockType": "reporter",
          "text": 'current time',
          "arguments": {}
        },
	    {
          "opcode": 'am_stop',
          "blockType": "command",
          "text": 'stop all sounds',
          "arguments": {}
        },
	    {
          "opcode": 'am_hasStopped',
          "blockType": "Boolean",
          "text": 'has stopped',
          "arguments": {}
        },
	    {
          "opcode": 'am_pause',
          "blockType": "command",
          "text": 'pause',
		  "blockIconURI": icon_pause,
          "arguments": {}
        },
	    {
          "opcode": 'am_resume',
          "blockType": "command",
          "text": 'resume',
		  "blockIconURI": icon_play,
          "arguments": {}
        },
	    {
          "opcode": 'am_isPaused',
          "blockType": "Boolean",
          "text": 'is paused',
          "arguments": {}
        },
      ],
      "menus": {}
    };
  }

  am_playfromurl({URL}) {
	soundFile.innerHTML="";
	var src = document.createElement("source");
	src.src = URL;
	soundFile.appendChild(src);
	soundFile.load();
	if(am_global_volume>1){soundFile.volume=1}else if(am_global_volume<0){soundFile.volume=0}else{soundFile.volume=am_global_volume}
  }
  am_stop() {
	soundFile.currentTime = 99999999999999999999;
  }
  am_resume() {
	soundFile.play();
  }
  am_pause() {
	soundFile.pause();
  }
  am_skipToTime({VAL}) {
	soundFile.currentTime=VAL;
  }
  am_setpitch({VAL}) {
	pv_f="0";
	/*Calculate the pitch effect (For example from 300 to 7, -300 to 0.5)*/
	if(VAL<0){
		if(VAL<-659){
			pv_f=0.1;
		} else {
			pv_f=1-Math.abs(VAL)/700;
		}
	} else {
		if(VAL>700){
			pv_f=15;
		} else {
			pv_f=VAL/50+1;
		}
	}
	soundFile.defaultPlaybackRate=pv_f;
	soundFile.playbackRate=pv_f;
  }
  am_setvolume({VAL}) {
	am_global_volume=VAL;
	if(am_global_volume>1){soundFile.volume=1}else if(am_global_volume<0){soundFile.volume=0}else{soundFile.volume=am_global_volume};
  }
  am_songDuration() {
	return soundFile.duration;
  }
  am_songCurrent() {
	return soundFile.currentTime;
  }
  am_hasStopped() {
	return soundFile.ended;
  }
  am_isPaused() {
	return soundFile.paused;
  }
}
(function() {
  var extensionInstance = new AudioManager(window.vm.extensionManager.runtime)
  var serviceName = window.vm.extensionManager._registerInternalExtension(extensionInstance)
  window.vm.extensionManager._loadedExtensions.set(extensionInstance.getInfo().id, serviceName)
})()