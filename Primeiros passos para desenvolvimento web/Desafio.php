<html>
<head>
	<title>Meu primeiro site em PHP! Woohoo!</title>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	
	<style type="text/css">
		.linha{
		font-weight: bold;
		color: green;
		padding-left: 10px;
		line-height: 50px;
	}
	</style>
	
	<script>
	$( function() {
    $( "#accordion" ).accordion();
	} );
	</script>
</head>
<body>
	<?php
		for ($i=0; $i<10; $i++){
			print("<span class=\"linha\">Linha número " . $i . "</span><br/>");
		}
	?>
<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
	</div>
</div> 
</body>
	<script type="text/javascript">
		$(document).ready(function() {
		alert("Woohoo!");
		});
	</script>
</html>