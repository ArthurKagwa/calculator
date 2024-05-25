<?php

if (htmlspecialchars($_SERVER['REQUEST_METHOD'])=='POST'){
    $num1=htmlspecialchars($_POST['num1']);
    $num2=htmlspecialchars($_POST['num2']);
    $result=0;
    $operator=htmlspecialchars($_POST['operator']);
    if (empty($num1)||empty($num2)||empty($operator)) {
        header("Location: index.html");

        
        
    }else{
        function func($num1,$num2,$operator){

            switch($operator){
                case('+'):$result=$num1+$num2; break;
                case('-'):$result=$num1-$num2; break;
                case('/'):$result=$num1/$num2; break;
                case('*'):$result=$num1*$num2; break;
                default: echo 'failure!!!';
            }
            return $result;
            

        }
        
    }
    

}