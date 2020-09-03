<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание №2 - главная</title>
   <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <body>
  

<nav class="menu">
  <ul>
    <li><a href="#">Главная</a></li>
    <li><a href="table_table.php">Таблица-table</a></li>
    <li><a href="table_div.php">Таблица-div</a></li>
  </ul>
</nav>
<br><br><br>

<?php
    
echo '<h1>Домашнее задание-3</h1>';

echo '<br>';
echo '<h3>Действия с числами</h3>';

echo '<h4> - Получить остаток деления 7 на 3</h4>';
$a = 7;
$b = 3;
$c = $a%$b;
echo 'Ответ: остаток деления = '.$c.'<br>';     

echo '<br>';
echo '<h4> - Получить целую часть сложения 7 и 7,15</h4>';
$a = 7;
$b = 7.15;
$c = $a +$b;
echo 'Ответ: '.intval($c).'<br>';

echo '<br>';
echo '<h4> - Получить корень из 25</h4>';
echo 'Ответ: корень из 25 = '.sqrt(25).'<br>';


echo '<br><br>';
echo '<h3>Действия со строками</h3>';


echo '<h4> - Получить 4-е слово из фразы - Десять негритят пошли купаться в море</h4>';
$string = 'Десять негритят пошли купаться в море';
$pieces_string = explode(" ", $string);
echo 'Ответ: 4-е слово - '.$pieces_string[3].'<br>';

echo '<br>';
echo '<h4> - Получить 17-й символ из фразы - Десять негритят пошли купаться в море</h4>';
echo 'Ответ: 17-й символ из фразы - '.mb_substr($string, 16, 1, "UTF-8").'<br>';

echo '<br>';
echo '<h4> - Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море</h4>';
$string_doun = mb_strtolower($string);
$string_up = mb_convert_case($string_doun, MB_CASE_TITLE, "UTF-8");
echo 'Ответ: '.$string_up.'.'.'<br>';

echo '<br>';
echo '<h4> - Посчитать длину строки - Десять негритят пошли купаться в море</h4>';
echo 'Ответ: длинна строки - '.mb_strlen($string).'<br>';

echo '<br><br>';
echo '<h3>Действия с логическими значениями</h3>';
$boolTrue = true;
$boolFalse = false;
$intTrue = 1;
$intFalse = 0;
     
echo '<h4> - Правильно ли утверждение true равно 1</h4>';
if ($boolTrue == $intTrue) {
   echo 'Ответ: правильно'.'<br>';
  }
  else{
       echo 'Ответ: не правильно'.'<br>';
    }

echo '<br>';
echo '<h4> - Правильно ли утверждение false тождественно 0</h4>';
if ($boolFalse === $intFalse) {
   echo 'Ответ: правильно'.'<br>';
  }
  else{
       echo 'Ответ: не правильно'.'<br>';
    }

echo '<br>';
echo '<h4> - Какая строка длиннее three - три</h4>';
$len_three = strlen('three');
$len_tri = mb_strlen('три');
echo 'Длинна строки three - '.$len_three.'<br>';
echo 'Длинна строки три - '.$len_tri.'<br>';
if ($len_three > $len_tri) {
  echo 'Ответ: длинна строки three длиннее три'.'<br>';
}
if ($len_three < $len_tri) {
  echo 'Ответ: длинна строки три длиннее three'.'<br>';
}


echo '<br>';
echo '<h4> - Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2</h4>';
$rez1 = 125 * 13 + 7;
$rez2 = (223 + 28) * 2;
echo '125 умножить на 13 плюс 7 = '.$rez1.'<br>';
echo '223 плюс 28 умножить 2 = '.$rez2.'<br>';
if ($rez1 > $rez2) {
  echo 'Ответ: 125 умножить на 13 плюс 7 больше 223 плюс 28 умножить 2'.'<br>';
}
else{
  echo 'Ответ: 223 плюс 28 умножить 2 больше 125 умножить на 13 плюс 7'.'<br>';
}

echo '<br><br>';

?>

  </body>
</html>