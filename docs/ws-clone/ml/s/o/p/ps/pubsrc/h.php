<link rel="shortcut icon" href="https://www.lstv.ml/s/o/p/sb/src/iconSH.png" type="image/x-icon">
<div id="header" class="header">
    <a><t id="header_t">Welcome, <b><?php echo $_SESSION['name']; ?></b></t></a>
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

.submitmsg {
    width: 100%;
     display: block;
	 padding: 8px 16px;
	 line-height: 25px;
	 font-size: 14px;
	 font-weight: 500;
	 font-family: inherit;
	 border-radius: 6px;
	 -webkit-appearance: none;
	 color: var(--input-color);
	 border: 1px solid var(--input-border);
	 background: var(--input-background);
	 transition: border 0.3s ease;
}

.submitmsg:focus {
	 color: var(--group-color-focus);
	 background: var(--group-background-focus);
	 border-color: var(--group-border-focus);
}
body {
    font-family: 'Roboto', sans-serif;
}
.form-field {
    width: 91.5%;
}
.msgln {
    border-radius: 8px;
    background-color: #e3e3e3;
    padding: 8px;
}
:root {
	 --input-color: #99a3ba;
	 --input-border: #cdd9ed;
	 --input-background: #fff;
	 --input-placeholder: #cbd1dc;
	 --input-border-focus: #275efe;
	 --group-color: var(--input-color);
	 --group-border: var(--input-border);
	 --group-background: #eef4ff;
	 --group-color-focus: #fff;
	 --group-border-focus: var(--input-border-focus);
	 --group-background-focus: #678efe;
}
 .form-field {
	 display: block;
	 padding: 8px 16px;
	 line-height: 25px;
	 font-size: 14px;
	 font-weight: 500;
	 font-family: inherit;
	 border-radius: 6px;
	 -webkit-appearance: none;
	 color: var(--input-color);
	 border: 1px solid var(--input-border);
	 background: var(--input-background);
	 transition: border 0.3s ease;
}
 .form-field::placeholder {
	 color: var(--input-placeholder);
}
 .form-field:focus {
	 outline: none;
	 border-color: var(--input-border-focus);
}
 html {
	 box-sizing: border-box;
	 -webkit-font-smoothing: antialiased;
}
textarea {
  resize: vertical; /* user can resize vertically, but width is fixed */
}
.center {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
</style>