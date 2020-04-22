<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($number){
    echo $number*2,"\n";
}
sum(5);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function addition($a,$b){
    echo $a+$b,"\n";
}
addition(3,5);

/*3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。*/

//a1
$num=array(1,3,5,7,9);
function answer($arr){
    $b=1;
    foreach($arr as $a){
        $b*=$a;
    }
    return $b;
}
echo answer($num)."\n";

//a2
list($a,$b,$c,$d,$e)=$num;
echo $a*$b*$c*$d*$e."\n";

/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す 
max_array という関数を実装しようとしています。
途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
      
 }

 return $max_number;
 }*/

$x=array(3,7,5,8,9);
//a1
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
    }
    echo $max_number;
}
max_array($x);

//a2 全く違う方法でコマンドを設定したところ、成功しました。

function max_array2($arr){
    rsort($arr);
    $max_number=$arr[0];
    echo $max_number;
}
max_array2($x);

/*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

1.strip_tags
2.array_push
3.array_merge
4.time, mktime
5.date*/

//1.strip_tags
//テキストからHTMLタグを取り除く。
$text="<h1>tech-boost</h1>";
$text=strip_tags($text);
echo $text;
//<p>タグのみ表示を許可
$text2="<h1>tech</h1><p>boost</p>";
$text2=strip_tags($text2,'<p>');
echo $text2."\n";

//2.array_push
//一つ以上の要素を配列の最後に追加する。
$colors=["red","blue","green"];
array_push($colors,'white','black');
print_r($colors);
echo "\n";
//キーと値がペア配列に値を追加する場合。
$animals=[
    1=>"dog",
    2=>"cat"
    ];
foreach($animals as $key =>$value){
    $animals_key[]=$key;
    $animals_val[]=$value;
}
array_push($animals_key,3,4);
array_push($animals_val,"bard","panda");
$animals=array_combine($animals_key,$animals_val);
print_r($animals);
echo "\n";

//3.array_merge
//一つまたは複数の配列を結合する。連想配列も同じように結合できる。
$array1=[1,2];
$array2=[3,4];
$array3=[6,7];
$array4=array_merge($array1,$array2,$array3);
print_r($array4);
echo "\n";
//連想配列のキーが被っており、上書きせずに結合したい場合
$number1=[
    "z"=>1,
    "q"=>2
    ];
$number2=[
    "z"=>3,
    "q"=>4,
    "k"=>5
    ];
$number3=array_merge_recursive($number1,$number2);
print_r($number3);
echo "\n";

//4.time, mktime
//UNIXタイムスタンプ(CPのシステム時刻)を取得する。
echo time()."\n";
//数日後のスタンプ取得(今日からの日数 * 24 * 60 * 60)
echo time(2 * 24 * 60 * 60),"\n";
//指定した日時のスタンプを取得(時,分,秒,月,日,年)
$timestamp=mktime(15,0,0,4,22,2020);
echo $timestamp,"\n";

//5.date
//現在日時をマークする　年=Y,月=m,日=d,時間=h,分=i,秒=s
echo date('Y年m月d日 h時i分s秒'),"\n";