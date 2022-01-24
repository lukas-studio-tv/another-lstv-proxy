<link rel="shortcut icon" href="https://www.lstv.ml/s/o/p/sb/src/iconSH.png" type="image/x-icon">
<div id="header" class="header">
    <a><t id="header_t">Welcome, <b id="myName"><?php echo $_SESSION['name']; ?></b></t></a>
    <a href="https://www.lstv.ml/s/o/p/ps/ep.php"><t id="header_b">Find discussion</t></a>
				<a id="exit" href="#">LogOut</a>
</div>
<style>
    .header {
        background-image: linear-gradient(to right, #1f1f1f, #383838);
        box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
        color: #FFFFFF;
        font-size: 25px;
        text-align: left;
        position: fixed;
        top: 0;
        left: 0;
        margin: center;
        width: 100%;
    }

    #exit {
        text-align: right;
        float: right;
        display: block;
        color: #f2f2f2;
        padding: 12px 14px;
        text-decoration: none;
        font-size: 20px;
    }

    #header_b {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    #header_t {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }


    #header_i {
        float: left;
        display: block;
        color: #f2f2f2;
        align: center;
        padding: 7px 8px;
        text-decoration: none;
        font-size: 17px;
    }

    #header_b:hover {
        background: #ddd;
        color: black;
    }

    #header_i:hover {
        background: #0091ff;
        color: black;
    }

.postbox {
    position: fixed;
    bottom: 0px;
    width: 100%;
    background-image: linear-gradient(to right, #FFFFFF, #ebebeb);
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    left: 0px;
    padding: 10px;
}
.form-field {
    width: 90%;
    resize: none;
    border-radius: 20px;
    overflow: auto;
    outline: none;
    text-align: left;
    border: 1px solid #000;
    padding-left: 10px;
    height: 30px;
}
.form-field:active {
}
textarea {
    width: 0px;
    height: 0px;
    display:none;
}
#submitmsg {
    border-radius: 20px;
    outline: none;
    float: right;
    height: 30px;
    border: none;
    background-image: linear-gradient(to right, #36D1DC, #5B86E5);
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    color: #FFFFFF;
    padding-right: 10px;
    padding-left: 10px;
}
.btn-cls {
    padding: 0px;
    padding-right: 50px;
    outline: none;
    float: right;
}
.msg {
    border-radius: 20px;
    outline: none;
    float: left;
    border: none;
    background-image: linear-gradient(to right, #36D1DC, #5B86E5);
    box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, .3), 0 0.0625rem 0.125rem rgba(0, 0, 0, .2);
    color: #FFFFFF;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    padding-right: 15px;
}
.ccc {
    padding-top: 0px;
    padding-bottom: 5px;
    padding-left: 0px;
    padding-right: 0px;
    margin: 0px 0px 0px 0px; 
}
</style>
<div class="postbox" id="postbox">
<div id='msgline' class='msgln'>
		<form name="message" action=""><textarea class="form-field" name="usermsg" type="text" id="usermsg" size="63" />verifed</textarea>
<input class="form-field" name="usertitle" type="text" id="usertitle" size="63"/>
<div class="btn-cls">
<input name="submitmsg" type="submit" id="submitmsg" value="Send" class="submitmsg"/>
</div>
</form>
</div></div>
<script>
// Scans messages by you and sets the background to grey
f();
function f () {
    setTimeout(
        function () {
            var name = document.getElementById('myName').innerHTML;
            var str1 = '[id=';
            var res = str1.concat(name);
            var out = res.concat("]");
            document.querySelectorAll(out).forEach(element=> {
                element.style.backgroundImage = 'linear-gradient(to right, #bdc3c7, #2c3e50)';
                element.style.float = "right";
            });
            f();
        }, 0
    );
}
</script>