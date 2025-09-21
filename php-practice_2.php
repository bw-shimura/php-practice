<?php
// Q1 tic-tac問題
for($num = 1; $num <= 100; $num++){
  if(($num % 4) === 0 && ($num % 5) === 0){
     echo 'tic-tac '."\n";
  }elseif(($num % 4) === 0){
     echo 'tic'."\n";
  }elseif(($num % 5) === 0){
    echo 'tac'."\n";
  }else{
    echo $num . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

//問題１　配列を用いて文字列出力
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題２　foreachを用いて文字列出力
foreach ($personalInfos as $person){
  echo '1番目の' . $person['name'] . 'のメールアドレスは' . $person['mail'] . 'で、電話番号は' . $person['tel'] . 'です。' . "\n";
}

//問題３　$ageListを使用して$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $person){
  $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
//条件
//studentIdプロパティは正の整数を設定
//nameプロパティは任意の値を設定

class Student
{

  //プロパティ
    public $studentId;
    public $studentName;

  //メソッド
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

//インスタンス
$kimura = new Student(23,'木村');

//文字列出力
echo '学籍番号' . $kimura -> studentId . '番の生徒は' . $kimura -> studentName . 'です。';




// Q4 オブジェクト-2


// Q5 定義済みクラス
?>