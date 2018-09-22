



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_estacao.php'",7000);
	
	
}


</script> 

<?php

session_start();
if(!isset($_SESSION["login"])   )
{
  header("Location: index.html");
  exit;
  
  
}



include "conn.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_estacao.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO ESTAÇÃO</title>


</head>



<body>








<?php

$estacao =$_POST['estacao'];


$anuf =$_POST['anuf'];

$porta =$_POST['portas'];


$estacao_cabo = $estacao.' '.$cabo;

  



 



$query = "insert into estacao (estacao,localidade,anuf)";

$query.= "values ('$estacao','0','$anuf')";

if ($porta == '12')
{

$query2 = "insert into anuf (anuf,estacao,porta)";

$query2.= "values 
    ('$anuf','$estacao','1'),
    ('$anuf','$estacao','2'), 
    ('$anuf','$estacao','3'), 
    ('$anuf','$estacao','4'), 
    ('$anuf','$estacao','5'), 
    ('$anuf','$estacao','6'), 
    ('$anuf','$estacao','7'), 
    ('$anuf','$estacao','8'), 
    ('$anuf','$estacao','9'),
    ('$anuf','$estacao','10'), 
    ('$anuf','$estacao','11'), 
    ('$anuf','$estacao','12') 
    ;








";

}

if ($porta == '36')
{

$query2 = "insert into anuf (anuf,estacao,porta)";

$query2.= "values 
    ('$anuf','$estacao','1'),
    ('$anuf','$estacao','2'), 
    ('$anuf','$estacao','3'), 
    ('$anuf','$estacao','4'), 
    ('$anuf','$estacao','5'), 
    ('$anuf','$estacao','6'), 
    ('$anuf','$estacao','7'), 
    ('$anuf','$estacao','8'), 
    ('$anuf','$estacao','9'),
    ('$anuf','$estacao','10'), 
    ('$anuf','$estacao','11'), 
    ('$anuf','$estacao','12'), 
    ('$anuf','$estacao','13'), 
    ('$anuf','$estacao','14'), 
    ('$anuf','$estacao','15'), 
    ('$anuf','$estacao','16'), 
    ('$anuf','$estacao','17'), 
    ('$anuf','$estacao','18'), 
    ('$anuf','$estacao','19'), 
    ('$anuf','$estacao','20'), 
    ('$anuf','$estacao','21'), 
    ('$anuf','$estacao','22'), 
    ('$anuf','$estacao','23'), 
    ('$anuf','$estacao','24'), 
    ('$anuf','$estacao','25'), 
    ('$anuf','$estacao','26'), 
    ('$anuf','$estacao','27'), 
    ('$anuf','$estacao','28'), 
    ('$anuf','$estacao','29'), 
    ('$anuf','$estacao','30'), 
    ('$anuf','$estacao','31'), 
    ('$anuf','$estacao','32'), 
    ('$anuf','$estacao','33'), 
    ('$anuf','$estacao','34'), 
    ('$anuf','$estacao','35'), 
    ('$anuf','$estacao','36');









";

}

if ($porta == '72')
{
	$query2 = "insert into anuf (anuf,estacao,porta)";

$query2.= "values 

    ('$anuf','$estacao','1'),
    ('$anuf','$estacao','2'), 
    ('$anuf','$estacao','3'), 
    ('$anuf','$estacao','4'), 
    ('$anuf','$estacao','5'), 
    ('$anuf','$estacao','6'), 
    ('$anuf','$estacao','7'), 
    ('$anuf','$estacao','8'), 
    ('$anuf','$estacao','9'),
    ('$anuf','$estacao','10'), 
    ('$anuf','$estacao','11'), 
    ('$anuf','$estacao','12'), 
    ('$anuf','$estacao','13'), 
    ('$anuf','$estacao','14'), 
    ('$anuf','$estacao','15'), 
    ('$anuf','$estacao','16'), 
    ('$anuf','$estacao','17'), 
    ('$anuf','$estacao','18'), 
    ('$anuf','$estacao','19'), 
    ('$anuf','$estacao','20'), 
    ('$anuf','$estacao','21'), 
    ('$anuf','$estacao','22'), 
    ('$anuf','$estacao','23'), 
    ('$anuf','$estacao','24'), 
    ('$anuf','$estacao','25'), 
    ('$anuf','$estacao','26'), 
    ('$anuf','$estacao','27'), 
    ('$anuf','$estacao','28'), 
    ('$anuf','$estacao','29'), 
    ('$anuf','$estacao','30'), 
    ('$anuf','$estacao','31'), 
    ('$anuf','$estacao','32'), 
    ('$anuf','$estacao','33'), 
    ('$anuf','$estacao','34'), 
    ('$anuf','$estacao','35'), 
    ('$anuf','$estacao','36'),
    ('$anuf','$estacao','37'), 
    ('$anuf','$estacao','38'), 
    ('$anuf','$estacao','39'), 
    ('$anuf','$estacao','39'), 
    ('$anuf','$estacao','40'), 
    ('$anuf','$estacao','41'), 
    ('$anuf','$estacao','42'), 
    ('$anuf','$estacao','43'), 
    ('$anuf','$estacao','44'), 
    ('$anuf','$estacao','45'), 
    ('$anuf','$estacao','46'), 
    ('$anuf','$estacao','47'), 
    ('$anuf','$estacao','48'), 
    ('$anuf','$estacao','49'), 
    ('$anuf','$estacao','50'), 
    ('$anuf','$estacao','51'), 
    ('$anuf','$estacao','52'), 
    ('$anuf','$estacao','53'), 
    ('$anuf','$estacao','54'), 
    ('$anuf','$estacao','55'), 
    ('$anuf','$estacao','56'), 
    ('$anuf','$estacao','57'), 
    ('$anuf','$estacao','58'), 
    ('$anuf','$estacao','59'), 
    ('$anuf','$estacao','60'), 
    ('$anuf','$estacao','61'), 
    ('$anuf','$estacao','62'), 
    ('$anuf','$estacao','63'), 
    ('$anuf','$estacao','64'), 
    ('$anuf','$estacao','65'), 
    ('$anuf','$estacao','66'), 
    ('$anuf','$estacao','67'), 
    ('$anuf','$estacao','68'), 
    ('$anuf','$estacao','69'), 
    ('$anuf','$estacao','70'), 
    ('$anuf','$estacao','71'), 
    ('$anuf','$estacao','72');






";


}

if ($porta == '144')
{
  

    $query2 = "insert into anuf (anuf,estacao,porta)";

 $query2.= "values 
    ('$anuf','$estacao','1'),
    ('$anuf','$estacao','2'), 
    ('$anuf','$estacao','3'), 
    ('$anuf','$estacao','4'), 
    ('$anuf','$estacao','5'), 
    ('$anuf','$estacao','6'), 
    ('$anuf','$estacao','7'), 
    ('$anuf','$estacao','8'), 
    ('$anuf','$estacao','9'),
    ('$anuf','$estacao','10'), 
    ('$anuf','$estacao','11'), 
    ('$anuf','$estacao','12'), 
    ('$anuf','$estacao','13'), 
    ('$anuf','$estacao','14'), 
    ('$anuf','$estacao','15'), 
    ('$anuf','$estacao','16'), 
    ('$anuf','$estacao','17'), 
    ('$anuf','$estacao','18'), 
    ('$anuf','$estacao','19'), 
    ('$anuf','$estacao','20'), 
    ('$anuf','$estacao','21'), 
    ('$anuf','$estacao','22'), 
    ('$anuf','$estacao','23'), 
    ('$anuf','$estacao','24'), 
    ('$anuf','$estacao','25'), 
    ('$anuf','$estacao','26'), 
    ('$anuf','$estacao','27'), 
    ('$anuf','$estacao','28'), 
    ('$anuf','$estacao','29'), 
    ('$anuf','$estacao','30'), 
    ('$anuf','$estacao','31'), 
    ('$anuf','$estacao','32'), 
    ('$anuf','$estacao','33'), 
    ('$anuf','$estacao','34'), 
    ('$anuf','$estacao','35'), 
    ('$anuf','$estacao','36'),
    ('$anuf','$estacao','37'), 
    ('$anuf','$estacao','38'), 
    ('$anuf','$estacao','39'), 
    ('$anuf','$estacao','39'), 
    ('$anuf','$estacao','40'), 
    ('$anuf','$estacao','41'), 
    ('$anuf','$estacao','42'), 
    ('$anuf','$estacao','43'), 
    ('$anuf','$estacao','44'), 
    ('$anuf','$estacao','45'), 
    ('$anuf','$estacao','46'), 
    ('$anuf','$estacao','47'), 
    ('$anuf','$estacao','48'), 
    ('$anuf','$estacao','49'), 
    ('$anuf','$estacao','50'), 
    ('$anuf','$estacao','51'), 
    ('$anuf','$estacao','52'), 
    ('$anuf','$estacao','53'), 
    ('$anuf','$estacao','54'), 
    ('$anuf','$estacao','55'), 
    ('$anuf','$estacao','56'), 
    ('$anuf','$estacao','57'), 
    ('$anuf','$estacao','58'), 
    ('$anuf','$estacao','59'), 
    ('$anuf','$estacao','60'), 
    ('$anuf','$estacao','61'), 
    ('$anuf','$estacao','62'), 
    ('$anuf','$estacao','63'), 
    ('$anuf','$estacao','64'), 
    ('$anuf','$estacao','65'), 
    ('$anuf','$estacao','66'), 
    ('$anuf','$estacao','67'), 
    ('$anuf','$estacao','68'), 
    ('$anuf','$estacao','69'), 
    ('$anuf','$estacao','70'), 
    ('$anuf','$estacao','71'), 
    ('$anuf','$estacao','72'),
    ('$anuf','$estacao','73'), 
    ('$anuf','$estacao','74'), 
    ('$anuf','$estacao','75'), 
    ('$anuf','$estacao','76'), 
    ('$anuf','$estacao','77'), 
    ('$anuf','$estacao','78'), 
    ('$anuf','$estacao','79'), 
    ('$anuf','$estacao','80'), 
    ('$anuf','$estacao','81'),
    ('$anuf','$estacao','82'), 
    ('$anuf','$estacao','83'), 
    ('$anuf','$estacao','84'), 
    ('$anuf','$estacao','85'), 
    ('$anuf','$estacao','86'), 
    ('$anuf','$estacao','87'), 
    ('$anuf','$estacao','88'), 
    ('$anuf','$estacao','89'), 
    ('$anuf','$estacao','90'), 
    ('$anuf','$estacao','91'), 
    ('$anuf','$estacao','92'), 
    ('$anuf','$estacao','93'), 
    ('$anuf','$estacao','94'), 
    ('$anuf','$estacao','95'), 
    ('$anuf','$estacao','96'), 
    ('$anuf','$estacao','97'), 
    ('$anuf','$estacao','98'), 
    ('$anuf','$estacao','99'), 
    ('$anuf','$estacao','100'), 
    ('$anuf','$estacao','101'), 
    ('$anuf','$estacao','102'), 
    ('$anuf','$estacao','103'), 
    ('$anuf','$estacao','104'), 
    ('$anuf','$estacao','105'), 
    ('$anuf','$estacao','106'), 
    ('$anuf','$estacao','107'), 
    ('$anuf','$estacao','108'), 
    ('$anuf','$estacao','109'), 
    ('$anuf','$estacao','110'), 
    ('$anuf','$estacao','111'), 
    ('$anuf','$estacao','112'), 
    ('$anuf','$estacao','113'), 
    ('$anuf','$estacao','114'), 
    ('$anuf','$estacao','115'), 
    ('$anuf','$estacao','116'), 
    ('$anuf','$estacao','117'), 
    ('$anuf','$estacao','118'), 
    ('$anuf','$estacao','119'), 
    ('$anuf','$estacao','120'), 
    ('$anuf','$estacao','121'), 
    ('$anuf','$estacao','122'), 
    ('$anuf','$estacao','123'), 
    ('$anuf','$estacao','124'), 
    ('$anuf','$estacao','125'), 
    ('$anuf','$estacao','126'), 
    ('$anuf','$estacao','127'), 
    ('$anuf','$estacao','128'), 
    ('$anuf','$estacao','129'), 
    ('$anuf','$estacao','130'), 
    ('$anuf','$estacao','131'), 
    ('$anuf','$estacao','132'), 
    ('$anuf','$estacao','133'), 
    ('$anuf','$estacao','134'), 
    ('$anuf','$estacao','135'), 
    ('$anuf','$estacao','136'), 
    ('$anuf','$estacao','137'), 
    ('$anuf','$estacao','138'), 
    ('$anuf','$estacao','139'), 
    ('$anuf','$estacao','140'), 
    ('$anuf','$estacao','141'), 
    ('$anuf','$estacao','142'), 
    ('$anuf','$estacao','143'), 
    ('$anuf','$estacao','144');



    ";

}







$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2)
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  

  
  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_'.$anuf.'.php?estacao='.$estacao.'">';
  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}








?>

























</body>


</html>