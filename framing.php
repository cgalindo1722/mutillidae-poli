<center>
<div style ="background-color:#6495ed;background-color:#b0c4de; background: #2079b0;
  background-image: -webkit-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -moz-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -ms-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -o-linear-gradient(top, #2079b0, #eb94d0);
  background-image: linear-gradient(to bottom, #2079b0, #eb94d0);
  text-decoration: none; page-title">
<script src="./javascript/follow-mouse.js"></script>
<div style ="background-color:#6495ed;background-color:#b0c4de; background: #2079b0;
  background-image: -webkit-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -moz-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -ms-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -o-linear-gradient(top, #2079b0, #eb94d0);
  background-image: linear-gradient(to bottom, #2079b0, #eb94d0);
  text-decoration: none; page-title; page-title"><h1>Visor de páginas</h1></div>

<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>

<table>
	<tr>
		<td colspan="2" class="form-header">Haga clic en una parte de la imagen para ampliar</td>
	</tr>
	<tr><td></td></tr>
	<tr><td>Comenzando con el mouse fuera de la imagen, mueva el mouse sobre la imagen, luego haga clic para ampliar una parte de la imagen.</td></tr>
</table>

<iframe
	id="id-iframe" 
	width="500px" 
	height="600px" 
	src="rene-magritte.php" 
	style="margin-left:auto; margin-right:auto; border:none; overflow:hidden;"
	>
</iframe>

<div id="id-hover-div" class="click-jacking-button"
onclick="window.alert('This page has been hijacked by the Mutillidae development team.');document.location.href='https://github.com/webpwnized/mutillidae';"
>
Giant Invisible Click-Jacking Button 
</div>

<script>
	objHoverDiv = document.getElementById('id-hover-div');
</script>
</div>
</center>
