<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<title>Web Editor v0.1 | DevelopHowTo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="./bootstrap-3.2.0/css/style.css" rel="stylesheet">
<link href="./bootstrap-3.2.0/css/codemirror.css" rel="stylesheet">
<link href="./bootstrap-3.2.0/custom.css" rel="stylesheet">
<script type="text/javascript" src="./JQuery/jquery-3.1.1.min.js"></script>
<style>
.container {
	padding-top:50px;
}
#textareaCode {
    background-color: #ffffff;
    font-family: consolas,"courier new",monospace;
    font-size: 15px;
    height: 100%;
    width: 100%;
    padding: 0px;
    resize: none;
    border: none;
    line-height: normal;
	Justify: Left;
	border: 2px solid black;
}
.CodeMirror.cm-s-default {
  line-height:normal;
  padding: 4px;
  height:100%;
  width:100%;
}
textarea {
    overflow: auto;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
      <button  id="run" class="w3-button w3-bar-item w3-green w3-hover-white w3-hover-text-green" style="font-size:16px" onclick="submitTryit(1);snhb.startAuction(['try_it_leaderboard']);">Run &raquo;</button><br>
  <span class="w3-right w3-hide-medium w3-hide-small" style="padding:8px 8px 8px 8px;display:block"></span>
  <span class="w3-right w3-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
		</div>
	</div>
  <div class="row">
        <div class="col-md-6" style="height:500px;">
			<textarea style="border: 0px solid white !important;" autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>
<body>
<h1 style="font-family: 'Kaushan Script', cursive;">Welcome to DevelopHowTo Web Editor(Beta). Start building your Web Pages on the Go.</h1>
</body>

</html>

			</textarea>
		</div>
    <p class="col-md-6 style_1">Result</p>
		<div class="col-md-6" style="height:500px;">
			<iframe  id="iframeResult" name="iframeResult" style="border: 2px solid white;height: 100%;width: 100%; background-color:#fff;"></iframe>
		</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('#iframeResult').contents().find("html").html($("#textareaCode").val());
	$("#run").click(function(){
		$('#iframeResult').contents().find("html").html($("#textareaCode").val());
    });
});
function colorcoding() {
  var ua = navigator.userAgent;
  //Opera Mini refreshes the page when trying to edit the textarea.
  if (ua && ua.toUpperCase().indexOf("OPERA MINI") > -1) { return false; }
  window.editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
    mode: "text/html",
    htmlMode: true,
    lineWrapping: true,
    smartIndent: false,
    addModeClass: true
  });
//  window.editor.on("change", function () {window.editor.save();});
}
colorcoding();
</script>
</body>
</html>