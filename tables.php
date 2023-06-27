 <?php
 
 session_start();
 $_SESSION['username'] = "jason";
 echo "Your username is: ".$_SESSION['username'].".<br />";
 //unset($_SESSION['username']);
 echo "Username now set to: ".$_SESSION['username'].".";
 

//     $a=0;
//     $b=5;
//     echo $a."".$b;
//     fun2($a,$b);
//     echo $a."".$b;
// }
// function fun2($c,&$d)
// {
// $c=$c+6;
// $d=$d+10;
// echo $c."".$d;
// }
// fun1();



// $ar=range("A","F");
// print_r($ar);
// rsort($ar);
// array_pop($ar);
// print_r($ar);
// $a=array_unshift($ar,"z");

//  print_r($a);
?> 