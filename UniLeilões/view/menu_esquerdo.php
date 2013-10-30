<?php 
$classegeral =  new Unileiloes();
$categorias= $classegeral->getCategorias();
?>

<!-- Inicio do Menu Lateral -->
    <div style="margin-top:20px;">  </div>
    <div class="left_content">
      <div class="title_box">Categorias</div>
      <ul class="left_menu">
       <?php for($i=0;$i<count($categorias);$i++){?>
        <li class="odd"><a href="#"><?php echo utf8_encode($categorias[$i]["descricao"]); ?></a></li>
        <?php } ?>   
<!--        <li class="odd"><a href="#">Carros e Motos</a></li> Padrao 
            echo ' <li class="odd"><a href="#">'.utf8_encode($categorias[$i]["descricao"]).'</a></li>';
-->
      </ul>
    
      
      <!-- Inicio Espaço Propaganda -->
     <div class="banner_adds"> 
     <a href="#"><img src="../../Template/images/bann2.jpg" alt="" border="0" /></a> 
     </div> 
     <!-- Fim Espaço Propaganda -->
     
    </div>
      <!-- Fim do Menu Lateral -->