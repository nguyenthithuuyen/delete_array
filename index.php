<?php
$array=[1,2,3,5,4];
function findIndex($number, $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $number) {
            return $i;
        }
    }
    return -1;
}

function removeItem($number, $array) {
    $i = findIndex($number, $array);
    if ($i != -1) {
        unset($array[$i]);
    }

    return $array;

}

var_dump(removeItem(5, $array));

?>
