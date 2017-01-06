<?php

// Robotクラスをインスタンス化(オブジェクトを生成)
$robot = new Robot();

// // 各メソッドに値を設定
// $robot->setName('ドラえもん');
// $robot->setFood('どら焼き');
// //挨拶文を表示
// $robot->greeting();

// echo '名前：' . $robot->getName() . '<br>';
// echo '食べ物：' . $robot->getFood() . '<br>';

// 初期値を出力
echo '初期値の名前：' . $robot->getName() . '<br>';
echo '初期値の食べ物：' . $robot->getFood() . '<br>';

$robot->setName('ドラ・ザ・キッド');
$robot->setFood('ケチャップとマスタードをかけたドラ焼き');
$robot->greeting();


class Robot{
  // プロパティ
  private $name;
  private $food;

  // コンストラクタで初期値を設定
  function __construct(){
    $this->name = 'ドラえもん';
    $this->food = 'どら焼き';
  }

  // nameプロパティに値を設定するメソッド
  public function setName($namae){
  	$this->name = $namae;
  }

  // nameプロパティのゲッターメソッド追加
  public function getName(){
    return $this->name;
  }

  // foodプロパティに値を設定するメソッド
  public function setFood($tabemono){
  	$this->food = $tabemono;
  }

  // foodプロパティのゲッターメソッド追加
  public function getFood(){
    return $this->food;
  }

  // talkメソッド
  private function talk(){
    echo 'こんにちは、ボクの名前は' . $this->name . 'です<br>';
  }

  // eatメソッド
  private function eat(){
    echo '好きな食べ物は' . $this->food . 'です<br>';
  }

  // greetingメソッド
  public function greeting(){
    $this->talk();
    $this->eat();
  }
}


?>