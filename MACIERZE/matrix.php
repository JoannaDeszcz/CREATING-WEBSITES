

<!DOCTYPE html>
<html> <lang="pl-PL"> 
<head>
<meta charset="utf-8"> 
<hr style="height: 5px; background: gray; border: 0px;">
<b><div style="background: #B0C4DE"><span style="font-size: xx-large;font-family: Courier New;color: Navy"><center>PROJEKT PIBA</center></span></div></b>
<title>PROJEKT PIBA</title>
<style>

table 
{
	border-right-style: solid;
	border-left-style: solid;
	border-radius :5px;
	margin-top:5px;
	padding: 10px;
	margin-left: 20px; 
}

      #macierz1 {
        float:left;
      }
#wyknonanie{
	float:left;
}
#znak_równości{
	float:left;
}
#macierz {
	float:left;
}

#macierz_3 {
	float:left;
}
	</style>

</head>
<body style="background-color: #F0F8FF; color: Navy
">
<hr style="height: 5px; background: gray; border: 0px;">

<span style="font-size: Large"></>

  
<?php
$macierz1= array(
    array(2,2,3),
    array(4,2,6),
    array(7,5,8)
);
$macierz2= array(
    array(1,1,3),
    array(5,2,1),
    array(1,3,2)
);
$macierz_3= array(
    array(1,1,3,2),
    array(5,2,1,3)
);
$macierz_4= array(
    array(1,1,3),
    array(5,2,1),
    array(1,3,2),
	array(3,3,3)
	);
// Wyświelenie 1 macierzy

function matrix_print($matrix){
  $res = "<table>\n";
  $nrow = count($matrix);
  $ncol = count($matrix[0]);
  for($row = 0; $row < $nrow; $row++) {
    $res .= "  <tr\n>"; 
    for($col = 0; $col < $ncol; $col++) {
		    $res .= "  <td>";
	$res .=$matrix[$row][$col];
   $res .= "</td>\n";
    }
    $res .= "  </tr>\n";
  }
  $res .= "</table>\n";
  return $res;
}

// Transpozycja  macierzy
function matrix_trans($matrix){
	$trans = "<table>\n";
    $nrow = count($matrix);
    $ncol = count($matrix[0]);
	for($col = 0; $col < $ncol; $col++){
		    $trans .= "  <tr\n>"; 
        for($row = 0; $row < $nrow; $row++){
			 $trans .= "  <td>";
            $trans .= $matrix[$row][$col];
            $trans .= "</td>\n";
    }
    $trans .= "  </tr>\n";
  }
  $trans .= "</table>\n";
  return $trans;
}


//Dodawanie macierzy
  function matrix_add($matrix1,$matrix2){
	$add = "<table>\n";
	$a=count($matrix1);//m
	$b=count($matrix1[0]);//n
	$c=count($matrix2);//p
	$d=count($matrix2[0]);
if(($a==$c) and ($b==$d)){
    for($row = 0; $row < $a; $row++){
	    $add .= "  <tr>";
	    for($col = 0; $col < $b; $col++){
			$add .= "  <td>";
            $add .= $matrix1[$row][$col]+$matrix2[$row][$col];
            $add .= "</td>\n";
    }
    $add .= "  </tr>\n";
  }
  $add .= "</table>\n";
  return $add;
  }
  else { echo "Dodawanie macierzy jest niemożliwe";
  }
}

//Mnożenie macierzy 

 function matrix_mul($matrix1, $matrix2) {
		$mul = "<table>\n";
	$a=count($matrix1);//m
	$b=count($matrix1[0]);//n
	$c=count($matrix2);//p
	$d=count($matrix2[0]);
  if ($b==$c){
  for($row=0;$row<$a;$row++) {
	  $mul .= "<tr>\n";
    for($col=0;$col<$d;$col++) {
		$macierz3[$row][$col]=0;
      for($x=0;$x<$b;$x++)
        $macierz3[$row][$col] += $matrix1[$row][$x]*$matrix2[$x][$col];
            $mul .= "  <td>";
			$mul .= $macierz3[$row][$col];
		     }
            $mul .= "</td>\n";
            }
    $mul .= "  </tr>\n";
  $mul .= "</table>\n";
  return $mul;
 }
 else {
	 echo " Złe wymiary macierzy, mnożenie macierzy jest niemożliwe";
 }
 }

//a)Wyznacznik macierzy 

	$macierz1= array(
    array(2,2,3),
    array(4,2,6),
    array(7,5,8));
  	$nrow=3;
	$ncol=3;
   for($row = 0; $row < $nrow; $row++){
	    for($col = 0; $col < $ncol; $col++){
    $det = $macierz1[0][0] * ($macierz1[1][1]*$macierz1[2][2] - $macierz1[1][2]*$macierz1[2][1]) -
           $macierz1[0][1] * ($macierz1[1][0]*$macierz1[2][2] - $macierz1[1][2]*$macierz1[2][0]) +
           $macierz1[0][2] * ($macierz1[1][0]*$macierz1[2][1] - $macierz1[1][1]*$macierz1[2][0]);
   }
   }    
   
     
 
function matrix_num($matrix){
	$wynik = "<table>\n";
    $nrow = 3;
    $ncol = 3; 
	$num=5;
  for($row = 0; $row < $nrow; $row++) {
		    $wynik .= "  <tr\n>"; 
        for($col = 0; $col < $ncol; $col++) {
			 $wynik .= "  <td>";
            $wynik .= $matrix[$row][$col] * $num;
            $wynik .= "</td>\n";
    }
    $wynik .= "  </tr>\n";
  }
  $wynik .= "</table>\n";
  return $wynik;
}
echo "<hr/>";
?>
<b><span style="font-size: X-Large;color: Indigo"><center>WYŚWIETLANIE MACIERZY</center></span>
<?php
echo "<hr/>";
  echo "<b>Macierz 1 o wymiarch 3x3</b>";
  echo matrix_print($macierz1);
  echo"<br/>";
  echo "<b>Macierz 2 o wymiarach 3x3</b>";
  echo matrix_print($macierz2);
    echo"<br/>";
  echo "<b>Macierz 3 o wymiarach 2x4</b>";
  echo matrix_print($macierz_3);
    echo"<br/>";
	echo "<b>Macierz 4 o wymiarach 4x3</b>";
  echo matrix_print($macierz_4);
    echo "<hr/>";
	?>
<b><span style="font-size: X-Large;color: Indigo"><center>FUNKCJE WYKONUJĄCE DZIAŁANIA NA MACIERZACH</center></span>
<hr/>
<b><span style="font-size: Large;color: Indigo"><center>TRANSPONOWANIE MACIERZY</center></span>

<?php
  echo "<hr/>";
   echo "<b>Dla macierzy 1 o wymiaach 3x3:</b>" ;
    echo "<br/>";
	 echo "<br/>";
	 	   ?>
  </div>
  <div id ="macierz1">
  <?php
   echo matrix_print($macierz1);
   ?>
   </div>
  <div id ="wykonanie">
   
   <?php
   echo "T";
   ?>
</div>
<div style="clear:both"></div>
<br>
<?php
echo "=";
echo matrix_trans($macierz1);
		?>
		<span style="font-size: Small"> Wynikiem transpozycji macierzy o wymiarach 3x3 jest macierz 3x3</span>

		<?php
		   echo "<br/>";
		      echo "<br/>";
	echo "<b>Dla macierzy 3 o wymiaach 2x4:</b>" ;
    echo "<br/>";
	 echo "<br/>";
	?>
	  </div>
  <div id ="macierz">
  <?php
   echo matrix_print($macierz_3);
   ?>
   </div>
  <div id ="wykonanie">
   
   <?php
   echo "T";
   ?>
</div>
<div style="clear:both"></div>
<br>
<?php
echo "=";
echo matrix_trans($macierz_3);
    echo"<br/>";
?>
		<span style="font-size: Small"> Wynikiem transpozycji macierzy o wymiarach 2x4 jest macierz 4x2</span>

		<?php


  echo "<hr/>";
?>

<b><span style="font-size: Large;color: Indigo"><center>DODAWANIE MACIERZY</center></span>

<?php
  echo "<hr/>";
  ?>
  <span style="font-size: medium ;color: Indigo"><center>Dodawanie macierzy jest możliwe tylko dla macierzy o tych samych wymiarach</center></span>
<?php
      echo"<br/>";
      echo"<br/>";

	echo " Dodawnaie macierzy o wymiarach 3x3 i macierzy o wymiaarch 3x3";

      echo"<br/>";
   echo matrix_print($macierz1);
   echo "+";
   echo matrix_print($macierz2);
   echo "=";
  echo matrix_add($macierz1,$macierz2);
    echo"<br/>";
	echo " Dodawnaie macierzy o wymiarach 3x3 i macierzy o wymiaarch 4x3";
	      echo"<br/>";
 echo matrix_print($macierz1);
   echo "+";
   echo matrix_print($macierz_4);
   echo "=";
   echo"<br/>";
	echo matrix_add($macierz1,$macierz_4);
	   echo"<br/>";
	     echo "<hr/>";


	?>

<b><span style="font-size: Large;color: Indigo"><center>MNOŻENIE MACIERZY</center></span>

<?php
  echo "<hr/>";
  ?>
  <span style="font-size: medium ;color: Indigo"><center>Mnożenie  macierzy AB jest możliwe tylko wtedy gdy:</center></span>
    <span style="font-size: medium ;color: Indigo"><center>liczba kolumn A = liczba wierszy B</center></span>

<?php
  echo"<br/>";
  echo "<b>Mnożenie macierzy o wymiaarch 3x3 i macierzy o wymiarach 3x3";
  echo"<br/>";
  	   echo"<br/>";

  echo matrix_print($macierz1);
    echo"*";
   echo matrix_print($macierz2);
       echo"=";
  echo"<br/>";
 echo matrix_mul($macierz1,$macierz2);
	   echo"<br/>";
	   echo "<b>Mnożenie macierzy o wymiaarch 3x3 i macierzy o wymiarach 2x4</b>";
  echo"<br/>";
  	   echo"<br/>";

  echo matrix_print($macierz1);
    echo"*";
   echo matrix_print($macierz_3);
       echo"=";
  echo"<br/>";
 echo matrix_mul($macierz1,$macierz_3);
	   echo"<br/>";
	   echo "<hr/>";
	   ?>

<b><span style="font-size: X-Large;color: Indigo"><center>ZADANIA DODATKOWE</center></span>

<?php
	 echo "<hr/>";
	 ?>

<b><span style="font-size: Large;color: Indigo"><center>WYZNACZNIK MACIERZY</center></span>

<?php
	 echo "<hr/>";
	 echo"<br/>";
echo matrix_print($macierz1);
echo"<br/>";

   echo "det =";
  echo $det;
  echo"<br/>";
  	 echo "<hr/>";

 ?>

<b><span style="font-size: Large;color: Indigo"><center>MNOŻENIE MACIERZY PRZEZ DOWOLNĄ LICZBĘ RÓŻNĄ OD ZERA</center></span>

<?php
	 echo "<hr/>";

   echo matrix_print($macierz1);
   echo "*";
      echo "<br>";
   echo "5";
   echo "<br>";
   echo "=";
echo matrix_num($macierz1);


?>

</body>
</html>


