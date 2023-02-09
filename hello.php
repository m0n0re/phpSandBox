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

// ヒアドキュメント
// 複数行をまとめて文字列として書けるこの文字列は変数展開される

echo <<<LABEL
hi
hi
are
you
okay？
${name}
LABEL;

// Nowdoc
// IDの部分をシングルクォートで囲むとNowdocというのになる。変数展開されない
echo <<<'ID'
hey!
hey!
are
you
okay?
${name}
ID;


// 変数
// 変数の宣言
$test="test";
$_pref_name;
$year2023;

// 代入
$old = 20;
$name = "katoh"."ohoho"."<br/>";

echo "${name}";

// nullについて
// nullは 大文字小文字を区別しない null で定義されている
// null も NULLも同じ 
$hoge; // ->null
$hoge = NULL;

// 変数の型
// phpは変数になんでも格納することができる
$name = 'tanaka';
$old = 30;

// 文字列変数に数値をいれるのもできる
$var = 'yamada';
$var = 1;

$var = '高橋';
print '[値]'.$var.',';
print '[型]'.gettype($var).'<br />';

$var = 180;
print '[値]'.$var.',';
print '[型]'.gettype($var).'<br />';
//gettype(...)で変数の型が取れる

$num1 = 320;
$num2 = $num1;

echo "num1:"."${num1}"."<br/>";
echo "num2:"."${num2}"."<br/>";

// num2にセットしてもnum1は変化しない
// num1とnum2は同じメモリを指すわけではなくそれぞれで保持している
$num2 = 1000;

echo "num1:"."${num1}"."<br/>";
echo "num2:"."${num2}"."<br/>";

// 代入に =& を使うと格納メモリ(？)が同じになる
// num3の値をnum4二セットしてnum3の値をかえるとnum4も変わる
$num3 = 100;
$num4 =& $num3;

echo "num3:"."${num3}"."<br/>";
echo "num4:"."${num4}"."<br/>";

$num4 = 110;

echo "num3:"."${num3}"."<br/>";
echo "num4:"."${num4}"."<br/>";

// 代入演算子
// よくあるやつ
// 変数 += 式
// 変数 -= 式
// 変数 *= 式
// 変数 /= 式
// 変数 %= 式

// 文字連結のやつもある
$str = 'yamada';
$str .= '-san';
echo "str:"."${str}"."<br/>"; // yamada-san

//定数
define("TAX",0.10);
$price1 = 1 * (1+TAX);
$price2 = 1 * (1+TAX);

//数値リテラル
100;
034;
0x3A;

//四則演算
//略

// 数値と文字列を加算したり減算したりするとどうなるのか
echo "5 + 2.4 = ", 5 + 2.4, '<br />';           // 7.4
echo "5 + '8year' = ", 5 + '8year', '<br />';   // 13 (5と8yearの8の和) まじか
echo "5 + '東京' = ", 5 + '東京';               // 5 (東京には数値がないので計算されない)






?>

</body>
</html>