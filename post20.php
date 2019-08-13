<?php
echo $_POST['post'];
$message = $_POST['post'];
echo $message;
?>

<!DOCTYPE html>
<html>
<head>
<title>Git</title>
</head>
<body>
<p><a href='get20.php?key=<?php echo $message; ?>'>飛ぶ</a></p>
</body>
</html>
