<?php 
	$nombre=$_POST['name'];
	$materia1=$_POST['materia1'];
	$materia2=$_POST['materia2'];
	$materia3=$_POST['materia3'];
	$materia4=$_POST['materia4'];
	$materia5=$_POST['materia5'];
	$materia6=$_POST['materia6'];
	$materia7=$_POST['materia7'];
	$sum=$materia7+$materia6+$materia5+$materia4+$materia3+$materia2+$materia1;
	$prom=$sum/7;
	echo $nombre." su promedio es: ".$prom;
	

 ?>