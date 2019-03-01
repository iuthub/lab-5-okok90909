<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<?php
		if ((isset($_POST['name'])) && (isset($_POST['section'])) && (isset($_POST['cardtype']) && 
			($_POST['name'])!="" && ($_POST['name'])!="" && ($_POST['name'])!="") ){
			file_put_contents("suckers.txt", $_POST['name'].';'.$_POST['section'].';'.$_POST['cardnumber'].';'.$_POST['cardtype'].";<br>", FILE_APPEND);
			?>
			<h1>Thanks, sucker</h1>
			<p>Name<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['name']?>
			</p>
			<p>Section<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['section']?>
			</p>
			<p>Credit Card<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['cardnumber']?> (<?=$_POST['cardtype']?>)
			</p>
			<p>Here are all the suckers who have submitted here:<br><br>

		<?php
		echo file_get_contents("suckers.txt");
		} else {
		
			?>
			<h1>Sorry</h1>
			<p>You didn't fill out the form completely.  <a href="buyagrade.html">Try again?</a></p>
		<?php

		}
	?>
	<body>


			
	</body>
</html>

