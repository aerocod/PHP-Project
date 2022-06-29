<?php
$var1 =0 =='0';
$var2 =0 =='0.0';
$var3 =0 =='12';
$var4 =12 =='    12       ';
$var5 =12 =='string 12';
$var6 =0 =='test';
$var7 =0 =="";

var_dump($var1);
var_dump($var2);
var_dump($var3);
var_dump($var4);
var_dump($var5);
var_dump($var6);
var_dump($var7);