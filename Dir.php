<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
$F = @$_POST['F'];
$B = @$_POST['B'];
$R = @$_POST['R'];
$L = @$_POST['L'];
$S = @$_POST['S'];

}

$connect = new mysqli('localhost','root','','robot values');


if($connect){
    echo "Connection successful *** ";



    $sql = "INSERT INTO `robotdirections`(Forward,Backward,R,L,Stop)VALUES('$F','$B','$R','$L','$S')";
    

    $result=mysqli_query($connect,$sql);
    if($result){
       echo "||| Data insert successful ||| ";
        if($F){
            echo "*** FORWARD ***";
        }elseif($B){
            echo "*** BACKWARD ***";
        }elseif($R){
            echo "*** Right ***";
        }elseif($L){
            echo "*** Left ***";
        }elseif($S){
            echo "*** STOP ***";
        }
        
    }else{
    die(mysqli_error($connect));
    



      }
    }
    






?>