<?php
$arr = array(   'green'=>'зеленый',
                'red'=>'красный',
                'blue'=>'голубой');
foreach ($arr as $kay => $v){
    echo $kay . '<br/> ';
}
echo ' <p>Cтолбец элементов:</p>';
foreach ($arr as $kay => $v) {
    echo $v . '<br/>';
}