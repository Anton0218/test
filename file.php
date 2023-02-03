<?php 
// 1 задание (5 минут)
$arr = ['Москва', 'Питер', 'Воронеж'];
function func($arr) {
  $str = '';
  for ($i = 0; $i < count($arr); $i++) {
    if ($i != count($arr)-1) {
      $str .= $arr[$i] . ', ';
    } else {
      $str .= $arr[$i] . '.';
    }
  }
  return $str;
}
echo func($arr) . '<br>';

//2 задание (20 минут)
function func2(float $float) {
  $num = (($float * 10) % 100) / 10;
  if ($num < 5) {
    $min = $float - $num;
    $max = $float + 5 - $num;
  } else {
    $min = $float - $num + 5;
    $max = $float + $num - 5;
  }
  
  if (5 - $num < 2.5 ) {
    $res = $max;
  } else {
    $res = $min;
  }
  return $res;
}

// 3 задание (7 минут)
function func3(string $num) {
  $numStr = strlen($num);
  $n = $num[$numStr-1];
  switch ($n) {
    case '1':
      $str = ' компьютер';
      break;
    case '2':
    case '3':
    case '4':
      $str = ' компьютера';
      break;
    default:
      $str = ' компьютеров';
      break;
 }
  return (string) $num . $str;
}

//4 задание (1 минута)
function func4($num) {
  for ($j=2; $j < $num; $j++) {
    if ($num % $j == 0) {
      return 'число не является простым';
    } else {
      return 'число простое';
    }
  }
}

//5 задание (15 минут)
function func5(array $arr1, array $arr2) {
  $res = [];
  $count1 = array_count_values($arr1);
  $count2 = array_count_values($arr2);
  
  foreach ($count1 as $key1=>$value1) {
    foreach ($count2 as $key2=>$value2) {
      if ($value1 >= 2 AND $value2 >= 2 AND $key1 == $key2) {
        array_push($res, $key1);
      }
    }
  }
  return $res;
}
?>
<script src="func6.js"></script>

