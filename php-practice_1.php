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
$age = 22;

$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$prefecture = ['東京都','神奈川県','千葉県','埼玉県','茨城県','栃木県','群馬県'];

echo $prefecture[2].'と'. $prefecture[3].'は関東地方の都道府県です。';


// Q7 連想配列-1
$kname = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];

foreach($kname as $value){
  echo $value . "\n";
}

// Q8 連想配列-2
foreach ($kname as $city => $cname){

  if ($city === '埼玉県'){
    echo $city. 'の県庁所在地は、'. $cname. 'です。';
  }
}

// Q9 連想配列-3
$kname['宮城県']='';
$kname['愛知県']='';

foreach ($kname as $city => $cname){

  if (!empty($cname)){
    echo $city . 'の県庁所在地は、'. $cname. 'です。'."\n";
  }else{
    echo $city . 'は関東地方ではありません。'."\n";
  }
}

// Q10 関数-1
function hello($names){
  echo $names.'こんにちは。';
}

hello('二宮さん');
hello('工藤さん');

// Q11 関数-2
function calcTaxInPrice($price){
  return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum ($num){
  if ($num % 2 === 0){
    echo $num . 'は偶数です。';
  }else{
    echo $num . 'は奇数です';
  }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade ($grade){
  switch ($grade){
    case 'A':
    case 'B':
        return '合格です。';
        break;
        
    case 'C':
      return '合格ですが追加課題があります。';
      break;

    case 'D':
      return '不合格です。';
      break;
        
    default:
      return '判定不明です。講師に問い合わせてください。';
      break;
      }
}

echo evaluateGrade('A');
echo evaluateGrade('テスト');

?>