<?php
//Pengunaan Union Type Pada Class
class kata{
    public float|string|int $data;
}
$get_kata= new kata();
echo $get_kata-> data=9.5;
echo $get_kata-> data="Membuat kalimat string";
echo $get_kata-> data=90000000;

//Pengunaan Union Type pada functioon
function functest(string|int|float $data1){
    if(is_int($data1)){
        echo 'ini adalah integer';
    }else if(is_float($data1)){
        echo 'ini adalah float';
    }else if(is_string($data1)){
        echo 'ini adalah string';
    }else{
        echo 'undifined data type';
    }
}
return functest(3.9);

//Pengunaan Union type pada return value
function retval(string|int|float $data2)
{
    if(is_int($data2)){
        return retval(5);
    }else if(is_float($data2)){
        return retval(9.9);
    }else if(is_string($data2)){
        return retval('Kalimat');
    }
}