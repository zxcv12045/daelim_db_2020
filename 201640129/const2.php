<?php
//const PI = 3.14; //변하지 않는 값<div class="">
//너 PI는 3.14만 사용하는 고정값. 왜? 너는 상수니깐.

if(defined("PI")){
    //응, 있어
}else{
    //무슨소리..첨 아녀?
    //const PI = 3.131592; 
//나는 일편단심, 하나만 값을 가질 수 있어요<div class="">
//다른 값 주지 말아요
define("PI",3.141592);    
}


//나는 일편단심, 하나만 값을 가질 수 있어요<div class="">
//다른 값 주지 말아요
echo PI;