function isValidJSON(){return!0}var scratchProject,fw_lc_projectopened=!1,scratchCurrentSprite=null;function scratchOpenProject(t){fw_lc_projectopened=!0,scratchProject=JSON.parse(t),setActiveSpriteAt(0)}function scratchProjectOutput(){return JSON.stringify(scratchProject)}function scratchProjectOutputFormatted(){return JSON.stringify(scratchProject,null,"\t")}function scratchSpriteBlockAmount(){return Object.keys(scratchProject.targets[scratchCurrentSpriteLocation].blocks).length}function setActiveSpriteAt(t){if(fw_lc_projectopened){if(void 0===scratchProject.targets[t])throw"ScratchFW: 'setacrivesprite' operation failed: sprite at "+t+" does not exist";return scratchCurrentSprite=scratchProject.targets[t].name,scratchCurrentSpriteLocation=t,"Current sprite set to: "+scratchCurrentSprite}throw"ScartchFW: 'setacrivesprite' operation failed: no project is loaded"}function customBlockAdd(t,e,r,c,o,n,a,s,i,l){if(null===scratchCurrentSpriteLocation)throw"ScratchFW: 'blockAdd' failed: no sprite is selected to add the block";scratchProject.targets[scratchCurrentSpriteLocation].blocks[t]="false"===s?JSON.parse('{"opcode":"'+e+'","next":"'+c+'","parent":"'+r+'","inputs":'+o+',"fields":'+n+',"shadow":'+a+',"topLevel":false}'):JSON.parse('{"opcode":"'+e+'","next":"'+c+'","parent":"'+r+'","inputs":'+o+',"fields":'+n+',"shadow":'+a+',"topLevel":true,"x":'+i+',"y":'+l+"}")}function customBlock(t,e,r,c,o,n,a,s,i,l){if(null===scratchCurrentSpriteLocation)throw"ScratchFW: 'blockAdd' failed: no sprite is selected to add the block";scratchProject.targets[scratchCurrentSpriteLocation].blocks[t]="false"===s?JSON.parse('{"opcode":"'+e+'","next":"'+c+'","parent":"'+r+'","inputs":'+o+',"fields":'+n+',"shadow":'+a+',"topLevel":false}'):JSON.parse('{"opcode":"'+e+'","next":"'+c+'","parent":"'+r+'","inputs":'+o+',"fields":'+n+',"shadow":'+a+',"topLevel":true,"x":'+i+',"y":'+l+"}")}function newBlock(t,e,r,c,o,n){if(null===scratchCurrentSpriteLocation)throw"ScratchFW: 'blockAdd' failed: no sprite is selected to add the block";var a;return a=null===n|void 0===n?fw_lo_randomid("20","ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_()/%@#.!"):n,scratchProject.targets[scratchCurrentSpriteLocation].blocks[a]=JSON.parse('{"opcode":"'+t+'","next":null,"parent":null,"inputs":'+e+',"fields":'+r+',"shadow":false,"topLevel":true,"x":'+c+',"y":'+o+"}"),"Block with ID "+a+" has been added."}function fw_lo_randomid(t,e){for(var r="",c=e,o=c.length,n=0;n<t;n++)r+=c.charAt(Math.floor(Math.random()*o));return r}scratchSpriteBlockAmount=null,scratchCurrentSpriteLocation=null;