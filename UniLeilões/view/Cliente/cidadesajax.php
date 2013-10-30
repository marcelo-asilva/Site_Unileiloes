<?php
 require_once '../../Template/config.php';
 require_once $CONTROLLER.'/Unileiloes.php';
$cliente = new Unileiloes();
  
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
