<?php
session_start ();
function loginForm() {
    include($_SERVER['DOCUMENT_ROOT']."/s/o/p/textnow/pubsrc/lcss.php");
	echo '
    <div class="center">
    <div id="loginform">
    <form action="index.php" method="post">
        <p id="loginbox_ms1"><h2><strong>Wellcome!</strong></h2></p>
        <label for="name">Please enter your name: </label><br>
            <label for="name">⠀</label><br><br>
        <input type="text" name="name" id="name" />
                    <label for="name">⠀</label><br>
        <input type="submit" name="enter" id="enter" value="Join" /><br>
    </form><br>
    </div>
    </div>
    ';
}

if (isset ( $_POST ['enter'] )) {
	if ($_POST ['name'] != "") {
		$_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
		$fp = fopen ( "log.html", 'a' );
		fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i></div><br><br>" );
		fclose ( $fp );
	} else {
		echo '<span class="error">Please type in a name</span>';
	}
}

if (isset ( $_GET ['logout'] )) {
	
	// Simple exit message
	$fp = fopen ( "log.html", 'a' );
	fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has left the chat session.</i></div><br><br>" );
	fclose ( $fp );
	
	session_destroy ();
	header ( "Location: index.php" ); // Redirect the user
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" onload="f();">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<title>Post</title>
</head>
<body>
	<?php
	if (! isset ( $_SESSION ['name'] )) {
		loginForm ();
	} else {
		?>
<div id="wrapper">
		<div id="menu">
			<p class="welcome">
            <?php include($_SERVER['DOCUMENT_ROOT']."/s/o/p/textnow/pubsrc/j.php"); ?>
			</p><br><br><br><br>
			<div style="clear: both"></div>
		</div>
		<div id="chatbox"><?php
		if (file_exists ( "log.html" ) && filesize ( "log.html" ) > 0) {
			$handle = fopen ( "log.html", "r" );
			$contents = fread ( $handle, filesize ( "log.html" ) );
			fclose ( $handle );
			
			echo $contents;
		}
		?></div><br><br>
	<script type="text/javascript"
		src="//ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});

//jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});

//If user submits the form
$mobiledv = "false";
$("#submitmsg").click(function(){
		var clientmsg = $("#usermsg").val();
        var clientitle = $("#usertitle").val();
        var clientmsg = clientmsg.replace('F0CK','****');
        $.post ('post.php',{text: clientmsg, title: clientitle});
		$("#usermsg").attr("value", "");
        $("#usertitle").attr("value", "");
		loadLog;
	return false;
});

function loadLog(){		
	var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
	$.ajax({
		url: "log.html",
		cache: false,
		success: function(html){		
			$("#chatbox").html(html); //Insert chat log into the #chatbox div	
			
			//Auto-scroll			
			var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
			if(newscrollHeight > oldscrollHeight){
				$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
			}				
	  	},
	});
}

setInterval (loadLog, 2500);
</script>
<?php
	}
	?>
	<script type="text/javascript"
		src="//ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript">
</script>
</body>
</html>