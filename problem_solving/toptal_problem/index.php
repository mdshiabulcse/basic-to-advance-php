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

//What will be the value of $x after this code executes? Explain your answer.

$x=NULL;
$a=255;
$b='0xFF';
if (hexdec($b)==$a){
    echo $x=hexdec($b);
}
//echo is_numaric_string($b);

//16.
//How can you tell if a number is even or odd without using any condition or loop?

echo '<br>';
$arr=array('0'=>'Even','1'=>'Odd');
$check=13;
echo 'This number is '.$check.' = '.$arr[$check%2];