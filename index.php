<?php 
	require 'includes/contents.php'; 
	$formheader = $_POST['Header'];
	$formfooter = $_POST['Footer'];
	$formtitle = $_POST['Title'];
	$hr = '$header';
	$fr = '$footer';
	$ti = '$title';
	if (isset($_POST['submitform'])) {
		if (trim($formheader&&$formfooter&&$formtitle) == "") {
			$novalues = '<div class="alert alert-danger" id="error" role="alert"><strong>Idiot!</strong>&nbsp;Maybe&nbsp;<strong>type</strong>&nbsp;some&nbsp;<strong>values</strong>.</div>';
		}else{
			$filename = "includes/contents.php";
			$output .= "<?php 
	$hr = '$formheader';
	$fr = '$formfooter';
	$ti = '$formtitle';
?>";
			$filehandle = fopen($filename, 'w+');
			fwrite($filehandle, $output);
			fclose($filehandle);
			header('Location: '.$_SERVER['PHP_SELF']);
		}
	}
?>
<html lang="gb">
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="includes/style.css">
		<link rel="icon" type="image/png" href="data:image/png;base64,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">
	</head>
	<body>
		<div id="header">
			<h1><?php echo $header; ?></h1>
		</div>
		<div id="content">
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-header"></span></span>
							<input type="text" class="form-control" name="Header" placeholder="Header">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></span>
							<input type="text" class="form-control" name="Footer" placeholder="Footer">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
							<input type="text" class="form-control" name="Title" placeholder="Title">
						</div><br>
						<input type="submit" class="btn btn-primary" name="submitform" value="Change">
						<a href="donate.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Donate</button></a><br><br />
					</form>
					<?php if($novalues){ echo $novalues; } ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<p><?php echo $footer; ?></p>
		</div>
	</body>
</html>
