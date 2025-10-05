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

?>