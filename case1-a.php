<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="">
</head>
<body>
<h1>セッション設定なし</h1>
<?php
echo "session_cache_expire :" . session_cache_expire() . "<br>";
echo "session_cache_limitter :" . session_cache_limiter() . "<br>";
echo '$_SESSION :';
var_export($_SESSION);
?>
<hr>
<form method="post" action="case1-b.php">
    <div>
        NAME<br>
        <input type="text" name="your_name" value="">
    </div>
    <div>
        BODY<br>
        <textarea name="body"></textarea>
    </div>
    <div>
        <input type="submit" value="送信する">
    </div>
</form>
</body>
</html>
