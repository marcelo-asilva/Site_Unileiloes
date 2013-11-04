<?php
require_once 'Produto.php';
require_once 'Redimensiona.php';
extract($_POST);
extract($_FILES);

$class_produto= new Produto();
$class_redimensiona = new Redimensiona();
//die(print_r($_FILES));
if($imagem1['error'] == 0 ){
       $img1=$class_produto->carrega_imagem($imagem1,$imagem1['name']);
       if($img1==0)
           $img1="nao-encontrada.jpg";
   }
   else
       $img1= "nao-encontrada.jpg";
if($imagem2['error'] == 0 ){
   // $img2=$class_produto->carrega_imagem($imagem2,$imagem2['name']);
      $img10=$class_redimensiona->Redimensionar($imagem2, 500, utf8_decode('D:\\Site_Unileiloes\\UniLeilões\\Template\\images\\Produtos\\'));
    $img10=$class_redimensiona->Redimensionar($imagem2, 94, utf8_decode('D:\\Site_Unileiloes\\UniLeilões\\Template\\images\\Produtos\\'));
    $img10=$class_redimensiona->Redimensionar($imagem2, 30, utf8_decode('D:\\Site_Unileiloes\\UniLeilões\\Template\\images\\Produtos\\'));
      if($img2==0)
           $img2="nao-encontrada.jpg";
   }
    else
       $img2="nao-encontrada.jpg";
if($imagem3['error'] == 0 ){
       $img3=$class_produto->carrega_imagem($imagem3,$imagem3['name']);
       if($img3==0)
           $img3="nao-encontrada.jpg";
   }
    else
     $img3="nao-encontrada.jpg";

$class_produto->salvar_produto("1",$nome, $descricao, $categoria, $cidade, $estado, $img1, $img2, $img3);

    
?>
