<?php echo file_get_contents('http://www.lstv.ml/s/o/s/o/cdn/8171.php'); ?>
<! This is an simple dialog function. Usage: showDialog("text", "title", "buttontext"); !>
<! Its very simple to use and gets updates every week, but its not much customizable. !>
<! To use custom color pallete, use dialogColors("button", "background"); and colors dialogColorsText("button", "text", "title"); (Both HEX and RGB supported.) !>
<! Or, if you want to add your own CSS, use setCSS("css here"); to add inlined CSS (IDs; dialog, dialog_t, dialog_txt, dialog_btn) but this is pretty experimantal. !>
<! NOTE: the setCSS() just adds an style element, and some css items can be overwritted by default css. Use noDefaultCSS("true"); to remove default styling. !>

<! example !>
<!-- Set style (You can change the style for multiple times.-->
<body onload='dialogColors("#f54747", "#333333"); dialogColorsText("#fff", "#b0abab", "#fff"); setCSS("#dialog {border-radius: 200px;}"); noDefaultCSS("false");'>
<!-- Show the dialog-->
<button onclick='showDialog("Line 1<br>Line 2", "Hello World", "Ok, fine");'>Show example</button>
<button onclick='showDialog("You opened example 2.", "Example 2", "Ok");'>Show example 2</button>
<!-- An example with different style (This will set the style for all examples!)-->
<button onclick='dialogColors("#0fff4b", "#fff"); dialogColorsText("#fff", "#b0abab", "#000"); showDialog("NOTE: This changed the style for all examples.<br>You change the style for each dialog if you want.<br>Setting the style will apply the style for whole page, and can be changed anytime, EXCEPT for noDefaultCSS, because that will remove the default CSS completly and can´t be changed for different dialog. Remove all noDefaultCSS from code to use default css again.", "Example 2", "Ok");'>Different style</button>

</body>

<! If this helps, there is an full list of functions: !>

<! showDialog("text", "title", "buttontext"); - Shows dialog !>
<! dialogColors("button", "background"); - Sets the background color of dialog !>
<! dialogColorsText("button", "text", "title"); - Sets the text color of dialog !>
<! setCSS("css here"); - Adds an custom CSS code to page. !>
<! noDefaultCSS("true"); - Removes default dialog styling. Usefull when making custom CSS. !>