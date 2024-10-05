<?php
    $numero1=$_POST['num1'];
    $numero2=$_POST['num2'];
    $operacion=$_POST['opcion'];
    include 'operaciones.php';
    $mate=new Matematicas($numero1,$numero2);
    if($operacion=='+'){
        echo 'La suma es ='.$mate->Suma();
    }
    elseif($operacion=='-'){
        echo 'La resta es ='.$mate->Resta();
    }
    elseif($operacion=='*'){
        echo 'La multiplicación es ='.$mate->Multiplica();
    }
    elseif($operacion=='/'){
        echo 'La división es ='.$mate->Division();
    }
    else{
        echo 'ocurrio un error';
    }
    // switch ($operacion) {
    //     case '+':
    //         echo 'La suma es ='.$mate->Suma();
    //         break;
    //     case '-':
    //         echo 'La resta es ='.$mate->Resta();
    //         break;
    //     case '*':
    //         echo 'La multiplicación es ='.$mate->Multiplica();
    //         break;
    //     case '/':
    //         echo 'La división es ='.$mate->Division();
    //         break;
    //     default:
    //         echo 'ocurrio un error';
    //         break;
    // }
    
?>