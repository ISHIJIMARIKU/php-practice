<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します '."\n\n";

for ($i = 1; $i <= 100; $i++) 
{
  if($i%5 === 0 && $i%4 === 0)
  {
    echo 'tic-tac'."\n";
  }
  elseif ($i%4 === 0) 
  {
    echo 'tic'."\n";
  }
  elseif($i%5 === 0)
  {
    echo 'tac'."\n";
  }
  else 
  {
    echo $i . "\n";
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

// 問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。'; 

// 問題２
foreach ($personalInfos as $x => $y )
{
    echo ($x + 1).'番目の'. $y['name'].'のメールアドレスは'.$y['mail'].'で、電話番号は'.$y['tel'].'です。'."\n";
}

//間違い回答
// foreach ($personalInfos as $x => $y )
// {
//     echo $x.'番目の'. $y['name'].'のメールアドレスは'.$y['mail'].'で、電話番号は'.$y['tel'].'です。'."\n";
// }

// 問題３
$ages = [25, 30, 18];

foreach ($personalInfos as $y => $info) 
  {
    $personalInfos[$y]['age'] = $ages[$y];
  }

var_dump($personalInfos);



// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

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

$student = new Student(120, "山田");

echo "学籍番号".$student->studentId.番の生徒は{$student->studentName}です。";

// 誤答
// $id = 120;
// $name = '山田';


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>