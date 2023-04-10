<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Святова Полина ИС 1.20</title>
</head>

<body>
	урок 3<br>
	<?php
	//1
	$num = 123;
	echo $num;
	//2 
	$a = 10; // записываем в переменную значение 10
	echo $a; // выведет 10
	
	$a = 20; // записываем теперь значение 20, затирая значение 10
	echo $a; // выведет 20
	?> <br>
	урок 4<br>
	<?php
	//1
	$а = 1 + 2 + 3;
	echo $а;
	?>

	<br>урок 5<br>
	<?php
	//1 
	$а = 10;
	$b = 2;
	$sum = $а + $b;
	$raz = $а - $b;
	$pro = $а * $b;
	$del = $а / $b;
	echo $sum, $raz, $pro, $del;
	?>
	<br>
	<?php
	//2
	$c = 10;
	$d = 5;
	$result = $c + $d;
	echo $result;
	?>
	<br>
	<?php
	//3
	$a = 1;
	$b = 2;
	$c = 3;
	$result = $a + $b + $c;
	echo $result;
	?>
	<br>
	<?php
	//4
	$a = 10;
	$b = 5;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo $result;
	?>
	<br>
	урок 6
	<p>1. Выведет 20<br>
		2. Выведет 23<br>
		3. Выведет 6<br>
		4. Выведет 9 <br>
		5. Выведет 8<br>
		6. Выведет 8<br>
		7. Выведет 25<br>
		8. Выведет 13<br>
		9. Выведет 36<br>
		10. Выведет 4<br>
		11. Выведет 4<br>
		12. Выведет 4
	</p>
	<br>урок 7<br>
	<?php
	//1
	$а = 1.5;
	$b = 0.75;
	$c = $a + $b;
	echo $c;
	?>

	<br>урок 8<br>
	<?php
	//1
	$а = -100;
	echo $a;
	?>
	<br>
	<?php
	//2
	$а = 35;
	echo -$a;
	?>

	<br>урок 9<br>
	<?php
	//1
	$а = 10;
	$b = 3;
	$c = $а % $b;
	echo $c;
	?>

	<br>урок 10<br>
	<?php
	//1
	echo 2 ** 10;
	?> <br>
	<p>
		2. Выведет 24<br>
		3. Выведет 216<br>
		4. Выведет 48<br>
		5. Выведет 24 <br>
		6. Выведет 72<br>
	</p>

	<br>урок 11<br>
	<?php
	//1
	$str = 'hello';
	echo $str;
	?> <br>
	<?php
	//2
	$str1 = 'abc';
	$str2 = 'def';
	echo $str1 . $str2;
	?>
	<br>
	<?php
	//3
	$str1 = 'hello';
	$str2 = 'world';
	echo $str1 . ' ' . $str2;
	?>
	<br>
	<?php
	//4
	$str = 'hello';
	echo strlen($str);
	?><br>
	<?php
	//5
	echo mb_strlen('приветики пистолетики');
	?>
	<br>

	<br>урок 12<br>
	<?php
	//1
	echo '<i>';
	echo 'курсивный';
	echo '</i>';
	?> <br>
	<?php
	//2
	echo '1<br>
        2<br>
		3<br>
		4<br>
		5<br>
		6<br>
		7<br>
		8<br>
		9<br>';
	?>
	<br>
	<img src="img/malenkie-kartinki-dlja-srisovki-28.jpg" alt="">
	<br>
	<input type="Hello">
	<br>
	<textarea name="" id="" cols="10" rows="10">Напиши здесь что-нибудь</textarea>
	<br>
	<br>урок 13<br>
	<?php
	//1
	$isAdult = true;
	var_dump($isAdult);
	?> <br>
	<?php
	//2
	$isAdult = false;
	var_dump($isAdult);
	?>
	<br>


	<br>
	<br>урок 14<br>
	<?php
	//1
	$a = null;
	var_dump($a);
	?> <br>
	<?php
	//2
	var_dump($test);
	?>
	<br>


	<br>
	<br>урок 15<br>
	<p>
		1. Выведет 6
	</p>
	<br>

	<br>урок 16<br>
	<?php
	//1
	$test = (int) '12345';
	var_dump($test);
	?> <br>
	<?php
	//2
	$test = (float) '12.345';
	var_dump($test);
	?>
	<br>
	<?php
	//3
	$test = (int) 12.345;
	var_dump($test);
	?>
	<br>
	<?php
	//4
	$test = (string) 1234;
	var_dump($test);
	?>
	<br>
	<?php
	//5
	$test = (string) 12.345;
	var_dump($test);
	?>
	<br>

	<br>урок 17<br>
	<?php
	//1
	$str = 'abcde';
	$num1 = 0;
	$num2 = 2;
	$num3 = 4;
	echo $str[$num1];
	echo $str[$num2];
	echo $str[$num3];
	?> <br>
	<?php
	//2
	$str = 'abcde';
	$str2 = 'edcba';
	echo $str2;
	?> <br>
	<?php
	//3
	$str = 'abcde';
	$num1 = 3;
	echo $str[$num1];
	?> <br>

	<?php
	//4
	$str = 'abcde';
	$last = strlen($str) - 1;
	echo $str[$last];
	?> <br>
	<?php
	//5
	$str = 'abcde';
	$last = strlen($str) - 2;
	echo $str[$last];
	?> <br>
	<?php
	//6
	$str = 'abcde';
	$last = strlen($str) - 3;
	echo $str[$last];
	?> <br>
	<?php
	//7
	$str = '12345';
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
	?> <br>
	<?php
	//8
	$num = 12345;
	$str = (string) $num;
	echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
	?> <br>
	<?php
	//9
	$num = 12345;
	$str = (string) $num;
	echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
	?> <br>
	<?php
	//10
	$num = 12345;
	$str = (string) $num;
	echo $str[4], $str[3], $str[2], $str[1], $str[0];
	?> <br>

	<br>урок 18<br>
	<p>
		1.Выведет 3 <br>
		2. Выведет 6
	</p>
	<?php
	//3
	$num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num;
	?> <br>
	<?php
	//4
	$str = 'a';
	$str .= 'b';
	$str .= 'c';
	echo $str;
	?> <br>
	<br>урок 19<br>
	<?php
	//1
	$num = 10;
	$num++;
	$num++;
	$num--;
	echo $num;
	?> <br>
	<p>
		2.Выведет 4 <br>
		3. Выведет 3 <br>
		4. Выведет 2 <br>
		5.Выведет 3 <br>
		6. Выведет 44 <br>
		7. Выведет 43<br>
		8.Выведет 22 <br>
		9. Выведет 23<br>
		10.Выведет 33 <br>
	</p>
	<br>урок 20<br>
	<?php
	//1
	echo (60 * 60) * 24;
	?> <br>
	<?php
	//2
	echo (60 * 60) * 24 + (6 * 60 * 60);
	?> <br>
	<?php
	//3
	echo 60 * 60 * 24 * 365;
	?> <br>
	<?php
	//4
	echo (60 * 24);
	?> <br>
	<?php
	//5
	echo (60 * 365);
	?> <br>
	<?php
	//6
	echo 1024 * 1024;
	?> <br>
	<?php
	//7
	echo 2 ** 30;
	?> <br>
	<?php
	//8
	echo (2 ** 30) * 10;
	?> <br>
	<?php
	//9
	echo 2 ** 40;
	?> <br>
	<?php
	//10
	echo 2 ** 30;
	?> <br>

	<br>урок 21<br>
	<?php
	//1
	$r = 10;
	$s = 3.14 * $r ** 2;
	echo $s;
	?> <br>
	<?php
	//2
	$a = 5;
	$s = $a ** 2;
	echo $s;
	?> <br>
	<?php
	//3
	$a = 5;
	$b = 8;
	$s = $a * $b;
	echo $s;
	?> <br>
	<?php
	//4
	$a = 5;
	$b = 8;
	$p = 2 * ($a + $b);
	echo $p;
	?> <br>
	<?php
	//5
	$tc = 22;
	$fa = $tc * 1.8 + 32;
	echo $fa;
	?> <br>
	<?php
	//6
	$tf = 58;
	$tc = ($tf - 32) / 1.8;
	echo $tc;
	?> <br>


	<br>урок 22<br>
	<?php
	//1
	$arr = ['a', 'b', 'c'];
	var_dump($arr);
	?> <br>
	<?php
	//2
	$arr = ['a', 'b', 'c'];
	echo $arr[0]; 
	echo $arr[1]; 
	echo $arr[2];
	?> <br>
	<?php
	//3
	$arr = ['a', '+', 'b','+', 'c','+', 'd'];
	echo $arr[0]; 
	echo $arr[1]; 
	echo $arr[2];
	echo $arr[3]; 
	echo $arr[4]; 
	echo $arr[5];
	echo $arr[6];
	?> <br>
	<?php
	//4
	$arr = ['1', '2', '3'];
	echo $arr[0]+ $arr[1]+ $arr[2];
	?> <br>
	<?php
	//5
	$arr = ['2', '5', '3', '9'];
	$a = $arr[0]* $arr[1];
	$b = $arr[2]* $arr[3];
	$result = $a + $b;
	echo $result;
	?> <br>

  <br>урок 23<br>
  <?php
	//1
	$arr = [1 => 'a', 2 => 'b', 3 => 'c'];
	echo $arr[1], $arr[2], $arr[3] ;
	?> <br>
	<?php
	//2
	$arr = [1 => 'январь', 'февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
	echo $arr[1], $arr[6], $arr[8] ;
	?> <br>
	<?php
	//3
	$user = ['name' => 'Полина', 'surname' => 'Святова', 'patronymic' => 'Юрьевна']; 
	echo $user['name'];
	echo $user['surname'];
	echo $user['patronymic'];
	?> <br>
	<?php
	//4
	$date = ['year' => '2023', 'month' => 'апрель', 'day' => '10']; 
	echo $date['year'];
	echo $date['month'];
	echo $date['day'];
	?> <br>

  <br>урок 24<br>
  <?php
	//1
	$arr = [7 => 'value1', 50 => 'value2', 23 => 'value3'];
	echo $arr[7];
	echo $arr[50];
	echo $arr[23];
	?> <br>

<br>урок 25<br>
  <?php
	//1
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo count($arr);
	?> <br>
	 <?php
	//2
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
	echo count($arr);
	?> <br>
	<?php
	//3
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo $arr[count($arr) - 1];
	?> <br>
	<?php
	//4
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo $arr[count($arr) - 2];
	?> <br>

<br>урок 26<br>
<?php
	//1
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$arr[0] = 'Hello';
	$arr[1] = '!';
	$arr[2] = '*_*';
	echo $arr[0], $arr[1], $arr[2] ;
	?> <br>
	<?php
	//2
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$arr[0] = 'a3';
	$arr[1] = 'b3';
	$arr[2] = 'c3';
	echo $arr[0], $arr[1], $arr[2] ;
	?>
	<p> 3. Выведет [3,1,1] </p> <br>

	<br>урок 27<br>
	<?php
	//1
	$arr = [];     
	$arr[] = '1';  
	$arr[] = '2';  
	$arr[] = '3'; 
	$arr[] = '4'; 
	$arr[] = '5';
	echo $arr[0], $arr[1], $arr[2], $arr[3], $arr[4] ;
	?> <br>
	<?php
	//2
	$arr = [1, 2, 3];   
	$arr[] = '4'; 
	$arr[] = '5';
	echo $arr[0], $arr[1], $arr[2], $arr[3], $arr[4] ;
	?> <br>
	<?php
	//3
	$arr = [];
	$arr['year'] = '2023';
	$arr['month'] = 'апрель';
	$arr['day'] = '10';
	echo $arr['year'], $arr['month'], $arr['day'];
	?> <br>
	<br>урок 28<br>
	<?php
	//1
	$arr = [1, 2, 3, 4, 5];
	$key1 = 1;
	$key2 = 2;
	echo $arr[$key1] + $arr[$key2];
	?> <br>
	<?php
	//2
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$key = 'b';
	echo $arr[$key];
	?> <br>
</body>

</html>