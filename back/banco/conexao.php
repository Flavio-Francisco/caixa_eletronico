<?php
$local="localhost";
$usuario="root";
$senha = "";
$banco = "ads_bank";

$con = mysqli_connect($local,$usuario,$senha,$banco);

if($con){
    echo "funcionando";
}else{
    echo "presta não";
}

?>