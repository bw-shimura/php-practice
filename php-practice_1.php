<?php
// Q1 変数と文字列
$name = '志村';
echo '私の名前は「'. $name . '」です。';


// Q2 四則演算
$num = 5 * 4;
var_dump($num);

$x = $num / 2;
var_dump($x);

// Q3 日付操作
$currentTimestamp = time();

$time = date("Y-m-d H:i:s",$currentTimestamp);

echo '現在の時刻は、'.$time.'です。';



// Q4 条件分岐-1 if文
$device = 'pc';

if($device == 'windows'){
  echo '使用OSは、windowsです。';
} else
if ($device == 'mac'){
  echo '使用OSは、macです。';
}else{
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子


// Q6 配列


// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>