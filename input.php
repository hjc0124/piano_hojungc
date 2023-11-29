<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
<style>
      body {
	font-family: 'Gowun Dodum', sans-serif;
        font-weight: 400;
      }
</style>
	<title>Piano</title>
</head>
	
<body>
	<?php
	    $v_test = $POST["words"];
	    print_r($v_test);
	?>
	<h3 style = "text-align:center;">댓글 작성</h3>
	<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<label>내용: &nbsp;<input type = "text" name = "words" placeholder="여기에 입력하세요" value = "<?php echo $v_test;?>"></label>
		<input type = "submit" value = "입력">
	</form>
</body>
</html>



