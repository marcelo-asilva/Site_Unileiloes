<?php
 require_once 'Cliente.php';
$cliente = new Class_Cliente();
  
  $id_estado=$_GET['id'];
  
  $cidades=$cliente->GetCidadesporEstado($id_estado);
 
  $retorno="";
  
  for($i=0;$i<count($cidades);$i++)
  {
     $retorno .=  "<option value='".$cidades[$i]['idCidade']."'>".utf8_encode($cidades[$i]['cidade'])."</option>";
  }
                                      
 
 
 echo $retorno;
// echo "<option value='0'> teste </option>";
?>
