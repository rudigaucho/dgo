<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != '45'  ) && ($_SESSION["acesso"] != 'ADM'  ) )
{
  header("Location: index.html");
  exit;
  
  
}


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>

<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var pt = document.getElementById("pt").value;

con_consulta.open("GET","processar.php?pt="+pt,true);
con_consulta.send(null);






}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_45.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUISA DE LOG'S</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



     <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


</head>

<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" style="color:black;"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">

      <?php if(($_SESSION["acesso"] == 'ADM'  )){?>

       <li class="active"><a href="adm.php">VOLTAR</a></li>
       <li class="active"><a href="cad_estacao.php">GERAR ESTAÇÃO</a></li>


      <?php }  else { ?>
    
        <li class="active"><a href="logout.php">LOGOUT</a></li>
         <li class="active"><a href="modifica_senha.php">MODIFICA SENHA</a></li>
          <li class="active"><a href="cad_estacao.php">GERAR ESTAÇÃO</a></li>

       <?php  } ?>
       
    
      
    </ul>
  </div>
</nav>

 <span><strong>PESQUISA POR ESTAÇÃO</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_45.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     

     <select class="form-control " id="estacao" name="estacao"  >

     <?php

     $sql = mysql_query ("select * from anuf where anuf = 45 group by estacao" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{    

  while ($dado = mysql_fetch_assoc($sql)){   ?>


<option value="<?php echo $dado ["estacao"]?>">  <?php echo $dado ["estacao"];  ?> </option> 


<?php } } ?>

  </select>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>ESTAÇÃO</th>
      <th>ESTAÇÃO B</th>
          <th>FO</th>
          <th>QDT FO</th>
          <th>CABO/ROTA</th>
        
            <th>MEDIDA</th> <!-- ROTA -->
            <th>ENLACE</th>
             

             <th>ATUALIZAR</th>
      
 



      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$estacao = $_POST['estacao'];



$sql = mysql_query ("select * from anuf where estacao = '$estacao' and anuf = '45' order by porta asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
 <td> <?php echo $dado ["estacao"];  ?></td>
 <td> <?php echo $dado ["estacao_b"];  ?></td>      
<td> <?php echo $dado ["porta"];  ?></td>
<td> <?php echo $dado ["qdt_fo"];  ?></td>
<td> <?php echo $dado ["cabo"];  ?></td>
<td> <?php echo $dado ["ocupacao"];  ?></td>
<td> <?php echo $dado ["enlace"];  ?></td>


 <?php $patri = $dado ["patrimonio"];  ?>










<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['id'];  ?>" >ATUALIZAR</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO.<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_45.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $dado["id"] ?>" readonly required>
    <label for="email">ESTAÇÃO: </label>
    <input type="text" class="form-control" name="estacao" id="estacao" value="<?php echo $dado["estacao"] ?>" readonly required>

    <input  class="form-control" type="hidden" name="anuf" id="anuf" value="<?php echo $dado["anuf"] ?>" readonly required>
    <label for="email">POSIÇÃO: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["porta"] ?>" name="porta" readonly  required>
    <label for="email">CABO / ROTA: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["cabo"] ?>" name="cabo"   required>
    <label for="email">MEDIDA: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["ocupacao"] ?>" name="ocupacao"   required>
    <label for="email">ENLACE: </label>
    <input type="text" class="form-control" value="<?php echo $dado["enlace"] ?>" name="enlace"   required>
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

    ?>



<?php

    if (isset($_GET ['estacao']) )
{



$estacao = $_GET['estacao'];




$sql = mysql_query ("select * from anuf where estacao = '$estacao' and anuf = '45' order by porta asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
 <td> <?php echo $dado ["estacao"];  ?></td>     
<td> <?php echo $dado ["porta"];  ?></td>
<td> <?php echo $dado ["cabo"];  ?></td>
<td> <?php echo $dado ["ocupacao"];  ?></td>
<td> <?php echo $dado ["enlace"];  ?></td>



 <?php $patri = $dado ["patrimonio"];  ?>










<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['id'];  ?>" >ATUALIZAR</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_45.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $dado["id"] ?>" readonly required>
    <label for="email">ESTAÇÃO: </label>
    <input type="text" class="form-control" name="estacao" id="estacao" value="<?php echo $dado["estacao"] ?>" readonly required>

    <input  class="form-control" type="hidden" name="anuf" id="anuf" value="<?php echo $dado["anuf"] ?>" readonly required>
    <label for="email">POSIÇÃO: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["porta"] ?>" name="porta" readonly  required>
    <label for="email">CABO / ROTA: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["cabo"] ?>" name="cabo"   required>
    <label for="email">OCUPAÇÃO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["ocupacao"] ?>" name="ocupacao"   required>
    <label for="email">ENLACE: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["enlace"] ?>" name="enlace"   required>
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
 


  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>

<?php

$rota =$_POST['rota'];

$enlace =$_POST['enlace'];
$estacao =$_POST['estacao'];
$anuf =$_POST['anuf'];
$id =$_POST['id'];
$porta =$_POST['porta'];
$ocupacao =$_POST['ocupacao'];
$cabo =$_POST['cabo'];





if (isset($_POST ['submit2']) )
{




$query = "update ANUF SET  cabo = '$cabo',enlace = '$enlace',ocupacao = '$ocupacao' where id = '$id'  ";


$query2 = "insert into log (id_ga,nome_ga,data_atu,estacao,porta)";

$query2.= "values ('".$_SESSION["id"]."','".$_SESSION["nome"]."',NOW(),'$estacao','$porta')";







$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2 )
{
  
  
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_45.php?estacao='.$estacao.'">';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>

</body>
</html> 

