<!DOCTYPE html>
<html>
  <head>
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
    <h1>Домашнее задание-2</h1>
    
    <h3>Урок №3</h3>
    <?php
      echo 'Сложение.'.'<br>';
      $a = 5;
      $b = '6';
      $c = $a + $b;
      echo '$a = '.$a.'<br>';
      echo '$b = '.$b.'<br>';
      echo '$a + $b = '.$c.'<br>';
      
      echo '<br>';
      echo 'Конкатенация.'.'<br>';
      $a = 'sinhro';
      $b = 'fazotron';
      echo '$a = '.$a.'<br>';
      echo '$b = '.$b.'<br>';
      echo $a.$b.'<br>';
      
      echo '<br>';
      echo 'Выборка из строки.'.'<br>';
      echo 'Исходная строка - '.$b.'<br>';
      $sub_str = substr($b, 4, 4);
      echo 'Выборка - '.$sub_str.'<br>';
      
      echo '<br>';
      echo 'Логические переменные.'.'<br>';
      $boolTrue = true;
      $boolFalse = false;
      $intTrue = 1;
      $intFalse = 0;

      if ($boolTrue !== $intTrue) {
        echo 'правда'.'<br>';
      }
      else{
        echo 'не правда'.'<br>';
      }

      // isNull isInt 
    ?>
  </body>
</html>