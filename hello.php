<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>

<?php
print 'Hello WORLD';

// echo 引数に指定した文字列を出力する 引数を増やせば複数の文字列も出力できる

echo "args1","args2";
// echo ("hoge")という書き方もできるが非推奨

// print は複数の引数を渡すことはできず、戻り値が１になる。
// echoで統一しとけばとりあえずOKらしい
print "print";

// https://www.javadrive.jp/php/string/index4.html
// エスケープシーケンス
echo 'シングルクォーテーション (\')';

// \n    改行 0x0A
// \r    キャリッジリターン 0x0D
// \t    水平タブ 0x09
// \v    垂直タブ 0x0B
// \e    エスケープ 0x1B
// \f    フォームフィード 0x0C
// \\    バックスラッシュ(\)
// \$    ドル記号($)
// \"    ダブルクオーテーション

// \n や \$ などは ダブルクォーテーションで囲んだときのみ有効
echo 'hello! \n php!'; // ->hello! \n php!
echo "hello! \n php"; // -> hello! php!

// web上で改行したいときはBRタグにしないとダメ
echo 'hello! <br> php!<br>';

// https://www.javadrive.jp/php/string/index5.html
// 文字列の中で変数展開する

$name = "takahashi";
echo "my name is {$name}<br>";

//変数の後に半角スペースがあると文字列の中の変数展開ができるでもわかりにくいのでやらないほうがいい
echo "my name is $name <br>"; 
?>

</body>
</html>