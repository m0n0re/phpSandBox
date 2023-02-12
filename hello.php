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
//echo "5 + '8year' = ", 5 + '8year', '<br />';   // 13 (5と8yearの8の和) まじか → warningになる
//echo "5 + '東京' = ", 5 + '東京';               // 5 (東京には数値がないので計算されない) → warningになる


// if文
$old = 30;

if($old >= 20){
    print '20才以上';
}

// 論理型 true or false で指定 大文字小文字は区別しない
$bool = true;
$bool = false;

// 以下のものはすべてFALSEになる

// FALSE
// 整数の0と浮動小数点数の0.0
// 空文字""
// 文字列の"0"
// 要素の数が0の配列
// NULL
// メンバ変数の数がゼロであるオブジェクト

// ↑以外はすべて  true になる


// 比較演算子
// 大体はjava,c#と同じ、ただし↓がある
// === 型と値が一致していれば真
// !== 型と値が一致していなければ偽

// 論理演算子
// && and 
// || or
// xor
// !...

// if - else // javaと一緒

if(true){

}else{

}

// if -elseif 

if(true){

}elseif(true){

}else{

}

// switch
$variable = '神奈川';

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

// 三項演算子
// 条件式 ? 式1:式2

$lang = 'en';

$msg = $lang == 'Jp'?'こんにちは':'Hello';
print $msg;


// 繰り返し処理
// while (条件){
//  処理1;
//  処理2;
// }

// while(true){
//     while(true){
//         break;      // breakで子whileを抜けるて後ろの処理へ
//         continue;   // continueで抜けて後ろの処理はせず頭に戻る
//         while(true){
//             continue 2; // while 2個分まで戻る
//             break 2;    // breakで2個分まで抜ける
//         } // break1
//     } // break2
//     break;  // breakで親whileを抜ける
// }

// do while
// do{
//     //実行処理
//     //...
// }while(true);

// for1
// javaと一緒！

for($i=0; $i<=10; $i++){
    // 実行
}

// for2
// 変数をn個しこめる。まじか。

for($i=0,$j=0;$i<10;$i++,$j++){
}

// foreach
$preflist = array('tokyo','osaka','nagoya');
foreach ($preflist as $pref) {
    print $pref.'<br/>';
}

$preflist = array('tokyo'=> '東京' ,'osaka'=>'大阪');

foreach ($preflist as $key => $value) {
    print $key.'=>'.$value.'<br/>';
}

// foreachで配列から変数にいれると値をコピーしている
// foreachで取り出した変数をいじっても配列の値は変化しない
// 変化させるには&をつけることで変化させることができる
$pricelist = array(80,100,120);
foreach($pricelist as &$value){
    $value *= 1.05;
}
// $value に値が入りっぱなしなので明示的に削除するらしい
unset($value);

// unset() は、指定した変数を破棄します。
// 関数内部での unset() の挙動は、破壊しようとしている変数の種類によって異なります。
// グローバル化された変数を関数内部で unset() した場合は、 ローカル変数のみが破壊されます。呼び出した側の環境では、unset() が呼ばれる前と同じ値が保持されます。

// 配列
$result[0] = 1;
$result[1] = 2;
$result[2] = 3;

// 配列のキーって変数にできる？→できる
for($i=0;$i<10;$i++){
    $result[$i] = $i;
}

// print_r(); //配列を展開して表示してくれる
print_r($result);

// 配列の中身は文字も数字も入る
$vararray[0] = 14;
$vararray[2] = 'Tokyo';
$vararray[-4] = 8400;

$vararray['8'] = 8;  // この場合数字の8がkeyになる
$vararray['08'] = 8;  // この場合文字列の08がkeyになる

$key = 'peach';
$vararray["price_$key"] = 120; // price_peach のkey

define("INDEX_KEY",8);
$vararray[INDEX_KEY] = 120;

// キーを数値で0から自動でつけてくれる
$autoIndex[] = 1;
$autoIndex[] = 2;
$autoIndex[] = 3;

echo "<br>";

print_r($autoIndex);

// キーの自動採番は数値で一番大きい値からつける
$autoIndex[-4] = 1;
$autoIndex[7] = 2;
$autoIndex[] = 3;   // ←key 8

echo "<br>";

print_r($autoIndex);

// 配列の初期化(array)
// $arrayName = array('' => , );

$arrayA = array();
$arrayB = array('key1'=> 0 , 'key2'=> 1, 'key3'=> 3);

// 多次元配列
$maker = array('富士通', 'NEC', 'Sony', 'Sharp');
$type = array('Note', 'Desktop');

$pc = array($maker, $type);

print $pc[0][1];    // NEC と出力
print $pc[1][0];    // Note と出力

?>

</body>
</html>