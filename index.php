<?php


// local variabe.............................................

function localVariable(){
    $name = "kamal husain";

    echo "$name";

}

localVariable();


function localVariable2(){
    $name = "kamal husain";
    $country = "Bangladesh";
    $districs = "kishorganj";

    echo " my name is $name, my country name $country, and my Distrik $districs";

}

localVariable2();


function localVariable3(){
    $name = "kamal husain";
    $country = "Bangladesh";
    $districs = "kishorganj";

    printf("my name is %s, my country name %s, and my Distrik %s", $name, $districs, $districs);

}

localVariable3();


// global variable..............................


$globalvariable = 50;
function testvariable(){
    $name = "kamal husain";
    global  $globalvariable;
    echo "my name is  $name,$globalvariable";
}

testvariable();



     $name = "kamal husain";
    $country = "Bangladesh";
    $districs = "kishorganj";

    $result = "$name $country $districs";
     
     function globalvariabl2(){
       $number =100;
       global $result;

        echo"Hello global $number, $result";
    }
    globalvariabl2();
    


//   if stetment ..............................

      $number = 20;


if( $number >10){

    echo "your code is successfully";
}



$logicaloperetor = false;

if(!$logicaloperetor){
echo "hello logicaloperetor";
}




// if else stetment....................................................

$marks ="33";

if($marks >=80){
    echo "A+";
} elseif($marks >=70){
    echo "A";
} elseif($marks >= 60){
echo "A-";
}elseif($marks >= 50){
    echo "B";
}elseif($marks >= 40){
    echo "B-";
}elseif($marks>=33){
    echo "c";
}else {
    echo "f";
    }



$number = 20;

if( $number <=10){

    echo "your code is successfully";
}else if( $number <= 20){
    echo " your code is bad prectic";
}


// ternary operetor............................




$age = 10;

$resul = ($age > 30) ?"true":"false";
echo $resul;




// switch case...........................



$age ="100";

switch($age){
    case ($age<= 33 && $age<= 40):
        echo "your NID cord create now";
        break;
        case ($age<= 15 && $age<= 12):
            echo "you are chindren boy";
            break;
            case($age <= 10 && $age<= 5):
                break;
                default;
                echo "you are new baby";
}