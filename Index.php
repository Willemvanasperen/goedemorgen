<?php 
	date_default_timezone_set("Europe/Amsterdam");
	$time = date("H:i:s");
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title></title>

</head>
<body id="bg">
<script type="text/javascript">
    var timeout = setTimeout(reload, 1000);
    function reload(){
        $("#reload").load('index.php #reload', function(){
            timeout = setTimeout(reload, 1000);
        });
    }

</script>
<div id= "reload">
	<?php
	if ($time >= "06:00" and $time < "12:00"){
		echo "<h1> Goede morgen </h1> <p> Het is nu $time</p>";
		echo "<style>#bg{background-image:url(backgrounds/morning.png); background-attachment: fixed; background-size: cover;}</style>";
	}
	elseif ($time >= "12:00" and $time < "18:00") {
		echo "<h1> Goede middag </h1> <p> Het is nu $time</p>";	
		echo "<style>#bg{background-image:url(backgrounds/afternoon.png); background-attachment: fixed; background-size: cover;}</style>";
	}
	elseif ($time >= "18:00" and $time < "24:00") {
		echo "<h1> Goede avond </h1> <p> Het is nu $time</p>";
		echo "<style>#bg{background-image:url(backgrounds/evening.png); background-attachment: fixed; background-size: cover;}</style>";
	}
	elseif ($time >= "00:00" and $time < "06:00") {
		echo "<h1> Goede nacht </h1> <p> Het is nu $time</p>";
		echo "<style>#bg{background-image:url(backgrounds/night.png); background-attachment: fixed; background-size: cover;}</style>";
	}
	?>

</body>
</html>