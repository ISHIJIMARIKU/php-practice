<?php
// Q1 変数と文字列
$name='安藤';
echo '私の名前は「'.$name.'」です。';

// Q2 四則演算
$n=4;
$u=5;
$num=$n * $u;
var_dump($num);
$num /=2;
var_dump($num);


// Q3 日付操作
$timestamp = strtotime(“2019-05-23 14:48:22”);
echo date("Y年m月d日 H時i分s秒",$timestamp);
echo '現在時刻は、'. date("Y年m月d日 H時i分s秒",$timestamp).'です。';

// Q4 条件分岐-1 if文

// if($device=='mac')
//   {
//     echo'使用OSは、'.$device.'です。';
//   }

// if ($device=='windows')
//   {
//     echo'使用のOSは、'.$device.'です。';
//   }

$device='mac';
if ($device==='mac')
  {
    echo'使用OSは、'.$device.'です。';
  }
  else 
  {
    echo'どちらでもありません。';
  }

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age > 16)?'成人です。':'未成年です。';
echo $message;

// Q6 配列
// $array = ['東京都','埼玉県','神奈川','栃木県','千葉県'];
//   for (c = 3;f = 4;){echo $array[c]'と' $array[f]'は関東地方の都道府県です。';}
$arr = ['東京都',
        '埼玉県',
        '神奈川県',
        '栃木県',
        '千葉県',
        '茨城県',
        '郡馬県'
      ];
  echo $arr[3].'と'.$arr[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
// $array = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮','郡馬県'=>'前橋市','茨城県'=>'水戸市'];
// for ($i = 1; $i <= 6; $i++) {echo $i . '.' . $array[$i] ."\n";}

$var = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮',
  '郡馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];

foreach ($var as $x => $y) 
  {
    echo $y . "\n";
  }

// Q8 連想配列-2
$var = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮',
  '郡馬県'=>'前橋市',
  '茨城県'=>'水戸市'
];
foreach ($var as $x=>$y){
    if($x==='埼玉県'||$y==='さいたま市'){
      echo $x. 'の県庁所在地は、'.$y.'です。'."\n";
    }
}

// 間違い例なので無視してください。
// foreach ($var as $x=>$y){
//   echo $x. $y;

//   // if ()
// }
  

// Q9 連想配列-3
$var = [
  '東京都'=>'新宿区',
  '神奈川県'=>'横浜市',
  '千葉県'=>'千葉市',
  '埼玉県'=>'さいたま市',
  '栃木県'=>'宇都宮',
  '郡馬県'=>'前橋市',
  '茨城県'=>'水戸市',
  '愛知県'=>'名古屋市',
  '大阪府'=>'大阪市'
];

foreach ($var as $x=>$y){
  if($x==='東京都'||
    $x==='神奈川'||
    $x==='千葉県'||
    $x==='埼玉県'||
    $x==='栃木県'||
    $x==='郡馬県'||
    $x==='茨城県'||
    $y==='新宿区'||
    $y==='横浜市'||
    $y==='千葉市'||
    $y==='さいたま市'||
    $y==='宇都宮市'||
    $y==='前橋市'||
    $y==='水戸市'
    )
    {
      echo $x. 'の県庁所在地は'.$y.'です。'."\n";
    }
  else{
      echo $x.'は関東地方ではありません。'."\n";
  }  
}

// Q10 関数-1

function hello($name)
{
  echo $name.'さん、こんにちわ。'."\n";
}
hello('緑谷');
hello('爆豪');

// Q11 関数-2

function calcTaxInPrice($price)
{
  return $price * 1.1;
}

$taxInPrice = calcTaxInPrice(1000);

echo '1000円の商品の税込価格は' . $taxInPrice . '円です。';

// 間違い回答のため無視していいです。
// function calcTaxInPrice($price,$taxInPrice)
// {
//   return $price.'円の商品の税込価格は'.$price * (1 + $taxInPrice).'円です。';
// }

// echo calcTaxInPrice(1000,0.1);

// Q12 関数とif文
function distinguishNum($num)
{
    if($num % 2 === 0)
    {
      return $num.'は偶数です。';
    }
    else 
    {
      return $num.'は奇数です。'."\n";   
    }
}   
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($result)
{
  switch($result)
  {
    case 'A':
    case 'B':
      return '合格です。'."\n";
      break;

    case 'C':
      return '合格ですが追加課題があります。'."\n";
      break;

    case 'E':
      return '不合格です。'."\n";
      break;

    default:
      return '判定不明です。講師に問い合わせてください。';
      break;
  }
}
echo evaluateGrade('A','B');
echo evaluateGrade('D');

?>