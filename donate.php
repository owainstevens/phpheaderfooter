<html lang="gb">
	<head>
		<style>
		input[type="submit"]{
			border: none;
			background: none;
			color: -webkit-link;
			text-decoration: none;
		}
		input[type="submit"]:hover{
			text-decoration: underline;
		}
		</style>
	</head>
	<body>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_donations">
			<input type="hidden" name="business" value="owainstevens@mail.com">
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="item_name" value="Owain Stevens">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="currency_code" value="GBP">
			<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
			<input type="submit" value="Click to Continue" class="button" onClick="javascript:validForm();" name="submit">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	</body>
</html>
