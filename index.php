<?php
$name=[
    'diva','disha','tamim',
];
array_push($name,'eva');
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';

$name=[
    'diva','disha','tamim',
];
array_pop($name);
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
echo"</br>";
$name=[
    'diva','disha','tamim',
];
array_shift($name);
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
$name=[
    'diva','disha','tamim',
];
array_unshift($name,'eva','wakib');
echo'<pre>';
print_r($name);
echo'</pre>';
echo'</br>';
$name="my name is disha";
$array=explode(" ",$name);

echo'<pre>';
print_r(array_reverse($array)[0]);
echo'</pre>';
echo'</br>';