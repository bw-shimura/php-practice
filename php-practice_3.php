<?php

//追加課題１
//「いけ、ネズミポケモンピカチュウ！！１０万ボルトだ！！」と出力

//Pokemonクラスをもとに実装
//コンストラクタを作成し、各文字列をプロパティに呼び出すように実装
//$nameにはポケモンの名前（ピカチュウ）
//$elementにはポケモンの属性（ネズミ）
//$skillには技名（10万ボルト）

class Pokemon{

  public $name;
  public $element;

  public function __construct($pokename,$pokeelement){
    $this->name = $pokename;
    $this->element = $pokeelement;
  }

  public function attack($skill){
    echo 'いけ、' . $this->element . 'ポケモン' . $this->name . '!!' . $skill . 'だ！！';
  }

}

$pikatyuu = new Pokemon('ピカチュウ','ネズミ');

$pikatyuu -> attack('10万ボルト');


//追加課題2
//社員の情報と出勤記録を管理するためのEmployeeクラスを作成

//クラス名：Employee
//プロパティ（１，employeeId 社員のID/正の整数　２，employeeName 社員名/任意の文字列）
//コンストラクタ：社員IDと社員名をプロパティから呼び出せるように実装
//メソッド：checkIn()メソッド　

class Employee{

  public $employeeId;
  public $employeeName;

  public function __construct($empId,$empName){
    $this->employeeId = $empId;
    $this->employeeName = $empName;
  }

  public function checkIn(){
    echo $this->employeeName . 'が出勤しました。社員ID:' . $this->employeeId;
  }
}

$staff = new Employee(1,'山田太郎');

$staff -> checkIn();

var_dump($staff);

?>