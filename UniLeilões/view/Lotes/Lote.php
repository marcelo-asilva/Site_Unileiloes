<?php require_once '../header.php'; ?>
<?php require_once '../menu_esquerdo.php'; ?>   


<!--Inicio do corpo do cadastro-->
<div class="center_content">
    <div class="center_title_bar">Cadastro de Lotes</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <form>
                <div class="contact_form">
                    <div class="form_row">
                        <label class="contact"><strong>Lote:</strong></label>
                        <input type="text" name="lote" class="contact_input_medio" required  />
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Produto:</strong></label>
                        <div style="float:left">
                            <select name="lote"style="width: 200px">
                                <option value="1">Selecione</option>
                                <option>mesa de jantar </option>
                            </select>                       
                        </div>
                        <div  style="float:right; margin-right:-30px"> <a href="#" class="contact_adicionar">Adicionar</a>  </div>
                    </div> 
                     <br/>
                     <br/>
                     <br/>
                        <table class="table" border="1">
                            <tr  bgcolor="#008080">
                                <th style="color:white"> Lote</th>
                                <th style="color:white">Produto</th>
                            </tr> 
                            <tr>
                                <td>1</td>
                                <td>Carro</td>
                            </tr>
                        </table> 
                  
                    <br><br/>
                    <div class="form_row" style=" width:0px !important; margin-left: 185px !important; margin-right: auto !important;"> <a href="#" class="contact">Salvar</a>  </div>
                    <div class="form_row" style=" width:30px !important; margin-left: auto  !important; margin-right: 90px !important; float: right; margin-top:-37px;"> <a href="#" class="contact_cancelar">Cancelar</a>  </div>
                </div>
            </form>
        </div>
        <div class="bottom_prod_box_big"></div>
    </div>
</div>
<!-- Fim do Corpo do cadastro -->

<!-- Inicio menu lateral direito -->
<?php require_once '../menu_direito.php'; ?>
<!-- Fim menu lateral direito -->
<!-- Inicio rodape -->
<?php require_once '../footer.php'; ?>
<!-- fim rodape -->
</body>
</html>
