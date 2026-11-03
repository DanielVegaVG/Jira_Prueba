<?php
$num = $_GET['numero'];
$array = array();
for ($i=1;$i<=$num;$i++) {
    $res=1;
    for ($j=1;$j<=$i;$j++) {
        $res= $res*$j;
    }
    $array[]=$res;
}
print_r($array);
?>