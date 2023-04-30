
<?php                                          //Задание 1

$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= "many";

echo "\nYour order is: $very_bad_unclear_name.";
?>


<?php                                          //Задание 2
$num = 6;
echo $num; echo "\n"; 

$floatnum = 6.0;
echo $floatnum; echo "\n";

echo $num + $floatnum; echo "\n";

$last_month = 1187.23; $this_month = 1089.98;

echo $last_month - $this_month; echo "\n";
?>

<?php                                          //Задание 11
$num_languages = 4; $months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;
echo $days_per_language; echo "\n";
?>

<?php                                          //Задание 12
echo 8**2; echo "\n";
?>

<?php                                          //Задание 13
$my_num = 13; $answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer; echo "\n";
?>

<?php                                          //Задание 14
$a = 10; $b = 3;
echo $a % $b; echo "\n";

if($a % $b == 0)
    echo "Делится\n";
else
    {
    echo "Делится с остатком\n";
    echo $a % $b; echo "\n";
    }
?>

<?php                                          //Работа со степенью и корнем
$st = pow(2,10);
echo $st; echo "\n";

echo sqrt(245); echo "\n";

$array = array(4, 2, 5, 19, 13, 0, 10);
$sum = 0;
foreach ($array as $value) 
    $sum += pow($value,2);
echo $sum; echo "\n";
?>

<?php                                          //Работа с функциями округления
echo round(sqrt(379),0);echo "\n";
echo round(sqrt(379),1);echo "\n";
echo round(sqrt(379),2);echo "\n";

$mas['floor'] = floor(sqrt(587));
$mas['ceil'] = ceil(sqrt(587));
echo $mas['floor']; echo "\n";
echo $mas['ceil']; echo "\n";
?>

<?php                                          //Работа с min и max
echo max(4, -2, 5, 19, -130, 0, 10); echo "\n";
echo min(4, -2, 5, 19, -130, 0, 10); echo "\n";
?>

<?php                                          //Работа с рандомом
echo rand(1,100); echo "\n";
$array = array();

while(count($array) < 10)
    $array[] = rand();
    
print_r($array); echo "\n";
?>

<?php                                          //Работа с модулем
$a = rand(); $b = rand();
echo abs($a - $b); echo "\n";

$mas = Array(1, 2, -1, -2, 3, -3);
print_r($mas); echo "\n";
for($i = 0; $i < sizeof($mas); $i++){
    if($mas[$i]<0)
        $mas[$i]=abs($mas[$i]);
}
print_r($mas); echo "\n";
?>

<?php                                          //Задание 15
function printStringReturnNumber(){
    echo "Возвращаем числовое значение: "; echo "\n";
    return rand();
}
$my_num = printStringReturnNumber();
echo $my_num; echo "\n";
?>

<?php                                          //Задание 16
function increaseEnthusiasm($str){
    return $str .= "!";
    }
echo increaseEnthusiasm("Work"); echo "\n";

function repeatThreeTimes($str){
    return str_repeat($str, 3);
}

echo repeatThreeTimes("Good! "); echo "\n";

echo (repeatThreeTimes(increaseEnthusiasm("Энтузиазм"))); echo "\n";


function cut($str, $count = 10){
    $time_string = "";
    for($i =0;$i<$count;$i++)
        $time_string .= $str[$i];
    return $time_string;
}
echo "Оставлено 10 эл-в из строки 'Hello, world!': ", cut("Hello, world!"); echo "\n";


$mas_write = Array(1,2,3,4,5,6,7,8,9,10);
function recursiveWrite(&$mas_write, $counter){
    if($counter < sizeof($mas_write)){
        echo $mas_write[$counter], " "; echo "\n";
        $counter++;
        return recursiveWrite($mas_write, $counter);
    }
    else
        return;
}
echo "Mas: "; echo "\n";
recursiveWrite($mas_write, 0);


$number = rand(1, 50);
function SumNum($number){
    if(array_sum(str_split($number, 1)) > 9)
        return SumNum(array_sum(str_split($number, 1)));
    else 
        return array_sum(str_split($number, 1));
}
echo "Сумма от $number при нашем условии = ", SumNum($number); echo "\n";
?>

<?php                                          //Задание 17
 $mas_x = array();
 for($i =0; $i < rand(2, 10);$i++){
     $mas_x[$i]=str_repeat('x', $i);
 }
 echo "Массив размером: ", sizeof($mas_x)-1; echo "\n";
 foreach($mas_x as $value)
     echo  $value, " "; echo "\n";


 function arrayFill($str, $count){
     $timeMas=array();
     for($i =0; $i < $count;$i++){
         $timeMas[$i]=$str;
     }
     return $timeMas;
 }
 $mas1 = arrayFill('x', rand(2, 10));
 echo "Массив через arrayFill: "; echo "\n";
 foreach($mas1 as $value)
     echo  $value, " ";

 $mas_fun= [[1, 2, 3], 
             [4, 5], 
             [6]];
 $sum =0;
 for($i =0; $i < sizeof($mas_fun);$i++)
     for($j =0; $j <  sizeof($mas_fun[$i]);$j++)
             $sum += $mas_fun[$i][$j];

 echo "Сумма элементов в массиве = ", $sum; echo "\n";

 $mas_1 = array();
 $count =1;
 for($i =0; $i < 3;$i++){
     $timemas=array();
     for($j =0; $j <  3;$j++){
         $timemas[$j]=$count++;
         echo  $timemas[$j], " ";
     }
     $mas_1=$timemas;
     echo "\n";
 }

 $mas1=Array(2, 5, 3, 9);
 $result = $mas1[0]*$mas1[1] + $mas1[2]*$mas1[3];
 echo "result = ", $result; echo "\n";
 
 
 $user=array(
     'name' => 'Петьков',
     'surname' => 'Петя', 
     'patronymic' => 'Петькович'
 );
 echo "ФИО: ", $user['name'], " ", $user['surname'], " ",  $user['patronymic']; echo "\n";

 $date=array(
     'year' => '2023',
     'month' => '04', 
     'day' => '30'
 );
 echo "Дата: ", $date['year'], "-", $date['month'], "-",  $date['day']; echo "\n";

 $arr = ['a', 'b', 'c', 'd', 'e'];
 echo "Количество элементов массива = ", sizeof($arr); echo "\n";
 echo "Последний '", end($arr),"' и предпоследний '", prev($arr), "' элементы этого массива"; echo "\n";
?>

<?php                                          //Задание 18
function sum10($a, $b){
    if($a + $b > 10)
        return true;
    else
        return false;
}   

function ravn($a, $b){
    if($a == $b)
        return true;
    else
        return false;
}   

$test= 0;
if(!$test)
    echo "верно"; echo "\n"; 

$age=rand(1, 500);
if($age < 10 || $age > 99){
    if($age > 99)
        echo "$age > 99"; echo "\n";
    else
        echo "$age < 10"; echo "\n";
}     
else{
    if(array_sum(str_split($age, 1)) <= 9)
        echo "Cyммa цифр однозначна (", array_sum(str_split($age, 1)),")"; echo "\n";
    else
        echo "Cyммa цифр двузначна (", (array_sum(str_split($age, 1))), ")"; echo "\n";
}


$mas_if = Array(1, 8, 9);
if(sizeof($mas_if) == 3)
    echo "Сумма чисел массива из 3 эл-в = ", array_sum($mas_if); echo "\n";
?>

<?php                                          //Задание 19
    for($i =0; $i < 20;$i++)
        echo str_repeat('x', $i); echo "\n";
?>

<?php                                          //Задание 20
 $mas=Array(1, 2, 6, 7, 5, 6, 7, 9, 5);
 echo "Среднее арифметическое = ", array_sum($mas)/sizeof($mas); echo "\n";

 echo "Сума чисел от 1 до 100 = ", array_sum(range(1, 100)); echo "\n";

 $mas1=Array(36, 49, 25, 64, 4, 9, 16, 81);
 $mas1=array_map('sqrt', $mas1);
 echo "Массив c корнями:"; echo "\n";
 foreach($mas1 as $value)
     echo  $value, " "; echo "\n";
 
 $mas_key=array_combine(range('a', 'z'), range(1, 26));
 foreach($mas_key as $key => $var)
     echo $key,  " => ",  $var; echo "\n";

 $numbers = "1234567890";
 $mas_suma = str_split($numbers, 2);
 echo "12+34+56+78+90 = ", array_sum($mas_suma); echo "\n";
?>