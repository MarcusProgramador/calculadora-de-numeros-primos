<?php

$t = isset($_GET["num"])?($_GET["num"]):0;
$div = 0;

echo "Os divisores são : ";

for($n=1;$n<=$t;$n++){
    if(($t % $n) == 0){
        echo "$n, ";
        $div++;
    }else{}
}

echo "<br/> Tem ".$div." divisores.<br/><br/>";

if($div == 2){
    echo"O número informado é primo";
}else{
    echo"O número informado não é primo";
}

?>