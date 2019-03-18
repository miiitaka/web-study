<?php
$var = 1;
$str = "";
if($var == 0) {
	$str = "JavaScript";
} else {
	$str = "PHP";
}
echo $str;
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>php</title>
	</head>
	<body>
		<?php
		for($i = 0; $i < 5; $i++) {
			echo $i;
		}
		?>
	</body>
</html>

<?php 
echo "Hello World";
?>