<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$bd = 'projeto';
$con = new mysqli($server,$user,$pass,$bd);
if (!$con){
    echo "Erro de conexão".$con->error;
}else (){
    echo "Conextado" 
}
