<style>
:root {
	 --input-color: #000;
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
body {
  background-color: #1f1f1f;
}
.center {
  max-width: 500px;
  margin: auto;
  padding: 10px;
  text-align: center;
}
#loginform {
  text-align: center;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
  border-radius: 8px;
}
#name, #enter {
    margin: auto;
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
#name::placeholder {
	 color: var(--input-placeholder);
}
#name:focus {
	 outline: none;
	 border-color: var(--input-border-focus);
}
</style>