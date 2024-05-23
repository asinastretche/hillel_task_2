<?php
echo '1. Дії з числами';
$number1 = 7.0; $number2 = 3.0;
$result = $number1%$number2;
echo "<br>"."Залишок від ділення 7 на 3 : $result";


$number2 = 7.15;
$result = intval($number1/$number2);
echo "<br>"."Отримати цілу частину ділення 7 и 7,15 : $result";


$result = sqrt(25);
echo "<br>"."Отримати корінь из 25 : ".$result;


$workedString = 'Десять негритят пошли купаться в море';
echo "<br>"; echo  "<br>". "2. Дії зі строками: $workedString";

$lenghtOfString = mb_strlen($workedString);
$symvolString17 =mb_substr($workedString, 16, 1, "UTF-8");

$getWordString = explode(" ",$workedString);
$wordInString4 = $getWordString[3];
$capitalLetterString = mb_convert_case($workedString, MB_CASE_TITLE, "UTF-8");

echo "<br>". "Отримати 4-е слово: $wordInString4";
echo"<br>" . "Отримати 17-й символ: $symvolString17";
echo "<br>" . "Зробити великою кожну першу букву слів: $capitalLetterString";
echo "<br>" . "Порахувати длину строки: ".$lenghtOfString;


echo "<br>"."<br>"."3. Дії з логіческими даними: ";
echo "<br>"."Чи вірно твердження true дорівнює 1: ";
$logicalTrue = true;
if($logicalTrue == 1){
    echo 'вірно';
} else{
    echo 'не вірно';
}

echo "<br>". "Чи вірно твердження false тождественно 0: ";
$logicalFalse = false;
if ($logicalFalse === 0){
    echo 'вірно';
} else{
    echo 'не вірно';
}

echo "<br>" . "Яка строка більше three - три: ";
$string1 = 'three';
$string2 = 'три';

if (mb_strlen($string1) > mb_strlen($string2)){
    echo $string1 ." = len ". mb_strlen($string1);
} elseif($string2> $string1){
    echo $string2 . " = len ".mb_strlen($string2);
}

echo "<br>" . "Яке число більше 125 помножити на 13 плюс 7 или 223 плюс 28 помножити 2: ";
$numeric1 = 125*13+7;
$numeric2 = (223+28)*2;
if ($numeric1 > $numeric2){
    echo '125*13+7 = '. $numeric1;
} elseif ($numeric1 < $numeric2){
    echo '(223+28)*2 = '. $numeric2;
} else{
    echo 'сума однакова';
}