<?php
$Dados=array(2, 5, 10, "Maria", 2.5, "Rui", 8, "A", 3, "B"); //array com 10 posiçoes preenchidas
echo"Valores do array: ";
for($i= 0; $i<10; $i++) //contador
echo $Dados[$i]." "; //imprime todo o conteudo do array (10 posições) na horizontal
echo"<br>---------------------------------";
echo"<br>Valores do array: <br>";
for($i=0; $i<10; $i++) //contador
echo $Dados[$i]. "<br>"; //imprime todo o conteúdo do array (10 posições) na vertical
echo"-------------------------------------------<br>";

$Dados[]=7; 
$Dados[]="Carlos";
$Dados[1]="Pedro";
$Dados[4]=50;
$Dados[5]="Ruizinho";
$Dados[7]=" ";
echo"Valores do array: ";
for($i=0; $i<12; $i++)
echo $Dados[$i]." ";
echo"<br>";
echo"--------------------------------------------<br>";
echo $Dados[2]. " ";
echo $Dados[5]. " ";
echo $Dados[9]. " ";
echo "<br>--------------------------------------";
?>





