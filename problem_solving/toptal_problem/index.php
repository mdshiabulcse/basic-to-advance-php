<?php
//
////que1:What will be the output of the code below and why?
////$x=5;
////echo $x;
////echo "<br>";
////echo $x++ + $x++;
////echo "<br>";
////echo $x;
////echo "<br>";
////echo $x-- + $x--;
////echo "<br>";
////echo $x;
//
////4.What will be the values of $a and $b after the code below is executed? Explain your answer.
////$a='1';
////$b=&$a;
////$c="2$b";
////echo $c;
//
////5.
////What will be the output of each of the statements below and why?
////var_dump(0123 == 123);
////var_dump('0123'== 123);
////var_dump('0123'=== 123);
//
////6.
////What is the problem with the code below? What will it output? How can it be fixed?
//$referenceTable=array();
//$referenceTable['val1']=array(1,2);
//$referenceTable['val2']=3;
//$referenceTable['val3']=array(4,5);
//$testArray=array();
//$testArray=array_merge($testArray,(array)$referenceTable['val1']);
//
//var_dump($testArray);
//$testArray=array_merge($testArray, (array)$referenceTable['val2']);
//var_dump($testArray);
//$testArray=array_merge($testArray, (array)$referenceTable['val3']);
//var_dump($testArray);
//
//The issue here is that, if either the first or second argument to array_merge() is not an array, the return value will be NULL. For example, although one might reasonably expect that a call such as array_merge($someValidArray, NULL) would simply return $someValidArray, it instead returns NULL! (And to make matters worse, this is not documented well at all in the PHP documentation.)
//
//As a result, the call to $testArray = array_merge($testArray, $referenceTable['val2']) evaluates to $testArray = array_merge($testArray, 3) and, since 3 is not of type array, this call to array_merge() returns NULL, which in turn ends up setting $testArray equal to NULL. Then, when we get to the next call to array_merge(), $testArray is now NULL so array_merge() again returns NULL. (This also explains why the first warning complains about argument #2 and the second warning complains about argument #1.)
//
//The fix for this is straightforward. If we simply typecast the second argument to an array, we will get the desired results. The corrected array_merge() calls would therefore be as follows:

//What will $x be equal to after the statement $x = 3 + "15%" + "$25"?
//$x= 3 + "15%" + "$25";
//echo $x;


//8.
//After the code below is executed, what will be the value of $text and what will strlen($text) return? Explain your answer.
//$text='Jone';
//$text[10]='Deo';
//echo strlen($text);

//PHP_INT_MAX is a PHP constant that corresponds to the largest supported integer value (value is based on the version of PHP being run and the platform it is running on).
//
//Assume that var_dump(PHP_INT_MAX) will yield int(9223372036854775807).
//
//    In that case, what will be the result of var_dump(PHP_INT_MAX + 1)? Also, what will be the result of var_dump((int)(PHP_INT_MAX + 1))?
//
//    NOTE: It’s not important to supply the exact value when answering the question, but rather to explain what will happen and why.
//var_dump((int)(PHP_INT_MAX+1));
//10.
//What does the follow code echo?

//$a ="PHP";
//$a = $a + 1;
//echo $a;

//How would you sort an array of strings to their natural case-insensitive order, while maintaing their original index association?
//
//For example, the following array:

//$array = array('0'=>'z1', '1'=>'Z10', '2'=>'Z12', '3'=>'z2', '4'=>'z3');
//asort($array, SORT_STRING | SORT_FLAG_CASE| SORT_NATURAL);
//var_dump($array);;;
//
//
//echo '<br>';
//
////Highlight all the Chinese characters in red and return the string.
//$str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';
//$string=explode(' ', $str);
//$chi=array_filter(explode('_',preg_replace(array('/[^\p{Han}？]/u', '/(\s)+/'), array('_', '$1'),$str)));
//$value=array();
//foreach ($string as $val){
//    if (in_array($val, $chi)){
//         $value[]='<span style="color: red">'.$val.'<span></span><br>';
//    }else{
//         $value[]='<span style="color: green">'.$val.'<span></span><br>';
//    }
//}
//echo (implode(' ', $value));
//
//
//
//echo '<br>';
//
//$str1='yabadabadoo';
//$str2='yaba';
//if (strpos($str1, $str2) !== false) {
//    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
//}else{
//    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
//}
//
//echo '<br>';



//class Car
//{
//    public $color;
//    public $model;
//    public function __construct($color, $model)
//    {
//        $this->color = $color;
//        $this->model = $model;
//    }
//    public function display()
//    {
//        echo $this->color . ' ' . $this->model;
//    }
//
//}
//$car = new Car('red', 'BMW');
//$car->display();


//$x = 5;
//echo $x;
//echo "<br />";
//echo $x+++$x++;
//echo "<br />";
//echo $x;
//echo "<br />";
//echo $x-- - $x--;
//echo "<br />";
//echo $x;


//$array=['a','b','c','d','e','f','a','b','c','d','e','f','a','b','c','d','e','f','a'];
//function removeDuplicates($array)
//{
//    $result=[];
//    foreach($array as $value){
//        if(!in_array($value,$result)){
//            $result[]=$value;
//        }
//    }
//    return $result;
//}
//
//print_r( removeDuplicates($array));

//function reverse($reverse)
//{
//    $words=explode(" ",$reverse);
//    $reverseWords=[];
//    foreach($words as $word){
//        $reversed='';
//        for ($i=strlen($word) -1;$i >=0;$i--){
//            $reversed.=$word[$i];
//        }
//        $reverseWords[]=$reversed;
//    }
//    return implode(" ",$reverseWords);
//
//}
//echo reverse("I ma bikhaS");


//function firstNonRepeatingChar($str) {
//    $charCount = [];
//
//    for ($i = 0; $i < strlen($str); $i++) {
//        $char = $str[$i];
//        $charCount[$char] = isset($charCount[$char]) ? $charCount[$char] + 1 : 1;
//    }
//
//    for ($i = 0; $i < strlen($str); $i++) {
//        if ($charCount[$str[$i]] === 1) {
//            return $str[$i];
//        }
//    }
//    return null;
//}
//
//echo firstNonRepeatingChar("aabbcddeffg");

function fibonacci($n)
{
    $a=0; $b=1;
    echo "$a $b ";
    for ($i=2; $i<=$n; $i++) {
        $next=$a+$b;
        echo "$next";
        $a=$b;
        $b=$next;
    }
}
fibonacci(7);
