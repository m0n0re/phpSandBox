<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$link = mysqli_connect('localhost', 'testuser', 'testuser');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysqli_select_db($link,'uriage');

if(!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>uriageデータベースを選択しました。</p>');

$result = mysqli_query($link, "SELECT * FROM hanbai");
printf("Select returned %d rows.\n", mysqli_num_rows($result));

while($row = mysqli_fetch_assoc($result)){
    print($row['shouhin_id']);
    print($row['uriage']);
}

$close_flag = mysqli_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}



?>
</body>
</html>