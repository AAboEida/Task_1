<?php

namespace App\Models;

class Student{
public static function all(){
$students=[
    [
        'id'=> 1 ,
        'name'=> 'Ahmed'
    ],
    [
        'id'=> 2,
        'name'=> 'Mohamed'
    ],
    [
        'id'=> 3,
        'name'=>'Salem'

    ],
    [
        'id'=> 4,
        'name'=>'Ali'
    ]






];




return $students;


}
}